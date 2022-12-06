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
									<a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#user"><i class="fas fa-plus"></i> Tambah User</a>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover">
											<thead>
												<tr>
													<th>No</th>
													<th>Nama User</th>
													<th>Email</th>
													<th>Level</th>
													<th>#</th>
												</tr>
											</thead>
											
											<tbody>
											<?php $no=1; foreach ($user as $u): ?>
												<tr>
													<td><?= $no;?></td>
													<td><?= $u->username;?></td>
													<td><?= $u->email;?></td>
													<td><?= $u->nama_level;?></td>
													<td class="text-center">
														<div class="btn-group">
														<a href="#" class="btn btn-warning btn-sm"><i class="fas fa-key" data-toggle="modal" data-target="#pass<?= $u->id_user;?>"></i></a>
														<a href="#" class="btn btn-info btn-sm"><i class="fas fa-edit" data-toggle="modal" data-target="#user<?= $u->id_user;?>"></i></a>
														<a href="<?= base_url('User/delete/'.encrypt_url($u->id_user)); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
		<div class="modal fade" id="user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="<?= base_url('User/add') ?>" method="post">
		      <div class="modal-body">
		        
		        	
		        	<div class="form-group">
						<label>Nama User</label>
						<input type="text" name="username" class="form-control">
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control">
					</div>

					<div class="form-group">
						<label>password</label>
						<input type="text" name="password" class="form-control">
					</div>

					<div class="form-group">
						<label>Level</label>
						<select name="id_level" class="form-control">
							<?php foreach ($level as $lvl): ?>
								<option value="<?= $lvl->id_level; ?>"><?= $lvl->nama_level; ?></option>
							<?php endforeach ?>
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


		<?php foreach ($user as $u): ?>
		<div class="modal fade" id="user<?= $u->id_user;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Ubah User</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="<?= base_url('User/edit/'.encrypt_url($u->id_user)); ?>" method="post">
		      <div class="modal-body">
		        
		        	
		        	<div class="form-group">
						<label>Nama User</label>
						<input type="text" name="username" class="form-control" value="<?= $u->username; ?>">
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" value="<?= $u->email; ?>">
					</div>

					<div class="form-group">
						<label>Level</label>
						<select name="id_level" class="form-control">
							<?php foreach ($level as $lvl): ?>
							<?php if ($u->id_level == $lvl->id_level): ?>
								<option value="<?= $lvl->id_level; ?>" selected><?= $lvl->nama_level; ?></option>
							<?php else: ?>
								<option value="<?= $lvl->id_level; ?>"><?= $lvl->nama_level; ?></option>
							<?php endif ?>								
							<?php endforeach ?>
						</select>
					</div>

					<div class="form-group">
						<label>Status</label>
						<select name="is_active" class="form-control">
							
							<?php if ($u->is_active == 'Y'): ?>
								<option value="Y" selected>active</option>
								<option value="N">Non active</option>
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


		<div class="modal fade" id="pass<?= $u->id_user;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="<?= base_url('User/change/'.encrypt_url($u->id_user)); ?>" method="post">
		      <div class="modal-body">
		        
		        	
		        	<div class="form-group">
						<label>Password</label>
						<input type="text" name="password" class="form-control">
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


