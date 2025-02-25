<?php include 'header.php'; ?>
<main class="main">
  <section id="portfolio" class="portfolio section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Galeri</h2>
      <?php
      $galeri = mysqli_query($conn, "SELECT * FROM galeri ORDER BY id ASC");
      if (mysqli_num_rows($galeri) > 0) {
        while ($p = mysqli_fetch_array($galeri)) {
      ?>
          <div class="isotope-container" data-aos="fade-up" data-aos-delay="200">
            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item ">
              <div class="service-item row position">
                <img
                  src="./assets/uploads/galeri/<?= $p['foto'] ?>" />
              </div>
              <div class="portfolio-info">
                <p><?= $p['keterangan'] ?></p>
                <a
                  href="./assets/uploads/galeri/<?= $p['foto'] ?>"
                  title="<p><?= $p['keterangan'] ?></p>"
                  data-gallery="portfolio-gallery-product"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>
          <?php }
      } else { ?>

          Tidak ada data

        <?php } ?>
  </section>
</main>

<?php include 'footer.php'; ?>