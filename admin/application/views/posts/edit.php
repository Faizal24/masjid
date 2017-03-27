<div class="col-md-10">
	<div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Edit Posts</h3>
      </div>
      <div class="panel-body">
	<?php echo validation_errors(); ?>

	<!-- Using form helper -->
	<?php echo form_open('posts/update'); ?>
	<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
		<div class="form-group">
            <label>Picture</label>
            <input class="form-control" type="file" name="picture" value="<?php echo $post['picture']; ?>" />
        </div>
		<div class="form-group">
			<label>Title</label>
			<input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
		</div>
		<div class="form-group">
			<label>Content</label>
			<textarea class="form-control" name="content" placeholder="What is in your mind?"><?php echo $post['content']; ?></textarea> 
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-default">Edit</button>
		</div>
	</form>
	</div>
	</div>
</div>


		<script>
            CKEDITOR.replace( 'content' );
        </script>