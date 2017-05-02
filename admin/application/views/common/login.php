
<html>
<head>
	<meta charset="UTF-8">
	<title>XYZ Comp</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<style>
		.spacer{
			height: 10px;
		}

		.spacer-lg{
			height:30px;
		}

		.well{
			width:350px;
			height:400px;
			margin:0 auto;
			background-color:  #F7F7F7;
			padding-left:50px;
			padding-top:50px;

		}
	</style>
</head>
<body style="background-color:#f3f9fe;">

		<div class="container">
			<div style="padding-top:120px;">
				<div class="well">
						<div class="text-center" style="padding-right:40px;">
							<img src="<?php echo base_url() ?>images/logo.png" alt="Masjid Pangsun">
						</div>
						
						
						<div class="spacer-lg"></div>
						
						<div class="form-inline">
		  					<div class="form-group">
		    					<!-- <label for="username">Username</label> -->
		    					<div class="input-group">
		     						<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
		      						<input type="text" class="form-control" id="username" placeholder="Username">      						
		    					</div>
		  					</div>
		  				</div>
		  				<div class="spacer"></div>
		  				<div class="form-inline">
		  					<div class="form-group">
		  						<div class="input-group">
		  							<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
		  							<input type="password" class="form-control"	id="password" placeholder="Password">
		  						</div>
		  					</div>
		  				</div>
		  				<div class="spacer"></div>
		  				 <!-- <label>
	                        <input type="checkbox" value="remember-me"> Remember me
	                    </label> -->
		   				<!-- <h5 class="pull-left"><a href="#">Forgot your password?</a></h5> -->
						<div class="spacer"></div>
						<button type="submit" class="btn btn-primary" style="width:240px;">Sign in</button>
						<!-- <h5 class="pull-left"><a href="#">Forgot your password?</a></h5> -->
						
				</div>
					
			</div>
		</div>
	
	
</body>
</html>