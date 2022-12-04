
<html>
<head>
	<title><?= $title;?></title>
	<style type="text/css">
		/* Table */
		body {
			font-family: "lucida Sans Unicode", "Lucida Grande", "Segoe UI", vardana
		}
		table{
			padding: 0px;
			margin: 2px;
		}
		#header{
			text-align: center;						
		}
		#header,h2{
			margin: 2px;
		}
		#judul{
			border-top: double;
			border-bottom: double;
			background: yellow;
			text-align: center;
			padding: 6px;
		}
		#judul,h3{
			margin: auto;
		}
		.isi{
			border-bottom: solid 1px #95a5a6;
		}
		
	</style>
</head>
<body style="margin:0px,50px,0px,50px; padding: 0px; font-size: 8px;">
	
	<table width="100%">
		<tr>
			<td id="header" colspan="3">
				<h2>PANITIA PENERIMAAN PESERTA DIDIK BARU (PPDB) <br> SMK PGRI 1 BALARAJA</h2>
				<h3>TAHUN PELAJARAN 2022/2023</h3><br>
			</td>
		</tr>
		<tr>
			<td id="judul" colspan="3">
				<h3 style="text-transform: uppercase;">BUKTI PEMBAYARAN <?= $kwitansi->jenis_pembayaran; ?></h3>
			</td>
		</tr>
		<br>
		<tr>
			<td width="22%">No Pendaftaran/No.DU</td>
			<td width="2%">:</td>
			<td class="isi"><?= $kwitansi->no_pendaftaran; ?>/<?= $kwitansi->kode_pembayaran; ?></td>
		</tr>
		<tr>
			<td width="22%">Sudah terima dari</td>
			<td width="2%">:</td>
			<td class="isi" style=" text-transform: uppercase;"><b><?= $kwitansi->nama_peserta; ?></b></td>
		</tr>
		
		<tr>
			<td width="22%">Asal Sekolah</td>
			<td width="2%">:</td>
			<td class="isi" ><?= $kwitansi->asal_sekolah; ?></td>
		</tr>
		<tr>
			<td width="22%">Jurusan</td>
			<td width="2%">:</td>
			<td class="isi"><?= $kwitansi->nama_jurusan; ?></td>
		</tr>
		<tr>
			<td width="22%">Uang Sejumlah</td>
			<td width="2%">:</td>
			<td class="isi" style="font-style: italic; font-weight: bold"><?= $terbilang; ?></td>
		</tr>
		<tr>
			<td width="22%">Untuk Pembayaran</td>
			<td width="2%">:</td>
			<td class="isi">Daftar Ulang PPDB SMK PGRI 1 Balaraja Tahun Pelajaran 2022/2023</td>
		</tr>
		<tr>
			<td width="22%">Sudah Dibayar</td>
			<td width="2%">:</td>
			<td class="isi"><?= number_format($kwitansi->besarnya_pembayaran); ?></td>
		</tr>
		<tr>
			<td width="22%">Belum Dibayar</td>
			<td width="2%">:</td>
			<td class="isi">Daftar Ulang PPDB SMK PGRI 1 Balaraja Tahun Pelajaran 2022/2023</td>
		</tr>
		
		
	</table>

	
	<table width="100%">
		<tr>
			<td width="40%" style="font-weight: bold; border-top: 1px solid; border-bottom: 1px solid; padding:10px;background:#ecf0f1; font-style: italic; ">Terbilang | Rp.<?= number_format($kwitansi->besarnya_pembayaran); ?></td>
			<td width="40%" style="height: 40px;"></td>
			<td width="40%" style="text-align: center;">Balaraja, <?= date('d-m-Y', strtotime($kwitansi->tgl_bayar)); ?><br>Operator</td>
		</tr>			
	</table>


	<table width="100%">
		<tr>
			<td width="40%">Seragam Juruan :<?= $kwitansi->size_jurusan; ?>| Seragam Olahraga : <?= $kwitansi->size_olahraga; ?></td>
			<td width="40%"style="height: 40px;"></td>
			<td width="40%" style="text-align: center; font-weight: bold;"><?= $kwitansi->username; ?></td>
		</tr>			
	</table>
</body>
</html>