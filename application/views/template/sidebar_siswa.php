<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner" >
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?= base_url('assets/images/foto/'.$this->session->userdata('image'));?>" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?= $this->session->userdata('nama_peserta'); ?>
									<span class="user-level"><?= $this->session->userdata('email'); ?></span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="<?= base_url('Siswa/Profile'); ?>">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									
									<li>
										<a href="#" data-toggle="modal" data-target="#pass">
											<span class="link-collapse">Ubah Password</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">

						<li class="nav-item">
							<a href="<?= base_url('Home'); ?>">
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
										<a href="<?= base_url('Siswa/d_pribadi'); ?>">
											<span class="sub-item">Data Pribadi</span>
										</a>
									</li>
									
									<li>
										<a  href="<?= base_url('Siswa/d_ortu'); ?>">
											<span class="sub-item">Data Orang Tua</span>
										</a>
									</li>

									<li>
										<a  href="<?= base_url('Siswa/d_wali'); ?>">
											<span class="sub-item">Data Wali</span>
										</a>
									</li>


									<li>
										<a  href="<?= base_url('Siswa/d_berkas'); ?>">
											<span class="sub-item">Data Berkas</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>

						

						

						
						
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

	<div class="main-panel">
		