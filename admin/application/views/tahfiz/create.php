<div class="col-md-10">
   <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">New Tahfiz</h3>
      </div>
      <div class="panel-body">

			<!-- <?php echo validation_errors(); ?> -->
			<?php echo $this->session->flashdata('success_msg'); ?>
			<!-- Using form helper -->
			<?php echo form_open('tahfiz/create'); ?>

				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" name="nama" placeholder="Name">
					<?php echo form_error('nama'); ?>
				</div>

				<div class="form-group">
					<label for="umur">Age</label>
					<input type="text" class="form-control" name="umur" placeholder="Age">
					<?php echo form_error('umur'); ?>
				</div>

				<div class="form-group">
				    <label for="dob">Start Date</label>
				    <input type="text" class="form-control" id="dob" name="tarikh_mula" placeholder="Start Date">
				    <?php echo form_error('tarikh_mula'); ?>
				    
	            </div>
				<script>
				   $("#dob").datetimepicker({format: 'DD-MM-YYYY'});
				</script>				
				
				<div class="form-group">
					<label>Constituents Start</label>
					<input class="form-control" name="juzuk_mula" placeholder="Juzuk Started">
					<?php echo form_error('juzuk_mula'); ?>
				</div>
				<div class="form-group">
					<label>Constituents Now</label>
					<input class="form-control" name="juzuk_sekarang" placeholder="Current Juzuk">
					<?php echo form_error('juzuk_sekarang'); ?>
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-default">Add New Tahfiz</button>
				</div>
			</form>
		</div>
	</div>
</div>

