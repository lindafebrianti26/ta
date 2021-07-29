

	
	<div class="container-fluid">

        <!-- Page Heading -->
         <?php if ($this->session->flashdata('info')){ ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('info'); ?>
            </div>
         <?php } ?>

			<h3 class="h5 mb-6 text-gray-800">Halaman <?= $judul; ?> 		<a href="<?= site_url('admin/dataibu/tambah') ?>" class="btn btn-outline-primary btn-sm float-right">
			<span class="fa fa-plus"></span> Tambah Data
		</a></h3> <hr>
		

	<table class="table table-bordered table-hover">
		<thead>
		<tr style="background-color: #4e73df; color: white; font-weight: bold;">
			<th>No</th>
			<th>Nama Ibu</th>
			<th>Nama Suami</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Cara Persalinan</th>
			<th>Kondisi Ibu</th>
			<th>Berat Bayi</th>
			<th>Panjang Bayi</th>
			<th>Kondisi Bayi</th>
			<th class="text-center">Aksi</th>
		</tr>
		</thead>
		<tbody>
		<?php $no = 1; ?>
		<?php foreach ($data as $key): ?>
			<tr>
				
				<td><?= $no++; ?></td>
				<td><?= $key->nama_ibu ?></td>
				<td><?= $key->nama_suami ?></td>
				<td><?= $key->umur ?></td>
				<td><?= $key->alamat?></td>
				<td><?= $key->cara_persalinan?></td>
				<td><?= $key->kondisi_ibu?></td>
				<td><?= $key->berat_bayi?></td>
				<td><?= $key->panjang_bayi?></td>
				<td><?= $key->kondisi_bayi?></td>
				<td class="text-center">
					
					<a href="<?= site_url('admin/dataibu/edit/'.$key->id) ?>" class="btn btn-outline-info btn-sm">
						<span class="fa fa-edit"></span> Edit
					</a>
					<a href="<?= site_url('admin/dataibu/hapus/'.$key->id) ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus data ini ? ')">
						<span class="fa fa-trash"></span> Hapus
					</a>
				</td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>
</div>

    </div>



