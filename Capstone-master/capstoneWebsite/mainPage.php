
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

 
  <div class="col-md-6">

   
 <div class = "title">
   <h4> Most Popular Question </h4>
</div>
    
<!-- Question 1 -->
<!-- This should be a loop that shows the three most popular questions from the database -->
<div class = "popularQuestion"> <!-- for appending -->
</div>





  
<div class = "more">
    <a href = "answers.html"> More answers </a>
    </div>


</div>

 <!-- END OF MY ANSWERS -->


<!------------------------------------------------------------------------>

<!------------ MY Questions------------------------------>

<!-- THIS METHOD DISPLAYS RECENTLY ASKED QUESTIONS THAT I CAN ANSWER -->
  <div class="col-md-6"> 
    
       <div class = "title">
   <h4> Most Recent Question </h4>
</div>
    
  
  <div box = "recentQuestions"> <!-- for appending-->
  
<a href="#" class="question-display">
  <h4>What is the current interest rate for an auto loan?</h4>
  <p class="question-info">
      		<span class="glyphicon glyphicon-user" aria-hidden="false"></span>

    <span class="person">Chris Rice</span>
    <span class="date-time-display">12/1/2016 1:23pm</span>
  </p>
</a>
<hr>
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
<div class = "more">
    <a href = "answers.html"> More Questions </a>
    </div>

  </div>

</div>
<!--End of questions-->


      
</div>
</div>
</div> <!-- end of container method -->
<!--- end of content area>
    <!-- End of serachbar -------->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     
    
    <script src = "js/custom.js"></script>
   
    <script src= "js/auto-complete.js"></script>
      
    <script src= "js/mainPage.js"></script>
</body>
</html>