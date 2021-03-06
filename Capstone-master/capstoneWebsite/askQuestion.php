
<!-- THIS IS THE PAGE FOR SUBMITTING ANSWERS -->

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
  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- ************** This method loads the navigation and search bar
for this page -->

<?php include("nav.html"); ?>
  

<div class = "container">
    <div class = "row">
        <div class = "answerQuestion">



<!-- The question(user clicked) should be displayed here -->



<!-- This is where user answer the questions -->
<div class="form-group">
  <label for="Answer">New Question:</label><br>
    <textarea class="form-control" rows="2" id="Question" placeholder="Question Title" id="questionTitle"></textarea>

<!--
  <input type="text" value="" placeholder="Question Title" id="questionTitle" style="margin-bottom:10px">
-->

<div class = "blank"></div>
  <!-- Text area for enter the question -->
  <textarea class=" form-control" rows="10" id="Question" placeholder="Type your question here..."></textarea>
</div>
<!-- End of form-group class -->


<!-- Submitting the answer -->
<div class =  "submitButton">
     <input type="submit" class="btn btn-info" value="Enter your Question">
</div>
<!-- End of submitting aanswer method -->


</div> <!-- end of myQuestions -->
</div> <!-- end of row -->
</div> <!-- end of container -->

    <!--=========================End of navigation bar ==========-->
          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     
    <script src="js/bootstrap.min.js">
    </script>
    <script src = "js/custom.js"></script>
    <script src="js/auto-complete.js"></script>
   
</body>
</html>