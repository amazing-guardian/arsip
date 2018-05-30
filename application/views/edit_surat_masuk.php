<h1>Edit Surat Masuk</h1>
<form action="<?= base_url() ?>index.php/home/edit_surat_masuk_do/<?= $data->id_surat_masuk ?>" method='post' enctype='multipart/form-data'>
	<div class="row">
		<div class="col-sm-4">Keterangan</div>
		<div class="col-sm-8">
			<input type="text" name="keterangan" class="form-control" value="<?= $data->keterangan ?>" autofocus>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Instansi</div>
		<div class="col-sm-8">
			<select name="instansi" class="form-control">
				<option value="dkk" <?php if ($data->instansi == 'dkk') echo 'selected'; ?>>DKK</option>
				<option value="bkd" <?php if ($data->instansi == 'bkd') echo 'selected'; ?>>BKD</option>
				<option value="instansi lain" <?php if ($data->instansi == 'instansi lain') echo 'selected'; ?>>Instansi Lain</option>
			</select>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-8">
			<input type="submit" name="" value="Ubah" class="btn btn-success">
		</div>
	</div>
</form>