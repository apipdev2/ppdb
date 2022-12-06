
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
	<h2 style="text-align: center; margin: 0px;"><?= $title; ?></h2>
	<p style="text-align: center; margin: 0px;">PENERIMAAN PESERTA DIDIK BARU TAHUN PELAJARAN 2022/2023</p>
	<p style="text-align: center; margin: 0px;">SMK PGRI 1 BALARAJA</p>
	<hr>
	<table class="demo-table" width="100%">
		<thead>
			<tr>
				<th>No</th>
				<th>No Pendaftaran</th>
				<th>Nama Peserta</th>
				<th>JK</th>
				<th>Jurusan</th>
				<th>Dibayar</th>
				<th>Sisa</th>
				<th>Status</th>
			</tr>
		</thead>
		
		<tbody>
			<?php $no=1; foreach ($du as $du): ?>
				<?php 

					$dibayar = $this->db->select_sum('besarnya_pembayaran','j_dibayar')
					->where('no_pendaftaran',$du->no_pendaftaran)
					->get('Transaksi_pembayaran')->row();

					$diskon = $this->db->select_sum('diskon','j_diskon')
					->where('no_pendaftaran',$du->no_pendaftaran)
					->get('Transaksi_pembayaran')->row();

					$potongan = $this->db->select('*')
								->from('peserta p')
								->join('tbl_potongan pt','pt.id_potongan = p.id_potongan')
								->where('no_pendaftaran',$du->no_pendaftaran)
								->get()->row();

					$jml_pembayaran = $dibayar->j_dibayar + $potongan->nominal + $diskon->j_diskon;

					$sisa = 2000000 - $jml_pembayaran;

					if ($jml_pembayaran >= 2000000) {
						$status ='LUNAS';
					}else{
						$status ="Belum LUNAS";
					}
				 ?>
				
				<tr>
					<td><?= $no; ?></td>
					<td><?= $du->no_pendaftaran; ?></td>
					<td><?= $du->nama_peserta; ?></td>
					<td><?= $du->jenis_kelamin; ?></td>
					<td><?= $du->nama_jurusan; ?></td>
					<td>Rp.<?= number_format($jml_pembayaran ); ?></td>
					<td>Rp.<?= number_format($sisa); ?></td>
					<td><?= $status;?></td>
					
				</tr>
			
			<?php $no++; endforeach ?>
			
		</tbody>
		
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
			<td style="font-weight: bold; text-decoration: underline;"><?= $du->username; ?></td>			
		</tr>
	</table>
</body>
</html>