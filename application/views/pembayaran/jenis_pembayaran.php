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
									<a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#jenis"><i class="fas fa-plus"></i> Tambah Jenis Pembayaran</a>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table">
											<thead>
												<tr>
													<th>No</th>
													<th>Jenis Pembayaran</th>
													<th>Besarnya</th>
													<th>Status</th>
													<th>#</th>
												</tr>
											</thead>
											
											<tbody>
												<?php $no=1; foreach ($jenis_pembayaran as $jp): ?>
													
												<tr>
													<td><?= $no; ?></td>
													<td><?= $jp->jenis_pembayaran; ?></td>
													<td><?= number_format($jp->besarnya); ?></td>
													<td>
														<?php if ($jp->status  == "Y"): ?>
															<div class="badge badge-success">active</div>															
														<?php else : ?>
															<div class="badge badge-danger">none active</div>
														<?php endif ?>	
													</td>
													<td>

														<div class="btn-group">
														
															
															<a href="#" class="btn btn-info btn-sm dropdown-item m-1" data-toggle="modal" data-target="#jenis<?= $jp->id_jenis;?>"><i class="fas fa-edit"></i> Edit</a>
															<a href="<?= base_url('Jenis_pembayaran/delete/'.$jp->id_jenis); ?>" class="btn btn-danger btn-sm dropdown-item m-1"><i class="fas fa-trash"></i> Hapus</a>
														  
														
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
		<div class="modal fade" id="jenis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Tambah Jenis Pembayaran</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="<?= base_url('Jenis_pembayaran/create') ?>" method="post">
		      <div class="modal-body">
		        
		        	
		        	<div class="form-group">
						<label>Jenis Pembayaran</label>
						<input type="text" name="jenis_pembayaran" class="form-control">
					</div>

					<div class="form-group">
						<label>Besarnya (Rp)</label>
						<input type="number" name="besarnya" class="form-control">
					</div>

					<div class="form-group">
						<label>status</label>
						<select name="status" class="form-control">
							<option value="-" selected disabled="">Pilih Status</option>
							<option value="Y">Active</option>
							<option value="N">Non Active</option>
						</select>
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


		<?php foreach ($jenis_pembayaran as $jp): ?>
			<div class="modal fade" id="jenis<?= $jp->id_jenis;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Ubah Jenis Pembayaran</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="<?= base_url('Jenis_pembayaran/edit/'.$jp->id_jenis); ?>" method="post">
		      <div class="modal-body">
		        
		        	
		        	<div class="form-group">
						<label>Jenis Pembayaran</label>
						<input type="text" name="jenis_pembayaran" class="form-control" value="<?= $jp->jenis_pembayaran; ?>">
					</div>

					<div class="form-group">
						<label>Besarnya (Rp)</label>
						<input type="number" name="besarnya" class="form-control" value="<?= $jp->besarnya; ?>">
					</div>

					<div class="form-group">
						<label>status</label>
						<select name="status" class="form-control">
							<?php if ($jp->status == "Y"): ?>
								<option value="Y" selected="">Active</option>
							<?php else: ?>
								<option value="Y">Active</option>
								<option value="N">Non Active</option>								
							<?php endif ?>
						</select>
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

