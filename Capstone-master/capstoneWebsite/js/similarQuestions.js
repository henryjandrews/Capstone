$( document ).ready(function() {
	var type = decodeURI($.getURLParam("type"));
	if (type == 0){
	 	$.get( "php/get-popular-more.php")
	 	.done(function( data ) {
			var results = jQuery.parseJSON(data);
			console.log[results];
			$('.title').append('<h4> Most Popular Question </h4>');
			if ( results.length == 0 ){
				$('.popularQuestion').append('<p>There are no popular questions yet</p>');
			}
			else{
				for(var i = 0; i < results.length; i++){
					var obj = results[i];
					var question = obj["Question_text"];
					var qID = obj["QuestionID"];
					var timeposted = obj["timeposted"];
					$('.popularQuestion').append(
						'<a href="answerQuestionEA.php?question='+question+'&qID='+qID+'" class="question-display">'+
  							'<h4>'+question+'</h4>'+
  							'<p class="question-info">'+
  								'<span class="glyphicon glyphicon-user" aria-hidden="false"></span>'+
   					 			'<span class="person">Chris Rice</span>'+
    							'<span class="date-time-display">'+timeposted+'</span>'+
  							'</p>'+	
						'</a>'+
						'<hr>'
					);
				}
			}
		});
	}
	else if (type == 1){
		$.get( "php/get-recent-more.php")
	 	.done(function( data ){
			var results = jQuery.parseJSON(data);
			console.log[results];
			$('.title').append('<h4> Most Popular Question </h4>');
			if ( results.length == 0 ){
				$('.recentQuestions').append('<p>There are no popular questions yet</p>');
			}
			else{
				for(var i = 0; i < results.length; i++){
					var obj = results[i];
					var question = obj["Question_text"];
					var qID = obj["QuestionID"];
					var timeposted = obj["timeposted"];
					$('.recentQuestions').append(
						'<a href="answerQuestionEA.php?question='+question+'&qID='+qID+'" class="question-display">'+
  							'<h4>'+question+'</h4>'+
  							'<p class="question-info">'+
  								'<span class="glyphicon glyphicon-user" aria-hidden="false"></span>'+
   						 		'<span class="person">Chris Rice</span>'+
   		 						'<span class="date-time-display">'+timeposted+'</span>'+
  							'</p>'+	
							'</a>'+
						'<hr>'
					);
				}
			}
		});
	}
});