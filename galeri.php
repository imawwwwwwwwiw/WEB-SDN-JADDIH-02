<?php include 'header.php'; ?>
<main class="main">
    <section id="services" class="services section light-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>GALERI</h2>
            <div class="container">
                <?php
                include 'koneksi.php';
                $limit = 3;
                $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                $start = ($page - 1) * $limit;
                $galeri = mysqli_query($conn, "SELECT * FROM galeri LIMIT $start, $limit");
                $total_galeri = mysqli_query($conn, "SELECT COUNT(*) AS total FROM galeri");
                $total_row = mysqli_fetch_assoc($total_galeri);
                $total_pages = ceil($total_row['total'] / $limit);
                if (mysqli_num_rows($galeri) > 0) { ?>
                    <div class="row">
                        <?php while ($p = mysqli_fetch_array($galeri)) { ?>
                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="post-img position-relative overflow" style="margin: 10px;">
                                    <div class="icon">
                                        <div class="service-item row position">
                                            <img src="assets/uploads/galeri/<?= $p['foto'] ?>" class="img-fluid" style="border-radius: 25px;" />
                                            <h6><?= $p['keterangan'] ?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } else { ?>
                    <p class="text-center">Tidak ada data</p>
                <?php } ?>
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <ul class="pagination">
                            <li class="page-item <?= ($page <= 1) ? 'disabled' : ''; ?>">
                                <a class="page-link" href="?page=<?= $page - 1; ?>"><i class="bi bi-chevron-left"></i></a>
                            </li>
                            <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                                <li class="page-item <?= ($page == $i) ? 'active' : ''; ?>">
                                    <a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a>
                                </li>
                            <?php endfor; ?>
                            <li class="page-item <?= ($page >= $total_pages) ? 'disabled' : ''; ?>">
                                <a class="page-link" href="?page=<?= $page + 1; ?>"><i class="bi bi-chevron-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
</main>
<?php include 'footer.php'; ?>