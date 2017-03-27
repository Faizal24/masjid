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
					<label>Nama</label>
					<input type="text" class="form-control" name="nama" placeholder="Nama">
					 <?php echo form_error('nama'); ?>
				</div>
				<div class="form-group">
					<label>Umur</label>
					<input class="form-control" name="umur" placeholder="Umur">
					<?php echo form_error('umur'); ?>
				</div>
				<div class="form-group">
					<label>Tarikh Mula</label>
					<input class="form-control" name="tarikh_mula" placeholder="Tarikh Mula">
				 	<?php echo form_error('tarikh_mula'); ?>
				</div>
				<div class="form-group">
					<label>Juzuk Mula</label>
					<input class="form-control" name="juzuk_mula" placeholder="Juzuk Mula">
					<?php echo form_error('juzuk_mula'); ?>
				</div>
				<div class="form-group">
					<label>Juzuk Sekarang</label>
					<input class="form-control" name="juzuk_sekarang" placeholder="Juzuk Sekarang">
					<?php echo form_error('juzuk_sekarang'); ?>
				</div>
				<!-- <div class="form-group">
					<label for="date">Date</label>
					<input type="text" class="form-control" name="date" placeholder="Date">
				</div> -->
				<div class="form-group">
					<button type="submit" class="btn btn-default">Add New Tahfiz</button>
				</div>
			</form>
		</div>
	</div>
</div>