<h1>Data Pegawai</h1>
<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Foto</th>
			<th><a href="<?= base_url() ?>index.php/home/data_pegawai/nip">NIP</a></th>
			<th><a href="<?= base_url() ?>index.php/home/data_pegawai/nama">Nama</a></th>
			<th><a href="<?= base_url() ?>index.php/home/data_pegawai/jabatan">Jabatan</a></th>
			<th>Action</th>
		</tr>
		<?php foreach ($data as $d){ ?>
			<tr>
				<td>
					<span class="thumbnail">
						<img src="<?= base_url() ?>file/foto_pegawai/<?= $d->foto ?>">
					</span>
				</td>
				<td><?= $d->nip ?></td>
				<td><?php if ($d->gelar_depan){echo $d->gelar_depan.' ';} ?><?= $d->nama ?><?php if ($d->gelar_belakang){echo ', '.$d->gelar_belakang;} ?></td>
				<td><?= $d->jabatan ?></td>
				<td>
					<a href="<?= base_url() ?>index.php/home/detail_data_pegawai/<?= $d->id ?>">Detail</a>
					&bull;
					<a href="<?= base_url() ?>index.php/home/edit_data_pegawai/<?= $d->id ?>">Edit</a>
					&bull;
					<a href="<?= base_url() ?>index.php/home/hapus_data_pegawai/<?= $d->id ?>">Hapus</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</div>
<p>
	<a href="<?= base_url() ?>index.php/home/tambah_data_pegawai" class="btn btn-default">Tambah Baru</a>
</p>