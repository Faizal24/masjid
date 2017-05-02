<html>
	<head>
		<title>Masjid Pangsun</title>   
		
		<link rel="stylesheet" type="text/css" href="https://bootswatch.com/united/bootstrap.min.css">

		<link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap-timepicker/css/bootstrap-timepicker.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap-timepicker/css/bootstrap-timepicker.min.css">

	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
		<script src="<?php echo base_url(); ?>bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
		<!-- <script type="text/javascript" src="<?php echo base_url(); ?>jquery-3.2.0.min.js"></script> -->

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

			..table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
			    padding: 8px;
			    line-height: 1.42857143;
			    vertical-align: top;
     			border-top: none !important; 
			}

		</style>

	</head>
	<body>

	<nav class="navbar navbar-default">
  		<div class="container">
   			<div class="navbar-header">
   				<a class="navbar-brand">Admin of Masjid Pangsun</a>
   			</div>
   			<div class="navbar-right">
   				<h4><a style="color:white;padding-top:50px;" href="<?php echo base_url()?>login/logout">Logout</a></h4>
   			</div>
   				
   			
		</div>
	</nav>


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
 
