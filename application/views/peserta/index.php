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
								<a href="#">Peserta</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<a href="<?= base_url('Peserta/create'); ?>" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Tambah Peserta</a>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table">
											<thead>
												<tr>
													<th>No</th>
													<th>No Pendaftaran</th>
													<th>Nama</th>
													<th>Tempat Lahir</th>
													<th>Tgl Lahir</th>
													<th>Asal Sekolah</th>
													<th>Status</th>
													<th>#</th>
												</tr>
											</thead>
											
											<tbody>
												<?php $no=1; foreach ($peserta as $p): ?>
													
												<tr>
													<td><?= $no; ?></td>
													<td><?= $p->no_pendaftaran; ?></td>
													<td><?= $p->nama_peserta; ?></td>
													<td><?= $p->tempat_lahir; ?></td>
													<td><?= date('d-m-Y',strtotime($p->tanggal_lahir)); ?></td>
													<td><?= $p->asal_sekolah; ?></td>
													<td>
														<?php if ($p->status_pendaftaran  == "Y"): ?>
															<div class="fas fa-check-circle text-success"></div>
															
														<?php else : ?>
															<div class="fas fa-window-close text-danger"></div>
														<?php endif ?>	
													</td>
													<td>

														<div class="btn-group">
														  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
														    Action
														  </button>
														  <div class="dropdown-menu">
														  
															<a href="<?= base_url('Peserta/view/'.encrypt_url($p->id_peserta)); ?>" class="btn btn-primary btn-sm dropdown-item m-1"><i class="fas fa-search"></i> Detail</a>
															<a href="<?= base_url('Peserta/edit/'.encrypt_url($p->id_peserta)); ?>" class="btn btn-info btn-sm dropdown-item m-1"><i class="fas fa-edit"></i> Edit</a>
															<?php if ($this->session->userdata('id_level')==1): ?>
															<a href="<?= base_url('Peserta/delete/'.encrypt_url($p->id_peserta)); ?>" class="btn btn-danger btn-sm dropdown-item m-1"><i class="fas fa-trash"></i> Hapus</a>
																
															<?php endif ?>
														  </div>
														</div>
													</td>
												</tr>
												
												<?php $no++; endforeach ?>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
