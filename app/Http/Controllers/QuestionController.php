<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Question;
use App\Language;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        $data = array();
        $data['objects'] = $questions;
        return view('questions.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $question = new Question;
        $data = array();
        $data['question'] = $question;
        $data['languages'] = Language::lists('name', 'id');
        return view('questions.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $question = new Question;
       // set the question's data from the form data
       $question->title = $request->title;
       $question->description = $request->description;
       $question->code = $request->code;

       // create yhe new question in the database
       if ( !$question->save() ){
            $errors = $question->getErrors();
            // redirect to the create page
            // pass along the errors
            return redirect()
                ->action('QuestionController@create')
                ->with('errors', $errors)
                ->withInput();
       }
       // success
       $question->languages()->sync($request->language_id);
       return redirect()
            ->action('QuestionController@index')
            ->with('message', '<div class="alert alert-success">Question successfuly created</div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = array();
        $question = Question::findOrFail($id);
        $data['object'] = $question;
        return view('questions/show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $question = Question::findOrFail($id);
        $languages = Language::lists('name', 'id');
        return view('questions.edit', ['question' => $question, 'languages' => $languages]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id)
    {
        $question = Question::findOrFail($id);

        // set question data from form data
        $question->title = $request->title;
        $question->description = $request->description;
        $question->code = $request->code;
        $question->languages()->sync($request->language_id);

        // error
        if ( !$question->save() ){
            $errors = $question->getErrors();
            // redirect to the create page
            // pass along the errors
            return redirect()
                ->action('QuestionController@edit', $question->id)
                ->with('errors', $question->getErrors())
                ->withInput();
       }
       // success

       return redirect()
            ->action('QuestionController@index')
            ->with('message', '<div class="alert alert-success">This question was updated!</div>');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();
        return redirect()
            ->action('QuestionController@index')
            ->with('message', '<div class="alert alert-info">The question was deleted!</div>');
    }
}
