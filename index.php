<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="nav blog-masthead">
          <ul class = "nav navbar-nav navbar-right">
          <li><a href = "#">join</a></li>
          <span class="divider"></span>
          <li><a href = "#myModal" data-toggle="modal"> login </a></li>
          <span class="divider"></span>
          <li><a href = "#">share</a></li>
          </ul>          
      </div> 

    
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a class="navbar-brand" href="#">Travel</a> -->
        </div>      
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="#">Flight</a></li>
            <li><a href="#">Hotel</a></li>
            <li><a href="#">Restaurant</a></li>
            <li><a href="#">My Itins</a></li>
          </ul>
          <form class="navbar-form navbar-right" method="post" >
            <input type="text" name="cityname" class="form-control" value= "" placeholder="Search...">
            <input type="submit" value="go"/>
          </form>
        </div>
      </div>
    </div>          
            
          

    <div class="container-fluid">
      <div class="row">
        
        <div class="col-sm-9 col-md-9  main"> <!--/col-sm-offset-3 col-md-offset-2-->
          <h1 class="page-header">Landmark</h1>


          <div class="row placeholders">

			<input type="hidden" id="alignment" value="" />
			<div class="alignment" data-toggle="buttons-checkbox">
				<button type="button" class="btn btn-default active">Landmark</button>
				<button type="button" class="btn btn-default">Museum</button>
				<button type="button" class="btn btn-default">Park</button>
				<button type="button" class="btn btn-default">Hotel</button>
				<button type="button" class="btn btn-default">Restaurant</button>
				You have selected: <strong></strong>   
				<div id="thanks"> </div>
			</div>

		    <div id="image-container" >    
				  <!-- Carousel ================== -->

				  <div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				  <?php
					  include("getPhoto.php");
				   ?>			 
				 </div>
				  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				  <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>	<!-- /.carousel -->	
			  	
				<!--?php include("getPOI.php"); ? -->	    
				
			    <?php include("getSubcity.php"); ?>	  
			</div><!-- /. img container -->
         </div> <!-- /. row placeholders -->
         
         


          <h2 class="sub-header">Destination details</h2>
          <div id="destination" class="col-xs-6 col-sm-6">
            Click on a destination link to find out more!
          </div>
        </div> <!--/main-->
        
        <div class="col-sm-3 col-md-3 blog-sidebar"> <!--/col-sm-offset-1 -->
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>TravelSite <em>Useful info for travel planning</em> search, plan, travel, and have fun.</p>
          </div>
          <div class="sidebar-module">
            <h4>Top Destinations</h4>
            <ol class="list-unstyled">
              <li><a href="#">New York</a></li>
              <li><a href="#">Las Vegas</a></li>
              <li><a href="#">San Francisco</a></li>
              <li><a href="#">Los Angeles</a></li>
              <li><a href="#">Seattle</a></li>
              <li><a href="#">Hawaii</a></li>
              <li><a href="#">Miami</a></li>
              <li><a href="#">London</a></li>
              <li><a href="#">Paris</a></li>
              <li><a href="#">Rome</a></li>
              <li><a href="#">Beijing</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
         </div><!-- /.blog-sidebar -->
         
      </div> <!--/row-->
    </div> <!--/container-fluid-->
    
    <div class="blog-footer">
      <p>TravelMining: find the best destinations for you!</p>
      <p><a href="#">Back to top</a></p>
    </div>
    

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title" id="myModalLabel">Log in to Travel.com</h4>
		  </div>		  
		  

		   <div class="modal-body">
            <form class="contact">
              <fieldset>               
				<ul class="nav nav-list">
					<li class="nav-header ">Email</li>
					<li><input class="input-xlarge " value="" type="text" name="Email"></li> 
					<li class="nav-header">Password</li>
					<li><input class="input-xlarge " value="" type="password" name="Password"></li><p style="color: 'red'"></p>
				</ul>
              </fieldset>

				<button type="button" class="btn btn-primary" id="loginsubmit" data-dismiss="modal">login</button>			
				<div class="checkbox">
					<input id="remember" type="checkbox" />
					<label for="remember">Remember me on this computer</label>
				</div>	
			</form>
        </div>

		  <!--div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		  </div-->
		</div>
	  </div>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="docs.min.js"></script>
    <script type="text/javascript" src="script.js"></script >    
  </body>
</html>
