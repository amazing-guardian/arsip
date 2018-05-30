<!DOCTYPE html>
<html>
<head>
	<title><?= $judul ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>bin/bootstrap/css/bootstrap.min.css">
</head>
<body>

	<!-- bagian navbar -->

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <span class="navbar-brand">Arsip</span>
	    </div>
	  </div><!-- /.container-fluid -->
	</nav>

	<!-- bagian isi -->

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-9 sticky isi">
				<div class="theiaStickySidebar">
					<?php
						$this->load->view($isi, $parameter);
					?>
				</div>
			</div>
			<div class="col-sm-3 sticky menu">
				<div class="theiaStickySidebar">
					<div class="list-group">
						<a href="#!" class="list-group-item active">Menu</a>
						<a href="<?= base_url() ?>" class="list-group-item">Beranda</a>
						<a href="<?= base_url() ?>index.php/home/surat_masuk" class="list-group-item">Surat Masuk</a>
						<a href="<?= base_url() ?>index.php/home/surat_keluar" class="list-group-item">Surat Keluar</a>
						<a href="<?= base_url() ?>index.php/home/data_pegawai" class="list-group-item">Data Pegawai</a>
						<a href="<?= base_url() ?>index.php/home/profil_puskesmas" class="list-group-item">Profil Puskesmas</a>
						<a href="<?= base_url() ?>index.php/home/surat_keputusan" class="list-group-item">Surat Keputusan</a>
						<a href="<?= base_url() ?>index.php/home/mou" class="list-group-item">MoU</a>
					</div>
					<div class="list-group">
						<a href="#!" class="list-group-item active">Quote</a>
						<a href="<?= base_url() ?>index.php/home/list_quote" class="list-group-item">Edit</a>
					</div>
					<div class="list-group">
						<a href="#!" class="list-group-item active">Akun</a>
						<a href="<?= base_url() ?>index.php/home/ganti_password" class="list-group-item">Ganti Password</a>
						<a href="<?= base_url() ?>index.php/home/logout" class="list-group-item">Logout</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- skrip -->

	<script type="text/javascript" src="<?= base_url() ?>bin/jquery.min.js?<?= rand() ?>"></script>
	<script type="text/javascript" src="<?= base_url() ?>bin/ResizeSensor.min.js?<?= rand() ?>"></script>
	<script type="text/javascript" src="<?= base_url() ?>bin/theia-sticky-sidebar.min.js?<?= rand() ?>"></script>

	<!-- sticky sidebar -->

	<script type="text/javascript">
		$(document).ready(function(){
			$('.sticky').theiaStickySidebar({
				additionalMarginTop: 20,
				additionalMarginBottom: 20
			});
		});
	</script>

	<br>
</body>
</html>