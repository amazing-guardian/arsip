<?php
	$this->load->view('elemen/anti_tabel');
?>
<h1>Profil Puskesmas Sempaja</h1>
<h4>Data Dasar</h4>
<table class="table">
	<tr>
		<td>Nama Puskesmas</td>
		<td>:</td>
		<td><?= $data->nama_puskesmas ?></td>
	</tr>
	<tr>
		<td>Kode Registrasi Puskesmas</td>
		<td>:</td>
		<td><?= $data->kode_registrasi_puskesmas ?></td>
	</tr>
	<tr>
		<td>Status Registrasi Puskesmas</td>
		<td>:</td>
		<td><?= $data->status_registrasi_puskesmas ?></td>
	</tr>
</table>
<h4>Alamat</h4>
<table class="table">
	<tr>
		<td>Jalan</td>
		<td>:</td>
		<td><?= $data->jalan ?></td>
	</tr>
	<tr>
		<td>Desa/Kelurahan</td>
		<td>:</td>
		<td><?= $data->desa_kelurahan ?></td>
	</tr>
	<tr>
		<td>Kecamatan</td>
		<td>:</td>
		<td><?= $data->kecamatan ?></td>
	</tr>
	<tr>
		<td>Kabupaten/Kota</td>
		<td>:</td>
		<td><?= $data->kabupaten_kota ?></td>
	</tr>
	<tr>
		<td>Provinsi</td>
		<td>:</td>
		<td><?= $data->provinsi ?></td>
	</tr>
	<tr>
		<td>Kode Pos</td>
		<td>:</td>
		<td><?= $data->kode_pos ?></td>
	</tr>
	<tr>
		<td>Telpon</td>
		<td>:</td>
		<td><?= $data->telpon ?></td>
	</tr>
	<tr>
		<td>Fax</td>
		<td>:</td>
		<td><?= $data->fax ?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td>:</td>
		<td><?= $data->email ?></td>
	</tr>
	<tr>
		<td>Titik Koordinat</td>
		<td>:</td>
		<td><?= $data->titik_koordinat ?></td>
	</tr>
	<tr>
		<td>Kategori Puskesmas Berdasarkan Karakteristik Wilayah</td>
		<td>:</td>
		<td><?= $data->kategori_wilayah ?></td>
	</tr>
	<tr>
		<td>Kategori Puskesmas Berdasarkan Kemampuan Penyelenggaraan</td>
		<td>:</td>
		<td><?= $data->kategori_kemampuan ?></td>
	</tr>
</table>
<h4>Wilayah Kerja Puskesmas</h4>
<table class="table">
	<tr>
		<td>Luas Wilayah</td>
		<td>:</td>
		<td><?= $data->luas_wilayah ?> km<sup>2</sup></td>
	</tr>
	<tr>
		<td>Jumlah Penduduk</td>
		<td>:</td>
		<td><?= $data->luas_wilayah ?> jiwa</td>
	</tr>
</table>
<a href="<?= base_url() ?>index.php/home/edit_profil_puskesmas" class='btn btn-default'>Edit</a>