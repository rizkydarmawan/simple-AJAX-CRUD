<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> AJAX Simple</title>
	<style type="text/css">
		*{
			padding: 10px;
		}
		hr{
			background-color: black;
		}
		.wrapper{
			border: 1px solid blue;
			
		}
	</style>
</head>
<body>
	<h1> Ini Judul </h1>
	<hr>
	<button type="button" id="proses"> Tambah Data </button>
	<button type="button" id="refresh"> Refresh </button>
	<div id="wrapp">
	</div>
	<div class="wrapper" id="wrapp_siswa">
		<?php
			include 'ls_siswa.php';
		?>
	</div>
</body>
<script type="text/javascript" src="../asets/jquery-3.1.1.js"></script>
<script type="text/javascript" src="../asets/plugin-ajax.js"></script>
</html>