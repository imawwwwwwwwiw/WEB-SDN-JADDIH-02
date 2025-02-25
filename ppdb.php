<?php include 'header.php'; ?>
<main class="main">
    <section id="portfolio-details" class="portfolio-details section">
        <div class="section-title" data-aos="fade-up">
            <h2>PPDB SDN Jaddih 02 Tahun 2025</h2>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-between ">
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="portfolio-description">
                        <h3>Persyaratan PPDB SDN Jaddih 02</h3>
                        <p>
                            <i class="bi bi-caret-right-fill"></i>
                            <span>Fotocopy Kartu keluarga.</span>
                        </p>
                        <p>
                            <i class="bi bi-caret-right-fill"></i>
                            <span>Fotocopy Akta kelahiran.</span>
                        </p>
                        <p>
                            <i class="bi bi-caret-right-fill"></i>
                            <span>Fotocopy KTP bapak atau ibu.</span>
                        </p>
                        <p>
                            <i class="bi bi-caret-right-fill"></i>
                            <span>Fotocopy ijazah TK (jika ada).</span>
                        </p>
                    </div>
                </div>
                <?php
                $ppdb = mysqli_query($conn, "SELECT * FROM ppdb");
                if (mysqli_num_rows($ppdb) > 0) {
                    while ($p = mysqli_fetch_array($ppdb)) {
                ?>
                        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="portfolio-info">
                                <h3>Pembukaan PPDB</h3>
                                <ul>
                                    <li><strong>Tanggal</strong> <?= $p['tanggal'] ?></li>
                                    <li><strong>Lokasi</strong> <?= $p['lokasi'] ?></li>
                                    <li><strong>Jadwal Masuk</strong> <?= $p['jadwal_masuk'] ?></li>
                                </ul>
                            </div>
                        </div>

                    <?php }
                } else { ?>

                    Tidak ada data

                <?php } ?>
            </div>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>