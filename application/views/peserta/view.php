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
								<a href="<?= base_url('Peserta'); ?>">Data Peserta</a>
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
						<div class="col-md-12">
							<div class="card">
								
								<div class="card-body">

										<div class="row">
											<div class="col-md-6">

											<table class="table">
												<tr>
													<th>No Pendaftaran</th>
													<td>:</td>
													<td><?= $peserta->no_pendaftaran;?></td>
												</tr>
												<tr>												
													<th>NIK</th>
													<td>:</td>
													<td><?= $peserta->nik;?></td>
												</tr>
												<tr>												
													<th>NISN</th>
													<td>:</td>
													<td><?= $peserta->nisn;?></td>
												</tr>
												<tr>
													<th>Nama Peserta</th>
													<td>:</td>
													<td><?= $peserta->nama_peserta;?></td>
												</tr>
												<tr>
													<th>Jenis Kelamin</th>
													<td>:</td>
													<td><?= $peserta->jenis_kelamin;?></td>
												</tr>
												<tr>
													<th>Tempat, Tanggal Lahir</th>
													<td>:</td>
													<td><?= $peserta->tempat_lahir.', '.$peserta->tanggal_lahir;?></td>
												</tr>
												<tr>
													<th>Alamat</th>
													<td>:</td>
													<td><?= $peserta->alamat;?></td>
												</tr>
												<tr>
													<th>Asal Sekolah</th>
													<td>:</td>
													<td><?= $peserta->asal_sekolah;?></td>
												</tr>
												<tr>
													<th>Jurusan</th>
													<td>:</td>
													<td><?= $peserta->nama_jurusan;?></td>
												</tr>
											</table>
												   

												
											</div>
											<div class="col-md-6">
												

											</div>
										</div>
										
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



<script>
	
	$('#id_kolektor').change(function(){

		var id_kolektor = $('#id_kolektor').val();

		$.ajax({

			type : "post",
			dataType:"json",
			url : "<?= base_url('Peserta/getCashback/'); ?>",
			data :{
				id : id_kolektor
			},
			success : function(data){
				
				$('[name = cashback ]').val(data.nominal);
			}
		});

	});

</script>

<script>
	
	$('#id_potongan').change(function(){

		var id = $('#id_potongan').val();


		$.ajax({

			type 	: "post",
			dataType:"json",
			url 	: "<?= base_url('Peserta/getPotongan/'); ?>",
			data    :{id_potongan : id},
			success : function(data){
				
				// console.log(d);
				$('[name = nominal_potongan ]').val(data.nominal);
			}
		});

	});
</script>