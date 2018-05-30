<h1>Surat Masuk</h1>
<div class="table-responsive">
	<table class="table">
		<tr>
			<th><a href="<?= base_url() ?>index.php/home/surat_masuk/keterangan">Keterangan</a></th>
			<th><a href="<?= base_url() ?>index.php/home/surat_masuk/instansi">Instansi</a></th>
			<th>Action</th>
		</tr>
		<?php foreach ($data as $d){ ?>
			<tr>
				<td><a href="<?= base_url() ?>file/surat_masuk/<?= $d->file ?>"><?= $d->keterangan ?></a></td>
				<td><?= $d->instansi ?></td>
				<td>
					<a href="<?= base_url() ?>index.php/home/edit_surat_masuk/<?= $d->id_surat_masuk ?>">Edit</a>
					&bull;
					<a href="<?= base_url() ?>index.php/home/hapus_surat_masuk/<?= $d->id_surat_masuk ?>">Hapus</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</div>
<p>
	<a href="<?= base_url() ?>index.php/home/tambah_surat_masuk" class="btn btn-default">Tambah Baru</a>
</p>