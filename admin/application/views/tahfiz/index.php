<a class="btn btn-primary" type="submit" href="<?php echo site_url('tahfiz/create')?>">Add New Post</a><br>
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
<?php foreach($tahfizs as $tahfiz) : ?>
	<tr>
		<td><?php echo $counter; ?></td>
		<!-- <td><a href="<?php echo site_url('schedule/'.$post['slug']) ?>"><?php echo $post['title']; ?></a></td> -->
		<td><?php echo $tahfiz['nama']; ?></td>
		<td><a class="btn btn-primary" href="<?php echo site_url('tahfiz/'.$tahfiz['slug']) ?>">View</a></td>
		<td><a class="btn btn-primary" href="tahfiz/edit/<?php echo $tahfiz['slug']; ?>">Edit</a></td>
		<td><?php echo form_open('/tahfiz/delete/'.$tahfiz['id']); ?>
			<input type="submit" value="Delete" class="btn btn-danger">
		</form>
		</td>
	</tr>
	
	<?php $counter++; ?>
<?php endforeach; ?>
</table>
