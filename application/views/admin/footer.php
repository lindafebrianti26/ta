 <!-- /.container-fluid -->


 <!-- End of Main Content -->

 <!-- Footer -->


 <!-- End of Footer -->

 </div>
 <!-- End of Content Wrapper -->

 </div>
 <!-- End of Page Wrapper -->

 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
 	<i class="fas fa-angle-up"></i>
 </a>

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 	<div class="modal-dialog" role="document">
 		<div class="modal-content">
 			<div class="modal-header">
 				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
 				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
 					<span aria-hidden="true">×</span>
 				</button>
 			</div>
 			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
 			<div class="modal-footer">
 				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
 				<a class="btn btn-primary" href="login.html">Logout</a>
 			</div>
 		</div>
 	</div>
 </div>




 <!-- Bootstrap core JavaScript-->
 <script src="<?= base_url('assets/backend/'); ?>vendor/jquery/jquery.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
 <script type="text/javascript">
 	$(document).ready(function() {
 		$('.table').DataTable();
 	});
 </script>

 <script src="<?= base_url('assets/backend/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="<?= base_url('assets/backend/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="<?= base_url('assets/backend/'); ?>js/sb-admin-2.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.0/dist/chart.min.js"></script>
 <canvas id="myChart" width="400" height="400"></canvas>
 <?php
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
 </body>

 </html>
