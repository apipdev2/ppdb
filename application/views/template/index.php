<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Atlantis Lite - Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= base_url('assets/img/icon.ico');?>" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<link rel="stylesheet" href="<?= base_url('assets/css/fonts.min.css'); ?>">
	<script src="<?= base_url('assets/js/plugin/webfont/webfont.min.js');?>"></script>
	

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/atlantis.min.css');?>">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?= base_url('assets/css/demo.css');?>">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="index.html" class="logo">
					<img src="<?= base_url('assets/img/logo.svg');?>" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="<?= base_url('assets/images/foto/'.$this->session->userdata('image'));?>" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="<?= base_url('assets/images/foto/'.$this->session->userdata('image'));?>" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4><?= $this->session->userdata('username'); ?></h4>
												<p class="text-muted">
													<?= $this->session->userdata('email'); ?>
												</p>
											</div>
										</div>
									</li>

									
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="<?= base_url('Login/logout'); ?>">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner" >
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
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

						

						<li class="nav-item">
							<a href="<?= base_url('Siswa/Profile'); ?>">
								<i class="fas fa-user"></i>
								<p>Profile</p>
							</a>
						
						</li>

						<li class="nav-item">
							<a href="#" data-toggle="modal" data-target="#pass">
								<i class="fas fa-key"></i>
								<p>Ganti Password</p>
							</a>
						
						</li>
						
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->


		

		<div class="main-panel">
			<div class="content">
				
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="https://www.themekita.com">
									ThemeKita
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Help
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Licenses
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
					</div>				
				</div>
			</footer>
		</div>
		
		
	</div>
	<!--   Core JS Files   -->
	<script src="<?= base_url('assets/js/core/jquery.3.2.1.min.js');?>"></script>
	<script src="<?= base_url('assets/js/core/popper.min.js');?>"></script>
	<script src="<?= base_url('assets/js/core/bootstrap.min.js');?>"></script>

	<!-- jQuery UI -->
	<script src="<?= base_url('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js');?>"></script>
	<script src="<?= base_url('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js');?>"></script>

	<!-- jQuery Scrollbar -->
	<script src="<?= base_url('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js');?>"></script>


	<!-- Chart JS -->
	<script src="<?= base_url('assets/js/plugin/chart.js/chart.min.js');?>"></script>

	<!-- jQuery Sparkline -->
	<script src="<?= base_url('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js');?>"></script>

	<!-- Chart Circle -->
	<script src="<?= base_url('assets/js/plugin/chart-circle/circles.min.js');?>"></script>

	<!-- Datatables -->
	<script src="<?= base_url('assets/js/plugin/datatables/datatables.min.js');?>"></script>

	<!-- Bootstrap Notify -->
	<script src="<?= base_url('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.j');?>s"></script>

	<!-- jQuery Vector Maps -->
	<script src="<?= base_url('assets/js/plugin/jqvmap/jquery.vmap.min.js');?>"></script>
	<script src="<?= base_url('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js');?>"></script>

	<!-- Sweet Alert -->
	<script src="<?= base_url('assets/js/plugin/sweetalert/sweetalert.min.js');?>"></script>

	<!-- Atlantis JS -->
	<script src="<?= base_url('assets/js/atlantis.min.js');?>"></script>

	
	
</body>
</html>