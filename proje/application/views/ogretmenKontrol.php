

<?php
//session_start();
//include ('baglanti/mysqlbaglanti.php');
//ob_start();
?>
<!DOCTYPE html>
<html>
<head>

	<!-- TABLO İÇİN  -->
	<title>öğretim Görevlileri Bölüm Kontrol</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


	<style>
		body
		{
			margin:0;
			padding:0;
			background-color:#f1f1f1;
		}
		.box
		{
			width:100%;
			background-color:#fff;
			border:1px solid #ccc;
			border-radius:5px;
		}
	</style>

	<!-- TABLO İÇİN SON  -->

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





			<div class="container box">
				<h3 align="center">Öğretim Görevlisi Bilgileri Düzenle</h3><br />
				<div class="table-responsive">
					<br />
					<table class="table table-striped table-bordered">
						<thead>
						<tr>
							<th style="text-align: center">Adı Soyadı</th>
							<th style="text-align: center">Mail</th>
							<th style="text-align: center">İşlemler</th>
						</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
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


<script type="text/javascript" language="javascript" >
	$(document).ready(function(){

		function ogr_load_data()
		{
			$.ajax({
				url:"<?php echo base_url(); ?>home/ogr_load_data",
				dataType:"JSON",
				success:function(data){
					var html = '<tr>';
					html += '<td id="ad" contenteditable placeholder="Ad boş olamaz "></td>';
					html += '<td id="mail" contenteditable placeholder=" boş olamaz"></td>';
					html += '<td><button  type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">Ekle &nbsp;<span class="glyphicon glyphicon-plus"></span></button></td></tr>';
					for(var count = 0; count < data.length; count++)
					{
						html += '<tr>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="ad" contenteditable>'+data[count].ad+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="mail" contenteditable>'+data[count].mail+'</td>'
						html += '<td><button type="button" name="delete_btn" id="'+data[count].id+'" class="btn btn-xs btn-danger btn_delete">Sil &nbsp;<span class="glyphicon glyphicon-erase"></span></button>';
						html += ' &nbsp;<button style="background-color:orange" type="button" name="update_btn" id="'+data[count].id+'" class="btn btn-xs btn-danger btn_update">Güncelle &nbsp;<span class="glyphicon glyphicon-pencil"></span></button></td></tr>';
					}
					$('tbody').html(html);
				}
			});
		}

		ogr_load_data();

		$(document).on('click', '#btn_add', function(){
			var ad = $('#ad').text();
			var mail = $('#mail').text();
			if(ad == '')
			{
				alert('Ad Adı boş Bırakılmaz.');
				return false;
			}
			if(mail == '')
			{
				alert('Mail Boş olamaz.');
				return false;
			}
			$.ajax({
				url:"<?php echo base_url(); ?>home/ogr_insert",
				method:"POST",
				data:{ad:ad, mail:mail},
				success:function(data){
					ogr_load_data();
				}
			})
		});

		$(document).on('blur', '.table_data', function(){
			var id = $(this).data('row_id');
			var table_column = $(this).data('column_name');
			var value = $(this).text();
			$.ajax({
				url:"<?php echo base_url(); ?>home/ogr_update",
				method:"POST",
				data:{id:id, table_column:table_column, value:value},
				success:function(data)
				{
					ogr_load_data();
				}
			})
		});

		$(document).on('click', '.btn_delete', function(){
			var id = $(this).attr('id');
			if(confirm("Silmek istediğinizden emin misiniz ?"))
			{
				$.ajax({
					url:"<?php echo base_url(); ?>home/ogr_delete",
					method:"POST",
					data:{id:id},
					success:function(data){
						ogr_load_data();
					}
				})
			}
		});


		$(document).on('click', '.btn_update', function(){
			var id = $(this).attr('id');
			if(confirm("Güncellemek istediğinizden emin misiniz ? "))
			{
				$.ajax({
					url:"<?php echo base_url(); ?>home/ogr_update",
					method:"POST",
					data:{id:id},
					success:function(data){
						ogr_load_data();
					}
				})
			}
		});

	});
</script>
