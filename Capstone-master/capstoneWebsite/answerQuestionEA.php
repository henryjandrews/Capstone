
<!--THIS IS THE MAIN PAGE -->

<!DOCTYPE html>
<html lang="en">
<head>

     <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>keySight</title><!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
     <link href="css/styles.css" rel="stylesheet" type="text/css">

      <script src="js/bootstrap.min.js"> </script>


</head>


<body>
 <?php include("nav.html"); ?>

<div class = "container">
    <div class = "row">

    <div class = "question">
    </div>



		<div class = "forAnswers">
		</div>
	</div>
</div>

<div class="form-group">
  <label for="Answer">Add a new  and improved answer:</label>

  <!-- Text area for enter the question -->
  <textarea class="form-control" rows="10" id="Anaswer"></textarea>
</div>
<!-- End of form-group class -->


<!-- Submitting the answer -->
<div class =  "submitButton">
     <input type="submit" class="btn btn-info" value="Your Answer">
</div>



    <!-- End of serachbar -------->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     
  
    <script src = "js/custom.js"></script>
    <script src="js/answerQuestionEA.js"></script>
      <script src="js/auto-complete.js"></script>
</body>
</html>