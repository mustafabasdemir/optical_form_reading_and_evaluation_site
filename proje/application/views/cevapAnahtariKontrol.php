

<?php
//session_start();
//include ('baglanti/mysqlbaglanti.php');
//ob_start();
?>
<!DOCTYPE html>
<html>
<head>

	<!-- TABLO İÇİN  -->
	<title>Fakülte Bölüm Kontrol</title>

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
				//<h3 align="center">Cevap Anahtarı Düzenle</h3><br />
				<div class="table-responsive">
					<br />
					<table class="table table-striped table-bordered" style="font-size: small">
						<thead>
						<tr>
							<th style="text-align: center">TC</th>
							<th style="text-align: center">Ders Adı</th>
							<th style="text-align: center">Kitapçık Türü</th>
							<th style="text-align: center">1.S</th>
							<th style="text-align: center">2.S</th>
							<th style="text-align: center">3.S</th>
							<th style="text-align: center">4.S</th>
							<th style="text-align: center">5.S</th>
							<th style="text-align: center">6.S</th>
							<th style="text-align: center">7.S</th>
							<th style="text-align: center">8.S</th>
							<th style="text-align: center">9.S</th>
							<th style="text-align: center">10.S</th>
							<th style="text-align: center">11.S</th>
							<th style="text-align: center">12.S</th>
							<th style="text-align: center">13.S</th>
							<th style="text-align: center">14.S</th>
							<th style="text-align: center">15.S</th>
							<th style="text-align: center">16.S</th>
							<th style="text-align: center">17.S</th>
							<th style="text-align: center">18.S</th>
							<th style="text-align: center">19.S</th>
							<th style="text-align: center">20.S</th>
							<th style="text-align: center">işlemler</th>

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


<script type="text/javascript" language="javascript" >
	$(document).ready(function(){

		function cvp_load_data()
		{
			$.ajax({
				url:"<?php echo base_url(); ?>home/cvp_load_data",
				dataType:"JSON",
				success:function(data){
					var html = '<tr>';
					html += '<td id="tc" contenteditable placeholder="TC Kimlik Numarası Boş "></td>';
					html += '<td id="ders_ad" contenteditable placeholder="Bölüm boş olamaz"></td>';
					html += '<td id="kitapcikTur" contenteditable placeholder="Bölüm boş olamaz"></td>';
					html += '<td id="s1" contenteditable placeholder="Bölüm boş olamaz"></td>';
					html += '<td id="s2" contenteditable placeholder="Bölüm boş olamaz"></td>';
					html += '<td id="s3" contenteditable placeholder="Bölüm boş olamaz"></td>';
					html += '<td id="s4" contenteditable placeholder="Bölüm boş olamaz"></td>';
					html += '<td id="s5" contenteditable placeholder="Bölüm boş olamaz"></td>';
					html += '<td id="s6" contenteditable placeholder="Bölüm boş olamaz"></td>';
					html += '<td id="s7" contenteditable placeholder="Bölüm boş olamaz"></td>';
					html += '<td id="s8" contenteditable placeholder="Bölüm boş olamaz"></td>';
					html += '<td id="s9" contenteditable placeholder="Bölüm boş olamaz"></td>';
					html += '<td id="s10" contenteditable placeholder="Bölüm boş olamaz"></td>';
					html += '<td id="s11" contenteditable placeholder="Bölüm boş olamaz"></td>';
					html += '<td id="s12" contenteditable placeholder="Bölüm boş olamaz"></td>';
					html += '<td id="s13" contenteditable placeholder="Bölüm boş olamaz"></td>';
					html += '<td id="s14" contenteditable placeholder="Bölüm boş olamaz"></td>';
					html += '<td id="s15" contenteditable placeholder="Bölüm boş olamaz"></td>';
					html += '<td id="s16" contenteditable placeholder="Bölüm boş olamaz"></td>';
					html += '<td id="s17" contenteditable placeholder="Bölüm boş olamaz"></td>';
					html += '<td id="s18" contenteditable placeholder="Bölüm boş olamaz"></td>';
					html += '<td id="s19" contenteditable placeholder="Bölüm boş olamaz"></td>';
					html += '<td id="s20" contenteditable placeholder="Bölüm boş olamaz"></td>';


					html += '<td><button  type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">Ekle &nbsp;<span class="glyphicon glyphicon-plus"></span></button></td></tr>';
					for(var count = 0; count < data.length; count++)
					{
						html += '<tr>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="tc" contenteditable>'+data[count].tc+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="ders_ad" contenteditable>'+data[count].ders_ad+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="kitapcikTur" contenteditable>'+data[count].kitapcikTur+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="s1" contenteditable>'+data[count].s1+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="s2" contenteditable>'+data[count].s2+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="s3" contenteditable>'+data[count].s3+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="s4" contenteditable>'+data[count].s4+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="s5" contenteditable>'+data[count].s5+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="s6" contenteditable>'+data[count].s6+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="s7" contenteditable>'+data[count].s7+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="s8" contenteditable>'+data[count].s8+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="s9" contenteditable>'+data[count].s9+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="s10" contenteditable>'+data[count].s10+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="s11" contenteditable>'+data[count].s11+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="s12" contenteditable>'+data[count].s12+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="s13" contenteditable>'+data[count].s13+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="s13" contenteditable>'+data[count].s14+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="s13" contenteditable>'+data[count].s15+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="s13" contenteditable>'+data[count].s16+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="s13" contenteditable>'+data[count].s17+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="s13" contenteditable>'+data[count].s18+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="s13" contenteditable>'+data[count].s19+'</td>';
						html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="s13" contenteditable>'+data[count].s20+'</td>';
						html += '<td style="width: 200px"><button type="button" name="delete_btn" id="'+data[count].id+'" class="btn btn-xs btn-danger btn_delete">Sil &nbsp;<span class="glyphicon glyphicon-erase"></span></button>'
						html += '</br><button style="background-color:orange" type="button" name="update_btn" id="'+data[count].id+'" class="btn btn-xs btn-danger btn_update">Güncelle &nbsp;<span class="glyphicon glyphicon-pencil"></span></button></td></tr>';
					}
					$('tbody').html(html);
				}
			});
		}

		cvp_load_data();

		$(document).on('click', '#btn_add', function(){
			var tc = $('#tc').text();
			var ders_ad = $('#ders_ad').text();
			var kitapcikTur = $('#kitapcikTur').text();
			var s1 = $('#s1').text();
			var s2 = $('#s2').text();
			var s3 = $('#s3').text();
			var s4 = $('#s4').text();
			var s5 = $('#s5').text();
			var s6 = $('#s6').text();
			var s7 = $('#s7').text();
			var s8 = $('#s8').text();
			var s9 = $('#s9').text();
			var s10 = $('#s10').text();
			var s11 = $('#s11').text();
			var s12 = $('#s12').text();
			var s13 = $('#s13').text();
			var s14 = $('#s14').text();
			var s15 = $('#s15').text();
			var s16 = $('#s16').text();
			var s17 = $('#s17').text();
			var s18 = $('#s18').text();
			var s19 = $('#s19').text();
			var s20 = $('#s20').text();

			if(tc == '' && ders_ad== '' )
			{
				alert('Tüm Alanları Eksiksiz Doldurun.');
				return false;
			}

			$.ajax({
				url:"<?php echo base_url(); ?>home/cvp_insert",
				method:"POST",
				data:{tc:tc,ders_ad:ders_ad,kitapcikTur:kitapcikTur,s1:s1,s2:s2,s3:s3,s4:s4,s5:s5,s6:s6,s7:s7,s8:s8,s9:s9,s10:s10,s11:s11,s12:s12,s13:s13,s14:s14,s15:s15,s16:s16,s17:s17,s18:s18,s19:s19,s20:s20},
				success:function(data){
					cvp_load_data();

				}
			})
		});

		$(document).on('blur', '.table_data', function(){
			var id = $(this).data('row_id');
			var table_column = $(this).data('column_name');
			var value = $(this).text();
			$.ajax({
				url:"<?php echo base_url(); ?>home/cvp_update",
				method:"POST",
				data:{id:id, table_column:table_column, value:value},
				success:function(data)
				{
					cvp_load_data();
				}
			})
		});

		$(document).on('click', '.btn_delete', function(){
			var id = $(this).attr('id');
			if(confirm("Silmek istediğinizden emin misiniz ?"))
			{
				$.ajax({
					url:"<?php echo base_url(); ?>home/cvp_delete",
					method:"POST",
					data:{id:id},
					success:function(data){
						cvp_load_data();
					}
				})
			}
		});


		$(document).on('click', '.btn_update', function(){
			var id = $(this).attr('id');
			if(confirm("Güncellemek istediğinizden emin misiniz ? "))
			{
				$.ajax({
					url:"<?php echo base_url(); ?>home/cvp_update",
					method:"POST",
					data:{id:id},
					success:function(data){
						cvp_load_data();
					}
				})
			}
		});

	});
</script>
