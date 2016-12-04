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
     <script src="js/bootstrap.min.js">
    </script>
</head>


<body>
  <!-- calling the navingation and searach bar -->
 <?php include("nav.html"); ?>






<!---Content area-->
<div class = "container" >
<div class = "content">
<div class="row">

 


   
 <div class = "title">
   <h4> Most Popular Question </h4>
</div>
    
<!-- Question 1 -->
<!-- This should be a loop that shows the three most popular questions from the database -->
<div class = "popularQuestion"> <!-- for appending -->

<a href="#" class="question-display">
  <h4>What is the current interest rate for an auto loan?</h4>
  <p class="question-info">
  		<span class="glyphicon glyphicon-user" aria-hidden="false"></span>
    <span class="person">Chris Rice</span>
    <span class="date-time-display">12/1/2016 1:23pm</span>
  </p>
</a>
<hr>

<!-- Question 2 , used only for sample... erase when this is plugged ito the database-->
<a href="#" class="question-display">
  <h4>What is the current interest rate for an auto loan?</h4>
  <p class="question-info">
      		<span class="glyphicon glyphicon-user" aria-hidden="false"></span>
    <span class="person">Chris Rice</span>
    <span class="date-time-display">12/1/2016 1:23pm</span>
  </p>
</a>
<hr>


<!-- Question 3, used only for sample... erase when this is plugged ito the database-->
<a href="#" class="question-display">
  <h4>What is the current interest rate for an auto loan?</h4>
  <p class="question-info">
      		<span class="glyphicon glyphicon-user" aria-hidden="false"></span>
    <span class="person">Chris Rice</span>
    <span class="date-time-display">12/1/2016 1:23pm</span>
  </p>
</a>
<hr>
</div>

</div>
</div>
</div>

    <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     
    
    <script src = "js/custom.js"></script>
   
      <script src="js/auto-complete.js"></script>
</body>
</html>