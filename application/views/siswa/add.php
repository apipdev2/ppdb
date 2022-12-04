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
								
								<div class="card-body">

									
									<form action="" method="post">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>NIK</label>
													<input type="text" name="nik" class="form-control">
												</div>

												<div class="form-group">
													<label>Nama</label>
													<input type="text" name="nama_peserta" class="form-control">
												</div>

													
											</div>
											<div class="col-md-6">
												

												

											</div>
										</div>
										

										<button class="btn btn-success">Simpan</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
