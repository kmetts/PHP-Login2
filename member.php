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
		   <ul class="nav navbar-nav navbar-right">
		    <li><a href="..\..\..\index.html">Home</a></li> 
            <li> <?php
					//session_start();
					//echo "Welcome, ".$_SESSION['username']."!";
					echo "<a href='logout.php'>Log Out</a>";
				 ?></li>
      
           </ul>
		    
     
   
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>


<div class="container">
<div class="row">
	
    <div class="col-md-9">
      	
      <!-- column 2 -->     
		<div class="row">
           
            <!-- center left-->	
         	<div class="col-md-6">
			<br><br>
			  <div class="well">Inbox Messages <span class="badge pull-right">3</span></div>
                   
              <div class="panel panel-default">
                  <div class="panel-heading"><h4>Reports</h4></div>
                  <div class="panel-body">
                    
                    <small>Success</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                        <span class="sr-only">72% Complete</span>
                      </div>
                    </div>
                    <small>Info</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20% Complete</span>
                      </div>
                    </div>
                    <small>Warning</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <span class="sr-only">60% Complete (warning)</span>
                      </div>
                    </div>
                    <small>Danger</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <span class="sr-only">80% Complete</span>
                      </div>
                    </div>

                  </div><!--/panel-body-->
              </div><!--/panel-->
	
			  <hr>              

			  <!--tabs-->
              <div class="container">
                <div class="col-md-4">
                <ul class="nav nav-tabs" id="myTab">
                  <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                  <li><a href="#messages" data-toggle="tab">Messages</a></li>
                  <li><a href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
                
                <div class="tab-content">
                  <div class="tab-pane active" id="profile">
                    <h4><i class="glyphicon glyphicon-user"></i></h4>
                    Lorem profile dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                    <p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                      dolor, in sagittis nisi.</p>
                  </div>
                  <div class="tab-pane" id="messages">
                    <h4><i class="glyphicon glyphicon-comment"></i></h4>
                    Message ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                    <p>Quisque mauris augu.</p>
                  </div>
                  <div class="tab-pane" id="settings">
                    <h4><i class="glyphicon glyphicon-cog"></i></h4>
                    Lorem settings dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                    <p>Quisque mauris augue, molestie.</p>
                  </div>
                </div>
              	</div>
              </div>  
               
              <!--/tabs-->
              
              <hr>
              
              <div class="panel panel-default">
                  <div class="panel-heading"><h4>New Requests</h4></div>
                  <div class="panel-body">
                    <div class="list-group">
                    <a href="#" class="list-group-item active">Hosting virtual mailbox serv..</a>
                    <a href="#" class="list-group-item">Dedicated server doesn't..</a>
                    <a href="#" class="list-group-item">RHEL 6 install on new..</a>
                    </div>
                  </div>
              </div>
   
          	</div><!--/col-->
        	<div class="col-md-6">
				<div class="panel panel-default">
                  <div class="panel-heading"><h4>Notices</h4></div>
                  <div class="panel-body">
                    
                  <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    This is a dismissable alert.. just sayin'.
                  </div>

                  This is a dashboard-style layout that uses Bootstrap 3. You can use this template as a starting point to create something more unique.
                  <br><br>
                  Visit the Bootstrap Playground at <a href="http://bootply.com">Bootply</a> to tweak this layout or discover more useful code snippets.
                  </div>
              	</div>
              
                <table class="table table-striped">
                      <thead>
                        <tr><th>Visits</th><th>ROI</th><th>Source</th></tr>
                      </thead>
                      <tbody>
                        <tr><td>45</td><td>2.45%</td><td>Direct</td></tr>
                        <tr><td>289</td><td>56.2%</td><td>Referral</td></tr>
                        <tr><td>98</td><td>25%</td><td>Type</td></tr>
                        <tr><td>..</td><td>..</td><td>..</td></tr>
                        <tr><td>..</td><td>..</td><td>..</td></tr>
                      </tbody>
               	</table>
              
              	<div class="panel panel-default">
                	<div class="panel-heading">
                      	<div class="panel-title">
                  		<i class="glyphicon glyphicon-wrench pull-right"></i>
                      	<h4>Post Request</h4>
                      	</div>
                	</div>
                	<div class="panel-body">

                      <form class="form form-vertical">
                       
                        <div class="control-group">
                          <label>Name</label>
                          <div class="controls">
                           <input type="text" class="form-control" placeholder="Enter Name">
                          </div>
                        </div>      
                        
                        <div class="control-group">
                          <label>Message</label>
                          <div class="controls">
                          	<textarea class="form-control"></textarea>
                          </div>
                        </div> 
                             
                        <div class="control-group">
                          <label>Category</label>
                          <div class="controls">
                             <select class="form-control"><option>options</option></select>
                          </div>
                        </div>    
                        
                        <div class="control-group">
                          	<label></label>
                        	<div class="controls">
                        	<button type="submit" class="btn btn-primary">
                              Post
                            </button>
                        	</div>
                        </div>   
                        
                      </form>
                
                
                  </div><!--/panel content-->
                </div><!--/panel-->
              
              	<div class="panel panel-default">
                  <div class="panel-heading"><div class="panel-title"><h4>Engagement</h4></div></div>
                  <div class="panel-body">	
                   	<div class="col-xs-4 text-center"><img src="http://placehold.it/80/BBBBBB/FFF" class="img-circle img-responsive"></div>
                    <div class="col-xs-4 text-center"><img src="http://placehold.it/80/EFEFEF/555" class="img-circle img-responsive"></div>
                    <div class="col-xs-4 text-center"><img src="http://placehold.it/80/EEEEEE/222" class="img-circle img-responsive"></div>
                  </div>
               </div><!--/panel-->
              
			</div><!--/col-span-6-->
     
      </div><!--/row-->
      
      <hr>
      
      <a href="#"><strong><i class="glyphicon glyphicon-comment"></i> Discussions</strong></a>  
      
      <hr>
      
      <div class="row">
        <div class="col-md-12">
          <ul class="list-group">
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> <small>(3 mins ago)</small> The 3rd page reports don't contain any links. Does anyone know why..</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> <small>(1 hour ago)</small> Hi all, I've just post a report that show the relationship betwe..</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-heart"></i> <small>(2 hrs ago)</small> Paul. That document you posted yesterday doesn't seem to contain the over..</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-heart-empty"></i> <small>(4 hrs ago)</small> The map service on c243 is down today. I will be fixing the..</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-heart"></i> <small>(yesterday)</small> I posted a new document that shows how to install the services layer..</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> <small>(yesterday)</small> ..</a></li>
          </ul>
        </div>
      </div>
  	</div><!--/col-span-9-->
</div>
</div>
<!-- /Main -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="js/jquery-1.10.1.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>




