
<?php
//Hesap kısmı

$verileriAl=$this->db->get("veriyedek")->result();
//print_r($verileriAl);
$kisiSayisi=0; $basarili=0; $basarisiz=0;


	$uzunluk = sizeof($verileriAl);
	for($i = 0; $i< $uzunluk; $i++)
	{
		$kisiSayisi++;

	}

	foreach ($verileriAl as $row)
	{
		$puanlar=$row->puan;
		//echo $puanlar;
		if($puanlar>=50)
		{
			$basarili++;
		}
		if($puanlar<50)
		{
			$basarisiz++;
		}
	}
?>

	<!-- html kodları -->


	<html>
	<head>
		<script>
			(function() {

				var Progress = function( element ) {

					this.context = element.getContext( "2d" );
					this.refElement = element.parentNode;
					this.loaded = 0;
					this.start = 4.72;
					this.width = this.context.canvas.width;
					this.height = this.context.canvas.height;
					this.total = parseInt( this.refElement.dataset.percent, 10 );
					this.timer = null;

					this.diff = 0;

					this.init();
				};

				Progress.prototype = {
					init: function() {
						var self = this;
						self.timer = setInterval(function() {
							self.run();
						}, 25);
					},
					run: function() {
						var self = this;

						self.diff = ( ( self.loaded / 250 ) * Math.PI * 2 * 10 ).toFixed( 2 );
						self.context.clearRect( 0, 0, self.width, self.height );
						self.context.lineWidth = 10;
						self.context.fillStyle = "#000";
						self.context.strokeStyle = "#d30000";
						self.context.textAlign = "center";

						self.context.fillText( self.loaded + "Adet", self.width * .5, self.height * .5 + 2, self.width );
						self.context.beginPath();
						self.context.arc( 35, 35, 30, self.start, self.diff / 10 + self.start, false );
						self.context.stroke();

						if( self.loaded >= self.total ) {
							clearInterval( self.timer );
						}

						self.loaded++;
					}
				};

				var CircularSkillBar = function( elements ) {
					this.bars = document.querySelectorAll( elements );
					if( this.bars.length > 0 ) {
						this.init();
					}
				};

				CircularSkillBar.prototype = {
					init: function() {
						this.tick = 25;
						this.progress();

					},
					progress: function() {
						var self = this;
						var index = 0;
						var firstCanvas = self.bars[0].querySelector( "canvas" );
						var firstProg = new Progress( firstCanvas );



						var timer = setInterval(function() {
							index++;

							var canvas = self.bars[index].querySelector( "canvas" );
							var prog = new Progress( canvas );

							if( index == self.bars.length ) {
								clearInterval( timer );
							}

						}, self.tick * 100);

					}
				};

				document.addEventListener( "DOMContentLoaded", function() {
					var circularBars = new CircularSkillBar( "#bars .bar" );
				});

			})();
		</script>
		<style>
			#bars{

				max-width: 960px;
				margin-left: 250px;
				overflow: hidden;
			}
			.bar{
				float: left;
				width: 20%;
				text-align: center;}
			.bar h3{
				font-size: 14px;
				font-weight: bold;
				margin: 0;
				text-transform: uppercase;}
			.bar-circle{
				display: block;
				margin: 10px auto;
			}

		</style>
	</head>
	<body>
	<?php
	if($verileriAl!=null)
	{?>
		<hr>
		<div id="bars">
		<div class="bar" data-percent="<?php echo $kisiSayisi ?>">
			<h3>Analiz Yapılan  Test Sayısı</h3>
			<canvas class="bar-circle" width="70" height="70"></canvas>
		</div>
		<div class="bar" data-percent="<?php echo $basarili ?>">
			<h3>Sınavda Başarılı olan öğrencilerin sayısı</h3>
			<canvas class="bar-circle" width="70" height="70"></canvas>
		</div>
		<div class="bar" data-percent="<?php echo $basarisiz ?>">
			<h3>Sınavda Başarısız olan öğrencilerin sayısı</h3>
			<canvas class="bar-circle" width="70" height="70"></canvas>
		</div>

	</div>

	<?php
	}


	$veriYedek = $this->db->get("veriyedek")->result();

	foreach ($veriYedek as $row) {
		$i = $row->id;
		$this->db->where("id", $i)->delete("veriyedek");
		//echo $i;
	}


	?>



	</body>
	</html>



