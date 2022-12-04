

			<!-- conten disini -->
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
							</div>
							
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row">
						<div class="col-md-3">
							<div class="card card-dark bg-primary-gradient">
								<div class="card-body pb-0">
									<div class="h1 fw-bold float-right"><i class="fas fa-users"></i></div>
									<h2 class="mb-2"><?= $jml_pendaftar; ?></h2>
									<p>Total Pendaftar</p>
									
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card card-dark bg-secondary-gradient">
								<div class="card-body pb-0">
									<div class="h1 fw-bold float-right"><i class="fas fa-user-check"></i></div>
									<h2 class="mb-2"><?= $verifikasi; ?></h2>
									<p>Pendaftar Terverifikasi</p>
									
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card card-dark bg-success2">
								<div class="card-body pb-0">
									<div class="h1 fw-bold float-right"><i class="fas fa-user-plus"></i></div>
									<h2 class="mb-2"><?= $kolektif; ?></h2>
									<p>Pendaftar Kolektif</p>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card card-dark bg-info">
								<div class="card-body pb-0">
									<div class="h1 fw-bold float-right"><i class="fas fa-user"></i></div>
									<h2 class="mb-2"><?= $user; ?></h2>
									<p>User</p>
								</div>
							</div>
						</div>
					</div>


					 <?php
					    //Inisialisasi nilai variabel awal
					    $tanggal= "";
					    $total= "";
					    foreach ($pendaftar as $pen)
					    {   
					        $tgl = date_indo($pen->tanggal_daftar);
					        $tanggal .= "'$tgl'". ", ";
					        $total .= "$pen->total". ", ";

					    }
					    ?>


					    <div class="col-md-12 mb-3">
					    	<div class="row">
					    		<div class="col-md-8">
					    			<canvas id="myChart"></canvas> 
					    		</div>
					    		<div class="col-md-4">
					    			<!-- apalagi -->
					    		</div>			            	                 
					    	</div>
			          	</div>
					  
					          
					        



					<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js"></script>
					 <script>
					    var ctx = document.getElementById('myChart').getContext('2d');
					    var chart = new Chart(ctx, {
					        // The type of chart we want to create
					        type: 'bar',
					        // The data for our dataset
					        data: {
					            labels: [<?php echo $tanggal; ?>],
					            datasets: [{
					                label:'Total Pendaftar',
					                backgroundColor: ['rgb(26, 82, 118)'],
					                borderColor: ['rgb(245, 66, 215)'],
					                data: [<?php echo $total; ?>],
					            }]
					        },
					        // Configuration options go here
					        options: {
					            scales: {
					                yAxes: [{
					                    ticks: {
					                        beginAtZero:true
					                    }
					                }]
					            }
					        }
					    });
					</script>
					
				</div>
			</div>
			<!-- end -->


			