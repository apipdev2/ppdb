<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?= $title; ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= base_url('assets/img/icon.ico" type="image/x-icon');?>"/>

	<!-- Fonts and icons -->
	<link rel="stylesheet" href="<?= base_url('assets/css/fonts.min.css'); ?>">
	<script src="<?= base_url('assets/js/plugin/webfont/webfont.min.js');?>"></script>

	

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/atlantis.min.css');?>">
	<!-- jquery -->
	<style>
		fieldset.scheduler-border {
		    border: solid 1px #DDD !important;
		    padding: 0 10px 10px 10px;
		    border-bottom: none;
		}

		legend.scheduler-border {
		    width: auto !important;
		    border: none;
		    font-size: 10px;
		}
		/*.form-group{
			margin-top: 0 !important;
			margin-bottom: 0 i !important;
		}

		.form-control{
			height: 32px !important;
			padding-left: 6px !important;
			padding-top: 1px !important;
			padding-bottom: 1px !important;

		}*/
	</style>

	<script src="<?= base_url('assets/js/core/jquery.3.2.1.min.js');?>"></script>

</head>
<body >
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
									<img src="<?= base_url('assets/img/profile.jpg');?>" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="<?= base_url('assets/img/profile.jpg');?>" alt="image profile" class="avatar-img rounded"></div>
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
										<a class="dropdown-item" href="<?= base_url('Auth/logout'); ?>">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		

		<div class="main-panel">