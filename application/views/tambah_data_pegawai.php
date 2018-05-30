<h1>Tambah Data Pegawai</h1>
<form action="<?= base_url() ?>index.php/home/tambah_data_pegawai_do" method='post' enctype='multipart/form-data'>
	<div class="row">
		<div class="col-sm-4">NIP</div>
		<div class="col-sm-8">
			<input type="text" name="nip" class="form-control" autofocus>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Foto</div>
		<div class="col-sm-8">
			<input type="file" name="foto">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Nama</div>
		<div class="col-sm-8">
			<input type="text" name="nama" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Gelar Depan</div>
		<div class="col-sm-8">
			<input type="text" name="gelar_depan" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Gelar Belakang</div>
		<div class="col-sm-8">
			<input type="text" name="gelar_belakang" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Tempat Lahir</div>
		<div class="col-sm-8">
			<input type="text" name="tempat_lahir" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Tanggal Lahir</div>
		<div class="col-sm-8">
			<input type="text" name="tanggal_lahir" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Jenis Kelamin</div>
		<div class="col-sm-8">
			<select name="jenis_kelamin" class="form-control">
				<option value="laki-laki">Laki-laki</option>
				<option value="perempuan">Perempuan</option>
			</select>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Golongan Darah</div>
		<div class="col-sm-8">
			<select name="golongan_darah" class="form-control">
				<option value="a">A</option>
				<option value="b">B</option>
				<option value="ab">AB</option>
				<option value="o">O</option>
			</select>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Agama</div>
		<div class="col-sm-8">
			<input type="text" name="agama" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Status</div>
		<div class="col-sm-8">
			<select name="status" class="form-control">
				<option value="sudah menikah">Sudah Menikah</option>
				<option value="belum menikah">Belum Menikah</option>
			</select>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Alamat</div>
		<div class="col-sm-8">
			<textarea name="alamat" class="form-control" rows="5"></textarea>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Status Pegawai</div>
		<div class="col-sm-8">
			<input type="text" name="status_pegawai" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Jenis Pegawai</div>
		<div class="col-sm-8">
			<input type="text" name="jenis_pegawai" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">NIK</div>
		<div class="col-sm-8">
			<input type="text" name="nik" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">BPJS</div>
		<div class="col-sm-8">
			<input type="text" name="bpjs" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">NPWP</div>
		<div class="col-sm-8">
			<input type="text" name="npwp" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Karpeg</div>
		<div class="col-sm-8">
			<input type="text" name="karpeg" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Taspen</div>
		<div class="col-sm-8">
			<input type="text" name="taspen" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">TMT CPNS</div>
		<div class="col-sm-8">
			<input type="text" name="tmt_cpns" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">TMP PNS</div>
		<div class="col-sm-8">
			<input type="text" name="tmp_pns" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Jabatan</div>
		<div class="col-sm-8">
			<input type="text" name="jabatan" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Pangkat</div>
		<div class="col-sm-8">
			<input type="text" name="pangkat" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Pendidikan</div>
		<div class="col-sm-8">
			<input type="text" name="pendidikan" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Jurusan</div>
		<div class="col-sm-8">
			<input type="text" name="jurusan" class="form-control">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-4">Tahun Lulus</div>
		<div class="col-sm-8">
			<input type="text" name="tahun_lulus" class="form-control">
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