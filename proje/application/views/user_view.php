<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="x-MacTurkish">
	<title>Loading data remotely in Select2 – CodeIgniter</title>

	<!-- Select2 CSS -->
	<link href="<?= base_url() ?>assets/assets/select2/dist/css/select2.min.css" rel="stylesheet" />

	<!-- jQuery library -->
	<script src="<?= base_url() ?>assets/assets/jquery-3.3.1.min.js"></script>

	<!-- Select2 JS -->
	<script src="<?= base_url() ?>assets/assets/select2/dist/js/select2.min.js"></script>

	<link rel="stylesheet" href="/proje/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="/proje/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->

	<link rel="stylesheet" href="/proje/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="/proje/dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
		 folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="/proje/dist/css/skins/_all-skins.min.css">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

   <!- Excel veri yükleme    -->
	<script src="asset/jquery.min.js"></script>


	<!--  OPTİON MENÜ İÇİN   -->

	<!-- Select2 CSS -->
	<link href="<?= base_url() ?>assets/assets/select2/dist/css/select2.min.css" rel="stylesheet" />

	<!-- jQuery library -->
	<script src="<?= base_url() ?>assets/assets/jquery-3.3.1.min.js"></script>

	<!-- Select2 JS -->
	<script src="<?= base_url() ?>assets/assets/select2/dist/js/select2.min.js"></script>



</head>
<body>


<!-- Select Element -->
<select id='ktur' style='width: 260px; height: 40px'  name="ders">
	<option value='0'>Kitapçık Türü Seçiniz : </option>
</select>


<!-- Script -->
<script type="text/javascript">
	$(document).ready(function(){
		$("#ktur").select2({
			ajax: {
				url: '<?= base_url() ?>index.php/home/ktur',
				type: "post",
				dataType: 'json',
				delay: 250,
				data: function (params) {
					return {
						ktur: params.term // search term
					};
				},
				processResults: function (response) {
					return {
						results: response
					};
				},
				cache: true
			}
		});
	});
</script>

</body>
</html>
