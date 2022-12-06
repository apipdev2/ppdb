

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
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									
								<table class="table table-bordered table-responsive">
									<tr>
										<th colspan="4" class="text-center">REKAP DATA PERJURUSAN</th>
									</tr>
									<tr>
										<th class="text-center">Jurusan</th>
										<th class="text-center">L</th>
										<th class="text-center">P</th>
										<th class="text-center">Jumlah</th>
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
										</tr>
									<?php endforeach ?>
								</table>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									
								<h2 class="text-center">Contact Informasi :</h2>
								<p>
									Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Doloremque sapiente tenetur repellat aut aperiam. Officiis, rem architecto id voluptas, modi, perspiciatis at quisquam, quaerat placeat omnis quos debitis quia sit.
								</p>
								</div>
							</div>
						</div>
					</div>


					<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									
								<table class="table table-bordered table-responsive">
									<tr>
										<th colspan="4" class="text-center">REKAP DATA ASAL SEKOLAH</th>
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
					
				</div>
			</div>
			<!-- end -->


	


			