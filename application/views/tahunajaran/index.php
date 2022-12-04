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
									<a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tahun"><i class="fas fa-plus"></i> Tambah Tahun Ajaran</a>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover">
											<thead>
												<tr>
													<th>No</th>
													<th>Tahun</th>
													<th>Tahun Ajaran</th>
													<th>Kuota</th>
													<th>#</th>
												</tr>
											</thead>
											
											<tbody>
											<?php $no=1; foreach ($tahunajaran as $ta): ?>
												<tr>
													<td><?= $no;?></td>
													<td><?= $ta->tahun;?></td>
													<td><?= $ta->tahun_ajaran;?></td>
													<td><?= $ta->kuota;?></td>
													<td class="text-center">
														<div class="btn-group">
														<a href="#" class="btn btn-info btn-sm"><i class="fas fa-edit" data-toggle="modal" data-target="#ta<?= $ta->id_tahun;?>"></i></a>
														<a href="<?= base_url('Tahunajaran/delete/'.$ta->id_tahun); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
		<div class="modal fade" id="tahun" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Tambah Tahun Ajaran</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="<?= base_url('Tahunajaran/create') ?>" method="post">
		      <div class="modal-body">
		        
		        	
		        	<div class="form-group">
						<label>Tahun</label>
						<input type="number" name="tahun" class="form-control">
					</div>

					<div class="form-group">
						<label>Tahun Ajaran</label>
						<input type="text" name="tahun_ajaran" class="form-control">
					</div>

					<div class="form-group">
						<label>Kuota</label>
						<input type="text" name="kuota" class="form-control">
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


		<?php foreach ($tahunajaran as $ta): ?>
			<div class="modal fade" id="ta<?= $ta->id_tahun;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Ubah Tahun Ajaran</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="<?= base_url('Tahunajaran/edit/'.$ta->id_tahun); ?>" method="post">
		      <div class="modal-body">
		        
		        	
		        	<div class="form-group">
						<label>Tahun</label>
						<input type="number" name="tahun" class="form-control" value="<?= $ta->tahun; ?>">
					</div>

					<div class="form-group">
						<label>Tahun Ajaran</label>
						<input type="text" name="tahun_ajaran" class="form-control"  value="<?= $ta->tahun_ajaran; ?>">
					</div>

					<div class="form-group">
						<label>Kuota</label>
						<input type="number" name="kuota" class="form-control"  value="<?= $ta->kuota; ?>">
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


