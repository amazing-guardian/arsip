<!DOCTYPE html>
<html>
<head>
	<title><?= $judul ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>bin/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<?php
		$this->load->view($isi, $parameter);
	?>
</body>
</html>