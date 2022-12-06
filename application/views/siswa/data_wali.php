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
										
										<div id="wall">
											<h2 class="text-center bg-info text-light">
												Data Wali 
											</h2>
											<div class="row">

												<div class="col-md-6">

													<input type="hidden" name="id_peserta" value="<?= $peserta->id_peserta; ?>">
													<div class="form-group">
														<label>NIK Wali</label>
														<input type="text" name="nik_wali" class="form-control" value="<?= $peserta->nik_wali; ?>">
														<?= form_error('nik_wali', '<small class="text-danger pl-3">', '</small>'); ?>
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

			
