var MIN_LENGTH = 1;

$( document ).ready(function() {
	$("#keyword").keyup(function() {
		var keyword = $("#keyword").val();
		if (keyword.length >= MIN_LENGTH) {

			$.get( "php/auto-complete.php", { keyword: keyword } )
			.done(function( data ) {
				var in_list = false;
				$('#results').html('');
				var askQuestion = 'Ask New Question: "'+$("#keyword").val()+'"';
				$('#results').append('<div class="item" style="color:red;">' + askQuestion + '</div>');
				var results = jQuery.parseJSON(data);
				for(var i = 0; i < results.length; i++){
					var obj = results[i];
					console.log[obj];
					$('#results').append('<div class="item style="color:black;">' + obj.Question_text + '</div>');
					if ($("#keyword").val() == obj["Question_text"]){
						in_list = true;
					}
				}

			    $('.item').click(function() {
			    	var text = $(this).html();
			    	var question = $('#keyword').val();
			    	if (text == askQuestion && in_list == false){
			    		$.post( "php/ask-question.php", { keyword: keyword } )
			    		.done(function() {
			    		$('#keyword').val("");
			    		$('.searchBar').append('<div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Your Question has been asked!</strong></div>');
			    		});
			    	}
			    	else {
			    		window.location.href = 'answerQuestionEA.php?question='+text+"&id="+id;
			    	}
			    });

			});
		} else {
			$('#results').html('');
		}
	});

    $("#keyword").blur(function(){
    		$("#results").fadeOut(500);
    	})
        .focus(function() {		
    	    $("#results").show();
    	});

});