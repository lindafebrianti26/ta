<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
	</div>

	<!-- Content Row -->
	<div class="row">
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								Jumlah Bayi Lahir
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?=$bayi?> Orang</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								Jumlah Bidan Praktek
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?=$bidan?> Orang</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								Jumlah Ibu Hamil
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?=$hamil?> Orang</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								Jumlah Bayi Lahir
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?=$lahir?> Orang</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Content Row -->

	<div class="row">

		<!-- Area Chart -->
		<div class="col-lg-8 offset-2">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Jumlah Kunjungan Bulanan</h6>
				</div>
				<!-- Card Body -->
				<div class="card-body">
					<div class="chart-area">
						<div class="chartjs-size-monitor">
							<div class="chartjs-size-monitor-expand">
								<div class=""></div>
							</div>
							<div class="chartjs-size-monitor-shrink">
								<div class=""></div>
							</div>
						</div>
						<canvas id="myAreaChart" style="display: block; width: 668px; height: 320px;"
								class="chartjs-render-monitor" width="668" height="320"></canvas>
					</div>
				</div>
			</div>
		</div>

		<!-- Pie Chart -->

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
							'rgba(255, 99, 132, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)'
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
