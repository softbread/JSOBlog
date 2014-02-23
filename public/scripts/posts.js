
$(document).ready(function() {
	$("#loading").hide();
	
});





$(document).ajaxStart(function() {
	$("#loading").show();
});

$(document).ajaxComplete(function() {
	$("#loading").hide();
});