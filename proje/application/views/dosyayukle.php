
<?php
//session_start();
//include ('baglanti/mysqlbaglanti.php');
//ob_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
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

   <!- Excel veri yükleme    -->
	<script src="asset/jquery.min.js"></script>


	<!--  OPTİON MENÜ İÇİN   -->

	<!-- Select2 CSS -->
	<link href="<?= base_url() ?>assets/assets/select2/dist/css/select2.min.css" rel="stylesheet" />

	<!-- jQuery library -->
	<script src="<?= base_url() ?>assets/assets/jquery-3.3.1.min.js"></script>

	<!-- Select2 JS -->
	<script src="<?= base_url() ?>assets/assets/select2/dist/js/select2.min.js"></script>





	<!--      CSS VE JAVASCRİPT DOSYALARI  -->

	<style type="text/css">

		* {box-sizing: border-box; outline: none;}

		.bosluk{
			margin-top: 100px;
		}

		.az_bosluk{
			margin-top: 50px;
		}

		.dahaaz_bosluk{
			margin-top: 10px;
		}

		.btn {
			background-color:#dc3545;
			display: inline-block;
			padding: 60px 120px;
			margin-bottom: 15px;
			margin-left: 25px;
			font: bold 16px Arial;
			text-decoration: none;
			border-radius: 55px;
		}

		a{color: white}

		a:hover{color: white}

		.btn:hover
		{
			font-size: 25px;
			padding: 60px 63px;
			color: white;
		}

		.btnn {
			background-color: #ffc107;
			display: inline-block;
			padding: 60px 120px;
			margin-left: 5px;
			font: bold 16px Arial;
			text-decoration: none;
			border-radius: 55px;
		}

		.btnn:hover
		{
			font-size: 25px;
			padding: 60px 66px;
			color: white;
		}

		.btnnn {
			background-color:#00c0ef;
			display: inline-block;
			padding: 60px 390px;
			color: #fff0ff;
			margin-top: 30px;
			margin-left: 25px;
			font: bold 16px Arial;
			text-decoration: none;
			border-radius: 55px;
		}

		.btnnn:hover
		{
			font-size: 25px;
			padding: 60px 335.5px;
			color: white;
		}


		/* CEVAP ANAHTARI İÇİN AÖILIR MESAJ CSS     */


		#cevap_anahtari{
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0,0,0,.8);/* shaded background color */
			visibility: hidden;
			display: table;

		}



		#cevap_anahtari.active {
			visibility: visible;
		}

		#cevap_anahtari.active {
			visibility: visible;
		}
		.cevap_anahtari_close {
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

		#cevap_anahtari.active .cevap_anahtari_close {
			transform: translateY(0px);
			-webkit-transform: translateY(0px);
		}
		.cevap_anahtari_align-content {
			display: table-cell;
			vertical-align: middle;
		}
		#cevap_anahtari .cevap_anahtari_content{
			position: relative;
			max-width: 500px; /*modal window max width */
			background-color: #fff;
			margin: 0 auto;
			padding: 20px 20px;
			/* visual effect */
			opacity: 0;
			transition: .2s;
			-webkit-transition: .2s;
			transform: translateY(20px);
			-webkit-transform: translateY(20px);
		}
		#cevap_anahtari.active .cevap_anahtari_content {
			opacity: 1;
			transform: translateY(0px);
			-webkit-transform: translateY(0px);
		}


		/* FAKULTE İÇİN AÖILIR MESAJ CSS */


		#fakulte{
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0,0,0,.8);/* shaded background color */
			visibility: hidden;
			display: table;

		}

		#fakulte.active {
			visibility: visible;
		}

		#fakulte.active {
			visibility: visible;
		}
		.fakulte-close {
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

		#fakulte.active .fakulte-close {
			transform: translateY(0px);
			-webkit-transform: translateY(0px);
		}
		.fakulte_align-content {
			display: table-cell;
			vertical-align: middle;
		}
		#fakulte .fakulte_content{
			position: relative;
			max-width: 500px; /*modal window max width */
			background-color: #fff;
			margin: 0 auto;
			padding: 20px 20px;
			/* visual effect */
			opacity: 0;
			transition: .2s;
			-webkit-transition: .2s;
			transform: translateY(20px);
			-webkit-transform: translateY(20px);
		}
		#fakulte.active .fakulte_content {
			opacity: 1;
			transform: translateY(0px);
			-webkit-transform: translateY(0px);
		}



		/* SINAV CEVEPLARI İÇİN AÖILIR MESAJ CSS */


		#sinav_cevaplari{
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0,0,0,.8);/* shaded background color */
			visibility: hidden;
			display: table;

		}



		#sinav_cevaplari.active {
			visibility: visible;
		}

		#sinav_cevaplari.active {
			visibility: visible;
		}
		.sinav_cevaplari_close {
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

		#sinav_cevaplari.active .sinav_cevaplari_close {
			transform: translateY(0px);
			-webkit-transform: translateY(0px);
		}
		.sinav_cevaplari_align-content {
			display: table-cell;
			vertical-align: middle;
		}
		#sinav_cevaplari .sinav_cevaplari_content{
			position: relative;
			max-width: 500px; /*modal window max width */
			background-color: #fff;
			margin: 0 auto;
			padding: 20px 20px;
			/* visual effect */
			opacity: 50;
			transition: .2s;
			-webkit-transition: .2s;
			transform: translateY(20px);
			-webkit-transform: translateY(20px);
		}
		#sinav_cevaplari.active .sinav_cevaplari_content {
			opacity: 1;
			transform: translateY(0px);
			-webkit-transform: translateY(0px);
		}



		/* ...........:::::::::::::::::::::      DOSYA SECME CSS      ::::::::::::................... */


		.file-placeholder {
			position:relative;
			cursor: pointer;

		/*
		you can use the label to trigger the event    */
		label {
			display:block;
			position: absolute;
			z-index: 2;
			top: 0;
			left: 0;
			width: 100%;
			max-width: 400px;
			height: 40px;


		:before {
			content:'File';
			position:absolute;
			top:-15px;
			left:10px;
			background-color: red;
			padding:2px 5px;
			color:#FFF;

		}
		}
		/*
		or the input file. here I use both but you don't have to   */

		input[type=file] {
			position: absolute;
			z-index: 3;
			top: 0;
			left: 0;
			width: 100%;
			max-width: 400px;
			height: 40px;
			opacity: 0;

		}
		.file-browse {
			width: 100%;
			height: 40px;
			border: 1px solid #ccc;

		.file-browse-txt {
			display:block;
			float:left;
			line-height:40px;
			width:80%;
			padding-left:10px;
			overflow:hidden;
			text-overflow:ellipsis;
			white-space: nowrap;
		.hasValue{
			background-color:#ededed;
		}
		}
		.browse {
			display:block;
			float:left;
			width:20%;
			background-color: #42b5e8;
			color: #FFF;
			height: 40px;
			line-height: 40px;
			padding: 0 10px;
		}

		}

		}

		/* BİLDİRİMLER İÇİN CSS   */


		.box {
			width: 450px;
			height: 100px;
			border: 2px solid #000;
			text-align: left;
			padding: 10px;
			font-weight: bold;
			border-radius: 10px;
		}

		.boxx {
			width: 450px;
			height: 160px;
			border: 2px solid #000;
			text-align: left;
			margin-bottom: 10px;
			padding: 10px;
			font-weight: bold;
			border-radius: 10px;
		}



		.error {
			background-color: #ddd;
			border-color: #aaa;

		}




	</style>

	<script>

		// fakulte buton

		$(document).ready(function() {
			$('#pop-up').click(function() {
				$('#fakulte').addClass('active');
			});
			$('.fakulte-close').click(function() {
				$(this).parent().removeClass('active');
			});
		});

		//cevap anahtarı  buton

		$(document).ready(function() {
			$('#pop-upp').click(function() {
				$('#cevap_anahtari').addClass('active');
			});
			$('.cevap_anahtari_close').click(function() {
				$(this).parent().removeClass('active');
			});
		});

		//sınav cevapları  buton

		$(document).ready(function() {
			$('#pop-uppp').click(function() {
				$('#sinav_cevaplari').addClass('active');
			});
			$('.sinav_cevaplari_close').click(function() {
				$(this).parent().removeClass('active');
			});
		});

		/*    ...........::::::::::::::::::::   DOSYA SECME  :::::::::::::::::.............. */

		var pmfFileupload = {
			/*
			   Pretty mother fuckin File Upload input
			*/
			init: function() {
				this.cacheDom();
				this.events();
			},
			cacheDom: function() {
				this.$filePlaceholder = $('.file-placeholder');
				this.$filelabel = this.$filePlaceholder.find('label');
				this.$fileUpload = this.$filePlaceholder.find('.fileUpload');
				this.$fileBrowseTxt = this.$filePlaceholder.find('.file-browse-txt');
			},
			events: function() {
				this.$fileUpload.on('change', this.getFileName.bind(this));
			},
			getFileName: function() {
				this.newVal = this.$fileUpload.val();
				if (this.newVal !== "") {
					this.$fileBrowseTxt.text(this.newVal).addClass('hasValue');
				} else {
					this.$fileBrowseTxt.text("Select a file...");
				}
			}
		};

		$(document).ready(function() {
			pmfFileupload.init();
		});




	</script>

</head>
<body  class="hold-transition skin-blue sidebar-mini">

<?php
/*
echo CI_VERSION;
*/

?>


<!-- Site wrapper -->
<div class="wrapper">

	<header class="main-header">

		<!-- Logo -->
		<?php
		include "ortksyf/logoisim.php";
		?>


		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top" style="background-color: ">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<p style="text-align: center; font-size: large;color: white">Bu alanda Sadece Excel Dosyası Verileri Yüklenebilir. (.XLS / .XLSX)</p>


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



	<!-- =============================================== -->

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

	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<!-- Main content -->
		<section class="content">
			<div class="container">
				<div class="file-placeholder">


					<div class="bosluk"></div>

					<!--  fakulte  yukleme butonları   -->

					<div class="btn">
						<a href="#"  id="pop-up"<b>Fakülte / Bölümleri Yükle &nbsp;</b>
						<i class="fa fa-graduation-cap" aria-hidden="true" style="font-size:55px;color: white"></i>
						</a>
					</div>

					<!-- ...::::::::::  FAKULTE İÇİN  AÇILACAK MESAJ :::::::::::............  -->

					<div id="fakulte">
						<span class="fakulte-close">&#10006;</span>
						<div class="fakulte_align-content">
							<div class="fakulte_content">
								<!-- açılır menu mesaj -->

									<!-- UYARI MESJI-->
									<div class="error box">
										<p class="fa fa-info-circle" style="margin-left: 150px"> Bilgilendirme </p>
										<p class="fa fa-arrow-right">Fakülte ve bölümlerin hatasız yüklenmesi için Excel sırası <br> fakulte - bolum - bolum_tur şeklinde olmalıdır.</p>
									</div>


									<form method="post" id="fakulteyukle" enctype="multipart/form-data">
										<h4>Yükleme işlemi için <b> Excel </b>  Belgesini Seçiniz </b></h4>
											<input type="file" name="file" id="file" required accept=".xls, .xlsx" /></p>
										<br />
										<input style="background-color: #a32d00; color: white; font-size:medium" type="submit" name="import" value="Verileri Yükle" />
									</form>
							</div>
						</div>
					</div>


					<!--  cevap anahtarı   yukleme butonu   -->
					<div class="btnn">
						<a href="#"  id="pop-upp"<b>Cevap Anahtarını Yükle &nbsp;</b>
						<i class="fa fa-cloud-upload" aria-hidden="true" style="font-size:55px;color: white"></i>
						</a>
					</div>

					<!-- ...:::::::::: CEVAP ANAHTARI İÇİN AÇILACAK MESAJ :::::::::::............  -->

					<div id="cevap_anahtari">
						<span class="cevap_anahtari_close">&#10006;</span>
						<div class="cevap_anahtari_align-content">
							<div class="cevap_anahtari_content">

								<!-- UYARI MESJI-->
								<div class="error boxx">
									<p class="fa fa-info-circle" style="margin-left: 150px"> Bilgilendirme </p>
									<p>Cevap anahtarının hatasız yüklenmesi için;</p>
									<p  class="fa fa-arrow-right">Ders ve kitapçık türü seçilmelidir.</p><br>
									<p  class="fa fa-arrow-right">Soru sayısı 20'den fazla olmamalıdır.</p>
									<p  class="fa fa-arrow-right">Verilerin Excel sırası "tc-s1-s2-s3-s4-s5-s6-s7-s8-s9-s10-s11-s12-s13-s14-s15-s16-s17-s18-s19-s20" şeklinde olmalıdır.</p>
								</div>


								<form action="<?php echo base_url("cevapanahtariyukle/import") ?>"  method="post" id="cevapAnahtariyukle" enctype="multipart/form-data">



									<!-- bosluk  -->
									<div class="dahaaz_bosluk"></div>
									<!-- bosluk  -->

									<!-- ders --->
									<label>UZEM Dersini Seçiniz :</label>
									<select id='uzemders' style='width: 260px; height: 40px'  name="uzemders">
										<option value='0'></option>
									</select>


									<!-- Script -->
									<script type="text/javascript">
										$(document).ready(function(){
											$("#uzemders").select2({
												ajax: {
													url: '<?= base_url() ?>index.php/home/uzemders',
													type: "post",
													dataType: 'json',
													delay: 250,
													data: function (params) {
														return {
															uzemders: params.term // search term
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


									<!-- bosluk  -->
									<div class="dahaaz_bosluk"></div>
									<!-- bosluk  -->


									<!-- kitapcik türü --->
									<label>Kitapçık Türü  Seçiniz :</label>
									<select id='kturu' style='width: 260px; height: 40px'  name="kturu">
										<option value='0'></option>
									</select>
									<!-- Script -->
									<script type="text/javascript">
										$(document).ready(function(){
											$("#kturu").select2({
												ajax: {
													url: '<?= base_url() ?>index.php/home/kturu',
													type: "post",
													dataType: 'json',
													delay: 250,
													data: function (params) {
														return {
															kturu: params.term // search term
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


									<div class="az_bosluk"></div>

									<h4>Yükleme işlemi için <b> Excel </b>  Belgesini Seçiniz </b></h4>
									<input type="file" name="file" id="file" required accept=".xls, .xlsx" /></p>
									<br />
									<input style="background-color: #a32d00; color: white; font-size:medium" type="submit" name="import" value="Verileri Yükle" />
								</form>

							</div>
						</div>
					</div>

					<!--  Sınav Cevapları  yukleme butonu   -->
					<div class="btnnn">
						<a href="#"  id="pop-uppp"<b>Sınav Cevaplarını Yükle &nbsp;</b>
						<i class="fa fa-upload" aria-hidden="true" style="font-size:55px;color: white"></i>
						</a>
					</div>
					<!-- ...:::::::::: SINAV CEVAPLARI İÇİN AÇILACAK MESAJ :::::::::::............  -->

					<div id="sinav_cevaplari">
						<span class="sinav_cevaplari_close">&#10006;</span>
						<div class="sinav_cevaplari_align-content">
							<div class="sinav_cevaplari_content">
								<!-- açılır menu mesaj -->

								<!-- UYARI MESJI-->
								<div class="error boxx">
									<p class="fa fa-info-circle" style="margin-left: 150px"> Bilgilendirme </p>
									<p>Sınav Cevaplarının  hatasız yüklenmesi için;</p>
									<p  class="fa fa-arrow-right">Fakülte , bölüm , ders ve kitapçık türü seçilmelidir.</p>
									<p  class="fa fa-arrow-right">Soru sayısı 20'den fazla olmamalıdır.</p>
									<p  class="fa fa-arrow-right">Verilerin Excel sırası "tc-s1-s2-s3-s4-s5-s6-s7-s8-s9-s10-s11-s12-s13-s14-s15-s16-s17-s18-s19-s20" şeklinde olmalıdır.</p>
								</div>

								<form action="<?php echo base_url("cevapanahtariyukle/import") ?>" method="post" id="cevaplariyukle" enctype="multipart/form-data">

								<!-- fakulte --->
								<label>Fakülte  Seçiniz :</label>
								<select  id='fakultecevap' style='width: 260px; height: 40px'  name="fakulte">
									<option value='0'></option>
								</select>


								<!-- Script -->
								<script type="text/javascript">
									$(document).ready(function(){
										$("#fakultecevap").select2({
											ajax: {
												url: '<?= base_url() ?>index.php/home/fakultecevap',
												type: "post",
												dataType: 'json',
												delay: 250,
												data: function (params) {
													return {
														fakultecevap: params.term // search term
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

								<!-- bosluk  -->
								<div class="dahaaz_bosluk"></div>
								<!-- bosluk  -->

								<!-- bölüm --->
								<label>Bölüm  Seçiniz :</label>
								<select id='bolumcevap' style='width: 260px; height: 40px'  name="bolum">
									<option value='0'></option>
								</select>


								<!-- Script -->
								<script type="text/javascript">
									$(document).ready(function(){
										$("#bolumcevap").select2({
											ajax: {
												url: '<?= base_url() ?>index.php/home/bolumcevap',
												type: "post",
												dataType: 'json',
												delay: 250,
												data: function (params) {
													return {
														bolumcevap: params.term // search term
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


								<!-- bosluk  -->
								<div class="dahaaz_bosluk"></div>
								<!-- bosluk  -->

								<!-- ders --->
								<label>UZEM Dersini Seçiniz :</label>
								<select id='uzemcevap' style='width: 260px; height: 40px'  name="uzemders">
									<option value='0'></option>
								</select>


								<!-- Script -->
								<script type="text/javascript">
									$(document).ready(function(){
										$("#uzemcevap").select2({
											ajax: {
												url: '<?= base_url() ?>index.php/home/uzemcevap',
												type: "post",
												dataType: 'json',
												delay: 250,
												data: function (params) {
													return {
														uzemcevap: params.term // search term
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


								<!-- bosluk  -->
								<div class="dahaaz_bosluk"></div>
								<!-- bosluk  -->


								<!-- kitapcik türü --->
								<label>Kitapçık Türü  Seçiniz :</label>
								<select id='kturucevap' style='width: 260px; height: 40px'  name="kturu">
									<option value='0'></option>
								</select>
								<!-- Script -->
								<script type="text/javascript">
									$(document).ready(function(){
										$("#kturucevap").select2({
											ajax: {
												url: '<?= base_url() ?>index.php/home/kturucevap',
												type: "post",
												dataType: 'json',
												delay: 250,
												data: function (params) {
													return {
														kturucevap: params.term // search term
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


								<div class="az_bosluk"></div>




								<form action="<?php echo base_url("cevapanahtariyukle/import") ?>" method="post" id="cevaplariyukle" enctype="multipart/form-data">
									<h4>Yükleme işlemi için <b> Excel </b> Belgesini Seçiniz </b></h4>
									<input type="file" name="file" id="file" required accept=".xls, .xlsx" /></p>
									<br />
									<input style="background-color: #a32d00; color: white; font-size:medium" type="submit" name="import" value="Verileri Yükle" />
								</form>


							</div>
						</div>
					</div>


				</div>
			</div>
		</section>
	</div>

	<footer class="main-footer">

		<?php

		include "ortksyf/altbilgi.php";


		?>

	</footer>


	<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


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

<!-- excel veri yükleme için -->


<!-- fakulte veri yukle -->

<script>
	$(document).ready(function(){

		load_data();

		function load_data()
		{
			$.ajax({
				url:"<?php echo base_url(); ?>fakulteyukle/fetch",
				method:"POST",
				success:function(data){
					$('#customer_data').html(data);
				}
			})
		}

		$('#fakulteyukle').on('submit', function(event){
			event.preventDefault();
			$.ajax({
				url:"<?php echo base_url(); ?>fakulteyukle/import",
				method:"POST",
				data:new FormData(this),
				contentType:false,
				cache:false,
				processData:false,
				success:function(data){
					$('#file').val('');
					load_data();
					alert(data);
				}
			})
		});

	});
</script>



<!-- cevap anahtari  veri yukle -->

<script>
	$(document).ready(function(){

		load_data();

		function load_data()
		{
			$.ajax({
				url:"<?php echo base_url(); ?>cevapanahtariyukle/fetch",
				method:"POST",
				success:function(data){
					$('#customer_data').html(data);
				}
			})
		}

		$('#cevapAnahtariyukle').on('submit', function(event){
			event.preventDefault();
			$.ajax({
				url:"<?php echo base_url(); ?>cevapanahtariyukle/import",
				method:"POST",
				data:new FormData(this),
				contentType:false,
				cache:false,
				processData:false,
				success:function(data){
					$('#file').val('');
					load_data();
					alert(data);
				}
			})
		});

	});
</script>

<!-- cevaplar veri yukle -->

<script>
	$(document).ready(function(){

		load_data();

		function load_data()
		{
			$.ajax({
				url:"<?php echo base_url(); ?>cevaplariyukleModel/fetch",
				method:"POST",
				success:function(data){
					$('#customer_data').html(data);
				}
			})
		}

		$('#cevaplariyukle').on('submit', function(event){
			event.preventDefault();
			$.ajax({
				url:"<?php echo base_url(); ?>cevaplariyukle/import",
				method:"POST",
				data:new FormData(this),
				contentType:false,
				cache:false,
				processData:false,
				success:function(data){
					$('#file').val('');
					load_data();
					alert(data);
				}
			})
		});

	});
</script>


</body>
<?php
ob_end_flush();
?>
</html>
