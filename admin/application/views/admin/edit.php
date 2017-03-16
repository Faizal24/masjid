<?php echo validation_errors(); ?>

<!-- Using form helper -->
<?php echo form_open('administrator/update'); ?>
<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
	<div class="form-group">
		<label>Title</label>
		<input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
	</div>
	<div class="form-group">
		<label>Post</label>
		<textarea class="form-control" name="body" placeholder="What is in your mind?"><?php echo $post['body']; ?></textarea> 
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-default">Edit</button>
	</div>
</form>