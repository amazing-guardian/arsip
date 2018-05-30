<?php
	$this->load->view('elemen/anti_tabel');
?>
<h1>Detail Data Pegawai</h1>
<form method="post" action="<?= base_url() ?>index.php/home/edit_data_pegawai_do/<?= $data->id ?>">
	<table class="table">
		<tr>
			<td>NIP</td>
			<td>:</td>
			<td><input type="text" name="nip" class="form-control" autofocus value="<?= $data->nip ?>"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" class="form-control" value="<?= $data->nama ?>"></td>
		</tr>
		<tr>
			<td>Gelar Depan</td>
			<td>:</td>
			<td><input type="text" name="gelar_depan" class="form-control" value="<?= $data->gelar_depan ?>"></td>
		</tr>
		<tr>
			<td>Gelar Belakang</td>
			<td>:</td>
			<td><input type="text" name="gelar_belakang" class="form-control" value="<?= $data->gelar_belakang ?>"></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td>:</td>
			<td><input type="text" name="tempat_lahir" class="form-control" value="<?= $data->tempat_lahir ?>"></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input type="text" name="tanggal_lahir" class="form-control" value="<?= $data->tanggal_lahir ?>"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<select name="jenis_kelamin" class="form-control">
					<option value="laki-laki" <?php if ($data->jenis_kelamin == 'laki-laki') echo 'selected'; ?>>Laki-laki</option>
					<option value="perempuan" <?php if ($data->jenis_kelamin == 'perempuan') echo 'selected'; ?>>Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Golongan Darah</td>
			<td>:</td>
			<td>
				<select name="golongan_darah" class="form-control">
					<option value="a" <?php if ($data->golongan_darah == 'a') echo 'selected'; ?>>A</option>
					<option value="b" <?php if ($data->golongan_darah == 'b') echo 'selected'; ?>>B</option>
					<option value="ab" <?php if ($data->golongan_darah == 'ab') echo 'selected'; ?>>AB</option>
					<option value="o" <?php if ($data->golongan_darah == 'o') echo 'selected'; ?>>O</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td><input type="text" name="agama" class="form-control" value="<?= $data->agama ?>"></td>
		</tr>
		<tr>
			<td>Status</td>
			<td>:</td>
			<td>
				<select name="status" class="form-control">
					<option value="belum menikah" <?php if ($data->status == 'belum menikah') echo 'selected'; ?>>Belum Menikah</option>
					<option value="sudah menikah" <?php if ($data->status == 'sudah menikah') echo 'selected'; ?>>Sudah Menikah</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>
				<textarea name="alamat" class="form-control" rows="5"><?= $data->alamat ?></textarea>
			</td>
		</tr>
		<tr>
			<td>Status Pegawai</td>
			<td>:</td>
			<td><input type="text" name="status_pegawai" class="form-control" value="<?= $data->status_pegawai ?>"></td>
		</tr>
		<tr>
			<td>Jenis Pegawai</td>
			<td>:</td>
			<td><input type="text" name="jenis_pegawai" class="form-control" value="<?= $data->jenis_pegawai ?>"></td>
		</tr>
		<tr>
			<td>NIK</td>
			<td>:</td>
			<td><input type="text" name="nik" class="form-control" value="<?= $data->nik ?>"></td>
		</tr>
		<tr>
			<td>BPJS</td>
			<td>:</td>
			<td><input type="text" name="bpjs" class="form-control" value="<?= $data->bpjs ?>"></td>
		</tr>
		<tr>
			<td>NPWP</td>
			<td>:</td>
			<td><input type="text" name="npwp" class="form-control" value="<?= $data->npwp ?>"></td>
		</tr>
		<tr>
			<td>Karpeg</td>
			<td>:</td>
			<td><input type="text" name="karpeg" class="form-control" value="<?= $data->karpeg ?>"></td>
		</tr>
		<tr>
			<td>Taspen</td>
			<td>:</td>
			<td><input type="text" name="taspen" class="form-control" value="<?= $data->taspen ?>"></td>
		</tr>
		<tr>
			<td>TMT CPNS</td>
			<td>:</td>
			<td><input type="text" name="tmt_cpns" class="form-control" value="<?= $data->tmt_cpns ?>"></td>
		</tr>
		<tr>
			<td>TMP PNS</td>
			<td>:</td>
			<td><input type="text" name="tmp_pns" class="form-control" value="<?= $data->tmp_pns ?>"></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>:</td>
			<td><input type="text" name="jabatan" class="form-control" value="<?= $data->jabatan ?>"></td>
		</tr>
		<tr>
			<td>Pangkat</td>
			<td>:</td>
			<td><input type="text" name="pangkat" class="form-control" value="<?= $data->pangkat ?>"></td>
		</tr>
		<tr>
			<td>Pendidikan</td>
			<td>:</td>
			<td><input type="text" name="pendidikan" class="form-control" value="<?= $data->pendidikan ?>"></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><input type="text" name="jurusan" class="form-control" value="<?= $data->jurusan ?>"></td>
		</tr>
		<tr>
			<td>Tahun Lulus</td>
			<td>:</td>
			<td><input type="text" name="tahun_lulus" class="form-control" value="<?= $data->tahun_lulus ?>"></td>
		</tr>
	</table>
	<input type="submit" name="" value="Selesai" class="btn btn-default">
</form>