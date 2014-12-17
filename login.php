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
				<i class="glyphicon glyphicon-user" style="font-size: 16px;color:#fff"></i>
				
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
$username = $_POST['username'];
$password = $_POST['password'];

if ($username&&$password)
{
$connect = mysql_connect("localhost", "USERNAME", "PASSWORD") or die ("Couldn't Connect!");
mysql_select_db("bright20_loginApp") or die ("No Database found");

$query = mysql_query("SELECT *FROM users WHERE username ='$username'");
$numrows = mysql_num_rows($query);

if ($numrows !=0)
{
	while ($row =mysql_fetch_assoc($query))
	{
		  $dbusername = $row['username'];
		  $dbpassword = $row['password'];
		  
	}
	
	//check to see if they match
	if ($username==$dbusername&&$password==$dbpassword)
	
	{
	  include ('member.php');

	}
	else 
	echo "Incorrect Password, if you would like to try again <a href='Login.html'>Click Here</a>";
}
else
	die("That user does not exist, please try again <a href='Login.html'>Click Here</a>");
}
else
	die("Please enter a username and password, please try again <a href='Login.html'>Click Here</a>");
?>
 
   </div>
 
  </div>
</div>

    <!-- Placed at the end of the document so the pages load faster -->
   
	<script src="js/jquery-1.10.1.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>


