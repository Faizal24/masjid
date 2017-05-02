<html>
<head>
	<meta charset="UTF-8">
	<title>Masjid Pangsun</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<style>
		.spacer-xs{
			height:20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="col-md-4 col-md-offset-4" style="padding-top:150px;">
			<div class="panel panel-default" style="border-color:green;">
				<div class="panel-heading" style="background: #5cb85c;">
					<div class="panel-title" style="height:20px;">
						<p class="text-center" style="color:white;">Login of Masjid Pangsun</p>
					</div>
				</div>
				<div class="panel-body">
					<div class="text-center">
						<img src="<?php echo base_url()?>images/logo.png" alt="Masjid Pangsun">
					</div>

					<?php echo form_open("login/process"); ?>
					<?php echo isset($error) ? $error : ''; ?>
					<div class="spacer-xs"></div>
					<div class="form-inline text-center">
	  					<div class="form-group">
	    					<!-- <label for="username">Username</label> -->
	    					<div class="input-group">
	     						<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
	      						<input type="text" class="form-control" name="username" placeholder="Username">
	    					</div>	    					
	  					</div>	  					
	  				</div>
	  				<div class="spacer-xs"></div>
	  				<div class="form-inline text-center">
	  					<div class="form-group">
	  						<div class="input-group">
	  							<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
	  							<input type="password" class="form-control" name="password" placeholder="Password">
	  						</div>
	  					</div>
	  				</div>
	  				<div class="spacer-xs"></div>
	  				<div class="text-center">
	  					<input class="btn btn-success" type="submit" value="Login" style="width:240px;">
	  				</div>
	  				<?php echo form_close(); ?>
	  				<div class="spacer-xs"></div>
				</div>
			</div><!--panel-default-->
		</div>
		
	</div>
</body>
</html>