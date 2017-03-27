<div class="col-md-10">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Schedule</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="form-group">
	  		<label>Picture : </label>
	  		<!-- <img src="admin/uploads/images/<?php echo $schedule['picture'] ?>" alt="Standard Post with Image"> --><!-- <?php echo $post['picture']; ?>
	  		<!-- <img src="https://www.w3schools.com/images/picture.jpg" alt="Smiley face" width="42" height="42"> -->
	  		<!-- <img src="uploads/images/chess.jpg" alt="Test" width="42" height="42"> -->
	  		<img src="<?php echo base_url(); ?>uploads/images/<?php echo $schedule['picture']?>" alt="Test" width="250" height="150" />
	  	</div>
	  	<div class="form-group">
	  		<label>Title : </label>
	  		<?php echo $schedule['title']; ?>
	  	</div>
		<div class="form-group">
			<label>Date : </label>
			<?php echo $schedule['day']; ?> / <?php echo $schedule['month']; ?> / <?php echo $schedule['year']; ?>
		</div>
		<div class="form-group">
			<label>Time : </label>
			<?php echo $schedule['start']; ?> - <?php echo $schedule['end']; ?>
		</div>
		<div class="form-group">
			<label>Place : </label>
			<?php echo $schedule['place']; ?>
		</div>
		<div class="form-group">
			<label>Content : </label>
			<p><?php echo $schedule['content']; ?></p>
		</div>


		<!-- <h1><?php echo $schedule['title']; ?></h1>
		<div class="post-body">
			<h5 class="post-date">Posted on: <?php echo $schedule['day']; ?></h5>
			<?php echo $schedule['content']; ?>
		</div> -->

	  </div>
	 </div>
</div>


