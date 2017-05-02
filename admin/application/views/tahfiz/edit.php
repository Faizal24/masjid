<div class="col-md-10">
	<div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Edit Tahfiz</h3>
      </div>
      <div class="panel-body">

		<?php echo validation_errors(); ?>

		<!-- Using form helper -->
		<?php echo form_open('tahfiz/update'); ?>
		<input type="hidden" name="id" value="<?php echo $tahfiz['id']; ?>">

			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" name="nama" placeholder="Name" value="<?php echo $tahfiz['nama']; ?>">
			</div>
			<div class="form-group">
				<label>Age</label>
				<input class="form-control" name="umur" placeholder="Age" value="<?php echo $tahfiz['umur']; ?>">
			</div>
			<div class="form-group">
				    <label for="dob">Start Date</label>
				    <input type="text" class="form-control" id="dob" name="tarikh_mula" placeholder="Start Date" value="<?php echo $tahfiz['tarikh_mula']; ?>">
				    <?php echo form_error('tarikh_mula'); ?>
				    
	            </div>
				<script>
				   $("#dob").datetimepicker({format: 'DD-MM-YYYY'});
				</script>	
		
			<div class="form-group">
				<label>Juzuk Started</label>
				<input class="form-control" name="juzuk_mula" placeholder="Juzuk Started" value="<?php echo $tahfiz['juzuk_mula']; ?>">
			</div>
			<div class="form-group">
				<label>Current Juzuk</label>
				<input class="form-control" name="juzuk_sekarang" placeholder="Current Juzuk" value="<?php echo $tahfiz['juzuk_sekarang']; ?>">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-default">Edit</button>
			</div>
		</form>
		</div>
	</div>
</div>