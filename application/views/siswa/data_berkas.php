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
									<form action="" method="post" enctype="multipart/form-data">
										<div class="row">
											<div class="col-md-6">

												<div class="form-group">
													<label>Jenis Berkas</label>
													<select name="jenis_berkas" class="form-control">
														<option value="" selected disabled>Pilih</option>
														<option value="KIP">KIP</option>
														<option value="KTP Ayah">KTP Ayah</option>
														<option value="KTP Ibu">KTP Ibu</option>
														<option value="Kartu Keluarga">Kartu Keluarga</option>
														<option value="Akta Kelahiran">Akta Kelahiran</option>
													</select>
													 <?= form_error('jenis_berkas', '<small class="text-danger pl-3">', '</small>'); ?>
												</div>

												<div class="form-group">
													<label>Berkas</label>
													<img class="img-preview img-fluid mb-3 col-sm-4" alt="" width="100">
                              						<input type="file" class="form-control" id="image" name="image" onchange="previewImage()">
												</div>

												<button class="btn btn-success btn-sm float-right"><i class="fas fa-upload"></i>Upload</button>

											</div>
										</div>
										
									</form>
								</div>
								<div class="card-body">
									 <div class="table-responsive">
									 	<table class="table">
									 		<thead>
									 			<tr>
									 				<th>No</th>
									 				<th>Nama Berkas</th>
									 				<th>Berkas</th>
									 				<th>#</th>
									 			</tr>
									 		</thead>
									 		<tbody>
									 		<?php $no=1; foreach ($berkas as $berkas): ?>
									 			<tr>
									 				<td><?= $no++;?></td>
									 				<td><?= $berkas->jenis_berkas;?></td>
									 				<td>
									 					<img src="<?= base_url('assets/images/foto/'.$berkas->image); ?>"  alt="file" width="80">
									 				</td>
									 				<td>
									 					<a href="<?= base_url('Siswa/delete_berkas/'.encrypt_url($berkas->id_berkas)); ?>" class="fas fa-trash text-danger"></a>
									 				</td>
									 			</tr>
									 		<?php endforeach ?>
									 		</tbody>
									 	</table>
									 </div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

<script>


    function previewImage(){
        const image = document.querySelector('#image');
        const imagePreview = document.querySelector('.img-preview');

        imagePreview.style.display='block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent){
            imagePreview.src = oFREvent.target.result;
        }
    }
</script>
