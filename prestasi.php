<?php include 'header.php'; ?>
<main class="main">
    <section id="blog-posts" class="blog-posts section">
        <div class="container section-title" data-aos="fade-up">
            <h2>BERITA</h2>
            <div class="container">
                <?php
                include 'config.php'; // Pastikan koneksi database sudah terhubung

                $limit = 6; // Jumlah data per halaman
                $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                $start = ($page - 1) * $limit;

                // Ambil data dari database dengan limit
                $prestasi = mysqli_query($conn, "SELECT * FROM prestasi LIMIT $start, $limit");
                $total_prestasi = mysqli_query($conn, "SELECT COUNT(*) AS total FROM prestasi");
                $total_row = mysqli_fetch_assoc($total_prestasi);
                $total_pages = ceil($total_row['total'] / $limit);

                if (mysqli_num_rows($prestasi) > 0) {
                ?>
                    <div class="row">
                        <?php while ($p = mysqli_fetch_array($prestasi)) { ?>
                            <div class="col-lg-4">
                                <article class="position-relative h-100">
                                    <div class="post-img position-relative overflow-hidden">
                                        <img src="./assets/uploads/prestasi/<?= $p['gambar'] ?>" class="img-fluid" alt="">
                                    </div>

                                    <div class="post-content d-flex flex-column">
                                        <h3 class="post-title"><?= $p['juara'] ?></h3>
                                        <p><?= $p['lomba'] ?></p>
                                        <hr>
                                    </div>
                                </article>
                            </div>
                        <?php } ?>
                    </div>
                <?php } else { ?>
                    <p class="text-center">Tidak ada data</p>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Pagination -->
    <section id="blog-pagination" class="blog-pagination section">
        <div class="container">
            <div class="d-flex justify-content-center">
                <ul class="pagination">
                    <!-- Tombol Sebelumnya -->
                    <li class="page-item <?= ($page <= 1) ? 'disabled' : ''; ?>">
                        <a class="page-link" href="?page=<?= $page - 1; ?>"><i class="bi bi-chevron-left"></i></a>
                    </li>

                    <!-- Nomor Halaman -->
                    <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                        <li class="page-item <?= ($page == $i) ? 'active' : ''; ?>">
                            <a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a>
                        </li>
                    <?php endfor; ?>

                    <!-- Tombol Selanjutnya -->
                    <li class="page-item <?= ($page >= $total_pages) ? 'disabled' : ''; ?>">
                        <a class="page-link" href="?page=<?= $page + 1; ?>"><i class="bi bi-chevron-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>