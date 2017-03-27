<div class="col-md-10">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Posts</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="form-group">
	  		<label>Picture : </label>
	  		<img src="admin/uploads/images/<?php echo $post['picture'] ?>" alt="Standard Post with Image"><!-- <?php echo $post['picture']; ?>
	  		<!-- <img src="https://www.w3schools.com/images/picture.jpg" alt="Smiley face" width="42" height="42"> -->
	  		<!-- <img src="uploads/images/chess.jpg" alt="Test" width="42" height="42"> -->
	  	</div>
	  	<div class="form-group">
	  		<label>Title : </label>
	  		<?php echo $post['title']; ?>
	  	</div>
		<div class="form-group">
			<label>Posted on : </label>
			<?php echo $post['date']; ?>
		</div>
		<div class="form-group">
			<label>Content : </label>
			<p><?php echo $post['content']; ?></p>
		</div>
	  </div>
	 </div>
</div>






