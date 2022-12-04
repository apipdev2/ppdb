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
								<a href="#"><?= $title; ?></a>
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
									<a href="<?= base_url('Siswa/add'); ?>" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Tambah Siswa</a>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover">
											<thead>
												<tr>
													<th>No</th>
													<th>NISN</th>
													<th>Nama</th>
													<th>Tempat Lahir</th>
													<th>Tgl Lahir</th>
													<th>Status</th>
													<th>#</th>
												</tr>
											</thead>
											
											<tbody>
												<?php $no=1; foreach ($siswa as $siswa): ?>
													
												<tr>
													<td><?= $no; ?></td>
													<td><?= $siswa->nisn; ?></td>
													<td><?= $siswa->nama_peserta; ?></td>
													<td><?= $siswa->tempat_lahir; ?></td>
													<td><?= date('d-m-Y',strtotime($siswa->tanggal_lahir)); ?></td>
													<td><?= $siswa->status; ?></td>
													<td>
														<div class="btn-group">
															
															<a href="" class="btn btn-primary btn-sm"><i class="fas fa-search"></i></a>
															<a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
															<a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
