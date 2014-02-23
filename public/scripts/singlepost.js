$(document).ready(function() {

	var options = {
		beforeSubmit: showRequest, // pre-submit callback 
		success: showResponse, // post-submit callback 
		error: showError
	};
	$('#commentform').ajaxForm(options);

});

function showRequest(formData, jqForm, options) {

	if ($('#email').val() === '' || $('#comment').val() === '') {
		alert('all fields required');
		return false;
	}

}
// post-submit callback 
function showResponse(responseText, statusText, xhr, $form) {

	var d = new Date();

	var month = d.getMonth() + 1;
	var day = d.getDate();

	var output = d.getFullYear() + '-' +
		(('' + month).length < 2 ? '0' : '') + month + '-' +
		(('' + day).length < 2 ? '0' : '') + day;
	if (responseText.res == "success") {
		var element = '<li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent" id="comment-11"><div id="div-comment-11" class="comment-body">';
		element += '<div class="comment-author vcard"> <img  src="http://www.gravatar.com/avatar/' + responseText.hash + '"class="avatar avatar-60 photo" height="60" width="60" />' + $('#email').val() + '</h4></div>';
		element += '<div class="comment-meta commentmetadata">' + output + '</div><p>' + $('#comment').val() + '</p> </div> </li>';
		$('.commentlist').append(element);

		$('#email').val('');
		$('#comment').val('');
	}

	
}

function showError(data) {
	var resp = $.parseJSON(data.responseText);
	if (resp.res === 'Error') {
		alert('Something Went Wrong');
	}
}



$(document).ajaxStart(function() {
	$("#loading").show();
});

$(document).ajaxComplete(function() {
	$("#loading").hide();
});