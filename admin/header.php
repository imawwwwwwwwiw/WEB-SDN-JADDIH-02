<?php
	session_start();
	include '../koneksi.php';
	if(!isset($_SESSION['status_login'])){
		echo "<script>window.location = '../login.php?msg=Harap Login Terlebih Dahulu!'</script>";
	}
	date_default_timezone_set("Asia/Jakarta");

	$identitas = mysqli_query($conn, "SELECT * FROM pengaturan ORDER BY id DESC LIMIT 1");
	$d = mysqli_fetch_object($identitas);
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" href="../assets/uploads/identitas/<?= $d->logo_sekolah ?>">
		<title>Panel Admin - <?= $d->nama ?></title>
		<link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
		<script>
	      tinymce.init({
	        selector: '#keterangan'
	      });
	    </script>
	</head>

	<body class="bg-light">

		<!-- navbar -->
		<div class="navbar">

			<div class="container" style=" justify-content: space-between;">

				<!-- navbar brand -->
				<div class="nav-brand float-left" style="display: flex; align-items: center; " >
					<img src="../assets/uploads/identitas/<?= $d->logo_sekolah ?>" width="40" style="margin-right: 5px; "/>
					<h2>
						<a href="index.php"><?= $d->nama ?></a>
					</h2>
				</div>

				<!-- navbar menu -->
				<ul class="nav-menu float-right">
					<li><a href="index.php">Dashboard</a></li>

					<?php if($_SESSION['ulevel'] == 'Super Admin'){ ?>

						<li><a href="pengguna.php">Pengguna</a></li>

					<?php }elseif($_SESSION['ulevel'] == 'Admin'){ ?>

						<li><a href="fasilitas.php">Fasilitas</a></li>
						<li><a href="galeri.php">Galeri</a></li>
						<li>
							<a href="#">Informasi <i class="fa fa-caret-down"></i></a>

							<!-- sub menu -->
							<ul class="dropdown">
								<li><a href="berita.php">Berita</a></li>
								<li><a href="ppdb.php">PPDB</a></li>
							</ul>

						</li>
						<li>
							<a href="#">Pengaturan <i class="fa fa-caret-down"></i></a>

							<!-- sub menu -->
							<ul class="dropdown">
								<li><a href="identitas-sekolah.php">Identitas Sekolah</a></li>
								<li><a href="kepala-sekolah.php">Kepala Sekolah</a></li>
							</ul>
						</li>

					<?php } ?>

					<li>
						<a href="#"><?= $_SESSION['uname'] ?> (<?= $_SESSION['ulevel'] ?>) <i class="fa fa-caret-down"></i></a>

						<!-- sub menu -->
						<ul class="dropdown">
							<li><a href="ubah-password.php">Ubah Password</a></li>
							<li><a href="logout.php">Keluar</a></li>
						</ul>
					</li>
				</ul>

				<div class="clearfix"></div>
			</div>

		</div>
