			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title"><?= $title; ?></h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="<?= base_url('Dashboard'); ?>">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="<?= base_url('Peserta'); ?>">Data Peserta</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#"><?= $title; ?></a>
							</li>
							
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">									
									<h2 class="text-center">Data Diri</h2>
									<a href="<?= base_url('Peserta/print_view/'.encrypt_url($peserta->id_peserta)); ?>" class="btn btn-primary float-right" target="_blank">Print</a>
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
												
											</table>
												   

												
											</div>
											<div class="col-md-6">
												
												<table >
												<tr>
													<th>Moda Transportasi</th>
													<td>:</td>
													<td><?= $peserta->moda_transportasi;?></td>
												</tr>
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
									<h2 class="text-center">Data Orang Tua</h2>
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
									<h2 class="text-center">Data Wali</h2>
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

								<!-- wali -->
								<div class="card-header">									
									<h2 class="text-center">Data Berkas</h2>
								</div>
								<div class="card-body">
											
									
											
											<table class="table">
												<tr>
													<th>Berkas</th>
													<th>Nama Berkas</th>
													<th>#</th>
												</tr>
											<?php foreach ($berkas as $berkas): ?>
												<tr>
													<td><?= $berkas->jenis_berkas; ?></td>
													<td> <img src="<?= base_url('assets/images/foto/'.$berkas->image); ?>"  alt="foto" width="100" height="100"></td>
													<td>
														<a href="<?=base_url('Peserta/download/'.$berkas->image);?>" class="btn btn-info">Download</a>
													</td>
												</tr>
											<?php endforeach ?>
											</table>
											

									
								</div>

							</div>
						</div>


					</div>
				</div>
			</div>



