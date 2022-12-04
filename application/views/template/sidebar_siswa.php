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
							<a data-toggle="collapse" href="#submenu">
								<i class="fas fa-edit"></i>
								<p>Formulir</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="submenu">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?= base_url('Tahunajaran'); ?>">
											<span class="sub-item">Data Pribadi</span>
										</a>
									</li>
									
									<li>
										<a  href="<?= base_url('Jurusan'); ?>">
											<span class="sub-item">Data Orang Tua</span>
										</a>
									</li>

									<li>
										<a  href="<?= base_url('Jurusan'); ?>">
											<span class="sub-item">Data Wali</span>
										</a>
									</li>

									<li>
										<a  href="<?= base_url('Jurusan'); ?>">
											<span class="sub-item">Data Sekolah</span>
										</a>
									</li>

									<li>
										<a  href="<?= base_url('Jurusan'); ?>">
											<span class="sub-item">Data Berkas</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>

						<li class="nav-item">
							<a href="<?= base_url('Siswa/Pembayaran'); ?>">
								<i class="fas fa-book"></i>
								<p>Data Pembayaran</p>
							</a>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->