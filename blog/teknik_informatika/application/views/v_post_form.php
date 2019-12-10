<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Form posting</h1>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h5 class="mt-1 text-gray-800 float-left">Input Data</h5>
			<a href="<?= base_url('post'); ?>" class="font-weight-bold btn btn-danger btn-sm float-right"><i class="fas fa-undo-alt"></i> Back</a>
		</div>
		<div class="row ml-4 mt-4">
			<div class="col-lg-6">
				<form class="mb-4" method="post" action="<?= base_url('post/input'); ?>">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label for="category">Category</label>
								<select id="category" name="category" class="form-control text-center">
									<option value="" class="text-danger">No selected</option>
									<?php foreach ($get_category as $gc) { ?>
										<option value="<?= $gc->id; ?>"><?= $gc->name; ?></option>
									<?php } ?>
								</select>
								<?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label for="imagePost">Image</label>
								<div class="custom-file">
									<input type="file" name="image" class="custom-file-input" id="imagePost" required>
									<label class="custom-file-label" for="imagePost">Choose file...</label>
								</div>
								<?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="title">Title</label>
						<textarea class="form-control" name="title" placeholder="Your title here..." id="title" rows="3"></textarea>
						<?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="description">Descriptions</label>
						<textarea class="form-control" name="description" placeholder="Your description here..." id="description" rows="8"></textarea>
						<?= form_error('description', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<button type="submit" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Posting</button>
				</form>
			</div>
		</div>
	</div>
</div>
