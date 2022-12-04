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
								<div class="card-body">
									
									 <form action="<?= base_url('Kolektif/edit/'.$kolektif->id_kolektif); ?>" method="post">

									 	<div class="form-group">
											<label>Biaya Formulir</label>
											<input type="text" name="biaya_formulir"  class="form-control" value="100000" readonly="">
										</div>
										
										<div class="form-group">
											<button type="button" class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#peserta"><i class="fas fa-users"></i> Peserta</button>
										</div>

										<input type="hidden" name="id_peserta" id="id_peserta" value="<?= $kolektif->id_peserta; ?>">
										
										<div class="form-group">
											<label>Nama Peserta</label>
											<input type="text" name="nama_peserta" id="nama_peserta"  class="form-control" value="<?= $kolektif->nama_peserta; ?>"  readonly="">
										</div>

										<div class="form-group">
											<label>Jenis Kolektor</label>
											<select name="id_kolektor" id="id_kolektor" class="form-control">
												<option value="">Pilih</option>
											<?php foreach ($kolektor as $kolektor): ?>
											<?php if ($kolektif->id_kolektor == $kolektor->id_kolektor): ?>
												<option value="<?= $kolektor->id_kolektor; ?>" selected><?= $kolektor->jenis_kolektor; ?></option>
											<?php else: ?>
												<option value="<?= $kolektor->id_kolektor; ?>"><?= $kolektor->jenis_kolektor; ?></option>
											<?php endif ?>
												
											<?php endforeach ?>
											</select>
										</div>

										<div class="form-group">
											<label>Cashback (Rp)</label>
											<input type="number" name="cashback" id="cashback" class="form-control" value="<?= $kolektif->cashback; ?>" readonly="">
										</div>

										<div class="form-group">
											<label>Nama Kolektor</label>
											<input type="text" name="nama_kolektif" id="nama_kolektor" class="form-control" value="<?= $kolektif->nama_kolektif; ?>">
										</div>

										<div class="form-group">
											<label>Keterangan</label>
											<input type="text" name="keterangan" class="form-control" value="<?= $kolektif->keterangan; ?>">
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