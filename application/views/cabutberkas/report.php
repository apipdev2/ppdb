
<html>
<head>
	<style type="text/css">
		/* Table */
		body {
			font-family: "lucida Sans Unicode", "Lucida Grande", "Segoe UI", vardana
		}
		.demo-table {
			border-collapse: collapse;
			font-size: 13px;
		}
		.demo-table th, 
		.demo-table td {
			padding: 7px 17px;
		}
		.demo-table .title {
			caption-side: bottom;
			margin-top: 12px;
		}
		.demo-table thead th:last-child,
		.demo-table tfoot th:last-child,
		.demo-table tbody td:last-child {
			border: 0;
		}

		/* Table Header */
		.demo-table thead th {
			border-right: 1px solid #c7ecc7;
			text-transform: uppercase;
		}

		/* Table Body */
		.demo-table tbody td {
			color: #353535;
			border-right: 1px solid #c7ecc7;
		}
		.demo-table tbody tr:nth-child(odd) td {
			background-color: #f4fff7;
		}
		.demo-table tbody tr:nth-child(even) td {
			background-color: #dbffe5;
		}
		.demo-table tbody td:nth-child(4),
		.demo-table tbody td:first-child,
		.demo-table tbody td:last-child {
			text-align: right;
		}
		.demo-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
			transition: all .2s;
		}

		/* Table Footer */
		.demo-table tfoot th {
			border-right: 1px solid #c7ecc7;
		}
		.demo-table tfoot th:first-child {
			text-align: right;
		}
	</style>
</head>
<body>
	<h2 style="text-align: center;">Data Cabut Berkas</h2><hr>
	<table class="demo-table">
		<thead>
			<tr>
				<th>No</th>
				<th>No Pendaftaran</th>
				<th>Nama</th>
				<th>Jurusan</th>
				<th>Asal Sekolah</th>
				<th>Total DU</th>
				<th>Potongan</th>
				<th>Diterima</th>
			</tr>
		</thead>
		
		<tbody>
			<?php $j ?>
			<?php $no=1; foreach ($peserta as $p): ?>
				
			<tr>
				<td><?= $no; ?></td>
				<td><?= $p->no_pendaftaran; ?></td>
				<td><?= $p->nama_peserta; ?></td>
				<td><?= $p->nama_jurusan; ?></td>
				<td><?= $p->asal_sekolah; ?></td>													
				<td><?= number_format($p->total_du); ?></td>
				<td><?= number_format($p->potongan_cb); ?></td>
				<td><?= number_format($p->diterima); ?></td>
			</tr>
		<?php $no++; endforeach ?>
			
		</tbody>
		<tfoot>
			<tr>
				<th colspan="7">Total</th>
				<th><?= number_format($total->jml); ?></th>
			</tr>
		</tfoot>
	</table>
</body>
</html>