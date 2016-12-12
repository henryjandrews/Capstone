
<!--THIS PAGE DISPALYS THE RESULTS OF QUERIES -->

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
<!-- calling navigaiton bar -->
 <?php include("nav.html"); ?>

<div class = "container">
    <div class = "row">

<!-- The query result/ name of the question is dislapyer here -->
<div class = "nameoftheQuestion question-display">
  <h2 class="question"></h2>
  <p class="question-info">
         		<span class="glyphicon glyphicon-user" aria-hidden="false"></span>
    <span class="person">Chris Rice</span>
    <span class="date-time-display">12/1/2016 1:23pm</span>
  </p>
</div>

<!-- adding padding between question and answers -->
<div class = "blank"></div>

<!-- The answer of each question is displayed here -->
		<div class = "forAnswers ">
		</div>
 


	</div>
</div>

<!-- This is where a input an answer for already answered or non-answerd question -->
<div class = "container">
<div class = "answerBox">

  <div class = "col-sm-md-8">

<div class="form-group enterAnswer">
  <label for="Answer">Your Answer:</label>

  <!-- Text area for enter the question -->
  <textarea class="form-control" rows="10" id="Anaswer"></textarea>
</div>
<!-- End of form-group class -->

</div>
</div>

<!-- Submitting the answer -->
<div class =  "submitButton">
     <input type="submit" class="btn btn-info" value="Please Submit Your Answer">
</div>
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