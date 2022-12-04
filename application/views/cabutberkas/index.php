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
									<a href="<?= base_url('Cabutberkas/add'); ?>" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Tambah</a>
									<a href="<?= base_url('Cabutberkas/report'); ?>" class="btn btn-secondary btn-sm float-right" target="_blank"><i class="fas fa-print"></i> Cetak</a>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover">
											<thead>
												<tr>
													<th>No</th>
													<th>No Pendaftaran</th>
													<th>Tanggal</th>
													<th>Nama</th>
													<th>Jurusan</th>
													<th>Asal Sekolah</th>
													<th>#</th>
												</tr>
											</thead>
											
											<tbody>
												<?php $no=1; foreach ($peserta as $p): ?>
													
												<tr>
													<td><?= $no; ?></td>
													<td><?= $p->no_pendaftaran; ?></td>
													<td><?= date('d-m-Y ',strtotime( $p->tanggal_cb)); ?></td>
													<td><?= $p->nama_peserta; ?></td>
													<td><?= $p->nama_jurusan; ?></td>
													<td><?= $p->asal_sekolah; ?></td>													
													<td class="text-center">
														<div class="btn-group">
															<a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#cb<?= $p->id_cb; ?>"><i class="fas fa-search"></i></a>
														<a href="<?= base_url('Cabutberkas/delete/'.encrypt_url($p->id_cb).'/'.encrypt_url($p->id_peserta)); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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


		<?php $no=1; foreach ($peserta as $p): ?>
		<div class="modal fade" id="cb<?= $p->id_cb; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">View Cabut Berkas</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      
		      <div class="modal-body">
		        
		        <table id="basic-datatables" class="display table">	
			        <thead>
						<tr>
							<th>No Pendaftaran</th>
							<th>Nama</th>
							<th>Total DU</th>
							<th>Potongan</th>
							<th>Diterima</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($peserta as $p): ?>
							
						<tr>
							<td><?= $p->no_pendaftaran; ?></td>
							<td><?= $p->nama_peserta; ?></td>
							<td>Rp.<?= number_format($p->total_du); ?></td>
							<td>Rp.<?= number_format($p->potongan_cb); ?></td>
							<td>Rp.<?= number_format($p->diterima); ?></td>
						</tr>
						
						<?php endforeach ?>

					</tbody>
				</table>

				<a href="<?= base_url('Cabutberkas/kwitansi/'.encrypt_url($p->id_cb)); ?>" class="btn btn-primary btn-sm float-right" target="_blank"> Cetak</a>
		        
		      </div>
		    </div>
		  </div>
		</div>
		<?php $no++; endforeach ?>



		


		

