<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
<?php 
foreach ($clients->result() as $client) {
?>
				<h1 class="mb-1">
					<?=$client->username?>
				</h1>
				<h5 class="text-muted">
					<?=$client->email?>
						<br/>
						<?=$client->pc?>
				</h5>
<?php
}
?>
			</div>
			<div class="float-right">
				<button class="btn btn-primary" id="refresh">
					<i class="fa fa-refresh"></i> Refresh</button>
			</div>
		</div>
	</div>
	<div class="row">

		<div class="col-md-12">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#activities" role="tab">Activities</a>
				</li>
<?php
foreach($status->result() as $st)
{
?>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#task" role="tab">Task
							<span class="badge badge-pill badge-danger">
								<?=$st->status;?>
							</span>
						</a>
					</li>
<?php
}
?>
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
foreach($activities->result() as $activity)
{
?>
									<tr>
										<td>
											<?= $activity->datetime;?>
												<td>
													<?= $activity->app; ?>
												</td>
												<td>
													<?= $activity->title; ?>
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
									<td>Task</td>
									<td>Status</td>
								</tr>
							</thead>
							<tbody>
<?php
foreach($tasks->result() as $tk)
{
?>
									<tr>
										<td>
											<?= $tk->task;?>
										</td>
										<td>
											<?= $tk->status; ?>
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