<?php
	$this->load->view('elemen/anti_tabel');
?>
<h1>Detail Data Pegawai</h1>
<table class="table">
	<tr>
		<td>Foto</td>
		<td>:</td>
		<td>
			<span class="thumbnail">
				<img src="<?= base_url() ?>file/foto_pegawai/<?= $data->foto ?>">
			</span>
		</td>
	</tr>
	<tr>
		<td>NIP</td>
		<td>:</td>
		<td><?= $data->nip ?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?php if ($data->gelar_depan){echo $data->gelar_depan.' ';} ?><?= $data->nama ?><?php if ($data->gelar_belakang){echo ', '.$data->gelar_belakang;} ?></td>
	</tr>
	<tr>
		<td>Tempat dan Tanggal Lahir</td>
		<td>:</td>
		<td><?= $data->tempat_lahir ?>, <?= $data->tanggal_lahir ?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?= $data->jenis_kelamin ?></td>
	</tr>
	<tr>
		<td>Golongan Darah</td>
		<td>:</td>
		<td><?= $data->golongan_darah ?></td>
	</tr>
	<tr>
		<td>Agama</td>
		<td>:</td>
		<td><?= $data->agama ?></td>
	</tr>
	<tr>
		<td>Status</td>
		<td>:</td>
		<td><?= $data->status ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?= $data->alamat ?></td>
	</tr>
	<tr>
		<td>Status Pegawai</td>
		<td>:</td>
		<td><?= $data->status_pegawai ?></td>
	</tr>
	<tr>
		<td>Jenis Pegawai</td>
		<td>:</td>
		<td><?= $data->jenis_pegawai ?></td>
	</tr>
	<tr>
		<td>NIK</td>
		<td>:</td>
		<td><?= $data->nik ?></td>
	</tr>
	<tr>
		<td>BPJS</td>
		<td>:</td>
		<td><?= $data->bpjs ?></td>
	</tr>
	<tr>
		<td>NPWP</td>
		<td>:</td>
		<td><?= $data->npwp ?></td>
	</tr>
	<tr>
		<td>Karpeg</td>
		<td>:</td>
		<td><?= $data->karpeg ?></td>
	</tr>
	<tr>
		<td>Taspen</td>
		<td>:</td>
		<td><?= $data->taspen ?></td>
	</tr>
	<tr>
		<td>TMT CPNS</td>
		<td>:</td>
		<td><?= $data->tmt_cpns ?></td>
	</tr>
	<tr>
		<td>TMP PNS</td>
		<td>:</td>
		<td><?= $data->tmp_pns ?></td>
	</tr>
	<tr>
		<td>Jabatan</td>
		<td>:</td>
		<td><?= $data->jabatan ?></td>
	</tr>
	<tr>
		<td>Pangkat</td>
		<td>:</td>
		<td><?= $data->pangkat ?></td>
	</tr>
	<tr>
		<td>Pendidikan</td>
		<td>:</td>
		<td><?= $data->pendidikan ?></td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td>:</td>
		<td><?= $data->jurusan ?></td>
	</tr>
	<tr>
		<td>Tahun Lulus</td>
		<td>:</td>
		<td><?= $data->tahun_lulus ?></td>
	</tr>
</table>
<a href="<?= base_url() ?>index.php/home/edit_data_pegawai/<?= $data->id ?>" class='btn btn-default'>Edit</a>