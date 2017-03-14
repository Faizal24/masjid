<a class="btn btn-primary" type="submit" href="<?php echo site_url('posts/create')?>">Add New Post</a><br>
<!-- Print all posts --><br>
<?php
	$counter = 1;

?>
<table class="table table-bordered table-condensed">
	<tbody>
		<td style="width:40px;">No.</td>
		<td>Content</td>
		<td>View</td>
		<td>Edit</td>
		<td>Delete</td>
	</tbody>
<?php foreach($posts as $post) : ?>
	<tr>
		<td><?php echo $counter; ?></td>
		<!-- <td><a href="<?php echo site_url('posts/'.$post['slug']) ?>"><?php echo $post['title']; ?></a></td> -->
		<td><?php echo $post['title']; ?></td>
		<td><a class="btn btn-primary" href="<?php echo site_url('posts/'.$post['slug']) ?>">View</a></td>
		<td><a class="btn btn-primary" href="posts/edit/<?php echo $post['slug']; ?>">Edit</a></td>
		<td><?php echo form_open('/posts/delete/'.$post['id']); ?>
			<input type="submit" value="Delete" class="btn btn-danger">
		</form>
		</td>
	</tr>
	
	<?php $counter++; ?>
<?php endforeach; ?>
</table>
