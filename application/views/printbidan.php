<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
   <table>
   	<tr>
   		<th>No</th>
			<th>Nama Bidan</th>
			<th>Jadwal Praktek</th>
			<th>No Telpn</th>
			<th>Alamat</th>
			
			<th class="text-center">Aksi</th>
		</tr>
		</thead>
		<tbody>
		<?php $no = 1; ?>
		<?php foreach ($data as $key): ?>
			<tr>
				
				<td><?= $no++; ?></td>
				<td><?= $key->nama_bidan?></td>
				<td><?= $key->jadwal_praktek?></td>
				<td><?= $key->no_tlpn ?></td>
				<td><?= $key->alamat?></td>
   	</tr>
		<?php endforeach ?>
   </table>
   <script type="text/javascript">
   	window.print();
   </script>
</body>
</html>