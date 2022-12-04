
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
<body>
	
	<table width="100%">
		<tr>
			<td id="header" colspan="3">
				<h2>SMK PGRI 1 BALARAJA</h2>
				<h3>TAHUN PELAJARAN 2022/2023</h3><br>
			</td>
		</tr>
		<tr>
			<td id="judul" colspan="3">
				<h3>TANDA TERIMA CABUT BERKAS</h3>
			</td>
		</tr>
		<br>
		<tr>
			<td width="22%">No Pendaftaran/No.DU</td>
			<td width="2%">:</td>
			<td class="isi"><?= $kwitansi->no_pendaftaran; ?>/<?= $kwitansi->kode_pembayaran; ?></td>
		</tr>
		<tr>
			<td width="22%">Telah terima dari</td>
			<td width="2%">:</td>
			<td class="isi"><b>Panitia PPDB SMK 1 PGRI Balaraja</b></td>
		</tr>
		
		<tr>
			<td width="22%">Uang sejumlah</td>
			<td width="2%">:</td>
			<td class="isi" style="font-weight: bold; font-style: italic; "><?=to_word($terbilang); ?></td>
		</tr>
		<tr>
			<td width="22%">Untuk pembayaran</td>
			<td width="2%">:</td>
			<td class="isi">Cabut Berkas PPDB dengan rincian sebagai berikut</td>
		</tr>
		
		
	</table>
	<table width="100%" border="1" style="padding: 0px; border: 1px; border-collapse: collapse; font-size: 12px;" >
		<tr>
			<th style="padding: 5px;">Nama</th>
			<th style="padding: 5px;">JK</th>
			<th style="padding: 5px;">Jurusan</th>
			<th style="padding: 5px;">Asal Sekolah</th>
			<th style="padding: 5px;">Total DU</th>
			<th style="padding: 5px;">Potongan</th>
			<th style="padding: 5px;">Diterima</th>
		</tr>
		<tr>
			<td style="padding: 5px;"><?= $kwitansi->nama_peserta; ?></td>
			<td style="padding: 5px;"><?= $kwitansi->jenis_kelamin; ?></td>
			<td style="padding: 5px;"><?= $kwitansi->nama_jurusan; ?></td>
			<td style="padding: 5px;"><?= $kwitansi->asal_sekolah; ?></td>
			<td style="padding: 5px;"><?= number_format($kwitansi->total_du); ?></td>
			<td style="padding: 5px;"><?= number_format($kwitansi->potongan_cb); ?></td>
			<td style="padding: 5px;"><?= number_format($kwitansi->diterima); ?></td>
		</tr>
	</table>

	<table width="100%">
		<tr>
			<td width="40%" style="font-weight: bold; border-top: 1px solid; border-bottom: 1px solid; padding:10px;background:#ecf0f1; font-style: italic; ">Rp.<?= number_format($terbilang); ?></td>
			<td width="40%" style="text-align: center;">Panitia/Operataor<</td>
			<td width="40%" style="text-align: center;">Balaraja, <?= date('d-m-Y', strtotime($kwitansi->tanggal_cb)); ?><br>Penerima</td>
		</tr>			
	</table>

	<table width="100%">
		<tr>
			<td width="40%"></td>
			<td width="40%"style="text-align: center; font-weight: bold;"><?= $kwitansi->username; ?></td>
			<td width="40%" style="text-align: center; font-weight: bold;"><?= $kwitansi->pencabut_berkas; ?></td>
		</tr>			
	</table>

	
</body>
</html>