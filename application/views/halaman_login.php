<br>
<div class="container">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<center>
				<h1>Arsip</h1>
				<br>
			</center>
			<?php
				$flashdata_pesan = $this->session->flashdata('pesan');
				if ($flashdata_pesan){
			?>
			<div class="alert alert-danger"><?= $flashdata_pesan ?></div>
			<?php
				}
			?>
			<form method="post" action="<?= base_url() ?>index.php/login/login_do">
				<div class="row">
					<div class="col-sm-4">Username</div>
					<div class="col-sm-8">
						<input type="text" name="username" class="form-control" autofocus>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-4">Password</div>
					<div class="col-sm-8">
						<input type="password" name="password" class="form-control">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-8">
						<input type="submit" name="" value="Masuk" class="btn btn-default">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>