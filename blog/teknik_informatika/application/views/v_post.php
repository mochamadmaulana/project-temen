<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Posted page</h1>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="float-left">
				<?= $this->session->flashdata('message'); ?>
			</div>
			<a href="<?= base_url('post/input'); ?>" class="m-0 font-weight-bold btn btn-success btn-sm float-right"><i class="fas fa-plus"></i> New Posting</a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Image</th>
							<th>Category</th>
							<th>Title</th>
							<th>Description</th>
							<th colspan="3">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($get_posted as $gp) :
							?>
							<tr>
								<td><?= $no++ ?></td>
								<td><img class="rounded" width="150" height="150" src="<?= base_url('assets/img/posted/') . $gp->image ?>"></td>
								<td><?= $gp->id_category ?></td>
								<td><?= $gp->title; ?></td>
								<td><?= $gp->description; ?></td>
								<td><a href="#" class="btn btn-warning btn-sm font-weight-bold"><i class="fas fa-info-circle"></i></a></td>
								<td><a href="#" class="btn btn-primary btn-sm font-weight-bold"><i class="fas fa-edit"></i></a></td>
								<td><a href="#" class="btn btn-danger btn-sm font-weight-bold"><i class="fas fa-trash"></i></a></td>
							</tr>
						<?php
						endforeach;
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
