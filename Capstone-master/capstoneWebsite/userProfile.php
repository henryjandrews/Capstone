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
  <script src="js/bootstrap.min.js">
    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!--============= NAVIGATION BAR =======-->
     <!-- calling the navingation and searach bar -->
 <?php include("nav.html"); ?>
    <!--=========================End of navigation bar ==========-->
<div class = "container">

<div class = "row">


      <div class="col-md-8">
          <div class = "well userProfile" > 
              <h4> User Profile </h4>
              <div class = "uArea">

        <form class = "uploadImage">
  <span class="glyphicon glyphicon-user forProfile" aria-hidden="true"></span> 
          
            </form>


<div class="input-group input-group-md">
<label class = "control-label" for = "userName">
    Name
    </label>
  <input type="text" class="form-control" type = "text">
</div>

<div class="input-group input-group-md">
<label class = "control-label" for = "userName">
    Area of Speciality
    </label>
  <input type="text" class="form-control" type = "text">
      </div>
</div>


<div class="btn-group" role="group" aria-label="...">
  <button type="button" class="btn btn-default background green">Save</button>
  </div>

           
          </div>
          </div>



     <div class="col-md-4">
          <div class = "well contentArea" > 
              <h4> My Specialization Area </h4>

              <label class="checkbox-inline"><input type="checkbox" value="">Interest </label>
<label class="checkbox-inline"><input type="checkbox" value="">Location </label>
<label class="checkbox-inline"><input type="checkbox" value="">Banking </label>

<label class="checkbox-inline"><input type="checkbox" value="">Other </label>
<div class = "uButton">
<button type="button" class="btn btn-default">Select your Specializtion Area</button>
   </div>         
          </div>
          </div>











</div>

<div>




      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     
    
    <script src = "js/custom.js"></script>
     <script src = "js/auto-complete.js"></script>
   
</body>
</html>