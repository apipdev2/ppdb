<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					
					<ul class="nav nav-primary">

						<li class="nav-item">
							<a href="<?= base_url('Dashboard'); ?>">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
					
						

						<li class="nav-item">
							<a data-toggle="collapse" href="#psb">
								<i class="fas fa-user"></i>
								<p>PSB</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="psb">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?= base_url('Peserta'); ?>">
											<span class="sub-item">Data Peserta</span>
										</a>
									</li>

									<li>
										<a href="<?= base_url('Kolektif'); ?>">
											<span class="sub-item">Biaya Formulir</span>
										</a>
									</li>

									<li>
										<a href="<?= base_url('Cabutberkas'); ?>">
											<span class="sub-item">Data Cabut Berkas</span>
										</a>
									</li>

									
									
									
								</ul>
							</div>
						</li>

						
						<?php if ($this->session->userdata('id_level')==2): ?>

							<li class="nav-item">
							<a data-toggle="collapse" href="#money">
								<i class="fas fa-store"></i>
								<p>Daftar Ulang</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="money">
								<ul class="nav nav-collapse">
									
								

									<li>
										<a href="<?= base_url('Transaksi_pembayaran/laporan'); ?>">
											<span class="sub-item">Laporan DU</span>
										</a>
									</li>
									
									
									
								</ul>
							</div>
						</li>
						<?php else: ?>
						<li class="nav-item">
							<a data-toggle="collapse" href="#money">
								<i class="fas fa-store"></i>
								<p>Daftar Ulang</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="money">
								<ul class="nav nav-collapse">
									
									
									<li>
										<a href="<?= base_url('Transaksi_pembayaran'); ?>">
											<span class="sub-item">Transaksi DU</span>
										</a>
									</li>

									<li>
										<a href="<?= base_url('Transaksi_pembayaran/laporan'); ?>">
											<span class="sub-item">Laporan DU</span>
										</a>
									</li>
									
									
									
								</ul>
							</div>
						</li>
						<?php endif ?>


						<?php if ($this->session->userdata('id_level')==1): ?>
							
						<li class="nav-item">
							<a data-toggle="collapse" href="#submenu">
								<i class="fas fa-bars"></i>
								<p>Referensi</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="submenu">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?= base_url('Tahunajaran'); ?>">
											<span class="sub-item">Tahun Ajaran</span>
										</a>
									</li>
									
									<li>
										<a  href="<?= base_url('Jurusan'); ?>">
											<span class="sub-item">Jurusan</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>
						
						

							<li class="nav-item">
								<a href="<?= base_url('User'); ?>">
									<i class="fas fa-user-secret"></i>
									<p>User</p>
								</a>
							</li>

						<?php endif ?>
						
						
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">