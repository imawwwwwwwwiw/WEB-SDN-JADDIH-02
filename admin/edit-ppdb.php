<?php include 'header.php' ?>

<?php
$ppdb 	= mysqli_query($conn, "SELECT * FROM ppdb WHERE id = '" . $_GET['id'] . "' ");

if (mysqli_num_rows($ppdb) == 0) {
	echo "<script>window.location='ppdb.php'</script>";
}

$p 			= mysqli_fetch_object($ppdb);
?>

<!-- content -->
<div class="content">

	<div class="container">

		<div class="box">

			<div class="box-header">
				Edit PPDB
			</div>

			<div class="box-body">

				<form action="" method="POST" enctype="multipart/form-data">

					<div class="form-group">
						<label>Tanggal</label>
						<input type="text" name="tanggal" placeholder="Tanggal" value="<?= $p->tanggal ?>" class="input-control" required>
					</div>

					<div class="form-group">
						<label>Lokasi</label>
						<textarea name="Lokasi" class="input-control" placeholder="Lokasi"><?= $p->lokasi ?></textarea>
					</div>

					<div class="form-group">
						<label>Jadwal Masuk</label>
						<input type="text" name="jadwal" placeholder="Jadwal" value="<?= $p->jadwal_masuk ?>" class="input-control" required>
                        
					</div>

					<button type="button" class="btn" onclick="window.location = 'fasilitas.php'">Kembali</button>
					<input type="submit" name="submit" value="Simpan" class="btn btn-blue">

				</form>

				<?php

				if (isset($_POST['submit'])) {

					$tanggal	= addslashes(ucwords($_POST['tanggal']));
					$lokasi = isset($_POST["lokasi"]) ? $_POST["lokasi"] : '';
                    $jadwal_masuk	= addslashes(ucwords($_POST['jadwal']));
					$currdate = date('Y-m-d H:i:s');

					

					$update = mysqli_query($conn, "UPDATE ppdb SET
										tanggal = '" . $tanggal . "',
										lokasi = '" . $lokasi . "',
										jadwal_masuk = '" . $jadwal_masuk . "',
										updated_at = '" . $currdate . "'
										WHERE id = '" . $_GET['id'] . "'
									");


					if ($update) {
						echo "<script>window.location='ppdb.php?success=Edit Data Berhasil'</script>";
					} else {
						echo 'gagal edit ' . mysqli_error($conn);
					}
				}

				?>

			</div>

		</div>

	</div>

</div>

<?php include 'footer.php' ?>