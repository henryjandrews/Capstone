var question = decodeURI($.getURLParam("question"));
var id = decodeURI($.getURLParam("id"));
$( document ).ready(function() {
 $('.question').append('<p>Question: '+question+' ID = '+id+'</p>');
 
 $.get( "php/get-answers.php", { id:id } )
 .done(function( data ) {
	var results = jQuery.parseJSON(data);
	$(results).each(function(key, value) {
		$('#results').append('<div class=".answers" style="color:black;">' + value+'</div>');
	});
 });

});