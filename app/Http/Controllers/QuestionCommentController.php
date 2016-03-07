<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comment;

class QuestionCommentController extends Controller
{
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $questionId
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $questionId)
    {
        $comment = new Comment;
       // set the question's data from the form data
       $comment->question_id = $questionId;
       $comment->comment = $request->comment;

       // create yhe new question in the database
       if ( !$comment->save() ){
            $errors = $comment->getErrors();
            // redirect to the show page
            // pass along the errors
            return redirect()
                ->action('QuestionController@show', $questionId)
                ->with('errors', $errors)
                ->withInput();
       }
       // success
       return redirect()
            ->action('QuestionController@show', $questionId)
            ->with('message', '<div class="alert alert-success">Comment added!</div>');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $questionId
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $questionId, $id)
    {
        //
        $comment = Comment::findOrFail($id);
        $comment->comment = $request->comment;
        if ( !$comment->save() ){
            $errors = $comment->getErrors();
            // redirect to the show page
            // pass along the errors
            return redirect()
                ->action('QuestionController@show', $questionId)
                ->with('errors', $errors)
                ->withInput();
       }
       // success

       return redirect()
            ->action('QuestionController@show', $questionId)
            ->with('message', '<div class="alert alert-success">Comment updated!</div>');
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $questionId
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($questionId, $id)
    {
        //
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return redirect()
            ->action('QuestionController@show', $questionId)
            ->with('message', '<div class="alert alert-info">Comment deleted.</div>');
    }
}
