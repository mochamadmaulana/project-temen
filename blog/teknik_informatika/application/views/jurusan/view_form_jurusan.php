<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		<i class="fas fa-university"></i> Form Tambah Jurusan<a href="<?= base_url('jurusan'); ?>" class="btn btn-danger btn-sm float-right"><i class="fas fa-university"></i> Kembali</a>
	</div>

	<form method="post" action="<?= base_url('jurusan/form'); ?>">
		<div class="form-group">
			<input type="text" name="kode_jurusan" placeholder="Masukkan kode jurusan" class="form-control">
			<?= form_error('kode_jurusan', '<div class="text-danger small ml-3">', '</div>') ?>
		</div>
		<div class="form-group">
			<input type="text" name="nama_jurusan" placeholder="Maukkan nama jurusan" class="form-control">
			<?= form_error('nama_jurusan', '<div class="text-danger small ml-3">', '</div>') ?>
		</div>
		<button type="submit" class="btn btn-primary btn-user">Simpan</button>
	</form>
</div>
