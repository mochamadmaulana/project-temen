<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		<i class="fas fa-university"></i> Form Edit Jurusan<a href="<?= base_url('jurusan'); ?>" class="btn btn-danger btn-sm float-right"><i class="fas fa-university"></i> Kembali</a>
	</div>
	<?= $this->session->flashdata('message'); ?>

	<?php
	foreach ($user as $u) :
		?>
		<form method="post" action="<?= base_url('jurusan/update'); ?>">
			<div class="form-group">
				<input type="hidden" name="id" value="<?= $u->id_jurusan ?>">
				<input type="text" name="kode_jurusan" placeholder="Masukkan kode jurusan" class="form-control" value="<?= $u->kode_jurusan ?>">
				<?= form_error('kode_jurusan', '<div class="text-danger small ml-3">', '</div>') ?>
			</div>
			<div class="form-group">
				<input type="text" name="nama_jurusan" placeholder="Maukkan nama jurusan" class="form-control" value="<?= $u->nama_jurusan ?>">
				<?= form_error('nama_jurusan', '<div class="text-danger small ml-3">', '</div>') ?>
			</div>
			<button type="submit" class="btn btn-primary btn-user">Ubah</button>
		</form>
</div>
<?php endforeach ?>
