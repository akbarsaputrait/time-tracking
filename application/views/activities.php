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
							<a href="<?php echo base_url('user');?>" class="nav-link active">
								<i class="icon icon-user"></i> User
							</a>
							<a href="<?php echo base_url('profil');?>" class="nav-link">
								<i class="icon icon-settings"></i> Profil
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<?php
	foreach ($user->result() as $users) {
?>
								<div class="text-center">
									<h1 class="mb-1">
										<?= $users->name; ?>
									</h1>
									<h5 class="text-muted">
										<?= $users->email; ?> <br/>
										<?= $users->pc; ?>
									</h5>
								</div>
								<?php
}
?>
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#activities" role="tab">Activities</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#task" role="tab">Task</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#screenshots" role="tab">Screenshots</a>
									</li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane active" id="activities" role="tabpanel">
										<div class="table-responsive">
											<table class="table table-bordered">
												<thead>
													<tr>
														<td>Waktu</td>
														<td>Aplikasi</td>
														<td>Yang dikerjakan</td>
													</tr>
												</thead>
												<tbody>
													<?php
												foreach($activities->result() as $act)
												{
											?>
														<tr>
															<td>
																<?= $act->date; ?> |
																	<?= $act->time; ?>
															</td>
															<td>
																<?= $act->app; ?>
															</td>
															<td>
																<?= $act->title; ?>
															</td>
														</tr>
														<?php
												}
												?>
												</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane" id="task" role="tabpanel">
										<div class="table-responsive">
											<table class="table table-bordered">
												<thead>
													<tr>
														<td>Jam</td>
														<td>Task</td>
														<td>Status</td>
													</tr>
												</thead>
												<tbody>
													<?php
												foreach($task->result() as $tk)
												{

											?>
														<tr>
															<td>
																<?= $tk->date;?> |
																	<?= $tk->time;?>
															</td>
															<td>
																<?= $tk->task;?>
															</td>
															<td>
																<?= $tk->progress; ?>
															</td>
														</tr>
														<?php
												}
											?>
												</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane" id="screenshots" role="tabpanel">
										<div class="row">
											<div class="col-md-1">
												<b style="font-size: 1.5rem;">11:20</b>
												<br/> 29 Januari 2018
											</div>
											<div class="col-md-11">
												<div class="row">
													<div class="col-md-3">
														<img src="https://screenshotmonitor.com/blog/wp-content/uploads/2014/03/TimeDoctor-007.png" width="100%" id="ss">
													</div>
													<div class="col-md-3">
														<img src="https://screenshotmonitor.com/blog/wp-content/uploads/2014/03/TimeDoctor-007.png" width="100%" id="ss">
													</div>
													<div class="col-md-3">
														<img src="https://screenshotmonitor.com/blog/wp-content/uploads/2014/03/TimeDoctor-007.png" width="100%" id="ss">
													</div>
													<div class="col-md-3">
														<img src="https://screenshotmonitor.com/blog/wp-content/uploads/2014/03/TimeDoctor-007.png" width="100%" id="ss">
													</div>
													<div class="col-md-3">
														<img src="https://screenshotmonitor.com/blog/wp-content/uploads/2014/03/TimeDoctor-007.png" width="100%" id="ss">
													</div>
												</div>
											</div>
											<div class="col-md-1">
												<b style="font-size: 1.5rem;">11:18</b>
												<br/> 29 Januari 2018
											</div>
											<div class="col-md-11">
												<div class="row">
													<div class="col-md-3">
														<img src="https://screenshotmonitor.com/blog/wp-content/uploads/2014/03/TimeDoctor-007.png" width="100%" id="ss">
													</div>
													<div class="col-md-3">
														<img src="https://screenshotmonitor.com/blog/wp-content/uploads/2014/03/TimeDoctor-007.png" width="100%" id="ss">
													</div>
													<div class="col-md-3">
														<img src="https://screenshotmonitor.com/blog/wp-content/uploads/2014/03/TimeDoctor-007.png" width="100%" id="ss">
													</div>
													<div class="col-md-3">
														<img src="https://screenshotmonitor.com/blog/wp-content/uploads/2014/03/TimeDoctor-007.png" width="100%" id="ss">
													</div>
													<div class="col-md-3">
														<img src="https://screenshotmonitor.com/blog/wp-content/uploads/2014/03/TimeDoctor-007.png" width="100%" id="ss">
													</div>
													<div class="col-md-3">
														<img src="https://screenshotmonitor.com/blog/wp-content/uploads/2014/03/TimeDoctor-007.png" width="100%" id="ss">
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
