<h1><?= $title; ?></h1>

<?php echo validation_errors(); ?>

<!-- Using form helper -->
<?php echo form_open('schedule/update'); ?>
<input type="hidden" name="id" value="<?php echo $schedule['id']; ?>">
	<div class="form-group">
		<label>Title</label>
		<input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $schedule['title']; ?>">
	</div>
	<div class="form-group">
		<label>Post</label>
		<textarea class="form-control" name="content" placeholder="What is in your mind?"><?php echo $schedule['content']; ?></textarea> 
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-default">Edit</button>
	</div>
</form>