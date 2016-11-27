
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
 <?php include("nav.html"); ?>






<!---Content area-->
<div class = "container" >
<div class = "content">
<div class="row">

 
 <!-- AREA FOR DISPLAYING QUESTIONS THAT A USER(I) HAVE ANSWERED RECENTLY -->
  <div class="col-md-6">
 
 <div class = "border">
 <div class = "title">
   <h4> Most Popular Question </h4>
</div>
    
<div box = "popularQuestion"> <!-- for appending-->
  <div class = "pQuestions">
<p>  What is the customer service number? </p> <!-- The question should go here -->


</div> <!-- end of first answer -->

<hr> <!-- using instead of div = blank -->

 <div class = "pQuestions">
<p>  What is the customer service number? </p> <!-- The question should go here -->


</div> <!-- end of first answer -->
<hr>
 <div class = "pQuestions">
<p>  What is the customer service number? </p> <!-- The question should go here -->


</div> <!-- end of first answer -->


</div> 

<hr>

  
<div class = "more">
    <a href = "answers.html"> More answers </a>
    </div>

</div>
</div>

 <!-- END OF MY ANSWERS -->


<!------------------------------------------------------------------------>

<!------------ MY Questions------------------------------>

<!-- THIS METHOD DISPLAYS RECENTLY ASKED QUESTIONS THAT I CAN ANSWER -->
  <div class="col-md-6"> 
    <div class = "border">
       <div class = "title">
   <h4> Most Recent Question </h4>
</div>
    
  <div class = "recentQuestions"> <!-- for appending -->
  <div class = "questions">
<p>  What is the customer service number? </p> <!-- The question should go here -->


</div> <!-- end of first answer -->

<hr>
  <div class = "questions">
<p>  What is the customer service number? </p> <!-- The question should go here -->


</div> <!-- end of first answer -->

<hr>
  <div class = "questions">
<p>  What is the customer service number? </p> <!-- The question should go here -->


</div> <!-- end of first answer -->
</div>
<hr>
<div class = "more">
    <a href = "questinons.html"> More questions </a>
    </div>

  </div>
</div> 
</div>
<!--End of questions-->

<!-------------------- Challenges and Trending---------------------->

<!-- END OF TRENDING -->

      


   

<!----------------------End of Challenges and Trending-------------->
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
   
      <script src="js/auto-complete.js"></script>
</body>
</html>