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
									 '<button type="button" class="btn btn-default">'+
                            			'<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>'+
                        			 '</button>'+
        						'</div>'+

								'<div class = "blank"></div>'+
         						'<div class = "displayScore">'+
         						'<p>'+obj["Score"]+'</p>'+
        						'</div>'+
 								'<div class = "thumb" AnswerID = '+obj["AnswerID"]+' pos = 0 >'+
       						    	'<button type="button" class="btn btn-default" >'+
                            		'<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>'+
                        			'</button>'+
        						'</div>'+
							'</div>'+
						'</div>'+
						'<div class = "space4answer"><p>'+obj["Answer_text"]+'</p></div>'+
					'</div>'+   
					/*
					This is where the question information similar to person who asked the question and time will go.
					*/
					  '<div class = "answerInfo">'+
          
          			 ' <p class="question-info">'+
					         		
      		'<span class="glyphicon glyphicon-user" aria-hidden="true"></span>'+

    		'<span class="person">Chris Rice</span>'+
  			 ' <span class="date-time-display">12/1/2016 1:23pm</span>'+
 			' </p>'+
          '</div>'+
			'<hr>'
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
 	$('.submitButton').click(function() {
			var aText = $('#Anaswer').val();
			if (aText == ""){
				$('.question').append('<div class="alert alert-warning fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>You need to include an answer!</strong></div>');
			}
			else{
				$.get( "php/answer-question.php", { qID:qID, aText } )
				.done(function(data) {
					console.log(data);
			    	$('.question').append('<div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Your answer has been submitted!</strong></div>');
				});
			}
		});
});
