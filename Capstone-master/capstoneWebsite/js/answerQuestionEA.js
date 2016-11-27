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
       							'<div class = "thumb" AnswerID = '+obj["AnswerID"]+' pos = 1 >'+
									 '<button type="button" class="btn btn-default" style="border-color:blue" >'+
                            			'<span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span>'+
                        			 '</button>'+
        						'</div>'+

								'<div class = "blank"></div>'+
         						'<div class = "displayScore">'+
         						'<p>'+obj["Score"]+'</p>'+
        						'</div>'+
 								'<div class = "thumb" AnswerID = '+obj["AnswerID"]+' pos = 0 >'+
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
		$('.thumb').click(function() {
			aID = $(this).attr('AnswerID');
			pos = $(this).attr('pos');
			if (pos==1){
				$.get( "php/positive-Score.php", { aID:aID } )
				.done(function(data) {
					console.log(data);
			    	$('.question').append('<div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Your up-vote has been cast!</strong></div>');
				});
			}
			else if (pos==0){
				$.get( "php/negative-Score.php", { aID:aID } )
				.done(function(data) {
					console.log(data);
			    	$('.question').append('<div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Your down-vote has been cast!</strong></div>');
				});
			}

		});
 	});
});
