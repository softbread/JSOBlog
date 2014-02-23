var editorText;
$(document).ready(function() {
	$("#loading").hide();
	CKEDITOR.replace('post');
	var options = {
		beforeSubmit: showRequest, // pre-submit callback 
		success: showResponse, // post-submit callback 
		error: showError
	};
	$('#formpost').ajaxForm(options);
});

function showRequest(formData, jqForm, options) {

	if ( editorText === '' || $('#title').val() === '' || $('#tags').val() === '') {
		alert('all fields required');
		return false;
	}
}
// post-submit callback 
function showResponse(responseText, statusText, xhr, $form) {
	$('#title').val('');
	CKEDITOR.instances.post.setData('');
	$('#tags').val('');
	$('#fileupload').val('');
	window.location.assign('/posts/'+$('#postid').val());
}

function showError(data) {
	var resp = $.parseJSON(data.responseText);
	if (resp.res === 'File Error') {
		alert('Invalid File.\nPlease Select Image File');
	}
}

$(document).on('click', '#update', function(event) {
	editorText = CKEDITOR.instances.post.getData();
	var options = {
		beforeSubmit: showRequest, // pre-submit callback 
		success: showResponse, // post-submit callback 
		error: showError
	};


	// bind form using 'ajaxForm' 
	$('#formpost').ajaxForm(options);
	$('#save').trigger('click');
});



$(document).ajaxStart(function() {
	$("#loading").show();
});

$(document).ajaxComplete(function() {
	$("#loading").hide();
});