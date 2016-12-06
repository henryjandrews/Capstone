$( document ).ready(function() {

 $.get( "php/get-popular-questions.php")
 	.done(function( data ) {
		var results = jQuery.parseJSON(data);
		console.log[results];
		if ( results.length == 0 ){
			$('.popularQuestion').append('<p>There are no popular questions yet</p>');
		}
		else{
			for(var i = 0; i < 5; i++){
				var obj = results[i];
				var question = obj["Question_text"];
				var qID = obj["QuestionID"];
				$('.popularQuestion').append(
					'<a href="answerQuestionEA.php?question='+question+'&qID='+qID+'" class="question-display">'+
  						'<h4>'+question+'</h4>'+
  						'<p class="question-info">'+
  							'<span class="glyphicon glyphicon-user" aria-hidden="false"></span>'+
   					 		'<span class="person">Chris Rice</span>'+
    						'<span class="date-time-display">12/1/2016 1:23pm</span>'+
  						'</p>'+	
					'</a>'+
					'<hr>'
				);
			}
		}
	});
});