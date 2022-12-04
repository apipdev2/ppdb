
<html>
<head>
	<title><?= $title;?></title>
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
	<h2 style="text-align: center;">Laporan Biaya Formulir</h2>
	<p style="text-align: center;">Tanggal <?= date('d-m-Y',strtotime($tanggal1));?> s/d <?= date('d-m-Y',strtotime($tanggal2));?></p><hr>
	<table class="demo-table">
		<thead>
			<tr>
				<th>No</th>
				<th>No Pendaftaran</th>
				<th>Operator</th>
				<th>Tanggal</th>
				<th>Nama Peserta</th>
				<th>JK</th>
				<th>Jurusan</th>
				<th>Asal Sekolah</th>
				<th>Pendaftaran</th>
				<th>Kolektor</th>
				<th>Total</th>
			</tr>
		</thead>
		
		<tbody>
			<?php $no=1; foreach ($kolektif as $k): ?>
													
				<tr>
					<td><?= $no; ?></td>
					<td><?= $k->no_pendaftaran; ?></td>
					<td><?= $k->username; ?></td>
					<td><?= date('d-m-Y',strtotime($k->tanggal)); ?></td>
					<td><?= $k->nama_peserta; ?></td>
					<td><?= $k->jenis_kelamin; ?></td>
					<td><?= $k->nama_jurusan; ?></td>
					<td><?= $k->asal_sekolah; ?></td>
					<td>Rp.<?= number_format($k->biaya_pendaftaran);?> </td>
					<td>Rp.<?= number_format($k->cashback);?> </td>
					<td><?= number_format($k->biaya_pendaftaran - $k->cashback); ?></td>
					
				</tr>
				
				<?php $no++; endforeach ?>
			
		</tbody>
		<tfoot>
			<tr>
				<th colspan="8">Total</th>
				<th>Rp.<?= number_format($total_pendaftaran->j_pendaftaran); ?></th>
				<th>Rp.<?= number_format($total_cashback->j_cashback); ?></th>
				<th>Rp.<?= number_format($total_pendaftaran->j_pendaftaran - $total_cashback->j_cashback); ?></th>
			</tr>
		</tfoot>
	</table>

	<table style="margin: auto; margin-top: 40px; text-align: center;">
		<tr>
			<td></td>
			<td width="500"></td>
			<td>Tangerang, <?= date('d-m-Y'); ?></td>			
		</tr>
		<tr>
			<td>Bendahara</td>
			<td width="500"></td>
			<td>Operator</td>			
		</tr>
		<tr>
			<td height="75"></td>
			<td width="500" height="75"></td>
			<td height="75"></td>			
		</tr>
		<tr>
			<td style="font-weight: bold; text-decoration: underline;">ACHMAD SUHARDI, S. Pd</td>
			<td width="500"></td>
			<td style="font-weight: bold; text-decoration: underline;"><?= $operator; ?></td>			
		</tr>
	</table>
</body>
</html>