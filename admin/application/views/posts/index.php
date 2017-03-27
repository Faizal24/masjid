<!-- <section id="breadcrumb">
		<div class="container-fluid-2">
			<ol class="breadcrumb">
			  <li>Dashboard  >  Post </li>
			</ol>
		</div>
	</section> -->

<div class="col-md-10">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Posts</h3>
	  </div>
	  <div class="panel-body">
	    <a class="btn btn-default" type="submit" href="<?php echo site_url('users/add')?>">Add New Post</a><br>
	<!-- Print all posts --><br>
	<?php
		$counter = 1;
	?>
	<table class="table table-bordered table-condensed">
		<tbody class="text-center">
			<td style="width:40px;">No.</td>
			<td style="width:70%;">Title</td>
			<td style="width:10%;">View</td>
			<td style="width:10%;">Edit</td>
			<td style="width:10%;">Delete</td>
		</tbody>
	<?php foreach($posts as $post) : ?>
		<tr class="text-center">
			<td><?php echo $counter; ?></td>
			<!-- <td><a href="<?php echo site_url('posts/'.$post['slug']) ?>"><?php echo $post['title']; ?></a></td> -->
			<td><?php echo $post['title']; ?></td>
			<td><a class="btn btn-default" href="<?php echo site_url('posts/'.$post['slug']) ?>">View</a></td>
			<td><a class="btn btn-default" href="posts/edit/<?php echo $post['slug']; ?>">Edit</a></td>
			<td><?php echo form_open('/posts/delete/'.$post['id']); ?>
				<input type="submit" value="Delete" class="btn btn-danger">
			</form>
			</td>
		</tr>
		
		<?php $counter++; ?>
	<?php endforeach; ?>
	</table>
	  </div>
	</div>
	
</div>

