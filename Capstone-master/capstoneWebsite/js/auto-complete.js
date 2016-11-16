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
				$(results).each(function(key, value) {
					$('#results').append('<div class="item style="color:black;">' + value + '</div>');
					if ($("#keyword").val() == value){
						in_list = true;
					}
				});

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
			    	else if (text == askQuestion && in_list == true){
			    		$('.searchBar').append('<div class="alert alert-warning fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Question already exists</strong></div>');
			    	}
			    	else{
						localStorage.setItem("question", question);	
						window.location.href = 'answerQuestion.php';		    	
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