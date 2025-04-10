<?php
include 'header.php';
// include 'config.php'; // Koneksi database

// session_start();
// if (!isset($_SESSION['uid'])) {
//     echo '<div class="alert alert-error">Anda harus login terlebih dahulu.</div>';
//     exit;
// }
?>

<!-- content -->
<div class="content">

    <div class="container">

        <div class="box">

            <div class="box-header">
                Tambah Prestasi
            </div>

            <div class="box-body">

                <form action="" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Juara</label>
                        <input type="text" name="juara" placeholder="Juara (contoh: Juara 1, Juara 2)" class="input-control" required>
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan" class="input-control" placeholder="Keterangan lomba"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="input-control" required>
                    </div>
                    <button type="button" class="btn" style="background-color:firebrick ;" onclick="window.location = 'fasilitas.php'">Kembali</button>
                    <input type="submit" name="submit" value="Simpan" class="btn">
                </form>

                <?php
                if (isset($_POST['submit'])) {

                    // Pastikan koneksi ke database ada
                    if (!isset($conn)) {
                        echo '<div class="alert alert-error">Koneksi database tidak ditemukan.</div>';
                        exit;
                    }

                    $juara   = mysqli_real_escape_string($conn, ucwords($_POST['juara']));
                    $ket     = mysqli_real_escape_string($conn, $_POST['keterangan']);

                    $filename   = $_FILES['gambar']['name'];
                    $tmpname    = $_FILES['gambar']['tmp_name'];
                    $filesize   = $_FILES['gambar']['size'];

                    $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
                    $rename     = 'prestasi_' . time() . '.' . $formatfile;

                    $allowedtype = array('png', 'jpg', 'jpeg', 'gif');

                    if (!in_array(strtolower($formatfile), $allowedtype)) {
                        echo '<div class="alert alert-error">Format file tidak diizinkan.</div>';
                    } elseif ($filesize > 1000000) {
                        echo '<div class="alert alert-error">Ukuran file tidak boleh lebih dari 1 MB.</div>';
                    } else {
                        $upload_dir = "../assets/uploads/prestasi/";

                        // Cek apakah folder upload ada, jika tidak buat baru
                        if (!is_dir($upload_dir)) {
                            mkdir($upload_dir, 0755, true);
                        }

                        if (move_uploaded_file($tmpname, $upload_dir . $rename)) {
                            $simpan = mysqli_query($conn, "INSERT INTO prestasi (juara, keterangan, gambar) VALUES (
                                '$juara', 
                                '$ket', 
                                '$rename'
                            )");

                            if ($simpan) {
                                echo '<div class="alert alert-success">Data prestasi berhasil disimpan!</div>';
                                header("Location: berita.php"); // Redirect ke halaman berita
                                exit; // Menghentikan eksekusi script setelah redirect
                            } else {
                                echo '<div class="alert alert-error">Gagal menyimpan: ' . mysqli_error($conn) . '</div>';
                            }
                        } else {
                            echo '<div class="alert alert-error">Gagal mengupload gambar.</div>';
                        }
                    }
                }
                ?>

            </div>

        </div>

    </div>

</div>

<?php include 'footer.php'; ?>