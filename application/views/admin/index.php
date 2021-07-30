<div class="row justify-content-center">
	<center>
		<h4>Selamat Datang Di Halaman Admin, Selamat Bekerja.</h4>
		<!-- Area Chart -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Kunjungan bulanan</h6>
			</div>
			<div class="card-body">
				<div class="chart-area">
					<canvas id="myAreaChart"></canvas>
				</div>
			</div>
		</div>


		<?php
		if (isset($data)):
		$bln = array();
		$jml = array();
		foreach ($data as $key => $d) {
			$bln[] = $d['bulan'];
			$jml[] = $d['jml'];
		}
		?>
		<script>
			var ctx = document.getElementById('myAreaChart');
			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ['<?php print_r(implode("','", $bln)); ?>'],
					datasets: [{
						label: '# Jumlah',
						data: [<?php print_r(implode(",", $jml)); ?>],
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true,
							ticks: {
								// forces step size to be 50 units
								stepSize: 1
							}
						}
					}
				}
			});
		</script>
<?php endif; ?>
