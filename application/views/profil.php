<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Recka | Home</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/simple-line-icons.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
	<style type="text/css">
		#image-preview {
			width: 200px;
			height: 200px;
			border-radius: 100px;
			position: relative;
			overflow: hidden;
			background-color: #f1f1f1;
			color: #fff;
			margin: 0 auto;
		}

		#image-preview input {
			line-height: 200px;
			font-size: 200px;
			position: absolute;
			opacity: 0;
			z-index: 10;
		}

		#image-preview label {
			position: absolute;
			z-index: 5;
			opacity: 0.8;
			cursor: pointer;
			background-color: #bdc3c7;
			width: 200px;
			height: 50px;
			font-size: 20px;
			line-height: 50px;
			text-transform: uppercase;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			margin: auto;
			text-align: center;
		}

	</style>
</head>

<body class="sidebar-fixed header-fixed">
	<div class="page-wrapper">
		<nav class="navbar page-header" style="box-shadow: 0 5px 10px 0 rgba(0,0,0,.1);">
			<a href="#" class="btn btn-link sidebar-mobile-toggle d-md-none mr-auto">
				<i class="fa fa-bars"></i>
			</a>
			<a class="navbar-brand" href="#">
				<span class="text-center ml-3">
					<img src="<?php echo base_url('assets/imgs/logo1.png') ?>" alt="logo">
				</span>
			</a>
			<button href="#" class="btn btn-link sidebar-toggle d-md-down-none">
				<i class="fa fa-bars"></i>
			</button>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="<?php echo base_url('assets/imgs/avatar-1.png') ?>" class="avatar avatar-sm" alt="logo">
						<span class="small ml-1 d-md-down-none">
							Admin
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right" style="margin-top: 10px;">
						<a href="<?php echo base_url(); ?>" class="dropdown-item" style="box-shadow: 0 5px 10px 0 rgba(0,0,0,.1);">
							<i class="icon icon-logout"></i> Logout
						</a>
					</div>
				</li>
			</ul>
		</nav>
		<div class="main-container">
			<div class="sidebar">
				<nav class="sidebar-nav">
					<ul class="nav">
						<li class="nav-item">
							<a href="<?php echo base_url('dashboard');?>" class="nav-link">
								<i class="icon icon-home"></i> Dashboard
							</a>
							<a href="<?php echo base_url('user');?>" class="nav-link">
								<i class="icon icon-user"></i> User
							</a>
							<a href="<?php echo base_url('profil');?>" class="nav-link active">
								<i class="icon icon-settings"></i> Profil
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-2" role="tablist">
							<div class="list-group">
								<a data-toggle="tab" href="#profile" role="tab" class="list-group-item active">Profile</a>
								<a data-toggle="tab" href="#setting" role="tab" class="list-group-item">Account Setting</a>
							</div>
						</div>
						<div class="col-md-10">
							<div class="tab-content" style="border: none;">
								<div class="tab-pane active" id="profile" role="tabpanel" style="padding: 0;">
									<div class="card">
										<div class="card-header bg-light">
											<div>Profile Information</div>
											<div class="text-muted small">These information are visible to the public.</div>
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-md-12">
													<!-- <img width="200" class="avatar" src="<?php echo base_url(); ?>uploads/<?php echo $upload_data['file_name']; ?>" /> -->
													<img src="<?php echo base_url('assets/imgs/avatar-1.png') ?>" class="avatar" width="200px" alt="logo" style="display: block; margin: 0 auto">
												</div>
												<!-- <div class="col-md-6"> -->
													<!-- <?php echo form_open_multipart('/profil/upload_file'); ?>
													<?php echo $error; ?>
													<label for="image-upload" id="image-label">Set Photo Profile</label>
													<input type="file" name="userfile" id="image-upload" />
													<button class="btn btn-primary float-right" type="submit">Save</button>
													<?php echo form_close();?> -->
												<!-- </div> -->
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="setting" role="tabpanel" style="border: none; padding: 0;">
									<div class="card" id="profile">
										<div class="card-header bg-light">
											Account Setting
										</div>
										<div class="card-body">
											<div class="row mb-5">
												<div class="col-md-4">

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/chart.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/carbon.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/demo.js') ?>"></script>
</body>

</html>
