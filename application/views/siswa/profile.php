			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title"><?= $title; ?></h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="<?= base_url('Home'); ?>">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							
							<li class="nav-item">
								<a href="#"><?= $title; ?></a>
							</li>
							
						</ul>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="card">
								<div class="card-body">
									<form action="<?= base_url('Siswa/edit_profile'); ?>" method="post" enctype="multipart/form-data">
									<div class="text-center">
										<img src="<?= base_url('assets/images/foto/'.$peserta->image); ?>"  alt="file" width="150">
										<div class="form-group">
											<input type="file" name="image" class="form-control" value="<?= $peserta->image; ?>">
											<button class="btn btn-success btn-sm mt-2">Ubah</button>
										</div>
									</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="card">
								<div class="card-body">

									<div class="table-responsive">
										<table class="table">
											<tr>
												<th>NIK</th><th>:</th><th><?= $peserta->nik;?></th>
											</tr>
											<tr>
												<th>Nama</th><th>:</th><th><?= $peserta->nama_peserta;?></th>
											</tr>
											<tr>
												<th>Jenis Kelamin</th><th>:</th><th><?= $peserta->jenis_kelamin;?></th>
											</tr>
											<tr>
												<th>Tempat Lahir</th><th>:</th><th><?= $peserta->tempat_lahir;?></th>
											</tr>
											<tr>
												<th>Tanggal Lahir</th><th>:</th><th><?= date('d-m-Y',strtotime($peserta->tanggal_lahir));?></th>
											</tr>
											<tr>
												<th>Jurusan</th><th>:</th><th><?= $peserta->nama_jurusan;?></th>
											</tr>
											<tr>
												<th>Asal Sekolah</th><th>:</th><th><?= $peserta->asal_sekolah;?></th>
											</tr>
										</table>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			