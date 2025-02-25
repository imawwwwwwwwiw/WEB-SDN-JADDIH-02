<?php include 'header.php' ?>

		<!-- content -->
		<div class="content">

			<div class="container">

				<div class="box">

					<div class="box-header">
						Identitas Sekolah
					</div>

					<div class="box-body">

						<?php
							if(isset($_GET['success'])){
								echo "<div class='alert alert-success'>".$_GET['success']."</div>";
							}
						?>
						
						<form action="" method="POST" enctype="multipart/form-data">
							
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="nama" placeholder="Nama Sekolah" value="<?= $d->nama ?>" class="input-control" required>
							</div>

							<div class="form-group">
								<label>Email</label>
								<input type="email" name="email" placeholder="Email Sekolah" value="<?= $d->email ?>" class="input-control" required>
							</div>

							<div class="form-group">
								<label>Telepon</label>
								<input type="text" name="telp" placeholder="Telepon Sekolah" value="<?= $d->telepon ?>" class="input-control" required>
							</div>

							<div class="form-group">
								<label>Alamat</label>
								<textarea name="alamat" class="input-control" placeholder="Alamat"><?= $d->alamat ?></textarea>
							</div>


							<input type="submit" name="submit" value="Simpan Perubahan" class="btn btn-blue">

						</form>

						<?php

							if(isset($_POST['submit'])){

								$nama 	= addslashes(ucwords($_POST['nama']));
								$email 	= addslashes($_POST['email']);
								$telp 	= addslashes($_POST['telp']);
								$currdate = date('Y-m-d H:i:s');


								$update = mysqli_query($conn, "UPDATE pengaturan SET
										nama = '".$nama."',
										email = '".$email."',
										telepon = '".$telp."',
										alamat = '".$alamat."',
										updated_at = '".$currdate."'
										WHERE id = '".$d->id."'
									");


								if($update){
									echo "<script>window.location='identitas-sekolah.php?success=Edit Data Berhasil'</script>";
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