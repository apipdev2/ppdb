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
									<form action="" method="post">

										<div class="row">
											<div class="col-md-5">
												<div class="form-group row">
												    <label  class="col-sm-2 col-form-label">Tanggal</label>
												    <div class="col-sm-10">
												      <input type="date" name="tgl1" id="tgl1" class="form-control">
												    </div>
												  </div>
											</div>
											<div class="col-md-4">
												<div class="form-group row">
												    <label class="col-sm-2 col-form-label">S/d</label>
												    <div class="col-sm-10">
												      <input type="date" name="tgl2" id="tgl2" class="form-control">
												    </div>
												  </div>
											</div>
											<div class="col-md-3">
												<div class="form-group row">	
													<button type="button" class="btn btn-info" onclick="range()"><i class="fas fa-search"></i></button>
												</div>
											</div>
										</div>
									
									</form>
									
								</div>
								<div class="card-body">

									<div class="table-responsive">
										<div class="read">
											
										</div>
									</div>
													
													
													
								</div>
							
								
							</div>
						</div>
					</div>
				</div>
			</div>


<script>

	range();
    

    function range(){
    	var tgl1 = $('#tgl1').val();
    	var tgl2 = $('#tgl2').val();

    	$.ajax({

    		type : 'POST',
    		data : 'JSON',
    		url :"<?= base_url('Transaksi_pembayaran/read_laporan');?>",
    		data  : {tgl1 : tgl1, tgl2:tgl2},
    		success:function(data){

    			 $('.read').html(data);
    		}
    	})


    }



</script>	