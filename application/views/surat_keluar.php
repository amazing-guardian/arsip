<h1>Surat Keluar</h1>
<div class="table-responsive">
	<table class="table">
		<tr>
			<th><a href="<?= base_url() ?>index.php/home/surat_keluar/keterangan">Keterangan</a></th>
			<th><a href="<?= base_url() ?>index.php/home/surat_keluar/instansi">Instansi</a></th>
			<th>Action</th>
		</tr>
		<?php foreach ($data as $d){ ?>
			<tr>
				<td><a href="<?= base_url() ?>file/surat_keluar/<?= $d->file ?>"><?= $d->keterangan ?></a></td>
				<td><?= $d->instansi ?></td>
				<td>
					<a href="<?= base_url() ?>index.php/home/edit_surat_keluar/<?= $d->id ?>">Edit</a>
					&bull;
					<a href="<?= base_url() ?>index.php/home/hapus_surat_keluar/<?= $d->id ?>">Hapus</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</div>
<p>
	<a href="<?= base_url() ?>index.php/home/tambah_surat_keluar" class="btn btn-default">Tambah Baru</a>
</p>