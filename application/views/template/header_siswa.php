<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?= $title; ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= base_url('assets/img/icon2.png" type="image/x-icon');?>"/>

	<!-- Fonts and icons -->
	<link rel="stylesheet" href="<?= base_url('assets/css/fonts.min.css'); ?>">
	<script src="<?= base_url('assets/js/plugin/webfont/webfont.min.js');?>"></script>

	

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/atlantis.min.css');?>">
	<!-- jquery -->
	

	<script src="<?= base_url('assets/js/core/jquery.3.2.1.min.js');?>"></script>

</head>
<body >
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="index.html" class="logo text-light">
					<img src="<?= base_url('assets/img/ilustrasi.png');?>" alt="navbar brand" class="navbar-brand" width="50">
					PPDB
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
												<h4><?= $this->session->userdata('nama_peserta'); ?></h4>
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

		

		
		<!-- modal changer -->
			<div class="modal fade" id="pass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Ganti Password</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="<?= base_url('Siswa/change_password'); ?>" method="post">
		      <div class="modal-body">
		        
		        	
		        	<div class="form-group">
						<label>Password</label>
						<input type="text" name="password" class="form-control">
					</div>

		        
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Simpan</button>
		      </div>

		      </form>
		    </div>
		  </div>
		</div>