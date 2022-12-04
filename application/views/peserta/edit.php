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
								<a href="<?= base_url('Peserta'); ?>">Peserta</a>
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
									
								</div>
								
								<div class="card-body">

									
									<form action="" method="post">
										<div id="pribadi">
											<h2 class="text-center bg-info text-light">
												Data Pribadi
											</h2>
											<div class="row">

												<div class="col-md-6">

													<div class="form-group">
														<label>NISN</label>
														<input type="text" name="nisn" class="form-control" value="<?= $peserta->nisn; ?>">
													</div>

													<div class="form-group">
														<label>NIK</label>
														<input type="text" name="nik" class="form-control" value="<?= $peserta->nik; ?>">
													</div>

													<div class="form-group">
														<label>No KK</label>
														<input type="number" name="no_kk" class="form-control" value="<?= $peserta->no_kk; ?>">
													</div>


													<div class="form-group">
														<label>Nama Peserta</label>
														<input type="text" name="nama_peserta" class="form-control" value="<?= $peserta->nama_peserta; ?>">
													</div>																									
													<div class="form-group">
														<label>Tempat Lahir</label>
														<input type="text" name="tempat_lahir" class="form-control" value="<?= $peserta->tempat_lahir; ?>">
													</div>

													<div class="form-group">
														<label>Tanggal Lahir</label>
														<input type="date" name="tanggal_lahir" class="form-control" value="<?= $peserta->tanggal_lahir; ?>">
													</div>

													<div class="form-group">
														<label>Jenis Kelamin</label>
														<select name="jenis_kelamin" class="form-control">
															<?php if ($peserta->jenis_kelamin === "L"): ?>
																<option value="L" selected>Laki-laki</option>
																<option value="P">Perempuan</option>
															<?php else: ?>
																<option value="L">Laki-laki</option>
																<option value="P" selected>Perempuan</option>
															<?php endif ?>
														</select>
													</div>

													<div class="form-group">
														<label>Agama</label>
														<select name="agama" class="form-control">
															<option value="" selected disabled="">Pilih</option>
															<?php foreach ($agama as $agama): ?>
															<?php if ($agama->agama == $peserta->agama): ?>
																<option value="<?= $agama->agama; ?>" selected><?= $agama->agama; ?></option>	
															<?php else: ?>
																<option value="<?= $agama->agama; ?>"><?= $agama->agama; ?></option>						
															<?php endif ?>						
															<?php endforeach ?>
														</select>
													</div>

													<div class="form-group">
														<label>Alamat</label>
														<textarea name="alamat" class="form-control"><?= $peserta->alamat; ?></textarea>
													</div>

													<div class="form-group">
														<label>Tempat Tinggal</label>
														<select name="tempat_tinggal" class="form-control">
														<?php foreach ($tempat_tinggal as $tempat_tinggal): ?>
														<?php if ($peserta->tempat_tinggal == $tempat_tinggal): ?>
															<option value="<?= $tempat_tinggal; ?>" selected><?= $tempat_tinggal ?></option>
														<?php else: ?>
															<option value="<?= $tempat_tinggal; ?>"><?= $tempat_tinggal ?></option>
														<?php endif ?>													
														<?php endforeach ?>	
														</select>
													</div>

													<div class="form-group">
														<label>Jarak</label>
														<select name="jarak" class="form-control">
														<?php foreach ($jarak as $jarak): ?>
														<?php if ($peserta->jarak == $jarak): ?>
															<option value="<?= $jarak; ?>" selected><?= $jarak ?></option>
														<?php else: ?>
															<option value="<?= $jarak; ?>"><?= $jarak ?></option>
														<?php endif ?>													
														<?php endforeach ?>
													</select>
													</div>

													<div class="form-group">
														<label>Moda Transportasi</label>
														<select name="moda_transportasi" class="form-control">
															<?php foreach ($transportasi as $ts): ?>
															<?php if ($peserta->moda_transportasi == $ts->nama_transportasi): ?>
																<option value="<?= $ts->nama_transportasi; ?>" selected><?= $ts->nama_transportasi; ?></option>
															<?php else: ?>
																<option value="<?= $ts->nama_transportasi; ?>"><?= $ts->nama_transportasi; ?></option>
															<?php endif ?>															
															<?php endforeach ?>
														</select>
													</div>

													

													
												</div>
												<div class="col-md-6">

													<div class="form-group">
														<label >Berkebutuhan Khusus</label>
														<select name="berkebutuhan_khusus" class="form-control">
														<?php foreach ($kebutuhan as $kebutuhan): ?>
														<?php if ($kebutuhan->kebutuhan_khusus == $peserta->berkebutuhan_khusus): ?>
															<option value="<?= $kebutuhan->kebutuhan_khusus; ?>" selected><?= $kebutuhan->kebutuhan_khusus; ?></option>
														<?php else: ?>
															<option value="<?= $kebutuhan->kebutuhan_khusus; ?>"><?= $kebutuhan->kebutuhan_khusus; ?></option>
														<?php endif ?>	
														<?php endforeach ?>
														</select>
													</div>

													<div class="form-group">
														<label>Tinggi Badan (Cm)</label>
														<input type="number" name="tinggi_badan" class="form-control" value="<?= $peserta->tinggi_badan; ?>">
													</div>

													<div class="form-group">
														<label>Berat Badan (Kg)</label>
														<input type="number" name="berat_badan" class="form-control" value="<?= $peserta->berat_badan; ?>">
													</div>

													<div class="form-group">
														<label>Anak Ke-</label>
														<input type="number" name="anak_ke" class="form-control" value="<?= $peserta->anak_ke; ?>">
													</div>

													<div class="form-group">
														<label>Jumlah Saudara Kandung</label>
														<input type="number" name="jumlah_saudara_kandung" class="form-control" value="<?= $peserta->jumlah_saudara_kandung; ?>">
													</div>

													<div class="form-group">
														<label>Pilih Jurusan (1)</label>
														<select name="id_jurusan" class="form-control">
															<option value="">Pilih</option>
															<?php foreach ($jurusan as $js): ?>
															<?php if ($js->id_jurusan == $peserta->id_jurusan): ?>
																<option value="<?= $js->id_jurusan; ?>" selected><?= $js->nama_jurusan; ?></option>
															<?php else: ?>
																<option value="<?= $js->id_jurusan; ?>"><?= $js->nama_jurusan; ?></option>
															<?php endif ?>															
															<?php endforeach ?>
														</select>
													</div>	

													<div class="form-group">
														<label>Pilih Jurusan (2)</label>
														<select name="jurusan2" class="form-control">
															<option value="">Pilih</option>
															<?php foreach ($jurusan as $js): ?>
															<?php if ($js->nama_jurusan == $peserta->nama_jurusan): ?>
																<option value="<?= $js->nama_jurusan; ?>" selected><?= $js->nama_jurusan; ?></option>
															<?php else: ?>
																<option value="<?= $js->nama_jurusan; ?>"><?= $js->nama_jurusan; ?></option>
															<?php endif ?>															
															<?php endforeach ?>
														</select>
													</div>	

													<div class="form-group">
														<label>Asal Sekolah</label>
														<textarea name="asal_sekolah" class="form-control"><?= $peserta->asal_sekolah; ?></textarea>
													</div>

													<div class="form-group">
														<label>No KIP</label>
														<input type="text" name="no_kip" class="form-control" value="<?= $peserta->no_kip; ?>">
													</div>

													<div class="form-group">
														<label>No Akta Lahir</label>
														<input type="text" name="no_registrasi_akta_lahir" class="form-control" value="<?= $peserta->no_registrasi_akta_lahir; ?>">
													</div>

													
													<div class="form-group">
														<label>No HP</label>
														<input type="number" name="nomor_hp" class="form-control" value="<?= $peserta->nomor_hp; ?>">
													</div>

													<div class="form-group">
														<label>Email</label>
														<input type="email" name="email" class="form-control" value="<?= $peserta->email; ?>">
													</div>

													

												</div>
											</div>
										</div>

										<div id="ortu">
											<h2 class="text-center bg-info text-light">
												Data Orang Tua
											</h2>
											<div class="row">

												<div class="col-md-6">


													<div class="form-group">
														<label>NIK Ayah</label>
														<input type="text" name="nik_ayah" class="form-control" value="<?= $peserta->nik_ayah; ?>">
													</div>

													<div class="form-group">
														<label>Nama Ayah</label>
														<input type="text" name="nama_ayah" class="form-control" value="<?= $peserta->nama_ayah; ?>">
													</div>
																					
													<div class="form-group">
														<label>Tempat Lahir Ayah</label>
														<input type="text" name="tempat_lahir_ayah" class="form-control" value="<?= $peserta->tempat_lahir_ayah; ?>">
													</div>

													<div class="form-group">
														<label>Tanggal Lahir Ayah</label>
														<input type="date" name="tanggal_lahir_ayah" class="form-control" value="<?= $peserta->tanggal_lahir_ayah; ?>">
													</div>

													<div class="form-group">
														<label>Pendidikan Ayah</label>
														<select name="pendidikan_ayah" class="form-control">
															<?php foreach ($pendidikan_ayah as $p): ?>
															<?php if ($p->nama_pendidikan ==  $peserta->pendidikan_ayah): ?>
															<option value="<?= $p->nama_pendidikan; ?>" selected><?= $p->nama_pendidikan; ?></option>
															<?php else: ?>
															<option value="<?= $p->nama_pendidikan; ?>"><?= $p->nama_pendidikan; ?></option>	
															<?php endif ?>
														<?php endforeach ?>
														</select>
													</div>

													<div class="form-group">
														<label>Pekerjaan Ayah</label>
														<select name="pekerjaan_ayah" class="form-control">
															<?php foreach ($pekerjaan_ayah as $pekerjaan): ?>
															<?php if ($pekerjaan->nama_pekerjaan ==  $peserta->pekerjaan_ayah): ?>
															<option value="<?= $pekerjaan->nama_pekerjaan; ?>" selected><?= $pekerjaan->nama_pekerjaan; ?></option>
															<?php else: ?>
															<option value="<?= $pekerjaan->nama_pekerjaan; ?>"><?= $pekerjaan->nama_pekerjaan; ?></option>	
															<?php endif ?>
														<?php endforeach ?>
														</select>
													</div>

													<div class="form-group">
														<label>Penghasilan Ayah</label>
														<select name="penghasilan_bulanan_ayah" class="form-control">
															<?php foreach ($penghasilan as $penghasilan): ?>
															<?php if ($penghasilan->penghasilan == $peserta->penghasilan_bulanan_ayah): ?>
																<option value="<?= $penghasilan->penghasilan; ?>" selected><?= $penghasilan->penghasilan; ?></option>
															<?php else: ?>
																<option value="<?= $penghasilan->penghasilan; ?>"><?= $penghasilan->penghasilan; ?></option>
															<?php endif ?>															
															<?php endforeach ?>
														</select>
													</div>

													<div class="form-group">
														<label>No Hp Ayah</label>
														<input type="number" name="no_ayah" class="form-control" value="<?= $peserta->no_ayah; ?>">
													</div>

													<div class="form-group">
														<label >Berkebutuhan Khusus Ayah</label>
														<select name="berkebutuhan_khusus_ayah" class="form-control">
														<?php foreach ($kebutuhan_ayah as $kebutuhan): ?>
														<?php if ($kebutuhan->kebutuhan_khusus == $peserta->berkebutuhan_khusus_ayah): ?>
															<option value="<?= $kebutuhan->kebutuhan_khusus; ?>" selected><?= $kebutuhan->kebutuhan_khusus; ?></option>
														<?php else: ?>
															<option value="<?= $kebutuhan->kebutuhan_khusus; ?>"><?= $kebutuhan->kebutuhan_khusus; ?></option>
														<?php endif ?>
														<?php endforeach ?>
														</select>
													</div>

													

													
												</div>
												<div class="col-md-6">
													
													<div class="form-group">
														<label>NIK ibu</label>
														<input type="text" name="nik_ibu" class="form-control" value="<?= $peserta->nik_ibu; ?>">
													</div>

													<div class="form-group">
														<label>Nama ibu</label>
														<input type="text" name="nama_ibu" class="form-control" value="<?= $peserta->nama_ibu; ?>">
													</div>
																					
													<div class="form-group">
														<label>Tempat Lahir ibu</label>
														<input type="text" name="tempat_lahir_ibu" class="form-control" value="<?= $peserta->tempat_lahir_ibu; ?>">
													</div>

													<div class="form-group">
														<label>Tanggal Lahir ibu</label>
														<input type="date" name="tanggal_lahir_ibu" class="form-control" value="<?= $peserta->tanggal_lahir_ibu; ?>">
													</div>

													<div class="form-group">
														<label>Pendidikan ibu</label>
														<select name="pendidikan_ibu" class="form-control">
															<?php foreach ($pendidikan_ibu as $pi): ?>
															<?php if ($pi->nama_pendidikan == $peserta->pendidikan_ibu): ?>
																<option value="<?= $pi->nama_pendidikan; ?>" selected><?= $pi->nama_pendidikan; ?></option>
															<?php else: ?>
																<option value="<?= $pi->nama_pendidikan; ?>"><?= $pi->nama_pendidikan; ?></option>	
															<?php endif ?>
															<?php endforeach ?>
														</select>
													</div>

													<div class="form-group">
														<label>Pekerjaan ibu</label>
														<select name="pekerjaan_ibu" class="form-control">
															<?php foreach ($pekerjaan_ibu as $pekerjaan): ?>
															<?php if ($pekerjaan->nama_pekerjaan == $peserta->pekerjaan_ibu): ?>
																<option value="<?= $pekerjaan->nama_pekerjaan; ?>" selected><?= $pekerjaan->nama_pekerjaan; ?></option>
															<?php else: ?>
																<option value="<?= $pekerjaan->nama_pekerjaan; ?>"><?= $pekerjaan->nama_pekerjaan; ?></option>
															<?php endif ?>
															<?php endforeach ?>
														</select>
													</div>

													<div class="form-group">
														<label>Penghasilan ibu</label>
														<select name="penghasilan_bulanan_ibu" class="form-control">
															<?php foreach ($penghasilan_ibu as $penghasilan): ?>
															<?php if ($peserta->penghasilan_bulanan_ibu == $penghasilan->penghasilan): ?>
																<option value="<?= $penghasilan->penghasilan; ?>" selected><?= $penghasilan->penghasilan; ?></option>
															<?php else: ?>
																<option value="<?= $penghasilan->penghasilan; ?>"><?= $penghasilan->penghasilan; ?></option>
															<?php endif ?>
															<?php endforeach ?>
														</select>
													</div>

													<div class="form-group">
														<label>No Hp Ibu</label>
														<input type="number" name="no_ibu" class="form-control" value="<?= $peserta->no_ibu; ?>">
													</div>

													<div class="form-group">
														<label >Berkebutuhan Khusus Ibu</label>
														<select name="berkebutuhan_khusus_ibu" class="form-control">
															<?php foreach ($kebutuhan_ibu as $kebutuhan): ?>
															<?php if ($peserta->berkebutuhan_khusus_ibu == $kebutuhan->kebutuhan_khusus): ?>
																<option value="<?= $kebutuhan->kebutuhan_khusus; ?>" selected><?= $kebutuhan->kebutuhan_khusus; ?></option>
															<?php else: ?>
																<option value="<?= $kebutuhan->kebutuhan_khusus; ?>"><?= $kebutuhan->kebutuhan_khusus; ?></option>
															<?php endif ?>															
														<?php endforeach ?>
														</select>
													</div>

												</div>
											</div>
										</div>

										<div id="wall">
											<h2 class="text-center bg-info text-light">
												Data Wali 
											</h2>
											<div class="row">

												<div class="col-md-6">


													<div class="form-group">
														<label>NIK Wali</label>
														<input type="text" name="nik_wali" class="form-control" value="<?= $peserta->nik_wali; ?>">
													</div>

													<div class="form-group">
														<label>Nama Wali</label>
														<input type="text" name="nama_wali" class="form-control" value="<?= $peserta->nama_wali; ?>">
													</div>
																					
													<div class="form-group">
														<label>Tempat Lahir Wali</label>
														<input type="text" name="tempat_lahir_wali" class="form-control" value="<?= $peserta->tempat_lahir_wali; ?>">
													</div>

													<div class="form-group">
														<label>Tanggal Lahir Wali</label>
														<input type="date" name="tanggal_lahir_wali" class="form-control" value="<?= $peserta->tanggal_lahir_wali; ?>">
													</div>

													

													
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Pendidikan Wali</label>
														<select name="pendidikan_wali" class="form-control">
															<?php foreach ($pendidikan_wali as $p): ?>
															<?php if ($peserta->pendidikan_wali == $p->nama_pendidikan): ?>
																<option value="<?= $p->nama_pendidikan; ?>" selected><?= $p->nama_pendidikan; ?></option>
															<?php else: ?>
																<option value="<?= $p->nama_pendidikan; ?>"><?= $p->nama_pendidikan; ?></option>
															<?php endif ?>																
															<?php endforeach ?>
														</select>
													</div>

													<div class="form-group">
														<label>Pekerjaan Wali</label>
														<select name="pekerjaan_wali" class="form-control">
															<?php foreach ($pekerjaan_wali as $pekerjaan): ?>
															<?php if ($peserta->pekerjaan_wali == $pekerjaan->nama_pekerjaan): ?>
																<option value="<?= $pekerjaan->nama_pekerjaan; ?>" selected><?= $pekerjaan->nama_pekerjaan; ?></option>
															<?php else: ?>
																<option value="<?= $pekerjaan->nama_pekerjaan; ?>"><?= $pekerjaan->nama_pekerjaan; ?></option>
															<?php endif ?>																
															<?php endforeach ?>
														</select>
													</div>

													<div class="form-group">
														<label>Penghasilan Wali</label>
														<select name="penghasilan_bulanan_wali" class="form-control">
															<?php foreach ($penghasilan_wali as $penghasilan): ?>
															<?php if ($peserta->penghasilan_bulanan_wali==$penghasilan->penghasilan): ?>
																<option value="<?= $penghasilan->penghasilan; ?>" selected><?= $penghasilan->penghasilan; ?></option>
															<?php else: ?>
																<option value="<?= $penghasilan->penghasilan; ?>"><?= $penghasilan->penghasilan; ?></option>
															<?php endif ?>
															<?php endforeach ?>
														</select>
													</div>

													<div class="form-group">
														<label>No Hp Wali</label>
														<input type="number" name="no_wali" class="form-control" value="<?= $peserta->no_wali; ?>">
													</div>

												</div>
											</div>
										</div>

										
										

										<button class="btn btn-success float-right">Simpan</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			