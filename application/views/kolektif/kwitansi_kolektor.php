
<html>
<head>
	<title><?= $title;?></title>
	<style type="text/css">
		/* Table */
		body {
			font-family: "lucida Sans Unicode", "Lucida Grande", "Segoe UI", vardana
		}
		table{
			padding: 20px;
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
				<h2>SMK PGRI 1 BALARAJA</h2>
				<h3>TAHUN PELAJARAN 2022/2023</h3><br>
			</td>
		</tr>
		<tr>
			<td id="judul" colspan="3">
				<h3>BUKTI PEMBAYARAN KOLEKTOR</h3>
			</td>
		</tr>
		<br>
		<tr>
			<td width="22%">No Pendaftaran</td>
			<td width="2%">:</td>
			<td class="isi"><?= $kwitansi->no_pendaftaran; ?></td>
		</tr>
		<tr>
			<td width="22%">Telah terima dari</td>
			<td width="2%">:</td>
			<td class="isi"><b>Panitia PPDB SMK 1 PGRI Balaraja</b></td>
		</tr>
		
		<tr>
			<td width="22%">Uang sejumlah</td>
			<td width="2%">:</td>
			<td class="isi" style=" font-style: italic;"><?= $terbilang; ?></td>
		</tr>
		<tr>
			<td width="22%">Untuk pembayaran</td>
			<td width="2%">:</td>
			<td class="isi">Kolektor PPDB atas nama <?= $kwitansi->nama_peserta; ?> asal sekolah <?= $kwitansi->asal_sekolah; ?> jurusan <?= $kwitansi->nama_jurusan; ?></td>
		</tr>
		<tr>
			<td colspan="3" style="border-bottom: solid 1px #95a5a6; height: 20px; "></td>
		</tr>
		
	</table>

	<table width="100%">
		<tr>
			<td width="40%" style="font-weight: bold; border-top: 1px solid; border-bottom: 1px solid; padding:10px;background:#ecf0f1; font-style: italic; ">Rp.<?= number_format($kwitansi->cashback); ?></td>
			<td width="40%" style="text-align: center;">Operataor<</td>
			<td width="40%" style="text-align: center;">Balaraja, <?= date('d-m-Y', strtotime($kwitansi->tanggal)); ?><br>Penerima</td>
		</tr>			
	</table>


	<table width="100%">
		<tr>
			<td width="40%"></td>
			<td width="40%"style="text-align: center; font-weight: bold;"><?= $kwitansi->username; ?></td>
			<td width="40%" style="text-align: center; font-weight: bold;"><?= $kwitansi->nama_kolektif; ?></td>
		</tr>			
	</table>
</body>
</html>