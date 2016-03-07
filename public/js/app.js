
$('form.delete-object').submit(function(e){
	var deleteConfirm = confirm("Are you sure you want to delete this question?");
	// if "true" the submition will be processed
	// if "false" submition will not be processed
	return deleteConfirm;
});

$('.edit-object').click(function(e){

	var $commentItem = $(this).closest('li');
	var $commentForm = $commentItem.find('form.edit-object-form');
	$commentForm.toggleClass('hide')

})