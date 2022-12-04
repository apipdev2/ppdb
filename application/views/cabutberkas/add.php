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
									
									 <form action="<?= base_url('Cabutberkas/add'); ?>" method="post">

										<div class="form-group">
											<button type="button" class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#peserta"><i class="fas fa-users"></i> Peserta</button>
										</div>

										<input type="hidden" name="id_peserta" id="id_peserta">
										<input type="text" name="no_pendaftaran" id="no_pendaftaran">
										
										<div class="form-group">
											<label>Nama Peserta</label>
											<input type="text" name="nama_peserta" id="nama_peserta"  class="form-control" readonly="">
										</div>

										

										<div class="form-group">
											<label>Total DU (Rp)</label>
											<input type="number" name="total_du" id="total_du" class="form-control" readonly="">
										</div>

										<div class="form-group">
											<label>Besar Potongan (Rp)</label>
											<input type="number" name="potongan" id="potongan" class="form-control" readonly="">
										</div>

										<div class="form-group">
											<label>Diterima (Rp)</label>
											<input type="number" name="diterima" id="diterima" class="form-control" readonly="">
										</div>

										<div class="form-group">
											<label>Pencabut Berkas</label>
											<input type="text" name="pencabut_berkas" id="pencabut_berkas" class="form-control">
										</div>

										<button class="btn btn-primary btn-sm float-right">Simpan</button>
										
									</form>
													
													
													
								</div>
							
								
							</div>
						</div>
					</div>
				</div>
			</div>



<!-- Modal -->
		<div class="modal fade" id="peserta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">PilihPeserta</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      
		      <div class="modal-body">
		        
		        <table id="basic-datatables" class="display table">	
			        <thead>
						<tr>
							<th>No Pendaftaran</th>
							<th>Nama</th>
							<th>Tempat Lahir</th>
							<th>Tgl Lahir</th>
							<th>Asal Sekolah</th>
							<th>#</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($peserta as $p): ?>
							
						<tr>
							<td><?= $p->no_pendaftaran; ?></td>
							<td><?= $p->nama_peserta; ?></td>
							<td><?= $p->tempat_lahir; ?></td>
							<td width="20%"><?= date('d-m-Y',strtotime($p->tanggal_lahir)); ?></td>
							<td><?= $p->asal_sekolah; ?></td>
							<td>
								<button type="button" class="btn btn-success btn-sm" onclick="peserta('<?= $p->id_peserta; ?>')">Pilih</button>
							</td>
						</tr>
						
						<?php endforeach ?>

					</tbody>
				</table>


		        
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
						var no_pendaftaran = data.no_pendaftaran;
						//potongan
						var potongan = 550000;
						$('#nama_peserta').val(data.nama_peserta);
						$('#id_peserta').val(data.id_peserta);
						$('#no_pendaftaran').val(data.no_pendaftaran);
						$('#peserta').modal('hide');

						$.ajax({
							type : "post",
							dataType: "JSON",
							url : "<?= base_url('Cabutberkas/getTotalDU/');?>",
							data :{
								no_pendaftaran : no_pendaftaran
							},
							success : function(data){

								$('#total_du').val(data.besarnya_pembayaran);
								$('#potongan').val(potongan);
								$('#diterima').val(data.besarnya_pembayaran - potongan);
								
							}
						});

					}
				});
			}

			
		</script>