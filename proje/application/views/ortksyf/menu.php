<ul class="sidebar-menu" data-widget="tree">


	<style>

		.abc{

			margin-top: 100px;
			color: #e3c300;
			font-size: 15px;
		}

		.abc :hover
		{
			font-size: 17px;

		}

		i{color: #e3c300}
	</style>


	<div style="margin-top: 50px;"></div>


	<li class="treeview abc">
		<a href="#">
			<i class="fa fa-upload"></i>
			<span>Dosya Ekle</span>
			<span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>
            </span>
		</a>
		<ul class="treeview-menu">
			<li><a href="<?php echo site_url("home/dosyayukle")  ?>"><i class="fa fa-file-excel-o"></i>Dosya Yükle-XLSX</a></li>
			<li><a href="<?php echo site_url("home/txtSayfaAc")  ?>"><i class="fa fa-file-text-o"></i>Dosya Yükle-TXT</a></li>

		</ul>
	</li>


	<li class="abc">
		<a href="<?php echo site_url("home/analizAc")  ?>">
			<i class="fa fa-bar-chart"></i><span> &nbsp;Analiz</span>
			<span class="pull-right-container">
            </span>
		</a>
	</li>


	<li class="treeview abc">
		<a href="#">
			<i class="fa fa-eye"></i>
			<span>Veri Kontrol - Ekle </span>
			<span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>
            </span>
		</a>
		<ul class="treeview-menu">
			<li><a href="<?php echo site_url("home/Fakulte_kontrol")  ?>"><i class="fa fa-arrow-right"></i>Fakülte ve Bölüm Kontrol</a></li>
			<li><a href="<?php echo site_url("home/cevapAnahtariKontrol")  ?>"><i class="fa fa-arrow-right"></i>Cevap Anahtarı Kontrol</a></li>
			<li><a href="<?php echo site_url("home/ogr_kontrol")  ?>"><i class="fa fa-arrow-right"></i>Öğretim Görevlisi Kontrol</a></li>
		</ul>
	</li>



	<li class="treeview abc">
		<a href="#">
			<i class="fa fa-trash-o"></i>
			<span>Verileri Temizle </span>
			<span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>
            </span>
		</a>
		<ul class="treeview-menu">
			<li><a href="<?php echo site_url("home/fakulteSil")  ?>"><i class="fa fa-arrow-right"></i>Fakülte ve Bölüm Sil</a></li>
			<li><a href="<?php echo site_url("home/cevapAnahtariSil")  ?>"><i class="fa fa-arrow-right"></i>Cevap Anahtarını Sil</a></li>
			<li><a href="<?php echo site_url("home/cevaplariSil")  ?>"><i class="fa fa-arrow-right"></i>Cevapları Sil</a></li>
		</ul>
	</li>


	<li class="abc">
		<a href="<?php echo site_url("home/bosAc")  ?>">
			<i class="fa fa-sitemap"></i><span>Boş Sayfa</span>
			<span class="pull-right-container">
            </span>
		</a>
	</li>


<!--
    <li>
        <a href="#">
            <i class="fa fa-times"></i> <span>bos</span>
            <span class="pull-right-container">
            </span>
        </a>
    </li>



	<li>
		<a href="index">
			<i class="fa fa-home"></i> <span>Rapolarlama</span>
			<span class="pull-right-container">
            </span>
		</a>
	</li>

	-->

