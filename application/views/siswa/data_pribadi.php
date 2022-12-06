			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title"><?= $title; ?></h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="<?= base_url('Home'); ?>">
									<i class="flaticon-home"></i>
								</a>
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
														<input type="text" name="nisn" class="form-control" value="<?= $peserta->nisn; ?>" <?= $formulir; ?>>
													</div>

													<div class="form-group">
														<label>NIK</label>
														<input type="text" name="nik" class="form-control" value="<?= $peserta->nik; ?>">
														 <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>

													<div class="form-group">
														<label>No KK</label>
														<input type="number" name="no_kk" class="form-control" value="<?= $peserta->no_kk; ?>" <?= $formulir; ?>>
													</div>


													<div class="form-group">
														<label>Nama Peserta</label>
														<input type="text" name="nama_peserta" class="form-control" value="<?= $peserta->nama_peserta; ?>">
														 <?= form_error('nama_peserta', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>																									
													<div class="form-group">
														<label>Tempat Lahir</label>
														<input type="text" name="tempat_lahir" class="form-control" value="<?= $peserta->tempat_lahir; ?>">
														 <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>

													<div class="form-group">
														<label>Tanggal Lahir</label>
														<input type="date" name="tanggal_lahir" class="form-control" value="<?= $peserta->tanggal_lahir; ?>">
														 <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
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
														<select name="agama" class="form-control" <?= $formulir; ?>>
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
														<textarea name="alamat" class="form-control" <?= $formulir; ?>><?= $peserta->alamat; ?></textarea>
													</div>

													<div class="form-group">
														<label>Tempat Tinggal</label>
														<select name="tempat_tinggal" class="form-control" <?= $formulir; ?>>
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
														<select name="jarak" class="form-control" <?= $formulir; ?>>
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
														<select name="moda_transportasi" class="form-control" <?= $formulir; ?>>
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
														<select name="berkebutuhan_khusus" class="form-control" <?= $formulir; ?>>
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
														<input type="number" name="tinggi_badan" class="form-control" value="<?= $peserta->tinggi_badan; ?>" <?= $formulir; ?>>
													</div>

													<div class="form-group">
														<label>Berat Badan (Kg)</label>
														<input type="number" name="berat_badan" class="form-control" value="<?= $peserta->berat_badan; ?>" <?= $formulir; ?>>
													</div>

													<div class="form-group">
														<label>Anak Ke-</label>
														<input type="number" name="anak_ke" class="form-control" value="<?= $peserta->anak_ke; ?>" <?= $formulir; ?>>
													</div>

													<div class="form-group">
														<label>Jumlah Saudara Kandung</label>
														<input type="number" name="jumlah_saudara_kandung" class="form-control" value="<?= $peserta->jumlah_saudara_kandung; ?>" <?= $formulir; ?>>
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
														 <?= form_error('id_jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>	

													<div class="form-group">
														<label>Pilih Jurusan (2)</label>
														<select name="jurusan2" class="form-control" <?= $formulir; ?>>
															<option value="">Pilih</option>
															<?php foreach ($jurusan as $js): ?>
															<?php if ($js->nama_jurusan == $peserta->nama_jurusan): ?>
																<option value="<?= $js->nama_jurusan; ?>" selected><?= $js->nama_jurusan; ?></option>
															<?php else: ?>
																<option value="<?= $js->nama_jurusan; ?>"><?= $js->nama_jurusan; ?></option>
															<?php endif ?>															
															<?php endforeach ?>
														</select>
														 <?= form_error('jurusan2', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>	

													<div class="form-group">
														<label>Asal Sekolah</label>
														<textarea name="asal_sekolah" class="form-control"><?= $peserta->asal_sekolah; ?></textarea>
														 <?= form_error('asal_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>

													<div class="form-group">
														<label>No KIP</label>
														<input type="text" name="no_kip" class="form-control" value="<?= $peserta->no_kip; ?>" <?= $formulir; ?>>
													</div>

													<div class="form-group">
														<label>No Akta Lahir</label>
														<input type="text" name="no_registrasi_akta_lahir" class="form-control" value="<?= $peserta->no_registrasi_akta_lahir; ?>" <?= $formulir; ?>>
													</div>

													
													<div class="form-group">
														<label>No HP</label>
														<input type="number" name="nomor_hp" class="form-control" value="<?= $peserta->nomor_hp; ?>" <?= $formulir; ?>>
													</div>

													<div class="form-group">
														<label>Email</label>
														<input type="email" name="email" class="form-control" value="<?= $peserta->email; ?>" <?= $formulir; ?>>
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

			