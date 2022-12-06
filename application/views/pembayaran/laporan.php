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
									<a href="<?= base_url('Transaksi_pembayaran/cetak_laporan'); ?>" class="btn btn-primary float-right" ><i class="fas fa-print"></i> Cetak</a>
									
								</div>
								<div class="card-body">

									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped">
											<thead>
												<tr>
													<th>No</th>
													<th>No Pendaftaran</th>
													<th>Nama Peserta</th>
													<th>JK</th>
													<th>Jurusan</th>
													<th>Dibayar</th>
													<th>Sisa</th>
													<th>Status</th>
												</tr>
											</thead>											
											<tbody>
												<?php $no=1; foreach ($du as $du): ?>
												<?php 

													$dibayar = $this->db->select_sum('besarnya_pembayaran','j_dibayar')
													->where('no_pendaftaran',$du->no_pendaftaran)
													->get('Transaksi_pembayaran')->row();

													$diskon = $this->db->select_sum('diskon','j_diskon')
													->where('no_pendaftaran',$du->no_pendaftaran)
													->get('Transaksi_pembayaran')->row();

													$potongan = $this->db->select('*')
																->from('peserta p')
																->join('tbl_potongan pt','pt.id_potongan = p.id_potongan')
																->where('no_pendaftaran',$du->no_pendaftaran)
																->get()->row();

													$jml_pembayaran = $dibayar->j_dibayar + $potongan->nominal + $diskon->j_diskon;

													$sisa = 2000000 - $jml_pembayaran;

													if ($jml_pembayaran >= 2000000) {
														$status ='LUNAS';
													}else{
														$status ="Belum LUNAS";
													}
												 ?>
												
												<tr>
													<td><?= $no; ?></td>
													<td><?= $du->no_pendaftaran; ?></td>
													<td><?= $du->nama_peserta; ?></td>
													<td><?= $du->jenis_kelamin; ?></td>
													<td><?= $du->nama_jurusan; ?></td>
													<td>Rp.<?= number_format($jml_pembayaran ); ?></td>
													<td>Rp.<?= number_format($sisa); ?></td>
													<td><?= $status;?></td>
													
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

		

