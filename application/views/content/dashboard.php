<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-3">
			<div class="card p-4" style="box-shadow: 0 5px 10px 0 rgba(0,0,0,.1); border: none;">
				<div class="card-body d-flex justify-content-between align-items-center">
					<div>
						<span class="h4 d-block font-weight-normal mb-2">
							<?php
foreach ($count_client as $row) {
    echo $row->id;
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
		<div class="col-md-3">
			<div class="card p-4" style="box-shadow: 0 5px 10px 0 rgba(0,0,0,.1); border: none;">
				<div class="card-body d-flex justify-content-between align-items-center">
					<div>
						<span class="h4 d-block font-weight-normal mb-2">
							3
						</span>
						<span class="font-weight-light">User Online</span>
					</div>
					<div class="h2 text-muted">
						<i class="icon icon-login"></i>
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
						<div class="col-md-8">
							<div class="float-right">
								<button class="btn btn-primary btn-block" id="refresh">
									<i class="fa fa-refresh"></i> Refresh</button>
							</div>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-bordered" id="table">
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
								</tr>
							</thead>
							<tbody id="users">
								<?php
$no = 1;
foreach($clients as $client){							
?>
									<tr>
										<td>
											<?= $no++;?>
										</td>
										<td>
											<?= $client->username;?>
										</td>
										<td>
											<?= $client->pc;?>
										</td>
										<td>
											<?= $client->email;?>
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
<script src="<?php echo base_url('assets/js/search.js') ?>"></script>
