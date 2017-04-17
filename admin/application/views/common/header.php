<html>
	<head>
		<title>Masjid Pangsun</title>   
		<link rel="stylesheet" type="text/css" href="https://bootswatch.com/united/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap-timepicker/css/bootstrap-timepicker.css">
        <link type="text/css" href="<?php echo base_url(); ?>bootstrap-timepicker/css/bootstrap-timepicker.min.css" />


        <!--Datepicker -->
        <!-- <link type="text/css" href="<?php echo base_url(); ?>datepicker/css/bootstrap-datepicker3.css" />
        <link type="text/css" href="<?php echo base_url(); ?>datepicker/css/bootstrap-datepicker3.min.css" /> -->
        <!-- <link type="text/css" href="<?php echo base_url(); ?>datetimepicker.css" /> -->

        
		<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/style.css"></script> -->
		<script type="text/javascript" src="<?php echo base_url(); ?>jquery-3.2.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
		<!-- <script type="text/javascript" src="http://momentjs.com/downloads/moment.js"></script> -->
		<!-- <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>datepicker/js/bootstrap-datepicker.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>datepicker/js/bootstrap-datepicker.min.js"></script> -->
		
		

	



		

		<style>
			.general-profile-photo {
				height: 70px;
				width: 70px;
				margin: 5px 10px;
				background-size: cover;
				background-position: center center;
				display: inline-block;
				border-radius: 35px;
				border: 1px solid #eee;
				box-shadow: 0 2px 3px rgba(0,0,0,0.2);
				vertical-align: middle;
			}

			.navbar{
				min-height: 33px !important;
				margin-bottom: 0;
				border-radius:0;
			}

			.navbar-nav > li > a, .navbar-brand{
				padding-top: 6px !important;
				padding-bottom: 0 !important;
				height: 33px;
			}
			.container-fluid{
				padding-left:30px !important;
				padding-right:30px !important;
			}

			.container-fluid-2{
				padding-left:0px;
				padding-right:0px;
			}

			#header{
				background: #333333;
				color:#ffffff;
				padding-bottom:10px;
				margin-bottom: 15px;
			}

			.breadcrumb{
				background: darkgrey;
				color:white;
			}

			.breadcrumb li{
				color:white;
			}

			.panel-default>.panel-heading {
				background-color:#e95420;
				color:white;
			}

			.form-small{
				width:50px;
				margin-right: 10px;
			}

		</style>

	</head>
	<body>
	<nav class="navbar navbar-default">
  		<div class="container">
   			<div class="navbar-header">
   				<a class="navbar-brand">Admin</a>
   			</div>
			<!-- <div id="navbar">
				<ul class="nav navbar-nav pull-right">
					<li><a href="<?php echo base_url(); ?>posts">Posts</a></li>
					<li><a href="<?php echo base_url(); ?>schedule">Schedule</a></li>
					<li><a href="<?php echo base_url(); ?>tahfiz">Tahfiz</a></li>
				</ul>
			</div> -->
		</div>
	</nav>
		<div class="container">
		    <div class="row">
		        <div class='col-sm-6'>
		            <input type='text' class="form-control" id='datetimepicker4' />
		        </div>
		        <script type="text/javascript">
		            $(function () {
		                $('#datetimepicker4').datetimepicker();
		            });
		        </script>
		    </div>
		</div>
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					<h1><span class="glyphicon glyphicon-dashboard"></span> Dashboard <small>Masjid Pangsun</small></h1>
				</div>
			</div>
		</div>
	</header>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<div class="list-group">
					<a class="list-group-item" href="<?php echo base_url(); ?>posts"><span class="glyphicon glyphicon-pencil"></span> Posts</a>
					<a class="list-group-item" href="<?php echo base_url(); ?>schedule"><span class="glyphicon glyphicon-calendar"></span> Schedule</a>
					<a class="list-group-item" href="<?php echo base_url(); ?>tahfiz"><span class="glyphicon glyphicon-user"></span> Tahfiz</a>
				</div>

			</div>	
 
