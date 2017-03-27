<div class="col-md-10">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Schedule</h3>
	  </div>
	  <div class="panel-body">

			<a class="btn btn-default" type="submit" href="<?php echo site_url('adminschedule/add')?>">Add New Schedule</a><br>
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
			<?php foreach($schedules as $schedule) : ?>
				<tr class="text-center">
					<td><?php echo $counter; ?></td>
					<!-- <td><a href="<?php echo site_url('schedule/'.$post['slug']) ?>"><?php echo $post['title']; ?></a></td> -->
					<td><?php echo $schedule['title']; ?></td>
					<td><a class="btn btn-default" href="<?php echo site_url('schedule/'.$schedule['slug']) ?>">View</a></td>
					<td><a class="btn btn-default" href="schedule/edit/<?php echo $schedule['slug']; ?>">Edit</a></td>
					<td><?php echo form_open('/schedule/delete/'.$schedule['id']); ?>
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