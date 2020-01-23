<?php 
	include("m_part/connect.php");
 ?>
<html>
<head>
	<title>ONLINE STORE</title>
	<link rel="icon" type="image/png" href="image/logo.png" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
			<div id="logo">
				<a class="brand" href="#"><img src="image/logo.png"></a>
			</div> 
					<nav class=" navbar navbar-inverse">
					  <div class="container-fluid" >
					  	<div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>
					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      <ul class="nav navbar-nav">
					        <li><a href="?p=home">Home<span class="sr-only"></span></a></li>
					        <li><a href="?p=about">About us</a></li>
					        <li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Age Group<span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li><a href="?p=1-5">1-5</a></li>
					            <li><a href="?p=6-10">6-10</a></li>
					            <li><a href="?p=11-20">11-20</a></li>
					            <li><a href="?p=21-40">21-40</a></li>
					            <li><a href="?p=41+">41+</a></li>
					          </ul>
					        </li>
					        <li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gender<span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li><a href="?p=male">Male</a></li>
					            <li><a href="?p=female">Female</a></li>
					          </ul>
					        </li>
					        <li><a href="?p=contactus">Contact us</a></li>
					      </ul>
					      <form class="navbar-form navbar-right " role="search">
					        <div class="form-group">
					          <input type="text" class="form-control" placeholder="Search">
					        </div>
					        <button type="submit" class="btn btn-default">Submit</button>
					      </form>
					    </div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
				<?php
			 			if(isset($_REQUEST['p']))
			 				{
			 					 $content=$_REQUEST['p'];
			 						// echo $content;
			 					 $inc='m_part/'.$content.'.php';
			 				}
			 				else{
			 					$inc='m_part/home.php';
			 				}

			 					@include($inc);		 					
			 		?>
			<div class="panel-footer" id="footer">
				<p>JADIKARI131@GMAIL.COM</p>
			</div>
	</div>
</body>
</html>