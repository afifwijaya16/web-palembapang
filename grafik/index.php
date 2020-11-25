<!DOCTYPE html>
<html>
<head>
	<title>GRAFIK PERTUMBUHAN PENDUDUK</title>
	<script type="text/javascript" src="chartjs/Chart.js"></script>
</head>
<body>
	<style type="text/css">
	body{
		font-family: roboto;
	}

	table{
		margin: 0px auto;
	}
	</style>


	<center>
		<h2>GRAFIK PERTUMBUHAN PENDUDUK <br>DESA PALEMBAPANG</h2>
	</center>


	<?php 
	include 'koneksi.php';
	?>

	<div style="width: 800px;margin: 0px auto;">
		<!-- <canvas id="myChart"></canvas> -->
		<figure class="highcharts-figure">
		<div id="container"></div>
	</figure>
	</div>
	
	<br/>

	<table border="1" style="background-color: 	#F0FFFF">
		<thead>
			<tr>
				<th>No</th>
				<th>Jumlah Penduduk Laki-Laki</th>
				<th>Jumlah Penduduk Perempuan</th>
				<th>Jumlah Penduduk Per KK</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			$data = mysqli_query($koneksi,"SELECT kp_jp_laki, kp_jp_perempuan, kp_jp_kk FROM tbl_data");
			while($d=mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['kp_jp_laki']; ?></td>
					<td><?php echo $d['kp_jp_perempuan']; ?></td>
					<td><?php echo $d['kp_jp_kk']; ?></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/data.js"></script>
	<script src="https://code.highcharts.com/modules/drilldown.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script>
	<script src="https://code.highcharts.com/modules/accessibility.js"></script>

	
	<script>
			var a = <?php 
				$jumlah_laki = mysqli_query($koneksi, "select kp_jp_laki from tbl_data"); 
				while($data=mysqli_fetch_array($jumlah_laki)){
					echo $data['kp_jp_laki'];
				}
				?>;
		var b = <?php 
				$jumlah_perempuan = mysqli_query($koneksi,"select kp_jp_perempuan from tbl_data");
				while($data=mysqli_fetch_array($jumlah_perempuan)){
					echo $data['kp_jp_perempuan'];
				}
				?>;
		var c = <?php 
				$jumlah_kk = mysqli_query($koneksi,"select kp_jp_kk from tbl_data");
				while($data=mysqli_fetch_array($jumlah_kk)){
					echo $data['kp_jp_kk'];
				}
				?>;
		Highcharts.chart('container', {
		chart: {
			type: 'column'
		},
		title: {
			text: ''
		},
		subtitle: {
			text: ''
		},
		accessibility: {
			announceNewData: {
			enabled: true
			}
		},
		xAxis: {
			type: 'category'
		},
		yAxis: {
			title: {
			text: 'Jumlah'
			}

		},
		legend: {
			enabled: false
		},
		plotOptions: {
			series: {
			borderWidth: 0,
			dataLabels: {
				enabled: true,
			}
			}
		},

		tooltip: {
			headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
			pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b><br/>'
		},

		series: [{
			name: "Jumlah",
			colorByPoint: true,
			data: [{
				name: "Laki - Laki",
				y: a,
				drilldown: "Laki - Laki"
			},
			{
				name: "Perempuan",
				y: b,
				drilldown: "Perempuan"
			},
			{
				name: "Kartu Keluarga",
				y: c,
				drilldown: "Kartu Keluarga"
			}
			]
		}],
		
		});
	</script>
	<script>
		// var a = <?php 
		// 		$jumlah_laki = mysqli_query($koneksi, "select kp_jp_laki from tbl_data"); 
		// 		while($data=mysqli_fetch_array($jumlah_laki)){
		// 			echo $data['kp_jp_laki'];
		// 		}
		// 		?>;
		// var b = <?php 
		// 		$jumlah_perempuan = mysqli_query($koneksi,"select kp_jp_perempuan from tbl_data");
		// 		while($data=mysqli_fetch_array($jumlah_perempuan)){
		// 			echo $data['kp_jp_perempuan'];
		// 		}
		// 		?>;
		// var c = <?php 
		// 		$jumlah_kk = mysqli_query($koneksi,"select kp_jp_kk from tbl_data");
		// 		while($data=mysqli_fetch_array($jumlah_kk)){
		// 			echo $data['kp_jp_kk'];
		// 		}
		// 		?>;

		// var ctx = document.getElementById("myChart").getContext('2d');
		// var myChart = new Chart(ctx, {
		// 	type: 'bar',
		// 	data: {
		// 		labels: ["Laki-Laki", "Perempuan", "Kartu Keluarga"],
		// 		datasets: [
		// 			{
		// 			label:  ["Laki-Laki", "Perempuan", "Kartu Keluarga"],
		// 			data: [a, b, c ],
		// 			backgroundColor: [
		// 				'rgba(255, 99, 132, 0.2)',
		// 				'rgba(54, 162, 235, 0.2)',
		// 				'rgba(255, 206, 86, 0.2)',
		// 			],
		// 			borderColor: [
		// 				'rgba(255, 99, 132, 1)',
		// 				'rgba(54, 162, 235, 1)',
		// 				'rgba(255, 206, 86, 1)',
		// 			],
		// 			borderWidth: 1
		// 			}
		// 		]
		// 	},
		// 	options: {
		// 		scales: {
		// 			yAxes: [{
		// 				ticks: {
		// 					beginAtZero: true
		// 				}
		// 			}]
		// 		}
		// 	}
		// });
		// data = {
		//     datasets: [{
		//         data: [10, 20, 30]
		//     }],

		//     // These labels appear in the legend and in the tooltips when hovering different arcs
		//     labels: [
		//         'Red',
		//         'Yellow',
		//         'Blue'
		//     ]
		// };

	</script>
</body>
</html>