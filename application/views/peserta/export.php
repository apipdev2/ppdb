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
	<h2 style="text-align: center;">Data Pendaftar PPDB</h2>
	<table class="table" >
		<tr>
			<th>No</th>
			<th>No Pendaftaran</th>
			<th>nisn</th>
			<th>nik</th>
			<th>no_kk</th>
			<th>Nama</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>jenis_kelamin</th>
			<th>Asal Sekolah</th>
			<th>no_registrasi_akta_lahir</th>
			<th>agama</th>
			<th>berkebutuhan_khusus</th>
			<th>alamat</th>
			<th>tempat_tinggal</th>
			<th>moda_transportasi</th>
			<th>anak_ke</th>
			<th>jumlah_saudara_kandung</th>
			<th>nomor_hp</th>
			<th>email</th>
			<th>tinggi_badan</th>
			<th>berat_badan</th>
			<th>jarak</th>
			<th>jurusan</th>
			<th>jurusan2</th>
			<th>size_jurusan</th>
			<th>size_olahraga</th>
			<th>nama_ayah</th>
			<th>nik_ayah</th>
			<th>tempat_lahir_ayah</th>
			<th>tanggal_lahir_ayah</th>
			<th>pendidikan_ayah</th>
			<th>pekerjaan_ayah</th>
			<th>penghasilan_bulanan_ayah</th>
			<th>berkebutuhan_khusus_ayah</th>
			<th>no_ayah</th>
			<th>nama_ibu</th>
			<th>nik_ibu</th>
			<th>tempat_lahir_ibu</th>
			<th>tanggal_lahir_ibu</th>
			<th>pendidikan_ibu</th>
			<th>pekerjaan_ibu</th>
			<th>penghasilan_bulanan_ibu</th>
			<th>berkebutuhan_khusus_ibu</th>
			<th>no_ibu</th>
			<th>nama_wali</th>
			<th>nik_wali</th>
			<th>tempat_lahir_wali</th>
			<th>tanggal_lahir_wali</th>
			<th>pendidikan_wali</th>
			<th>pekerjaan_wali</th>
			<th>penghasilan_bulanan_wali</th>
			<th>no_wali</th>
			<th>Biaya Formulir</th>
			<th>Jenis Potongan</th>
			<th>Diskon</th>
			<th>DU1</th>
			<th>DU2</th>
			<th>DU3</th>
			<th>Total DU + Potongan + Diskon</th>
		</tr>
		<?php
		// header("Content-type: application/vnd-ms-excel");
		// header("Content-Disposition: attachment; filename=Data Peserta.xls");
		?>
		<?php $no=1; foreach ($peserta as $p): ?>
													
		<tr>
			<td><?= $no++; ?></td>
			<td>'<?= $p->no_pendaftaran; ?></td>
			<td>'<?= $p->nisn; ?></td>
			<td>'<?= $p->nik; ?></td>
			<td>'<?= $p->no_kk; ?></td>
			<td><?= $p->nama_peserta; ?></td>
			<td><?= $p->tempat_lahir; ?></td>
			<td><?= date('d-m-Y',strtotime($p->tanggal_lahir)); ?></td>
			<td><?= $p->jenis_kelamin; ?></td>
			<td><?= $p->asal_sekolah; ?></td>
			<td>'<?= $p->no_registrasi_akta_lahir;?></td>
			<td><?= $p->agama;?></td>
			<td><?= $p->berkebutuhan_khusus;?></td>
			<td><?= $p->alamat;?></td>
			<td><?= $p->tempat_tinggal;?></td>
			<td><?= $p->moda_transportasi;?></td>
			<td><?= $p->anak_ke;?></td>
			<td><?= $p->jumlah_saudara_kandung;?></td>
			<td>'<?= $p->nomor_hp;?></td>
			<td><?= $p->email;?></td>
			<td><?= $p->tinggi_badan;?></td>
			<td><?= $p->berat_badan;?></td>
			<td><?= $p->jarak;?></td>
			<td><?= $p->nama_jurusan;?></td>
			<td><?= $p->jurusan2;?></td>
			<td><?= $p->size_jurusan;?></td>
			<td><?= $p->size_olahraga;?></td>
			<td><?= $p->nama_ayah;?></td>
			<td>'<?= $p->nik_ayah;?></td>
			<td><?= $p->tempat_lahir_ayah;?></td>
			<td><?= date('d-m-Y',strtotime($p->tanggal_lahir_ayah));?></td>
			<td><?= $p->pendidikan_ayah;?></td>
			<td><?= $p->pekerjaan_ayah;?></td>
			<td><?= $p->penghasilan_bulanan_ayah;?></td>
			<td><?= $p->berkebutuhan_khusus_ayah;?></td>
			<td>'<?= $p->no_ayah;?></td>
			<td><?= $p->nama_ibu;?></td>
			<td>'<?= $p->nik_ibu;?></td>
			<td><?= $p->tempat_lahir_ibu;?></td>
			<td><?= date('d-m-Y',strtotime($p->tanggal_lahir_ibu));?></td>
			<td><?= $p->pendidikan_ibu;?></td>
			<td><?= $p->pekerjaan_ibu;?></td>
			<td><?= $p->penghasilan_bulanan_ibu;?></td>
			<td><?= $p->berkebutuhan_khusus_ibu;?></td>
			<td>'<?= $p->no_ibu;?></td>
			<td><?= $p->nama_wali;?></td>
			<td>'<?= $p->nik_wali;?></td>
			<td><?= $p->tempat_lahir_wali;?></td>
			<td><?= date('d-m-Y',strtotime($p->tanggal_lahir_wali));?></td>
			<td><?= $p->pendidikan_wali;?></td>
			<td><?= $p->pekerjaan_wali;?></td>
			<td><?= $p->penghasilan_bulanan_wali;?></td>
			<td>'<?= $p->no_wali;?></td>
			<td>
				<?php
				$formulir = $this->db->get_where('tbl_kolektif',['id_peserta'=>$p->id_peserta]); 				

 				if ($formulir->num_rows() > 0) {
 					echo number_format($formulir->row()->biaya_pendaftaran);
 				}
				 ?>
			</td>
			<td>
				<?php
				$potongan = $this->db->get_where('tbl_potongan',['id_potongan'=>$p->id_potongan]); 				

 				if ($potongan->num_rows() > 0) {
 					$jenis_potongan = $potongan->row()->jenis_potongan;
 					$j_potongan = $potongan->row()->nominal;
 					echo $jenis_potongan;
 				}
				 ?>
			</td>
			<td>
				<?php
				$tp = $this->db->get_where('transaksi_pembayaran',['no_pendaftaran'=>$p->no_pendaftaran]);		

 				if ($tp->num_rows() > 0) {
 					echo number_format($tp->row()->diskon);
 				}
				 ?>
			</td>
			<td>
				<?php
				$tp = $this->db->get_where('transaksi_pembayaran',['no_pendaftaran'=>$p->no_pendaftaran,'id_jenis'=>'2']);		

 				if ($tp->num_rows() > 0) {
 					echo number_format($tp->row()->besarnya_pembayaran);
 				}
				 ?>
			</td>
			<td>
				<?php
				$tp = $this->db->get_where('transaksi_pembayaran',['no_pendaftaran'=>$p->no_pendaftaran,'id_jenis'=>'6']);		

 				if ($tp->num_rows() > 0) {
 					echo number_format($tp->row()->besarnya_pembayaran);
 				}
				 ?>
			</td>
			<td>
				<?php
				$tp = $this->db->get_where('transaksi_pembayaran',['no_pendaftaran'=>$p->no_pendaftaran,'id_jenis'=>'7']);		

 				if ($tp->num_rows() > 0) {
 					echo number_format($tp->row()->besarnya_pembayaran);
 				}
				 ?>
			</td>
			<td>
				<?php
				$jml_du = $this->db->select_sum('besarnya_pembayaran')->where('no_pendaftaran',$p->no_pendaftaran)->get('transaksi_pembayaran');	
				$jml_diskon = $this->db->get_where('transaksi_pembayaran',['no_pendaftaran'=>$p->no_pendaftaran]);		

 				if ($jml_du->num_rows() > 0 && $jml_diskon->num_rows() > 0) {

 					$du = $jml_du->row()->besarnya_pembayaran;
 					$diskon = $jml_diskon->row()->diskon;
 					echo number_format($j_potongan + $diskon + $du);
 				}
				 ?>
			</td>
			
		<?php endforeach ?>
	</table>
</body>
</html>