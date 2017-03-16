<h1><?= $title; ?></h1>

<?php echo validation_errors(); ?>

<!-- Using form helper -->
<?php echo form_open('posts/create'); ?>

	

	<div class="form-group">
		<label>Title</label>
		<input type="text" class="form-control" name="title" placeholder="Add Title">
	</div>
	<div class="form-group">
		<label>Content</label>
		<textarea class="form-control" name="content" placeholder="Add Content"></textarea> 
	</div>
	<!-- <div class="form-group">
		<label for="date">Date</label>
		<input type="text" class="form-control" name="date" placeholder="Date">
	</div> -->
	<div class="form-group">
		<button type="submit" class="btn btn-default">Add New Content</button>
	</div>
</form>