<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title;?></title>
	<style>
		body {
			font-family: "lucida Sans Unicode", "Lucida Grande", "Segoe UI", vardana
		}
		.table {
			border-collapse: collapse;
			font-size: 13px;
		}
		.table th, 
		.table td {
			padding: 7px 17px;
		}
		.table th {
			border: 1px solid #c7ecc7;
			text-transform: uppercase;
		}

		/* Table Body */
		.table td {
			color: #353535;
			border: 1px solid #c7ecc7;
		}
	</style>
</head>
<body>
	<h2>Data Peserta PPDB</h2>
	<table class="table" >
		<tr>
			<th>No</th>
			<th>No Pendaftaran</th>
			<th>Nama</th>
			<th>Tempat Lahir</th>
			<th>Tangagl Lahir</th>
			<th>Asal Sekolah</th>
		</tr>
		<?php
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=Data Peserta.xls");
		?>
		<?php $no=1; foreach ($peserta as $p): ?>
													
		<tr>
			<td><?= $no; ?></td>
			<td>'<?= $p->no_pendaftaran; ?></td>
			<td><?= $p->nama_peserta; ?></td>
			<td><?= $p->tempat_lahir; ?></td>
			<td><?= date('d-m-Y',strtotime($p->tanggal_lahir)); ?></td>
			<td><?= $p->asal_sekolah; ?></td>
			
		<?php endforeach ?>
	</table>
</body>
</html>