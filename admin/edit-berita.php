<?php include 'header.php' ?>

<?php
	$prestasi 	= mysqli_query($conn, "SELECT * FROM prestasi WHERE id = '".$_GET['id']."' ");

	if(mysqli_num_rows($prestasi) == 0){
		echo "<script>window.location='berita.php'</script>";
	}

	$p 			= mysqli_fetch_object($prestasi);
?>

		<!-- content -->
		<div class="content">

			<div class="container">

				<div class="box">

					<div class="box-header">
						Edit berita
					</div>

					<div class="box-body">
						
						<form action="" method="POST" enctype="multipart/form-data">
							
							<div class="form-group">
								<label>Judul</label>
								<input type="text" name="judul" placeholder="Judul" value="<?= $p->juara ?>" class="input-control" required>
							</div>

							<div class="form-group">
							<label>Keterangan Lomba</label>
							<textarea name="keterangan lomba" class="input-control" placeholder="Keterangan lomba"><?= $p->lomba ?></textarea>
							</div>

							<div class="form-group">
								<label>Gambar</label>
								<img src="../assets/uploads/prestasi/<?= $p->gambar ?>" width="200px" class="image">
								<input type="hidden" name="gambar2" value="<?= $p->gambar ?>">
								<input type="file" name="gambar" class="input-control">
							</div>

							<button type="button" class="btn" onclick="window.location = 'informasi.php'">Kembali</button>
							<input type="submit" name="submit" value="Simpan" class="btn btn-blue">

						</form>

						<?php

							if(isset($_POST['submit'])){

								$judul 	= addslashes(ucwords($_POST['judul']));
								$ket 	= addslashes($_POST['keterangan']);
								$currdate = date('Y-m-d H:i:s');

								if($_FILES['gambar']['name'] != ''){

									// echo 'user ganti gambar';

									$filename 	= $_FILES['gambar']['name'];
									$tmpname 	= $_FILES['gambar']['tmp_name'];
									$filesize 	= $_FILES['gambar']['size'];

									$formatfile = pathinfo($filename, PATHINFO_EXTENSION);
									$rename 	= 'informasi'.time().'.'.$formatfile;

									$allowedtype = array('png', 'jpg', 'jpeg', 'gif');

									if(!in_array($formatfile, $allowedtype)){

										echo '<div class="alert alert-error">Format file tidak diizinkan.</div>';

										return false;

									}elseif($filesize > 1000000){

										echo '<div class="alert alert-error">Ukuran file tidak boleh lebih dari 1 MB.</div>';

										return false;

									}else{

										if(file_exists("../assets/uploads/prestasi/".$_POST['gambar'])){

											unlink("../assets/uploads/prestasi/".$_POST['gambar']);

										}

										move_uploaded_file($tmpname, "../assets/uploads/prestasi/".$rename);

									}

								}else{

									// echo 'user tidak ganti gambar';

									$rename 	= $_POST['gambar2'];

								}

								$update = mysqli_query($conn, "UPDATE prestasi SET
										judul = '".$judul."',
										keterangan = '".$ket."',
										gambar = '".$rename."',
										updated_at = '".$currdate."'
										WHERE id = '".$_GET['id']."'
									");


								if($update){
									echo "<script>window.location='berita.php?success=Edit Data Berhasil'</script>";
								}else{
									echo 'gagal edit '.mysqli_error($conn);
								}

							}

						?>

					</div>

				</div>

			</div>

		</div>

<?php include 'footer.php' ?>