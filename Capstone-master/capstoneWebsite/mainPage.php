
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

  

</head>


<body>
 <?php include("nav.html"); ?>






<!---Content area-->
<div class = "container" >
<div class = "content">
<div class="row">

 
 <!-- AREA FOR DISPLAYING QUESTIONS THAT A USER(I) HAVE ANSWERED RECENTLY -->
  <div class="col-md-4">
  <div class = "well answers" > 
      <h4> My Answers, answers that I have been answered </h4> 

    
  <div class = "answers">
<a link href = "answerPage.php">  What is the customer service number? </a> <!-- The question should go here -->
<p>  6AM - 7PM </p> <!-- The answer should go here -->

<!-- This method is calling html page updownVoteFlag.html which 
contains all the symbols(upvote, downvote, flag)-->
<?php include("updownVoteFlag.html"); ?>

</div> <!-- end of first answer -->

<hr>

  <div class = "answers">
<a link href = "answerPage.php">  What is the customer service number? </a> 
<p> 6AM - 7PM </p>

<!-- This method is calling html page updownVoteFlag.html which 
contains all the symbols(upvote, downvote, flag)-->
<?php include("updownVoteFlag.html"); ?>
</div>

<hr>

  <div class = "answers">
<a link href = "answerPage.php">  What is the customer service number? </a> 
<p> A: 6AM - 7PM </p>

<!-- This method is calling html page updownVoteFlag.html which 
contains all the symbols(upvote, downvote, flag)-->
<?php include("updownVoteFlag.html"); ?>
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
  <div class="col-md-4"> 
      <div class = "well questions" >
      <h4> Questions that I can answer </h4>

  <div class = "questions">
  <p> <a link href = "answerQuestion.html">  What is the customer service number? </p>
  </div>

  <hr>

<div class = "questions">
  <p> <a link href = "answerQuestion.html">  What is the customer service number?</p>
  </div>

<hr>

<div class = "questions">
  <p> <a link href = "answerQuestion.html"> What is the customer service number? </p>
  </div>

  <hr>

<div class = "more">
    <a href = "questinons.html"> More questions </a>
    </div>

  </div>
</div> 
<!--End of questions-->

<!-------------------- Challenges and Trending---------------------->
<div class = "row">
   
<div class="col-md-4"> 
   
   
            <div class = "well challengesTrending"> 
            <div class = "col-xs-12" >
          
            <h4> Challenges </h4>

<!-- THE LATEST CHALLENGE QUESITON SHOULD GO HERE -->
            <div class = "challenges">
                <p> Complete to get 100points </p>
                </div>

<!-- end of challenge quesiton -->

<!-- The code to take user to more challenge questions -->

                <div class = "more">
    <a href = "challenges.html"> More Challenges</a>
    </div>
                </div>
</div>
<!-- End of more challenge questions -->


<!-- PART OF TRENDING QUESTIONS -->
             <div class = "well challengesTrending">  


                <div class = "col-xs-12 trending">
                    <h4> My Specialization Areas </h4>


<!--THE MOST TRENDING QUESTION SHOULD GO HERE -->
                    <div class = "trending">
                        <div class = "tags" data-role="tagsinput">
<span class="badge tag tag-pill tag-default">Interest</span> 

           
<span class="badge tag tag-pill tag-default">Banking</span> 


<span class="badge tag tag-pill tag-default">Locations</span> </div>


                        </div>

<!-- END OF TRENDING -->

      


   

</div>

</div>
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
     
    <script src="js/bootstrap.min.js">
    </script>
    <script src = "js/custom.js"></script>
   
      <script src="js/auto-complete.js"></script>
</body>
</html>