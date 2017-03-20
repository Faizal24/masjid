<h1><?= $title; ?></h1>

<?php echo validation_errors(); ?>

<!-- Using form helper -->
<?php echo form_open('tahfiz/create'); ?>

	

	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama" placeholder="Nama">
	</div>
	<div class="form-group">
		<label>Umur</label>
		<input class="form-control" name="umur" placeholder="Umur">
	</div>
	<div class="form-group">
		<label>Tarikh Mula</label>
		<input class="form-control" name="tarikh_mula" placeholder="Tarikh Mula">
	</div>
	<div class="form-group">
		<label>Juzuk Mula</label>
		<input class="form-control" name="juzuk_mula" placeholder="Juzuk Mula">
	</div>
	<div class="form-group">
		<label>Juzuk Sekarang</label>
		<input class="form-control" name="juzuk_sekarang" placeholder="Juzuk Sekarang">
	</div>
	<!-- <div class="form-group">
		<label for="date">Date</label>
		<input type="text" class="form-control" name="date" placeholder="Date">
	</div> -->
	<div class="form-group">
		<button type="submit" class="btn btn-default">Add New Content</button>
	</div>
</form>