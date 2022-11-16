<style>
	/*uyarı metni */
	.error {
		background-color: #ddd;
		border-color: #aaa;

	}

	.box {
		width: 450px;
		height: 170px;
		border: 2px solid #000;
		text-align: left;
		padding: 10px;
		font-weight: bold;
		border-radius: 10px;
	}

</style>
<html>
<body>
<form action="<?php echo base_url("home/mailAt") ?>" style="target: " method="post">


<div class="error box">
	<p class="fa fa-info-circle" style="margin-left: 150px"> Bilgilendirme </p>
	<p class="fa fa-arrow-right"> Açıklama Alanı mail içeriğinde görünecektir. Konu değildir.</p>
	<p class="fa fa-arrow-right"> Açılır menüden öğretim görevlisi Adını seçerek gönderme işlemini yapabilirsiniz.</p>
	<p class="fa fa-arrow-right"> Hata durumunda -- basdemir803@gmail.com -- mail adresine bildirimde bulununuz.</p>
</div>

<!-- baslık-->
<p style="margin-top: 5px">Mail Amacı :</p>
	<select   id='secim' style='width: 255px; height: 40px'  name="secim">
		<option>Bildirimde Bulun</option>
		<option>Notları Gönder</option>
	</select>

<p> Açıklama : </p>
<textarea id="metinKutu" name="metinKutu" placeholder="Açıklama Alanı Boş bırakmayınız." cols="60" rows="4"></textarea><br /><br />
<!-- ogretim görevlisi  seçimi   -->
<p> Öğretim Görevlisi Seçiniz : </p>
<select id='mailAtma' style='width: 255px; height: 40px'  name="mailAtma">
	<option value='0'>Öğretim Görevlisi : </option>
</select>

<!-- gönder butonu -->

<button   class="btn" type="submit"  style="background-color:black; margin-left: 10px; color: #fff0ff;height: 40px;width: 180px"> <a style="color: white"  target="_blank"> Gönder &nbsp; <i class="fa fa-paper-plane" aria-hidden="true" style="color: white; font-size: 17px"></i></a></button>
</form>



</body>
</html>
