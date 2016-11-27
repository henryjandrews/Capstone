$( document ).ready(function() {
var question = decodeURI($.getURLParam("question"));
var id = decodeURI($.getURLParam("id"));
 $('.question').append('<p>Question: '+question+' ID = '+id+'</p>');
 
 $.get( "php/get-answers.php", { id:id } )
 .done(function( data ) {
	var results = jQuery.parseJSON(data);
	if ( results.length == 0 ){
		$('.row').append('<p>There are no answers for this question yet</p>');
	}
	else{
		for(var i = 0; i < results.length; i++){
			var obj = results[i];
			console.log[obj];
			$('.row').append('<div class = "ansView"><div class = "col-xs-2 flag"><?php include("updownVoteFlag.html"); ?></div><div class = "space4answer"><p>'+obj["Answer_text"]+'</p></div></div><div class = "blank"></div>');
		}
	}
 });

});