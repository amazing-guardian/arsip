<h1>Tambah Surat Masuk</h1>
<form action="<?= base_url() ?>index.php/home/tambah_surat_masuk_do" method='post' enctype='multipart/form-data'>
	<div class="row">
		<div class="col-sm-4">Keterangan</div>
		<div class="col-sm-8">
			<input type="text" name="keterangan" class="form-control" autofocus>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Instansi</div>
		<div class="col-sm-8">
			<select name="instansi" class="form-control">
				<option value="dkk">DKK</option>
				<option value="bkd">BKD</option>
				<option value="instansi lain">Instansi Lain</option>
			</select>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">File</div>
		<div class="col-sm-8">
			<input type="file" name="file">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-8">
			<input type="submit" name="" value="Oke" class="btn btn-success">
		</div>
	</div>
</form>