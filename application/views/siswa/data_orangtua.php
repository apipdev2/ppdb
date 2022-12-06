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
														<?= form_error('nama_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
																					
													<div class="form-group">
														<label>Tempat Lahir Ayah</label>
														<input type="text" name="tempat_lahir_ayah" class="form-control" value="<?= $peserta->tempat_lahir_ayah; ?>">
													</div>

													<div class="form-group">
														<label>Tanggal Lahir Ayah</label>
														<input type="date" name="tanggal_lahir_ayah" class="form-control" value="<?= $peserta->tanggal_lahir_ayah; ?>">
														<?= form_error('tanggal_lahir_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
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
														<?= form_error('no_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
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
														<?= form_error('nama_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
													</div>
																					
													<div class="form-group">
														<label>Tempat Lahir ibu</label>
														<input type="text" name="tempat_lahir_ibu" class="form-control" value="<?= $peserta->tempat_lahir_ibu; ?>">
													</div>

													<div class="form-group">
														<label>Tanggal Lahir ibu</label>
														<input type="date" name="tanggal_lahir_ibu" class="form-control" value="<?= $peserta->tanggal_lahir_ibu; ?>">
														<?= form_error('tanggal_lahir_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
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
														<?= form_error('no_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
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

										
										
										

										<button class="btn btn-success float-right">Simpan</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			
