<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div style="width: 130px; float: left;">
		<form method="post" action="profile/upload_photo"  method="post" target="postframe" enctype="multipart/form-data">
			<input class="none photo" type="file" name="photo" />			
			<div class="align-center">
				<div class="general-profile-photo upload-photo" style="height: 130px; width: 130px; border-radius:0 !important; background-image: url('upload<?php echo $me->photo ? $me->photo : 'default.jpg'; ?>')">
					<button style="float: right; margin-top: 10px; margin-right: 10px" class="btn upload-photo"><i class="fa fa-upload"></i></button>
				</div>
			</div>
			<div class="spacer"></div>

		</form>
	</div>
</body>
</html>