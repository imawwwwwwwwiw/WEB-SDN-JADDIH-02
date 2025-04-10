<?php include 'header.php' ?>

<!-- content -->
<div class="content">

	<div class="container">

		<div class="box">

			<div class="box-header">
				Kepala Sekolah
			</div>

			<div class="box-body">

				<?php
				if (isset($_GET['success'])) {
					echo "<div class='alert alert-success'>" . $_GET['success'] . "</div>";
				}
				?>

				<form action="" method="POST" enctype="multipart/form-data">

					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" class="input-control" placeholder="Nama Kepala Sekolah" value="<?= $d->nama_kepsek ?>" required>
					</div>

					<div class="form-group">
						<label>Sambutan</label>
						<textarea name="sambutan_kepsek" class="input-control" placeholder="Sambutan"><?= $d->sambutan_kepsek ?></textarea>
					</div>

					<div class="form-group">
						<label>Foto</label>
						<img src="../assets/uploads/identitas/<?= $d->foto_kepsek ?>" width="200px" class="image">
						<input type="hidden" name="foto_lama" value="<?= $d->foto_kepsek ?>">
						<input type="file" name="foto_baru" class="input-control">
					</div>

					<input type="submit" name="submit" value="Simpan Perubahan" class="btn">

				</form>

				<?php

				if (isset($_POST['submit'])) {

					$nama  		= addslashes(ucwords($_POST['nama']));
					$sambutan  	= addslashes($_POST['sambutan_kepsek']);
					$currdate 	= date('Y-m-d H:i:s');

					// menampung dan validasi data foto sekolah
					if ($_FILES['foto_baru']['name'] != '') {

						$filename 	= $_FILES['foto_baru']['name'];
						$tmpname 	= $_FILES['foto_baru']['tmp_name'];
						$filesize 	= $_FILES['foto_baru']['size'];

						$formatfile = pathinfo($filename, PATHINFO_EXTENSION);
						$rename 	 = 'kepsek' . time() . '.' . $formatfile;

						$allowedtype = array('png', 'jpg', 'jpeg', 'gif');

						if (!in_array($formatfile, $allowedtype)) {

							echo '<div class="alert alert-error">Format file foto kepala sekolah tidak diizinkan.</div>';

							return false;
						} elseif ($filesize > 1000000) {

							echo '<div class="alert alert-error">Ukuran file foto kepala sekolah tidak boleh lebih dari 1 MB.</div>';

							return false;
						} else {

							if (file_exists("../assets/uploads/identitas/" . $_POST['foto_lama'])) {

								unlink("../assets/uploads/identitas/" . $_POST['foto_lama']);
							}

							move_uploaded_file($tmpname, "../assets/uploads/identitas/" . $rename);
						}
					} else {

						$rename 	= $_POST['foto_lama'];
					}



					$update = mysqli_query($conn, "UPDATE pengaturan SET
										nama_kepsek = '" . $nama . "',
										sambutan_kepsek = '" . $sambutan . "',
										foto_kepsek = '" . $rename . "',
										updated_at = '" . $currdate . "'
										WHERE id = '" . $d->id . "'
									");


					if ($update) {
						echo "<script>window.location='kepala-sekolah.php?success=Edit Data Berhasil'</script>";
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