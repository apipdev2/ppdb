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
									<a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#kelas"><i class="fas fa-plus"></i> Tambah Kelas</a>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover">
											<thead>
												<tr>
													<th>No</th>
													<th>Tingkat</th>
													<th>Nama Kelas</th>
													<th>#</th>
												</tr>
											</thead>
											
											<tbody>
											<?php $no=1; foreach ($kelas as $kls): ?>
												<tr>
													<td><?= $no;?></td>
													<td><?= $kls->tingkat;?></td>
													<td><?= $kls->kelas;?></td>
													<td class="text-center">
														<div class="btn-group">
														<a href="#" class="btn btn-info btn-sm"><i class="fas fa-edit" data-toggle="modal" data-target="#kls<?= $kls->id;?>"></i></a>
														<a href="<?= base_url('Kelas/delete/'.$kls->id); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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




		<!-- Modal -->
		<div class="modal fade" id="kelas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="<?= base_url('Kelas/create') ?>" method="post">
		      <div class="modal-body">
		        
		        	
		        	<div class="form-group">
						<label>Tingkat</label>
						<input type="number" name="tingkat" class="form-control">
					</div>

					<div class="form-group">
						<label>Kelas</label>
						<input type="text" name="kelas" class="form-control">
					</div>


		        
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Simpan</button>
		      </div>

		      </form>
		    </div>
		  </div>
		</div>


		<?php foreach ($kelas as $kls): ?>
			<div class="modal fade" id="kls<?= $kls->id;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Ubah Kelas</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="<?= base_url('Kelas/edit/'.$kls->id); ?>" method="post">
		      <div class="modal-body">
		        
		        	
		        	<div class="form-group">
						<label>Tingkat</label>
						<input type="number" name="tingkat" class="form-control" value="<?= $kls->tingkat; ?>">
					</div>

					<div class="form-group">
						<label>Kelas</label>
						<input type="text" name="kelas" class="form-control"  value="<?= $kls->kelas; ?>">
					</div>


		        
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Simpan</button>
		      </div>

		      </form>
		    </div>
		  </div>
		</div>
		<?php endforeach ?>


