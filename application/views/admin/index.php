<a class="btn btn-primary" type="submit" href="<?php echo site_url('administrator/create')?>">Add New Post</a>
<!-- Print all posts -->
<?php foreach($posts as $post) : ?>
	<h1><?php echo $post['title']; ?></h1>
	
	<p style="color:blue;     width: 1050px;
     white-space: nowrap;
     overflow: hidden;
     text-overflow: ellipsis;"><?php echo $post['content'] ?></p>
	<br><br>
	<p><a class="btn btn-default" href="<?php echo site_url('administrator/'.$post['slug']) ?>">Read More>></a></p>
<?php endforeach; ?>