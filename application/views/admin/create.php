<?php echo validation_errors(); ?>

<!-- Using form helper -->
<?php echo form_open('administrator/create'); ?>
	<div class="form-group">
		<label>Title</label>
		<input type="text" class="form-control" name="title" placeholder="Add Title">
	</div>
	<div class="form-group">
		<label>Post</label>
		<textarea class="form-control" name="content" placeholder="What is in your mind?"></textarea> 
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-default">Add</button>
	</div>
</form>