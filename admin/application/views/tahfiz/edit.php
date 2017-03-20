<h1><?= $title; ?></h1>

<?php echo validation_errors(); ?>

<!-- Using form helper -->
<?php echo form_open('tahfiz/update'); ?>
<input type="hidden" name="id" value="<?php echo $tahfiz['id']; ?>">

	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $tahfiz['nama']; ?>">
	</div>
	<div class="form-group">
		<label>Umur</label>
		<input class="form-control" name="umur" placeholder="Umur" value="<?php echo $tahfiz['umur']; ?>">
	</div>
	<div class="form-group">
		<label>Tarikh Mula</label>
		<input class="form-control" name="tarikh_mula" placeholder="Tarikh Mula" value="<?php echo $tahfiz['tarikh_mula']; ?>">
	</div>
	<div class="form-group">
		<label>Juzuk Mula</label>
		<input class="form-control" name="juzuk_mula" placeholder="Juzuk Mula" value="<?php echo $tahfiz['juzuk_mula']; ?>">
	</div>
	<div class="form-group">
		<label>Juzuk Sekarang</label>
		<input class="form-control" name="juzuk_sekarang" placeholder="Juzuk Sekarang" value="<?php echo $tahfiz['juzuk_sekarang']; ?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-default">Edit</button>
	</div>
</form>