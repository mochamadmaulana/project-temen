<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
		<div class="sidebar-brand-icon">
			<i class="fas fa-university"></i>
		</div>
		<div class="sidebar-brand-text mx-1">SISFO-AKADEMIK</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="<?= base_url('dashboard'); ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Interface
	</div>

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-university"></i>
			<span>Akademik</span>
		</a>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Sub-Menu Akademik:</h6>
				<a class="collapse-item" href="<?= base_url('jurusan'); ?>">Jurusan</a>
				<a class="collapse-item" href="cards.html">Program Studi</a>
				<a class="collapse-item" href="buttons.html">Mata Kuliah</a>
				<a class="collapse-item" href="cards.html">Mahasiswa</a>
				<a class="collapse-item" href="buttons.html">Tahun Akademik</a>
				<a class="collapse-item" href="cards.html">KRS</a>
				<a class="collapse-item" href="buttons.html">Input Nilai</a>
				<a class="collapse-item" href="cards.html">KHS</a>
				<a class="collapse-item" href="buttons.html">Cetak Transkip</a>
				<a class="collapse-item" href="cards.html">Dosen</a>
			</div>
		</div>
	</li>

	<!-- Nav Item - Utilities Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-wrench"></i>
			<span>Pengaturan</span>
		</a>
		<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Sub-Menu Pengaturan:</h6>
				<a class="collapse-item" href="utilities-color.html">User</a>
				<a class="collapse-item" href="utilities-border.html">Menu</a>
			</div>
		</div>
	</li>

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
			<i class="fas fa-fw fa-folder"></i>
			<span>Info Kampus</span>
		</a>
		<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Sub-Menu Info Kampus:</h6>
				<a class="collapse-item" href="login.html">Identitas</a>
				<a class="collapse-item" href="register.html">Kategori</a>
				<a class="collapse-item" href="forgot-password.html">Informasi Kampus</a>
				<a class="collapse-item" href="404.html">Tentang Kampus</a>
				<a class="collapse-item" href="blank.html">Fasilitas</a>
				<a class="collapse-item" href="404.html">Materi Perkuliahan</a>
				<a class="collapse-item" href="blank.html">Gallery</a>
				<a class="collapse-item" href="blank.html">Kontak</a>
			</div>
		</div>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('auth/logout') ?>">
			<i class="fas fa-sign-out-alt"></i>
			<span>Logout</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- End of Sidebar -->
