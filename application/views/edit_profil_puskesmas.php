<?php
	$this->load->view('elemen/anti_tabel');
?>
<form method="post" action="<?= base_url() ?>index.php/home/edit_profil_puskesmas_do">
	<h1>Profil Puskesmas Sempaja</h1>
	<h4>Data Dasar</h4>
	<table class="table">
		<tr>
			<td>Nama Puskesmas</td>
			<td>:</td>
			<td><input type="text" name="nama_puskesmas" value="<?= $data->nama_puskesmas ?>" class='form-control' autofocus></td>
		</tr>
		<tr>
			<td>Kode Registrasi Puskesmas</td>
			<td>:</td>
			<td><input type="text" name="kode_registrasi_puskesmas" value="<?= $data->kode_registrasi_puskesmas ?>" class='form-control'></td>
		</tr>
		<tr>
			<td>Status Registrasi Puskesmas</td>
			<td>:</td>
			<td><input type="text" name="status_registrasi_puskesmas" class="form-control" value="<?= $data->status_registrasi_puskesmas ?>"></td>
		</tr>
	</table>
	<h4>Alamat</h4>
	<table class="table">
		<tr>
			<td>Jalan</td>
			<td>:</td>
			<td><input type="text" name="jalan" class="form-control" value="<?= $data->jalan ?>"></td>
		</tr>
		<tr>
			<td>Desa/Kelurahan</td>
			<td>:</td>
			<td><input type="text" name="desa_kelurahan" class="form-control" value="<?= $data->desa_kelurahan ?>"></td>
		</tr>
		<tr>
			<td>Kecamatan</td>
			<td>:</td>
			<td><input type="text" name="kecamatan" class="form-control" value="<?= $data->kecamatan ?>"></td>
		</tr>
		<tr>
			<td>Kabupaten/Kota</td>
			<td>:</td>
			<td><input type="text" name="kabupaten_kota" class="form-control" value="<?= $data->kabupaten_kota ?>"></td>
		</tr>
		<tr>
			<td>Provinsi</td>
			<td>:</td>
			<td><input type="text" name="provinsi" class="form-control" value="<?= $data->provinsi ?>"></td>
		</tr>
		<tr>
			<td>Kode Pos</td>
			<td>:</td>
			<td><input type="text" name="kode_pos" class="form-control" value="<?= $data->kode_pos ?>"></td>
		</tr>
		<tr>
			<td>Telpon</td>
			<td>:</td>
			<td><input type="text" name="telpon" class="form-control" value="<?= $data->telpon ?>"></td>
		</tr>
		<tr>
			<td>Fax</td>
			<td>:</td>
			<td><input type="text" name="fax" class="form-control" value="<?= $data->fax ?>"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text" name="email" class="form-control" value="<?= $data->email ?>"></td>
		</tr>
		<tr>
			<td>Titik Koordinat</td>
			<td>:</td>
			<td><input type="text" name="titik_koordinat" class="form-control" value="<?= $data->titik_koordinat ?>"></td>
		</tr>
		<tr>
			<td>Kategori Puskesmas Berdasarkan Karakteristik Wilayah</td>
			<td>:</td>
			<td><input type="text" name="kategori_wilayah" class="form-control" value="<?= $data->kategori_wilayah ?>"></td>
		</tr>
		<tr>
			<td>Kategori Puskesmas Berdasarkan Kemampuan Penyelenggaraan</td>
			<td>:</td>
			<td><input type="text" name="kategori_kemampuan" class="form-control" value="<?= $data->kategori_kemampuan ?>"></td>
		</tr>
	</table>
	<h4>Wilayah Kerja Puskesmas</h4>
	<table class="table">
		<tr>
			<td>Luas Wilayah</td>
			<td>:</td>
			<td><input type="text" name="luas_wilayah" class="form-control" value="<?= $data->luas_wilayah ?>" placeholder='dalam km2'></td>
		</tr>
		<tr>
			<td>Jumlah Penduduk</td>
			<td>:</td>
			<td><input type="text" name="luas_wilayah" class="form-control" value="<?= $data->luas_wilayah ?>"></td>
		</tr>
	</table>
	<input type="submit" name="" value="Perbarui" class="btn btn-default">
</form>