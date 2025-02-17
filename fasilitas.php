<?php include 'header.php'; ?>
<main class="main">
  <section id="services" class="services section light-background">
    <div class="container section-title" data-aos="fade-up">
      <h2>Fasilitas</h2>
      <div class="container">
        <?php
        $fasilitas = mysqli_query($conn, "SELECT * FROM fasilitas ORDER BY id ASC");
        if (mysqli_num_rows($fasilitas) > 0) {
          while ($j = mysqli_fetch_array($fasilitas)) {
        ?>
            <div class="row gy-4">
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item item-cyan row position-relative">
                  <div class="icon">
                    <img
                      src="assets/uploads/fasilitas/<?= $j['gambar'] ?>"
                      class="img-fluid"
                      alt=""
                      width="500"
                      height="500" />

                  </div>
                  <h3><?= $j['nama'] ?></h3>
                  <p><?= $j['keterangan'] ?></p>
                </div>
              </div>
            <?php }
        } else { ?>
            Tidak ada data
          <?php } ?>
  </section>
</main>

<?php include 'footer.php'; ?>