<?php
include 'koneksi.php';
date_default_timezone_set("Asia/Jakarta");

$identitas = mysqli_query($conn, "SELECT * FROM pengaturan ORDER BY id DESC LIMIT 1");
$d = mysqli_fetch_object($identitas);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<title>SD Negeri Jaddih 02</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />


	<link href="assets/uploads/identitas/<?= $d->logo_sekolah ?>" rel="icon" />

	<!-- Font -->
	<link href="https://fonts.googleapis.com" rel="preconnect" />
	<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet" />

	<!-- Vendor CSS File -->
	<link
		href="assets/vendor/bootstrap/css/bootstrap.min.css"
		rel="stylesheet" />
	<link
		href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
		rel="stylesheet" />
	<link href="assets/vendor/aos/aos.css" rel="stylesheet" />
	<link
		href="assets/vendor/glightbox/css/glightbox.min.css"
		rel="stylesheet" />

	<link href="main.css" rel="stylesheet" />
</head>

<body class="index-page">
	<header id="header" class="header d-flex align-items-center sticky-top">
		<div class="container position-relative d-flex align-items-center">
			<a href="index.php" class="logo d-flex align-items-center me-auto">
				<img src="assets/uploads/identitas/<?= $d->logo_sekolah ?>" width="40" />
				<h1 class="sitename">SD Negeri Jaddih 02</h1>
				<span>.</span>
			</a>
			<nav id="navmenu" class="navmenu">
				<ul>
					<li><a href="index.php">Beranda</a></li>
					<li><a href="profil.php">Profil</a></li>
					<li><a href="fasilitas.php">Fasilitas</a></li>
					<li class="dropdown"><a href="informasi.php"><span>Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
						<ul>
							<li><a href="ppdb.php">PPDB</a></li>
							<li><a href="berita.php">BERITA</a></li>
						</ul>
					<li><a href="galeri.php">Galeri</a></li>
					<li><a href="kontak.php">Kontak</a></li>
				</ul>
				<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
			</nav>
		</div>
	</header>