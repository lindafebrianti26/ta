


<div class="container-fluid">

	<!-- Page Heading -->
	<?php if ($this->session->flashdata('info')){ ?>
		<div class="alert alert-success">
			<?php echo $this->session->flashdata('info'); ?>
		</div>
	<?php } ?>

	<h3 class="h5 mb-6 text-gray-800">Halaman Laporan</h3> 
	
	<a class="btn btn-primary mb-2 ml-auto" target="_blank" href="<?= site_url('admin/laporanpasien/cetakIbuHamil') ?>" > <i class=fa fa-print></i> Cetak Laporan Ibu Hamil</a>

	<a class="btn btn-primary mb-2 ml-auto" href="<?= site_url('admin/laporanibu/cetakIbuBersalin') ?>" > <i class=fa fa-print></i> Cetak Laporan Ibu Bersalin</a>

	<a class="btn btn-primary mb-2 ml-auto" href="<?= site_url('admin/laporanbayi/cetakbayi') ?>" > <i class=fa fa-print></i> Cetak Laporan Bayi</a>
	
	<a class="btn btn-primary mb-2 ml-auto" href="<?= site_url('admin/laporanpeserta/cetakPeserta') ?>" > <i class=fa fa-print></i>Cetak Laporan Peserta KB</a>
	
	<a class="btn btn-primary mb-2 ml-auto" href="<?= site_url('admin/laporankb/cetakkeluargakb') ?>" > <i class=fa fa-print></i> Cetak Laporan KB</a>

</div>



