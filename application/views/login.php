<!doctype html>
<html lang="en">

<head>  
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Recka - Admin</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/simple-line-icons.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
</head>

<body>
	<div class="page-wrapper flex-row align-items-center">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-5">
					<div class="card p-4">
						<div class="card-header text-center text-uppercase h4 font-weight-light">
							Login as Admin
						</div>
                        <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
                        <?php echo form_open('login/admin');?>
						<div class="card-body">
							<div class="form-group">
								<label class="form-control-label">Username</label>
								<input type="text" class="form-control" name="username" autofocus>
							</div>
							<div class="form-group">
								<label class="form-control-label">Password</label>
								<input type="password" class="form-control" name="password">
							</div>
						</div>
						<div class="card-footer">
							<div class="row">
								<div class="col-sm-6">
									<button type="submit" class="btn btn-primary btn-block">Login</button>
								</div>
							</div>
						</div>
                        <?php
                            echo form_close();
                        ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/carbon.js') ?>"></script>
</body>

</html>
