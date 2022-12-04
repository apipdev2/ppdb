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
											<div class="col-md-8">
												<div class="form-group">
													<label>Tingkat</label>
													<input type="number" name="tingkat" class="form-control">
												</div>

												<div class="form-group">
													<label>Kelas</label>
													<input type="text" name="kelas" class="form-control">
												</div>

												<button class="btn btn-success float-right">Simpan</button>

											</div>
											<div class="col-md-4 bg-info text-light">
												<h5 class="text-center mt-2">Petunjuk Pengisian :</h5>
											</div>
										</div>
									</form>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
