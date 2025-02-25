<?php include 'header.php'; ?>
<main class="main">
    <section id="services" class="services section light-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>BERITA</h2>
            <div class="container">
                <?php
                $prestasi = mysqli_query($conn, "SELECT * FROM prestasi");
                if (mysqli_num_rows($prestasi) > 0) {
                ?>
                    <div class="row">
                        <?php while ($p = mysqli_fetch_array($prestasi)) { ?>
                            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="post-img position-relative overflow" style="margin: 10px;">
                                    <div class="icon">
                                        <div class="service-item row position">
                                            <img src="assets/uploads/prestasi/<?= $p['gambar'] ?>" />
                                            <h4><?= $p['juara'] ?></h4>
                                            <p><?= $p['lomba'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } else { ?>
                        Tidak ada data
                    <?php } ?>
    </section>
</main>
<?php include 'footer.php'; ?>