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
									<a href="<?= base_url('Kolektif/add'); ?>" class="btn btn-success btn-sm"> Tambah</a>
									<a href="<?= base_url('Kolektif/cetak/'.encrypt_url($tgl1).'/'.encrypt_url($tgl2)); ?>" class="btn btn-primary btn-sm float-right" target="_blank"> Cetak</a>
								</div>
								<div class="card-body">

									<form action="" method="post">

										<div class="row">
											<div class="col-md-4">
												<div class="form-group row">
												    <label  class="col-sm-2 col-form-label">Tanggal</label>
												    <div class="col-sm-10">
												      <input type="date" name="tgl1" class="form-control">
												    </div>
												  </div>
											</div>
											<div class="col-md-4">
												<div class="form-group row">
												    <label class="col-sm-2 col-form-label">S/d</label>
												    <div class="col-sm-10">
												      <input type="date" name="tgl2" class="form-control">
												    </div>
												  </div>
											</div>
											<div class="col-md-4">
												<div class="form-group row">	
													<button class="btn btn-info "><i class="fas fa-search"></i></button>
												</div>
											</div>
										</div>
									
									</form>

									<hr>
									<div class="table-responsive">
										<table id="basic-datatables" class="display table">
											<thead>
												<tr>
													<th>No</th>
													<th>No Pendaftaran</th>
													<th>Operator</th>
													<th>Tanggal</th>
													<th>Nama Peserta</th>
													<th>JK</th>
													<th>Jurusan</th>
													<th>Asal Sekolah</th>
													<th>#</th>
												</tr>
											</thead>
											
											<tbody >
												<?php $no=1; foreach ($kolektif as $k): ?>
													
												<tr>
													<td><?= $no; ?></td>
													<td><a href="<?= base_url('Kolektif/kwitansi/'.encrypt_url($k->id_kolektif)); ?>" target="_blank"><?= $k->no_pendaftaran; ?></a></td>
													<td><a href="<?= base_url('Kolektif/kwitansi_kolektor/'.encrypt_url($k->id_kolektif)); ?>" target="_blank"><?= $k->username; ?></a></td>
													<td><?= date('d-m-Y',strtotime($k->tanggal)); ?></td>
													<td><?= $k->nama_peserta; ?></td>
													<td><?= $k->jenis_kelamin; ?></td>
													<td><?= $k->nama_jurusan; ?></td>
													<td><?= $k->asal_sekolah; ?></td>
													
													<td>
														<a href="<?= base_url('Kolektif/edit/'.encrypt_url($k->id_kolektif)); ?>" class="fas fa-edit text-info"></a>
														<a href="<?= base_url('Kolektif/delete/'.encrypt_url($k->id_kolektif).'/'.encrypt_url($k->id_peserta)); ?>" class="fas fa-trash text-danger"></a>
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




		<script>
			
			function peserta(id){


				$.ajax({
					type : "post",
					dataType: "JSON",
					url : "<?= base_url('Kolektif/get_peserta/');?>",
					data :{
						id : id
					},
					success : function(data){

						$('#nama_peserta').val(data.nama_peserta);
						$('#id_peserta').val(data.id_peserta);
						$('#peserta').modal('hide');

					}
				});
			}

			$('#id_kolektor').change(function(){

				var id_kolektor = $('#id_kolektor').val();

				$.ajax({

					type : "post",
					dataType:"json",
					url : "<?= base_url('Kolektif/getCashback/'); ?>",
					data :{
						id : id_kolektor
					},
					success : function(data){
						
						$('[name = cashback ]').val(data.nominal);
					}
				});

			});
		</script>