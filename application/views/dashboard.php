

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
									<h2 class="mb-2"><?= $du; ?></h2>
									<p>Data DU</p>
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
					    		<div class= "col-md-6">
					    			<div class="card">
					    			<canvas id="myChart"></canvas> 
					    			</div>
					    		</div>
					    					            	                 
					    		<div class="col-md-6">
					    			<div class="card">

						    			<div class="card-body">
						    				<div class="table-responsive">
												<table class="table table-bordered">
												
													<tr>
														<th class="text-center">Jenis DU</th>
														<th class="text-center">Jumlah</th>
													</tr>

													<tr>
														<td>DU ke-1</td>
														<td class="text-center"><?= $du1;?></td>
													</tr>
													<tr>
														<td>DU ke-2</td>
														<td class="text-center"><?= $du2;?></td>
													</tr>
													<tr>
														<td>DU ke-3</td>
														<td class="text-center"><?= $du3;?></td>
													</tr>
									           </table>
									        </div>
						    			</div>
						    			
						    		</div>
					    		</div>
								
							</div>
						</div>

						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="card">
										<div class="card-body">
											
											<table class="table table-bordered table-responsive">
												<tr>
													<th colspan="5" class="text-center">REKAP DAFTAR PPDB</th>
												</tr>
												<tr>
													<th class="text-center">Jurusan</th>
													<th class="text-center">L</th>
													<th class="text-center">P</th>
													<th class="text-center">Jumlah</th>
													<th class="text-center">Kuota</th>
												</tr>

												<?php foreach ($jurusan as $j): ?>
												<?php

													$jml_l = $this->db->select('*')
																  ->from('peserta')
																  ->where('jenis_kelamin','L')
																  ->where('id_jurusan',$j->id_jurusan)
																  ->get()->num_rows();
													$jml_p = $this->db->select('*')
																  ->from('peserta')
																  ->where('jenis_kelamin','P')
																  ->where('id_jurusan',$j->id_jurusan)
																  ->get()->num_rows();
													?>
													<tr>
														<td><?= $j->nama_jurusan;?></td>
														<td class="text-center"><?= $jml_l;?></td>
														<td class="text-center"><?= $jml_p;?></td>
														<td class="text-center"><?= $jml_l + $jml_p;?></td>
														<td class="text-center"><?= $j->kuota_jurusan;?></td>
													</tr>
												<?php endforeach ?>
											</table>
										</div>
									</div>
								</div>



								<div class="col-md-6">
									<div class="card">
										<div class="card-body">
											
											<table class="table table-bordered table-responsive">
												<tr>
													<th colspan="5" class="text-center">REKAP DAFTAR ULANG</th>
												</tr>
												<tr>
													<th class="text-center">Jurusan</th>
													<th class="text-center">L</th>
													<th class="text-center">P</th>
													<th class="text-center">Jumlah</th>
													<th class="text-center">Kuota</th>
												</tr>

												<?php foreach ($jurusan as $j): ?>
												<?php

													$jml_l = $this->db->select('*')
																  ->from('peserta p')
																  ->join('transaksi_pembayaran tp','tp.no_pendaftaran = p.no_pendaftaran')
																  ->where('jenis_kelamin','L')
																  ->where('id_jurusan',$j->id_jurusan)
																  ->get()->num_rows();
													$jml_p = $this->db->select('*')
																  ->from('peserta p')
																  ->join('transaksi_pembayaran tp','tp.no_pendaftaran = p.no_pendaftaran')
																  ->where('jenis_kelamin','P')
																  ->where('id_jurusan',$j->id_jurusan)
																  ->get()->num_rows();
													?>
													<tr>
														<td><?= $j->nama_jurusan;?></td>
														<td class="text-center"><?= $jml_l;?></td>
														<td class="text-center"><?= $jml_p;?></td>
														<td class="text-center"><?= $jml_l + $jml_p;?></td>
														<td class="text-center"><?= $j->kuota_jurusan;?></td>
													</tr>
												<?php endforeach ?>
											</table>
										</div>
									</div>
								</div>

						</div>

						<div class="col-md-12">
									<div class="card">
										<div class="card-body">
											<table class="table table-bordered">
											<tr>
												<th colspan="2" class="text-center">REKAP DATA ASAL SEKOLAH</th>
											</tr>
											<tr>
												<th class="text-center">Nama Sekolah</th>
												<th class="text-center">Jumlah</th>
											</tr>

											<?php foreach ($asal_sekolah as $as): ?>
												<?php

													$jml_as = $this->db->select('asal_sekolah')
																  ->from('peserta')
																  ->where('asal_sekolah',$as->asal_sekolah)
																  ->get()->num_rows();
													
												?>
												<tr>
													<td><?= $as->asal_sekolah;?></td>
													<td class="text-center"><?= $jml_as;?></td>
												</tr>
									          <?php endforeach ?>
								           </table>
								     
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


			