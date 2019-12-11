<!-- card artikel -->
<div class="container mt-4">
	<h5 class="mb-4 text-secondary text-center"> All Category</h5>
	<div class="row">
		<?php
		foreach ($get_join as $gp) :
			?>
			<div class="col-lg-3 mb-4">
				<div class="card h-100">
					<a href="#"><img class="card-img-top" src="<?= base_url('assets/img/posted/') . $gp->image ?>" alt=""></a>
					<div class="card-body">
						<h4 class="card-title">
							<a href="#" class="btn btn-primary btn-sm">Show..</a>
						</h4>
						<h6><?= $gp->title; ?></h6>
						<p class="card-text"><?= $gp->description; ?></p>
					</div>
					<div class="card-footer">
						<small class="text-muted float-left"><?= $gp->name_category ?></small>
						<small class="text-muted float-right"><?= date('d-M-Y'); ?></small>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
