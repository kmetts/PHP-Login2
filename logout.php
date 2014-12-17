<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  
  </head>
<body>

 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Login Example</a>
          <div class="nav-collapse collapse">
		   <ul class="nav navbar-nav">
		    <li><a href="..\..\..\index.html">Home</a></li> 
           </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>


<div class="container">
  <div class="span9">
	<div>

<?php
//session_start();
//session_destroy();
echo "You've been logged out. If you would like to log back in <a href='Login.html'>Click Here</a>";

?>
   </div>
 
  </div>
</div>

    <!-- Placed at the end of the document so the pages load faster -->
   
	<script src="js/jquery-1.10.1.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>

