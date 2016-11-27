$( document ).ready(function() {
 var question = decodeURI($.getURLParam("question"));
 var qID = decodeURI($.getURLParam("qID"));
 $('.question').append('<p>Question: '+question+'</p>');
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
						'<div class = "col-xs-2 flag">'+
							'<div class = "forVoting">'+
       							'<div class = "thumbsDown" AnswerID = '+obj["AnswerID"]+'>'+
									 '<button type="button" class="btn btn-default" style="border-color:blue" >'+
                            			'<span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span>'+
                        			 '</button>'+
        						'</div>'+

								'<div class = "blank"></div>'+
         						'<div class = "displayScore">'+
         						'<p>'+obj["Score"]+'</p>'+
        						'</div>'+
 								'<div class = "thumbsDown" AnswerID = '+obj["AnswerID"]+'>'+
       						    	'<button type="button" class="btn btn-default" style="border-color:red" >'+
                            		'<span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span>'+
                        			'</button>'+
        						'</div>'+
							'</div>'+
						'</div>'+
						'<div class = "space4answer"><p>'+obj["Answer_text"]+'</p></div>'+
					'</div>'+
					'<div class = "blank"></div>'
				);
			}
		}
 	});
});
