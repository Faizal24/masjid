<div class="col-md-10">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Schedule</h3>
	  </div>
	  <div class="panel-body">
	  	<table class="table">
	  		<tr>
	  			<td><label>Picture : </label></td>
	  			<td class="thumbnail" style="width:450px;"><img src="<?php echo base_url(); ?>uploads/images/<?php echo $schedule['picture']?>" alt="Test" /></td>
	  		</tr>
	  		<tr>
	  			<td><label>Title : </label></td>
	  			<td><?php echo $schedule['title']; ?></td>
	  		</tr>
	  		<tr>
	  			<td><label>Date : </label></td>
	  			<td><?php echo $schedule['day']; ?> / <?php echo $schedule['month']; ?> / <?php echo $schedule['year']; ?></td>
	  		</tr>
	  		<tr>
	  			<td><label>Time : </label></td>
	  			<td><?php echo $schedule['start']; ?> - <?php echo $schedule['end']; ?> </td>
	  		</tr>
	  		<tr>
	  			<td><label>Place : </label></td>
	  			<td><?php echo $schedule['place']; ?></td>
	  		</tr>
	  		<tr>
	  			<td><label>Content : </label></td>
	  			<td><?php echo $schedule['content']; ?></td>
	  		</tr>
	  	</table>
	  
	  </div>
	 </div>
</div>


