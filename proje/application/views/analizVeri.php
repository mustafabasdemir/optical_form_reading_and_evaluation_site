
<?php
$kisiSayisi=0;$basarisiz=0;$basarili=0;
//grafik butonu için //
$sifir_otuz=0; $otuz_elli=0; $elli_yetmis=0; $yetmis_seksen=0; $seksen_yüz=0;
?>


<style>
	.bosluk
	{
		margin-top:30px;
	}

	.fazlabosluk
	{
		margin-top: 160px;
	}

	.ortala
	{
		text-align: center;
		text-transform: uppercase;
	}
	.yanlis
	{
		background-color: #dd4b39;
		color: #fff0ff;
	}

	.dogru
	{
		background-color: #00c76c;
		color: #fff0ff;
	}

	.gri
	{
		background-color: #edf0f5;

	}

	.uyari
	{
		background-color: #c81912;
		width: 320px;
		color:white;
		text-align: center;
		font-size: large;
		margin: auto;
		border-radius: 10px;
	}


</style>


<?php
if($optikcevapanahtari==null && $optikcevaplar==null)
{?>

	<div class="uyari">
		<p> <i class="fa fa-exclamation-triangle" aria-hidden="true" style="color: white"></i> | Analiz yapmak için seçim yapın. | <i class="fa fa-exclamation-triangle" aria-hidden="true" style="color: white"></i></p>
	</div>
	&nbsp;
	&nbsp;
<?php
}
elseif ($optikcevaplar==null)
{?>

	<div class="uyari">
		<p> <i class="fa fa-exclamation-triangle" aria-hidden="true" style="color: white"></i> Seçimlere ait dersin cevap anahtarı bulundu. Derse verilen cevaplar bulunamadı. <i class="fa fa-exclamation-triangle" aria-hidden="true" style="color: white"></i></p>
	</div>
	&nbsp;

<?php
}
else
{?>

	<div class="fazlabosluk">   <!--  sayac ile tablo arasındaki bosluk // sayacı yukarı tasıdık -- position absolute ile -->

	</div>

	<label style="color: #0b58a2;margin:auto">CEVAP ANAHTARI</label>
	<table  border="1" cellpadding="0" cellspacing="0" style="text-align: center; font-size: 14px;margin: auto">
		<thead>
		<tr>
			<th  class="ortala">TC</th>
			<th class="ortala">Ders Adı</th>
			<th class="ortala">Kitapçık türü</th>
			<th class="ortala">1.S</th>
			<th class="ortala">2.S</th>
			<th class="ortala">3.S</th>
			<th class="ortala">4.S</th>
			<th class="ortala">5.S</th>
			<th>6.S</th>
			<th>7.S</th>
			<th>8.S</th>
			<th>9.S</th>
			<th>10.S</th>
			<th>11.S</th>
			<th>12.S</th>
			<th>13.S</th>
			<th>14.S</th>
			<th>15.S</th>
			<th>16.S</th>
			<th>17.S</th>
			<th>18.S</th>
			<th>19.S</th>
			<th>20.S</th>
			<th>Puan</th>

		</tr>
		</thead>
		<?php foreach ($optikcevapanahtari as $rows){ ?>
			<tr>
				<td><?php echo $rows->tc ?></td>
				<td><?php echo $rows->ders_ad ?></td>
				<td><?php echo $rows->kitapcikTur ?></td>
				<td class="dogru"><?php echo $rows->s1?></td>
				<td class="dogru"><?php echo $rows->s2?></td>
				<td class="dogru"><?php echo $rows->s3?></td>
				<td class="dogru"><?php echo $rows->s4?></td>
				<td class="dogru"><?php echo $rows->s5?></td>
				<td class="dogru"><?php echo $rows->s6?></td>
				<td class="dogru"><?php echo $rows->s7?></td>
				<td class="dogru"><?php echo $rows->s8?></td>
				<td class="dogru"><?php echo $rows->s9?></td>
				<td class="dogru"><?php echo $rows->s10?></td>
				<td class="dogru"><?php echo $rows->s11?></td>
				<td class="dogru"><?php echo $rows->s12?></td>
				<td class="dogru"><?php echo $rows->s13?></td>
				<td class="dogru"><?php echo $rows->s14?></td>
				<td class="dogru"><?php echo $rows->s15?></td>
				<td class="dogru"><?php echo $rows->s16?></td>
				<td class="dogru"><?php echo $rows->s17?></td>
				<td class="dogru"><?php echo $rows->s18?></td>
				<td class="dogru"><?php echo $rows->s19?></td>
				<td class="dogru"><?php echo $rows->s20?></td>
				<td class="dogru">100</td>




			</tr>
		<?php } ?>
	</table>

	<hr style="height: 20px" color="#ecf0f5">
	<div class="bosluk"></div>  <!--  iki tablo arasında bosluk -->


	<label style="color: #0b58a2;margin-left: 20px"">ÖĞRENCİLERİN VERDİĞİ CEVAPLAR</label>
	<table  border="1" cellpadding="0" cellspacing="0" style="text-align: center;font-size:14px;margin-left: 10px">
		<thead>
		<tr class="gri">
			<th class="ortala">tc</th>
			<th class="ortala">Fakülte</th>
			<th class="ortala">Bölüm</th>
			<th class="ortala">Ders Adı</th>
			<th class="ortala">Kitapçık türü</th>
			<th>1.S</th>
			<th>2.S</th>
			<th>3.S</th>
			<th>4.S</th>
			<th>5.S</th>
			<th>6.S</th>
			<th>7.S</th>
			<th>8.S</th>
			<th>9.S</th>
			<th>10.S</th>
			<th>11.S</th>
			<th>12.S</th>
			<th>13.S</th>
			<th>14.S</th>
			<th>15.S</th>
			<th>16.S</th>
			<th>17.S</th>
			<th>18.S</th>
			<th>19.S</th>
			<th>20.S</th>
			<th>Puan</th>

		</tr>
		</thead>


		<?php foreach ($optikcevaplar as $row) {  $puan=0; $not=5; ?>

			<tr>
				<td class="gri"><?php echo $row->tc ?></td>
				<td class="gri"><?php echo $row->fakulte?></td>
				<td class="gri"><?php echo $row->bolum ?></td>
				<td class="gri"><?php echo $row->ders_ad ?></td>
				<td class="gri"><?php echo $row->kitapcikTur ?></td>
				<td class='<?php echo $rows->s1== $row->s1 ? 'dogru': 'yanlis'; ?>'<?php if($rows->s1==$row->s1)($puan=$puan+$not) ?>><?php echo $row->s1?></td>
				<td class='<?php echo $rows->s2== $row->s2 ? 'dogru': 'yanlis'; ?>'<?php if($rows->s2==$row->s2)($puan=$puan+$not) ?>><?php echo $row->s2?></td>
				<td class='<?php echo $rows->s3== $row->s3 ? 'dogru': 'yanlis'; ?>'<?php if($rows->s3==$row->s3)($puan=$puan+$not) ?>><?php echo $row->s3?></td>
				<td class='<?php echo $rows->s4== $row->s4 ? 'dogru': 'yanlis'; ?>'<?php if($rows->s4==$row->s4)($puan=$puan+$not) ?>><?php echo $row->s4?></td>
				<td class='<?php echo $rows->s5== $row->s5 ? 'dogru': 'yanlis'; ?>'<?php if($rows->s5==$row->s5)($puan=$puan+$not) ?>><?php echo $row->s5?></td>
				<td class='<?php echo $rows->s6== $row->s6 ? 'dogru': 'yanlis'; ?>'<?php if($rows->s6==$row->s6)($puan=$puan+$not) ?>><?php echo $row->s6?></td>
				<td class='<?php echo $rows->s7== $row->s7 ? 'dogru': 'yanlis'; ?>'<?php if($rows->s7==$row->s7)($puan=$puan+$not) ?>><?php echo $row->s7?></td>
				<td class='<?php echo $rows->s8== $row->s8 ? 'dogru': 'yanlis'; ?>'<?php if($rows->s8==$row->s8)($puan=$puan+$not) ?>><?php echo $row->s8?></td>
				<td class='<?php echo $rows->s9== $row->s9 ? 'dogru': 'yanlis'; ?>'<?php if($rows->s9==$row->s9)($puan=$puan+$not) ?>><?php echo $row->s9?></td>
				<td class='<?php echo $rows->s10== $row->s10 ? 'dogru': 'yanlis'; ?>'<?php if($rows->s10==$row->s10)($puan=$puan+$not) ?>><?php echo $row->s10?></td>
				<td class='<?php echo $rows->s11== $row->s11 ? 'dogru': 'yanlis'; ?>'<?php if($rows->s11==$row->s11)($puan=$puan+$not) ?>><?php echo $row->s11?></td>
				<td class='<?php echo $rows->s12== $row->s12 ? 'dogru': 'yanlis'; ?>'<?php if($rows->s12==$row->s12)($puan=$puan+$not) ?>><?php echo $row->s12?></td>
				<td class='<?php echo $rows->s13== $row->s13 ? 'dogru': 'yanlis'; ?>'<?php if($rows->s13==$row->s13)($puan=$puan+$not) ?>><?php echo $row->s13?></td>
				<td class='<?php echo $rows->s14== $row->s14 ? 'dogru': 'yanlis'; ?>'<?php if($rows->s14==$row->s14)($puan=$puan+$not) ?>><?php echo $row->s14?></td>
				<td class='<?php echo $rows->s15== $row->s15 ? 'dogru': 'yanlis'; ?>'<?php if($rows->s15==$row->s15)($puan=$puan+$not) ?>><?php echo $row->s15?></td>
				<td class='<?php echo $rows->s16== $row->s16 ? 'dogru': 'yanlis'; ?>'<?php if($rows->s16==$row->s16)($puan=$puan+$not) ?>><?php echo $row->s16?></td>
				<td class='<?php echo $rows->s17== $row->s17 ? 'dogru': 'yanlis'; ?>'<?php if($rows->s17==$row->s17)($puan=$puan+$not) ?>><?php echo $row->s17?></td>
				<td class='<?php echo $rows->s18== $row->s18 ? 'dogru': 'yanlis'; ?>'<?php if($rows->s18==$row->s18)($puan=$puan+$not) ?>><?php echo $row->s18?></td>
				<td class='<?php echo $rows->s19== $row->s19 ? 'dogru': 'yanlis'; ?>'<?php if($rows->s19==$row->s19)($puan=$puan+$not) ?>><?php echo $row->s19?></td>
				<td class='<?php echo $rows->s20== $row->s20 ? 'dogru': 'yanlis'; ?>'<?php if($rows->s20==$row->s20)($puan=$puan+$not) ?>><?php echo $row->s20?></td>
				<td><?php echo $puan?></td>


				<!-- Garfik verileri için puan sayılarını kaydedelim -->

				<?php

				if($puan<=30)
				{
					$sifir_otuz++;
				}
				else if ($puan>30 && $puan<=50)
				{
					$otuz_elli++;
				}
				else if ($puan>50 && $puan<=70)
				{
					$elli_yetmis++;
				}
				else if ($puan>70 && $puan<=80)
				{
					$yetmis_seksen++;
				}
				else if ($puan>80)
				{
					$seksen_yüz++;
				}

				?>
				<!-- Gelen kayıtları veritabanına kaydedelim  -->

				<?php
				$kisiSayisi++;
				if($puan>=50)
				{
				$basarili++;
				}
				if($puan<50)
				{
				$basarisiz++;
				}
				?>


				<?php
				$gonerilecekveri  = array(

					"tc" => $row->tc,
					"ders_ad " => $row->ders_ad,
					"fakulte " => $row->fakulte,
					"bolum " => $row->bolum,
					"kitapcikTur " => $rows->kitapcikTur,
					"s1 " => $row->s1,
					"s2 " => $row->s2,
					"s3 " => $row->s3,
					"s4 " => $row->s4,
					"s5 " => $row->s5,
					"s6 " => $row->s6,
					"s7 " => $row->s7,
					"s8 " => $row->s8,
					"s9 " => $row->s9,
					"s10 " => $row->s10,
					"s11 " => $row->s11,
					"s12 " => $row->s12,
					"s13 " => $row->s13,
					"s14 " => $row->s14,
					"s15 " => $row->s15,
					"s16 " => $row->s16,
					"s17 " => $row->s17,
					"s18 " => $row->s18,
					"s19 " => $row->s19,
					"s20 " => $row->s20,
					"puan " => $puan,
				);
				$insert =  $this ->db ->insert("exceldok",$gonerilecekveri);
				$insert =  $this ->db ->insert("pdfdok",$gonerilecekveri);
				$insert =  $this ->db ->insert("veriyedek",$gonerilecekveri);
				?>




			</tr>
		<?php } ?>
	</table>
	<?php
	$gonerilecekveri  = array(

		"sinavagiren" =>$kisiSayisi,
		"basarili " => $basarili,
		"basarisiz " =>$basarisiz,
	);


	$gonerilecekveriler  = array(

		"sifirotuz" =>$sifir_otuz,
		"otuzelli " => $otuz_elli,
		"elliyetmis " =>$elli_yetmis,
		"yetmiseksen " =>$yetmis_seksen,
		"seksenyüz " =>$seksen_yüz,
	);
	$id=1;
	$this->db->where("id",$id)->update("sayacveri",$gonerilecekveri);
	//
	$this->db->where("id",$id)->update("grafikverileri",$gonerilecekveriler);

	?>
<?php
}
?>



