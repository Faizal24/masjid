Success
<div class="post-body">
	
	<?php echo $post['content']; ?>
</div>

<hr>

<?php echo form_open('/administrator/delete/'.$post['id']); ?>
	<input type="submit" value="Delete" class="btn btn-danger">

</form>

<a class="btn btn-primary" href="edit/<?php echo $post['slug']; ?>">Edit</a>