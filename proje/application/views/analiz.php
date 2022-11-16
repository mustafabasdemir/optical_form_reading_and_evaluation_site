

<!DOCTYPE html>
<html lang="tr">
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 2 | Blank Page</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
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
	<![endif]-->
	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<!--  OPTİON MENÜ İÇİN   -->

	<!-- Select2 CSS -->
	<link href="<?= base_url() ?>assets/assets/select2/dist/css/select2.min.css" rel="stylesheet" />

	<!-- jQuery library -->
	<script src="<?= base_url() ?>assets/assets/jquery-3.3.1.min.js"></script>

	<!-- Select2 JS -->
	<script src="<?= base_url() ?>assets/assets/select2/dist/js/select2.min.js"></script>


	<!-- FONT ÖZELLİKLERİ -->

<style>



	/*  FORM VE BUTON CSS   */

	.form{
		margin-left: 40px;
	}

	.btn
	{
		margin-top: 50px;
	}

	.tablo_alani{
		margin-top: 50px;
		font-size:14px;
	}
	.sayac
	{
		position:absolute; top:160px;
		z-index: 1;
	}

	/*    :::::::   grafik tusu css             */
	* {box-sizing: border-box; outline: none; font-family: Arial;}
	.btn {
		background-color: #ddd;
		display: inline-block;
		color: #333;
		font: bold 16px Arial;
		text-decoration: none;
	}
	#modal-window {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: 99;
		background-color: rgba(0,0,0,.8);/* shaded background color */
		visibility: hidden;
		display: table;

	}
	#modal-window.active {
		visibility: visible;
	}
	.modal-close {
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		display: block;
		font-size: 40px;
		line-height: 30px;
		color: rgba(255,255,255,.5);
		text-align: right;
		padding: 20px;
		cursor: pointer;
		transition:.2s;
		-webkit-transition:.2s;
		transition-delay:.2s;
		-webkit-transition-delay:.2s;
		transform: translateY(-20px);
		-webkit-transform: translateY(-20px);
	}
	#modal-window.active .modal-close {
		transform: translateY(0px);
		-webkit-transform: translateY(0px);
	}
	.align-content {
		display: table-cell;
		vertical-align: middle;
	}
	#modal-window .content {
		position: relative;
		max-width: 500px; /*modal window max width */
		background-color: #fff;
		margin: 0 auto;
		padding: 10px 30px;
		/* visual effect */
		opacity: 0;
		transition: .2s;
		-webkit-transition: .2s;
		transform: translateY(20px);
		-webkit-transform: translateY(20px);
	}
	#modal-window.active .content {
		opacity: 1;
		transform: translateY(0px);
		-webkit-transform: translateY(0px);
	}

	/*    :::::::  mail gonder  tusu css             */
	* {box-sizing: border-box; outline: none; font-family: Arial;}
	.btnn {
		background-color: #ddd;
		display: inline-block;
		color: #333;
		font: bold 16px Arial;
		text-decoration: none;
	}
	#modal-windoww{
		position: fixed;
		top: 25px;
		left: 0;
		width: 100%;
		height: 100%;
		z-index:99;
		background-color: rgba(0,0,0,.8);/* shaded background color */
		visibility: hidden;
		display: table;

	}
	#modal-windoww.active {
		visibility: visible;
	}
	.modal-closee {
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		display: block;
		font-size: 40px;
		line-height: 30px;
		color: rgba(255,255,255,.5);
		text-align: right;
		padding: 20px;
		cursor: pointer;
		transition:.2s;
		-webkit-transition:.2s;
		transition-delay:.2s;
		-webkit-transition-delay:.2s;
		transform: translateY(-20px);
		-webkit-transform: translateY(-20px);
	}
	#modal-windoww.active .modal-closee {
		transform: translateY(0px);
		-webkit-transform: translateY(0px);
	}
	.align-contentt {
		display: table-cell;
		vertical-align: middle;
	}
	#modal-windoww .contentt {
		position: relative;
		max-width: 500px; /*modal window max width */
		background-color: #fff;
		margin: 0 auto;
		padding: 10px 30px;
		/* visual effect */
		opacity: 0;
		transition: .2s;
		-webkit-transition: .2s;
		transform: translateY(20px);
		-webkit-transform: translateY(20px);
	}
	#modal-windoww.active .contentt {
		opacity: 1;
		transform: translateY(0px);
		-webkit-transform: translateY(0px);
	}

</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

	<header class="main-header" >
		<?php
		include "ortksyf/logoisim.php";
		?>


		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">
			<!-- Sidebar toggle button-->



			<?php
			$fakulte=$this->input->post("fakulte");
			$bolum = $this->input->post("bolum");
			$ders = $this->input->post("ders");
			$kitapcik = $this -> input ->post("kitapcik");
			//print_r($fakulte);

			if($_POST==null)
			{
			}
			else
			{?>
				<p style="color: white;font-size: 15px;text-align: center;font-weight: bold">Bilecik Şeyh Edebali Üniversitesi <?php echo $fakulte." ".$bolum." Bölümü ".$ders." Dersi ".$kitapcik." Kitapçığı " ?> Analizi</p>
			<?php
			}
			?>
			&nbsp;


			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">

					<!--  MESAJ VE BİLDİRİMLER -->
					<?php
					include  "ortksyf/mesajBildirimlerr.php";



					?>
					<!-- User Account: style can be found in dropdown.less -->
					<li class="dropdown user user-menu">

						<?php
						include ('ortksyf/kullaniciismi.php');
						?>

					</li>

				</ul>
			</div>
		</nav>
	</header>


	<!-- Left side column. contains the sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- Sidebar user panel -->
			<?php
			include "ortksyf/kullaniciResim.php";
			?>

			<!-- MENÜ KISMI  -->

			<?php
			include "ortksyf/menu.php";
			?>

		</section>
	</aside>

	<div class="content-wrapper" style="background-color:#ecf0f5 ">
		<!-- tablo arka planı beyaz alan -->
		&nbsp;
		<div  style="background-color: white;width: 95% ; margin: auto;z-index: -1">
		&nbsp;
		<div class="form">
			<form action="<?php echo base_url("home/analizVeriAl") ?>" method="post">  <!-- BAŞLANGIÇ FORM   -->
				<!-- FAKULTE SEÇİMİ   -->
				<select id='fakulte' style='width: 255px; height: 40px'  name="fakulte">
					<option value='0'>Fakülte Seçiniz : </option>
				</select>


				<!-- Script -->
				<script type="text/javascript">
					$(document).ready(function(){
						$("#fakulte").select2({
							ajax: {
								url: '<?= base_url() ?>index.php/home/fakulte',
								type: "post",
								dataType: 'json',
								delay: 250,
								data: function (params) {
									return {
										fakulte: params.term // search term
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


				<!-- BÖLÜM SEÇİMİ   -->

				<select id='bolum' style='width: 255px; height: 40px'  name="bolum">
					<option value='0'>Bölüm  Seçiniz : </option>
				</select>


				<!-- Script -->
				<script type="text/javascript">
					$(document).ready(function(){
						$("#bolum").select2({
							ajax: {
								url: '<?= base_url() ?>index.php/home/bolum',
								type: "post",
								dataType: 'json',
								delay: 250,
								data: function (params) {
									return {
										bolum: params.term // search term
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

				<!-- DERS  SEÇİMİ   -->


				<select id='ders' style='width: 255px; height: 40px'  name="ders">
					<option value='0'>Ders  Seçiniz : </option>
				</select>


				<!-- Script -->
				<script type="text/javascript">
					$(document).ready(function(){
						$("#ders").select2({
							ajax: {
								url: '<?= base_url() ?>index.php/home/ders',
								type: "post",
								dataType: 'json',
								delay: 250,
								data: function (params) {
									return {
										ders: params.term // search term
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



				<!--KİTAPÇIK  SEÇİMİ   -->


				<select id='ktur' style='width: 200px; height: 40px'  name="kitapcik">
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

				<!--
				<button   class="btn"  style="background-color: #0b58a2; color: #fff0ff;height: 40px;width: 150px">Analiz Yap</button>
				-->
				<button  class="btn" id="analizBtn"  style="background-color: #dc3545; color: #fff0ff;height: 40px;width: 150px;" type="submit" value="Analiz">Analiz &nbsp; <i class="fa fa-line-chart" aria-hidden="true" style="color: white"></i></button>
				<!-- verileri Excel ve pdf  dökme -->
				<button type="submit"  class="btn"  style="background-color:#ffc107; margin-left: 10px; color: #fff0ff;height: 40px;width: 190px"><a style="color: white" href="<?php echo base_url("GeneratePdfController") ?>" target="_blank">Verileri PDF'e Dök &nbsp; <i class="fa fa-file-pdf-o" aria-hidden="true" style="color: white; font-size: 17px"></i></a></button>
				<button   class="btn"  style="background-color:#00c0ef; margin-left: 10px; color: #fff0ff;height: 40px;width: 250px"><a style="color: white" href="<?php echo  base_url("Home/action") ?>" target="_blank">Verileri Excel'e Kaydet &nbsp; <i class="fa fa-file-excel-o" aria-hidden="true" style="color: white; font-size: 17px"></i></a></button>
				<!--  GRAFİK BUTONU VE AÇILIR MESAJ   -->
				<button   class="btn" id="pop-up"  style="background-color:#00a65a; margin-left: 10px; color: #fff0ff;height: 40px;width: 180px"><a style="color: white" href="#" >Grafik Analizi&nbsp;<i class="fa fa-pie-chart" aria-hidden="true" style="color: white; font-size: 17px"></i></a></button>

				<!--  GRAFİK BUTONU AÇILIR MESAJ   -->

				<div id="modal-window">
					<span class="modal-close">&#10006;</span>
					<div class="align-content">
						<div class="content">

							<?php
							include "grafik.php";
							?>

						</div>
					</div>
				</div>

				<!-- ==== MAİL BUTONU ====-->
				<button   class="btnn btn" id="pop-upp"  style="background-color:#32374b; margin-left: 10px; color: #fff0ff;height: 40px;width: 190px"><a style="color: white" href="#" >Verileri Mail Gönder&nbsp;<i class="fa fa-envelope" aria-hidden="true" style="color: yellow; font-size: 17px"></i></a></button>
			</form>


				<!--  Mail butonu açılır mesaj  -->

				<div id="modal-windoww">
					<span class="modal-closee">&#10006;</span>
					<div class="align-contentt">
						<div class="contentt">

							<!-- açılır menu -->

							<?php
							include "mailSayfa.php";
							?>


							<!-- açılır mesaj sonu -- Script geçiş -->
							<script type="text/javascript">
								$(document).ready(function(){
									$("#mailAtma").select2({
										ajax: {
											url: '<?= base_url() ?>index.php/home/mailAtma',
											type: "post",
											dataType: 'json',
											delay: 250,
											data: function (params) {
												return {
													fakulte: params.term // search term
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


						</div>
					</div>
				</div>
				<!-- ========== AÇILIR MESAJ SON  ========== -->


			<script>

				// Garfik Açılır Mesaj js
				$(document).ready(function() {
					$('#pop-up').click(function() {
						$('#modal-window').addClass('active');
					});
					$('.modal-close').click(function() {
						$(this).parent().removeClass('active');
					});
				});

				// Garfik Açılır Mesaj js
				$(document).ready(function() {
					$('#pop-upp').click(function() {
						$('#modal-windoww').addClass('active');
					});
					$('.modal-closee').click(function() {
						$(this).parent().removeClass('active');
					});
				});
			</script>

		</div>
		</section>


			<div  class="tablo_alani" id="tablo_alani_id">

				<?php
				include "analizVeri.php";
				?>

			</div>

			<div  class="tablo_alani sayac" id="tablo_alani_id">
				<?php
				include "analizSayac.php";
				?>


			</div>

		</div>
		&nbsp;

	</div>

	<footer class="main-footer">

		<?php

		include "ortksyf/altbilgi.php";

		?>

	</footer>


	<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<!-- Bootstrap 3.3.7 -->
<script src="/proje/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/proje/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/proje/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/proje/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/proje/dist/js/demo.js"></script>
<script>
	$(document).ready(function () {
		$('.sidebar-menu').tree()
	})
</script>
</body>
<?php
ob_end_flush();
?>
</html>
