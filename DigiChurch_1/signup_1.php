<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Sign up Digi-Church</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="assets/images/indigitous4.png" alt="#"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown"></li>
					<li></li>
					<li class="active"><a class="btn" href="signin.html">SIGN IN / SIGN UP</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Registration</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Registration</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Register a new account</h3>
							<p class="text-center text-muted">Already a member? Yikes, 	wrong page.  <a href="signin.html">Sign In</a> right here. If not duly continue the process as it only takes a few moments. </p>
							<hr>

							<form>
								<div class="top-margin">
									<label>First Name</label>
									<input type="text" name="first_name" class="form-control">
								</div>
								<div class="top-margin">
									<label>Last Name</label>
									<input type="text" name="last_name" class="form-control">
								</div>
								<div class="top-margin">
									<label>Email Address <span class="text-danger">*</span></label>
									<input type="text" name="email_add" class="form-control">
								</div>
								<div class="top-margin">
									<label>Phone Number <span class="text-danger">*</span></label>
									<input type="text" name="phone_no" class="form-control">
								</div>

								<div class="row top-margin">
									<div class="col-sm-6">
										<label>Username <span class="text-danger">*</span></label>
										<input type="text" name="user_name" class="form-control">
									</div>
									<div class="col-sm-6">
										<label>Password <span class="text-danger">*</span></label>
										<input type="text" name="password" class="form-control">
									</div>
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<label class="checkbox">
											<input type="checkbox"> 
											I've read the <a href="page_terms.html">Terms and Conditions</a>
										</label>                        
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Register</button>
									</div>
								</div>
							</form>

							<?php 
	if (isset($_POST["submit"])) {
		$first_name = $_POST ['first_name']
		$last_name = $_POST ['last_name']
		$email_add = $_POST ['email_add']
		$phone_no = $_POST ['phone_no']
		$user = $_POST['user_name'];
		$password = $_POST['password'];

		$con = mysql_connect('localhost81', 'root', '') or die(mysql_error());
		mysql_select_db('user_registration') or die("cannot select database");

		$query  = mysql_query("SELECT * FROM login WHERE username ='".$user."' ");
		$numrows = mysql_num_rows($query);
		if (numrows == 0) {
		 	$sql = "INSERT INTO login (user_name, password) VALUES ('$user', '$password')";

		 	$result = mysql_query($sql);

		 	if ($result) {
		 		echo "Account successfully created";
		 	}
		 	else{
		 		echo "Failure to create";
		 	}
		 	
		 	else{
		 		echo "That username already exists, Please try with another username. Thank you.";
		 	}
		 } 
	}
	?>	

						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	

	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>(+234) 809-08764<br>
								<a href="mailto:#">leader.team@digi-church.com</a><br>
								<br>
								#43 Olukunle Akinola street, Ipaja, Lagos, Nigeria
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow us</h3>
						<div class="widget-body">
							<p class="follow-me-icons clearfix">
								<a href="https://twitter.com/"><i class="fa fa-twitter fa-2"></i></a>
								<a href="https://dribbble.com/"><i class="fa fa-dribbble fa-2"></i></a>
								<a href="https://github.com/"><i class="fa fa-github fa-2"></i></a>
								<a href="https://www.facebook.com/"><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Digi-church</h3>
						<div class="widget-body">
							<p>everything is about him. Creation and history are all about Jesus. He is the very center of our purpose and in him we are now fully human, so our purpose and your destiny are forever linked. You might say that we have put all our eggs in the one human basket</p>
							<p>everything is about him. Creation and history are all about Jesus. He is the very center of our purpose and in him we are now fully human, so our purpose and your destiny are forever linked. You might say that we have put all our eggs in the one human basket</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Home</a> | 
								<a href="about.html">About</a> |
								<a href="sidebar-right.html">Sidebar</a> |
								<a href="contact.html">Contact</a> |
								<b><a href="signup.html">Sign up</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2016, Digi-church. Designed by <a href="#" rel="designer">digi-church</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>