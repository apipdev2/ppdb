<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Bio Peserta</title>
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  </head>
  <script>
	window.print();
</script>
  <body>
  	<div class="container-fluid">

  	<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">									
									<h4 class="text-center">Data Diri</h4>
								</div>
								<div class="card-body">

										<div class="row">
											<div class="col-md-6">
											<table >
												<tr>
													<th>No Pendaftaran</th>
													<td>:</td>
													<td><?= $peserta->no_pendaftaran;?></td>
												</tr>
												<tr>												
													<th>NIK</th>
													<td>:</td>
													<td><?= $peserta->nik;?></td>
												</tr>
												<tr>												
													<th>NISN</th>
													<td>:</td>
													<td><?= $peserta->nisn;?></td>
												</tr>
												<tr>
													<th>Nama Peserta</th>
													<td>:</td>
													<td><?= $peserta->nama_peserta;?></td>
												</tr>
												<tr>
													<th>Jenis Kelamin</th>
													<td>:</td>
													<td><?= $peserta->jenis_kelamin;?></td>
												</tr>
												<tr>
													<th>Tempat, Tanggal Lahir</th>
													<td>:</td>
													<td><?= $peserta->tempat_lahir.', '.$peserta->tanggal_lahir;?></td>
												</tr>
												<tr>
													<th>Agama</th>
													<td>:</td>
													<td><?= $peserta->agama;?></td>
												</tr>
												<tr>
													<th>Alamat</th>
													<td>:</td>
													<td><?= $peserta->alamat;?></td>
												</tr>
												<tr>
													<th>Asal Sekolah</th>
													<td>:</td>
													<td><?= $peserta->asal_sekolah;?></td>
												</tr>
												<tr>
													<th>Jurusan</th>
													<td>:</td>
													<td><?= $peserta->nama_jurusan;?></td>
												</tr>
												<tr>
													<th>Jurusan2</th>
													<td>:</td>
													<td><?= $peserta->jurusan2;?></td>
												</tr>
												<tr>
													<th>Tempat Tinggal</th>
													<td>:</td>
													<td><?= $peserta->tempat_tinggal;?></td>
												</tr>
												<tr>
													<th>Jarak</th>
													<td>:</td>
													<td><?= $peserta->jarak;?></td>
												</tr>

												<tr>
													<th>Moda Transportasi</th>
													<td>:</td>
													<td><?= $peserta->moda_transportasi;?></td>
												</tr>
												
											</table>
												   

												
											</div>
											<div class="col-md-6">
												
												<table >
												
												<tr>
													<th>Berkebutuhan Khusus</th>
													<td>:</td>
													<td><?= $peserta->berkebutuhan_khusus;?></td>
												</tr>
												<tr>												
													<th>Tinggi Badan</th>
													<td>:</td>
													<td><?= $peserta->tinggi_badan;?> Cm</td>
												</tr>
												<tr>												
													<th>Berat Badan</th>
													<td>:</td>
													<td><?= $peserta->berat_badan;?> Kg</td>
												</tr>
												<tr>
													<th>Anak Ke-</th>
													<td>:</td>
													<td><?= $peserta->anak_ke;?></td>
												</tr>
												<tr>
													<th>Jumlah saudara</th>
													<td>:</td>
													<td><?= $peserta->jumlah_saudara_kandung;?></td>
												</tr>
												<tr>
													<th>No KIP</th>
													<td>:</td>
													<td><?= $peserta->no_kip;?></td>
												</tr>
												<tr>
													<th>No Akata Lahir</th>
													<td>:</td>
													<td><?= $peserta->no_registrasi_akta_lahir;?></td>
												</tr>
												<tr>
													<th>No HP</th>
													<td>:</td>
													<td><?= $peserta->nomor_hp;?></td>
												</tr>
												<tr>
													<th>Email</th>
													<td>:</td>
													<td><?= $peserta->email;?></td>
												</tr>
												<tr>
													<th>Jurusan</th>
													<td>:</td>
													<td><?= $peserta->nama_jurusan;?></td>
												</tr>
												<tr>
													<th>Jurusan2</th>
													<td>:</td>
													<td><?= $peserta->jurusan2;?></td>
												</tr>
												<tr>
													<th>Tempat Tinggal</th>
													<td>:</td>
													<td><?= $peserta->tempat_tinggal;?></td>
												</tr>
												<tr>
													<th>Jarak</th>
													<td>:</td>
													<td><?= $peserta->jarak;?></td>
												</tr>
												<tr>
													<th>Moda Transportasi</th>
													<td>:</td>
													<td><?= $peserta->moda_transportasi;?></td>
												</tr>
											</table>
											</div>
										</div>
										
								</div>

								<!-- data orang tua -->
								<div class="card-header">									
									<h4 class="text-center">Data Orang Tua</h4>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<table >
												
												<tr>												
													<th>NIK</th>
													<td>:</td>
													<td><?= $peserta->nik_ayah;?></td>
												</tr>
												
												<tr>
													<th>Nama Ayah</th>
													<td>:</td>
													<td><?= $peserta->nama_ayah;?></td>
												</tr>
												
												<tr>
													<th>Tempat, Tanggal Lahir</th>
													<td>:</td>
													<td><?= $peserta->tempat_lahir_ayah.', '.date('d-m-Y',strtotime($peserta->tanggal_lahir_ayah));?></td>
												</tr>
												<tr>
													<th>Pendidikan</th>
													<td>:</td>
													<td><?= $peserta->pendidikan_ayah;?></td>
												</tr>
												<tr>
													<th>Pekerjaan</th>
													<td>:</td>
													<td><?= $peserta->pekerjaan_ayah;?></td>
												</tr>
												<tr>
													<th>Penghasilan</th>
													<td>:</td>
													<td><?= $peserta->penghasilan_bulanan_ayah;?></td>
												</tr>
												<tr>
													<th>Berkebutuhan Khusus</th>
													<td>:</td>
													<td><?= $peserta->berkebutuhan_khusus_ayah;?></td>
												</tr>
												
												
											</table>
										</div>
										<div class="col-md-6">
											<table >
												
												<table >
												
												<tr>												
													<th>NIK</th>
													<td>:</td>
													<td><?= $peserta->nik_ibu;?></td>
												</tr>
												
												<tr>
													<th>Nama Ibu</th>
													<td>:</td>
													<td><?= $peserta->nama_ibu;?></td>
												</tr>
												
												<tr>
													<th>Tempat, Tanggal Lahir</th>
													<td>:</td>
													<td><?= $peserta->tempat_lahir_ibu.', '.date('d-m-Y',strtotime($peserta->tanggal_lahir_ibu));?></td>
												</tr>
												<tr>
													<th>Pendidikan</th>
													<td>:</td>
													<td><?= $peserta->pendidikan_ibu;?></td>
												</tr>
												<tr>
													<th>Pekerjaan</th>
													<td>:</td>
													<td><?= $peserta->pekerjaan_ibu;?></td>
												</tr>
												<tr>
													<th>Penghasilan</th>
													<td>:</td>
													<td><?= $peserta->penghasilan_bulanan_ibu;?></td>
												</tr>
												<tr>
													<th>Berkebutuhan Khusus</th>
													<td>:</td>
													<td><?= $peserta->berkebutuhan_khusus_ibu;?></td>
												</tr>
												
												
											</table>
										</div>
									</div>
								</div>

								<!-- wali -->
								<div class="card-header">									
									<h4 class="text-center">Data Wali</h4>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<table >
												
												<tr>												
													<th>NIK</th>
													<td>:</td>
													<td><?= $peserta->nik_wali;?></td>
												</tr>
												
												<tr>
													<th>Nama Ibu</th>
													<td>:</td>
													<td><?= $peserta->nama_wali;?></td>
												</tr>
												
												<tr>
													<th>Tempat, Tanggal Lahir</th>
													<td>:</td>
													<td><?= $peserta->tempat_lahir_wali.', '.date('d-m-Y',strtotime($peserta->tanggal_lahir_wali));?></td>
												</tr>
												<tr>
													<th>Pendidikan</th>
													<td>:</td>
													<td><?= $peserta->pendidikan_wali;?></td>
												</tr>
												<tr>
													<th>Pekerjaan</th>
													<td>:</td>
													<td><?= $peserta->pekerjaan_wali;?></td>
												</tr>
												<tr>
													<th>Penghasilan</th>
													<td>:</td>
													<td><?= $peserta->penghasilan_bulanan_wali;?></td>
												</tr>
												
												
											</table>
										</div>
									</div>
								</div>

								

							</div>
						</div>


	</div>
	</div>
   
  </body>
</html>