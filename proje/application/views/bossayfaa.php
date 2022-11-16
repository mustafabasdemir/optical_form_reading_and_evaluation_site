
<?php
//session_start();
//include ('baglanti/mysqlbaglanti.php');
//ob_start();
?>
<!DOCTYPE html>
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
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

	<header class="main-header">



		<!-- Logo -->


		<?php

		include "ortksyf/logoisim.php";


		?>




		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

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





			//////////////////////////////////////////////////////

			SAYFA BİLGİLERİ BURAYA

			///////////////////////////////////////////////////////////






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

<!-- jQuery 3 -->
<script src="/proje/bower_components/jquery/dist/jquery.min.js"></script>
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
