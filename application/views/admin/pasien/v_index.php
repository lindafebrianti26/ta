
	<div class="container-fluid">

        <!-- Page Heading -->
         <?php if ($this->session->flashdata('info')){ ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('info'); ?>
            </div>
         <?php } ?>
        <h3 class="h5 mb-6 text-gray-800">Halaman <?= $judul; ?> 		<a href="<?= site_url('admin/datapasien/tambah') ?>" class="btn btn-outline-primary btn-sm float-right">
			<span class="fa fa-plus"></span> Tambah Data
		</a></h3> <hr>

	<table class="table table-bordered table-hover">
		<thead>
		<tr style="background-color: #4e73df; color: white; font-weight: bold;">
			<th>No</th>
			<th>Tanggal Periksa</th>
			<th>Nama Lengkap</th>
			<th>Nama Suami</th>
			<th>Umur</th>
			<th>Alamat</th>
		    <th>Usia Kehamilan</th>
		    <th>Taksiran Persalinan</th>
	
			<th class="text-center">Aksi</th>
		</tr>
		</thead>
		<tbody>
		<?php $no = 1; ?>
		<?php foreach ($data as $key): ?>
			<tr>
				
				<td><?= $no++; ?></td>
				<td><?= $key->tgl_periksa ?></td>
				<td><?= $key->nama_lengkap ?></td>
				<td><?= $key->nama_suami ?></td>
				<td><?= $key->umur ?></td>
				<td><?= $key->alamat ?></td>
				<td><?= $key->usia_kehamilan?></td>
				<td><?= $key->taksiran_persalinan?></td>
				<td class="text-center">
					
					<a href="<?= site_url('admin/datapasien/edit/'.$key->id) ?>" class="btn btn-outline-info btn-sm">
						<span class="fa fa-edit"></span> Edit
					</a>
					<a href="<?= site_url('admin/datapasien/hapus/'.$key->id) ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus data ini ? ')">
						<span class="fa fa-trash"></span> Hapus
					</a>
				</td>
			</tr>
		<?php endforeach ?>
		</tbody>
	</table>
</div>

    </div>



