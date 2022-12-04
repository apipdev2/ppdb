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
									<a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#kelas"><i class="fas fa-plus"></i> Tambah Jurusan</a>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover">
											<thead>
												<tr>
													<th>No</th>
													<th>Bidang Keahlian</th>
													<th>Nama Jurusan</th>
													<th>Kuota</th>
													<th>#</th>
												</tr>
											</thead>
											
											<tbody>
											<?php $no=1; foreach ($jurusan as $jrs): ?>
												<tr>
													<td><?= $no;?></td>
													<td><?= $jrs->bidang_keahlian;?></td>
													<td><?= $jrs->nama_jurusan;?></td>
													<td><?= $jrs->kuota_jurusan;?></td>
													<td class="text-center">
														<div class="btn-group">
														<a href="#" class="btn btn-info btn-sm"><i class="fas fa-edit" data-toggle="modal" data-target="#kls<?= $jrs->id_jurusan;?>"></i></a>
														<a href="<?= base_url('Jurusan/delete/'.$jrs->id_jurusan); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
		        <h5 class="modal-title" id="exampleModalLabel">Tambah Jurusan</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="<?= base_url('Jurusan/create') ?>" method="post">
		      <div class="modal-body">
		        
		        	
		        	<div class="form-group">
						<label>Bidang Keahlian</label>
						<input type="text" name="bidang_keahlian" class="form-control">
					</div>

					<div class="form-group">
						<label>Nama Jurusan</label>
						<input type="text" name="nama_jurusan" class="form-control">
					</div>

					<div class="form-group">
						<label>Kuota</label>
						<input type="text" name="kuota_jurusan" class="form-control">
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


		<?php foreach ($jurusan as $jrs): ?>
			<div class="modal fade" id="kls<?= $jrs->id_jurusan;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Ubah Jurusan</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="<?= base_url('Jurusan/edit/'.$jrs->id_jurusan); ?>" method="post">
		      <div class="modal-body">
		        
		        	
		        	<div class="form-group">
						<label>Bidang Keahlian</label>
						<input type="text" name="bidang_keahlian" class="form-control" value="<?= $jrs->bidang_keahlian; ?>">
					</div>

					<div class="form-group">
						<label>Nama Jurusan</label>
						<input type="text" name="nama_jurusan" class="form-control"  value="<?= $jrs->nama_jurusan; ?>">
					</div>

					<div class="form-group">
						<label>Kuota Jurusan</label>
						<input type="number" name="kuota_jurusan" class="form-control"  value="<?= $jrs->kuota_jurusan; ?>">
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


