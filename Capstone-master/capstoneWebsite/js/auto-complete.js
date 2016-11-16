var MIN_LENGTH = 2;

$( document ).ready(function() {
	$("#keyword").keyup(function() {
		var keyword = $("#keyword").val();
		if (keyword.length >= MIN_LENGTH) {

			$.get( "php/auto-complete.php", { keyword: keyword } )
			.done(function( data ) {
				$('#results').html('');
				var askQuestion = "Ask a new question";
				$('#results').append('<div class="item">' + askQuestion + '</div>');
				var results = jQuery.parseJSON(data);
				$(results).each(function(key, value) {
					$('#results').append('<div class="item">' + value + '</div>');
				});

			    $('.item').click(function() {
			    	var text = $(this).html();
			    	var question = $('#keyword').val();
			    	if (text == askQuestion){
			    		$.post( "php/ask-question.php", { keyword: keyword } )
			    		.done(function() {
			    		$('#keyword').val("");
			    		$('.searchBar').append('<div class="alert alert-success"><strong>Your Question has been asked!</strong></div>');
			    		});
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