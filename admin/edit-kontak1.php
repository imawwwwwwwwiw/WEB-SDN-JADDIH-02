<?php include 'header.php' ?>

<?php
$kontak1     = mysqli_query($conn, "SELECT * FROM kontak_1 WHERE id = '" . $_GET['id'] . "' ");

if (mysqli_num_rows($kontak1) == 0) {
    echo "<script>window.location='kontak1.php'</script>";
}

$k1             = mysqli_fetch_object($kontak1);
?>

<!-- content -->
<div class="content">

    <div class="container">

        <div class="box">

            <div class="box-header">
                Edit kontak 1
            </div>

            <div class="box-body">

                <form action="" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" placeholder="Nama" value="<?= $k1->nama ?>" class="input-control" required>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="input-control" placeholder="Alamat"><?= $k1->alamat ?></textarea>
                    </div>

                    <div class="form-group">
                        <label>Nomor</label>
                        <input type="text" name="nomor" placeholder="Nomor" value="<?= $k1->nomor ?>" class="input-control" required>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Email" value="<?= $k1->email ?>" class="input-control" required>
                    </div>

                    <button type="button" class="btn" onclick="window.location = 'kontak1.php'">Kembali</button>
                    <input type="submit" name="submit" value="Simpan" class="btn btn-blue">

                </form>

                <?php

                if (isset($_POST['submit'])) {

                    $nama     = addslashes(ucwords($_POST['nama']));
                    $alamat     = addslashes($_POST['alamat']);
                    $nomor     = addslashes($_POST['nomor']);
                    $email     = addslashes($_POST['email']);

                    $update = mysqli_query($conn, "UPDATE kontak_1 SET
										nama = '" . $nama . "',
                                        alamat = '" . $alamat . "',
                                        nomor = '" . $nomor . "',
										email = '" . $email . "'
									");


                    if ($update) {
                        echo "<script>window.location='kontak1.php?success=Edit Data Berhasil'</script>";
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