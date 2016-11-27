$( document ).ready(function() {
 var question = decodeURI($.getURLParam("question"));
 var qID = decodeURI($.getURLParam("qID"));
 $('.question').append('<p>Question: '+question+' ID = '+qID+'</p>');
 $.get( "php/get-answers.php", { qID:qID } )
 	.done(function( data ) {
		var results = jQuery.parseJSON(data);
		console.log[results];
		if ( results.length == 0 ){
			$('.forAnswers').append('<p>There are no answers for this question yet</p>');
		}
		else{
			for(var i = 0; i < results.length; i++){
				var obj = results[i];
				$('.forAnswers').append(
					'<div class = "ansView">'+
						'<div class = "col-xs-2 flag"></div>'+
						'<div class = "space4answer"><p>'+obj["Answer_text"]+'</p></div>'+
					'</div>'+
					'<div class = "blank"></div>'
				);
			}
		}
 	});
});
