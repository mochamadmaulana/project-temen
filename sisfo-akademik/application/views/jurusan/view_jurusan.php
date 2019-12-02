<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		<i class="fas fa-university"></i> Jurusan
	</div>

	<a href="<?= base_url('jurusan/form'); ?>" class="btn btn-sm btn-primary mb-3 text-white">
		<i class="fas fa-plus fa-sm"></i> Tambah Jurusan</a>
	<?= $this->session->flashdata('message'); ?>

	<table class="table table-bordered table-striped table-hover">
		<tr class="text-center">
			<th>NO</th>
			<th>KODE JURUSAN</th>
			<th>NAMA JURUSAN</th>
			<th colspan="2">AKSI</th>
		</tr>


		<?php
		$no = 1;
		foreach ($get_jurusan as $jrsn) :
			?>
			<tr class="text-center">
				<td width="20px"><?= $no++ ?></td>
				<td><?= $jrsn->kode_jurusan ?></td>
				<td><?= $jrsn->nama_jurusan ?></td>
				<td width="20px">
					<a href="<?= base_url('jurusan/edit/') . $jrsn->id_jurusan ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
				</td>
				<td width="20px">
					<a href="<?= base_url('jurusan/delete/') . $jrsn->id_jurusan ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin untuk menghapus data tersebut?');"><i class=" fa fa-trash"></i></a>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
</div>
</div>
