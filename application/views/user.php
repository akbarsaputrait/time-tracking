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
							<?php 
								foreach($admin->result() as $row)
								{
									echo $row->username;
								}
							?>
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
						<div class="col-md-6">
							<div class="card" style="box-shadow: 0 5px 10px 0 rgba(0,0,0,.1); border: none;">
								<div class="card-body d-flex justify-content-between align-items-center">
									<div>
										<span class="h4 d-block font-weight-normal mb-1">
											<?php
$sql = $this->db->query('SELECT count(*) AS id_user FROM user');
foreach ($sql->result() as $row) {
echo $row->id_user;
}
?>
										</span>
										<span class="font-weight-light">Jumlah User</span>
									</div>
									<div class="h2 text-muted">
										<i class="icon icon-people"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md">
							<div class="card">
								<div class="card-body">
									<div class="input-group">
										<input type="email" class="form-control" placeholder="Email">
										<div class="input-group-addon">
											<button class="btn btn-link">Add User</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="form-group col-md-4">
											<input id="search" placeholder="Search..." class="form-control" />
										</div>
									</div>
									<div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr>
													<td>
														No.
													</td>
													<td>
														Nama
													</td>
													<td>
														PC
													</td>
													<td>
														Email
													</td>
													<td>
														Task
													</td>
													<td>
														Details
													</td>

												</tr>
											</thead>
											<tbody id="users">
												<?php
										$query = $this->db->query('SELECT * FROM user');
										$x = 1;
										foreach($query->result() as $row){							
?>
													<tr>
														<td>
															<?php echo $x++;?>
														</td>
														<td>
															<?php echo $row->name;?>
														</td>
														<td>
															<?php echo $row->pc;?>
														</td>
														<td>
															<?php echo $row->email;?>
														</td>
														<td>
															<?php echo $row->do;?>
														</td>
														<td>
															<a href="<?php echo base_url('user/activities/'.$row->id_user);?>" class="btn btn-primary btn-block">Activities</a>
														</td>
														<?php
										}
									?>
													</tr>
											</tbody>
										</table>
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
	<script>
		$("#search").keyup(function () {
			//split the current value of searchInput
			var data = this.value.split(" ");
			//create a jquery object of the rows
			var jo = $("#users").find("tr");
			if (this.value == "") {
				jo.show();
				return;
			}
			//hide all the rows
			jo.hide();

			//Recusively filter the jquery object to get results.
			jo.filter(function (i, v) {
					var $t = $(this);
					for (var d = 0; d < data.length; ++d) {
						if ($t.is(":contains('" + data[d] + "')")) {
							return true;
						}
					}
					return false;
				})
				//show the rows that match.
				.show();
		}).focus(function () {
			this.value = "";
			$(this).css({
				"color": "black"
			});
			$(this).unbind('focus');
		}).css({
			"color": "#C0C0C0"
		});

	</script>
</body>

</html>