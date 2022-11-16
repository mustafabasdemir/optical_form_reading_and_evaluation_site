<!DOCTYPE HTML>
<html>
<head>
	<script>
		window.onload = function() {

			<?php
			$veriler = $this->db->get('grafikverileri')->result();
			foreach ($veriler as $item)
			{

			    echo $sifir_otuz=$item->sifirotuz;
				echo $otuz_elli=$item->otuzelli;
				echo $elli_yetmis=$item->elliyetmis;
				echo $yetmis_seksen=$item->yetmiseksen;
				echo $seksen_yüz=$item->seksenyüz;
			}
			?>

			var chart = new CanvasJS.Chart("chartContainer", {
				theme: "light2", // "light1", "light2", "dark1", "dark2"
				exportEnabled: true,
				animationEnabled: true,
				title: {
					text: "Sınav Sonuçları Grafik Analizi"
				},
				data: [{
					type: "pie",
					startAngle: 25,
					toolTipContent: "<b>{label}</b>: {y}%",
					showInLegend: "true",
					legendText: "{label}",
					indexLabelFontSize: 16,
					indexLabel: "{label} - {y}%",
					dataPoints: [
						{ y: <?php echo $sifir_otuz ?>, label: "0-30 Not" },
						{ y: <?php echo $otuz_elli ?>, label: "30-50 Not" },
						{ y: <?php echo $elli_yetmis ?>, label: "50-70 Not" },
						{ y: <?php echo $yetmis_seksen ?>, label: "70-80 Not" },
						{ y: <?php echo $seksen_yüz ?>, label: "80-100 Not" }
					]
				}]
			});
			chart.render();

		}
	</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
