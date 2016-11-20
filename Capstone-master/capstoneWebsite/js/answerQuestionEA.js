$( document ).ready(function() {
		
 var question = decodeURI($.getURLParam("question"));
 $('.question').append('<p>Question: '+question+'</p>');

});