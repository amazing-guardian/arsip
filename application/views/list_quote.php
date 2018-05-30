<h1>List Quote</h1>
<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Quote</th>
			<th>Action</th>
		</tr>
		<?php foreach ($quote as $d){ ?>
			<tr>
				<td><?= $d->quote ?></td>
				<td>
					<a href="<?= base_url() ?>index.php/home/edit_quote/<?= $d->id_quote ?>">Edit</a>
					&bull;
					<a href="<?= base_url() ?>index.php/home/hapus_quote/<?= $d->id_quote ?>">Hapus</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</div>
<p>
	<a href="<?= base_url() ?>index.php/home/tambah_quote" class="btn btn-default">Tambah Baru</a>
</p>