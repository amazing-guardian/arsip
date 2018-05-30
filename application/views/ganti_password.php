<h1>Ubah Password</h1>
<?php
	$pesan = $this->session->flashdata('pesan');
	if ($pesan) {
?>
<div class="alert alert-danger"><?= $pesan ?></div>
<?php
	}
?>
<form method="post" action="<?= base_url() ?>index.php/home/ganti_password_do">
	<div class="form-inline">
		<input type="text" name="password" class="form-control" value="<?= $data->password ?>" autofocus>
		<input type="submit" name="" class="btn btn-danger" value="Ubah">
	</div>
</form>