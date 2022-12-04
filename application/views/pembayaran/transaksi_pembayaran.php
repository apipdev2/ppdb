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
								<form action="">
									<div class="row">
										<div class="col-md-6">

											<div class="form-group">
												<label>No Pendaftaran</label>
												<div class="input-icon">
													<input type="text" name="no_pendaftaran" id="no_pendaftaran" class="form-control" readonly >
													<span class="input-icon-addon">
														<a href="#" data-toggle="modal" data-target="#peserta"><i class="fa fa-search"></i></a>
													</span>
												</div>
											</div>

											<div class="form-group">
												<label>Nama Peserta</label>
												<input type="text" name="nama" id="nama" class="form-control" readonly>
											</div>

											<div class="form-group">
												<label>Asal Sekolah</label>
												<input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" readonly>
											</div>

										

											<div class="form-group row">
												<div class="col-md-3">
													<label for="">Sudah Dibayar</label>
													<input type="text" id="total_du" class="form-control" readonly="">
												</div>
												<div class="col-md-3">
													<label for="">Potongan</label>
													<input type="text" id="potongan" class="form-control" readonly="">
												</div>
												<div class="col-md-3">
													<label for="">Jumlah</label>
													<input type="text" id="jml" class="form-control" readonly="">
												</div>
												<div class="col-md-3">
													<label for="">sisa</label>
													<input type="text" id="sisa" class="form-control" readonly="">
												</div>
											</div>

										
												
											

											

										</div>

										<div class="col-md-6">

											<div class="form-group">
												<label>Tanggal</label>
												<input type="date" name="tgl_bayar" id="tgl_bayar" class="form-control">
											</div>
											
											<div class="form-group">
												<label>Jensi Pembayaran</label>
												<select name="id_jenis" id="id_jenis" class="form-control">
													<option value="">Pilih</option>
													<?php foreach ($jenis_pembayaran as $jp): ?>
													<option value="<?= $jp->id_jenis; ?>"><?= $jp->jenis_pembayaran; ?></option>
													<?php endforeach ?>
												</select>
											</div>

											

											<div class="form-group">
												<label>Diskon (Rp)</label>
												<select name="diskon" id="diskon" class="form-control">
													<option value="0">Tidak ada Potongan</option>
													<option value="150000">Januari - Maret | Rp.150,000</option>
													<option value="100000">April - Mei | Rp.100,000</option>
												</select>
											</div>

											<div class="form-group">
												<label>Besarnya (Rp)</label>
												<input type="number" name="besarnya" id="besarnya" class="form-control">
											</div>

										</div>

									</div>
										<button type="button" class="btn btn-info btn-sm float-right" id="bayar">Bayar</button>
								</form>

								</div>
								<div class="card-body">
									
									<table class="table table-striped" >
										<thead>
											<tr>
												<th>Kode Pembayaran</th>
												<th>No Pendaftaran</th>
												<th>Nama</th>
												<th>Jurusan</th>
												<th>Jenis Pembayaran</th>
												<th>Besarnya</th>

											</tr>
										</thead>
										<tbody id="view"></tbody>
									</table>
									<a href="<?= base_url('Transaksi_pembayaran/store') ?>" class="btn btn-success btn-sm float-right">Simpan</a>
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

	view();

	function view()
	{	
		$.ajax({
			type:"get",
			dataType:"JSON",
			url:"<?= base_url('Transaksi_pembayaran/getPembayaranTmp/');?>",
			success:function(data){
				
				var html = "";
				 for (var i = 0; i < data.length; i++) {
				 	
				 	 html+='<tr>'+
				              '<td>'+data[i].kode_pembayaran+'</td>'+
				              '<td>'+data[i].no_pendaftaran+'</td>'+
				              '<td>'+data[i].nama_peserta+'</td>'+
				              '<td>'+data[i].nama_jurusan+'</td>'+
				              '<td>'+data[i].jenis_pembayaran+'</td>'+
				              '<td>'+data[i].besarnya_pembayaran+'</td>'+
				              '<td><button class="btn btn-danger btn-sm" onclick="hapus('+data[i].id+')">Batal</button></td>'+
				             '</tr>';
				 }


				 $('#view').html(html);
			}
		});
	}
	
	

	function peserta(id){


				$.ajax({
					type : "post",
					dataType: "JSON",
					url : "<?= base_url('Transaksi_pembayaran/get_peserta/');?>",
					data :{
						id_peserta : id
					},
					success : function(data){
						var no_pendaftaran = data.no_pendaftaran;
						$('#no_pendaftaran').val(data.no_pendaftaran);
						$('#nama').val(data.nama_peserta);
						$('#asal_sekolah').val(data.asal_sekolah);
						$('#peserta').modal('hide');

						$.ajax({
							type : "post",
							dataType: "JSON",
							url : "<?= base_url('Transaksi_pembayaran/getTotalDU/');?>",
							data :{
								no_pendaftaran : no_pendaftaran
							},
							success : function(data1){	
								
								var total_du = parseInt(data1.total_du['besarnya_pembayaran']);
								var potongan = parseInt(data1.potongan['nominal']);
								var jml = total_du + potongan;
								var sisa = 2000000 - jml;

								if (total_du + potongan >=2000000) {

									$('#total_du').html('LUNAS');

								} else {
									
									$('#total_du').val(total_du);
									$('#potongan').val(potongan);
									$('#jml').val(jml);
									$('#sisa').val(sisa);
								}							
								
								
							}
						});
					}
				});
			}


	$('#bayar').click(function(){

		var tgl_bayar = $('#tgl_bayar').val();
		var no_pendaftaran = $('#no_pendaftaran').val();
		var id_jenis = $('#id_jenis').val();
		var besarnya = $('#besarnya').val();
		var diskon = $('#diskon').val();
		var j_besarnya = parseInt(besarnya)+parseInt(diskon);

		$.ajax({
			type : "post",
			dataType: "JSON",
			url : "<?= base_url('Transaksi_pembayaran/Bayar/');?>",
			data :{
				tgl_bayar : tgl_bayar,
				no_pendaftaran : no_pendaftaran,
				id_jenis : id_jenis,
				besarnya : j_besarnya,
			},
			success : function(data){
				
				$.ajax({
							type : "post",
							dataType: "JSON",
							url : "<?= base_url('Transaksi_pembayaran/getTotalDU/');?>",
							data :{
								no_pendaftaran : no_pendaftaran
							},
							success : function(data){	

								var total = parseInt(data.total_du['besarnya_pembayaran'])+parseInt(data.potongan['nominal'])+parseInt(j_besarnya);

								if (total >= parseInt(2000001)) {

									alert('Silahkan Cek Kembali Pembayaran');

								} else {
									if (data =="1") {
										alert('Data Sudah ada.!');
									} else {

										view();
									}
								}							
								
								
							}
						});

				
			}
		});
	});


	function hapus(id)
	{
		$.ajax({

			type :"post",
			dataType: "JSON",
			url : "<?= base_url('Transaksi_pembayaran/hapus_pembayaran_tmp/');?>",
			data :{id : id},
			success : function(data){

				view();
			}
		});
	}


</script>

		