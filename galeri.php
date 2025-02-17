<?php include 'header.php'; ?>
<main class="main">
  <section id="portfolio" class="portfolio section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Galeri</h2>
      <?php
      $galeri = mysqli_query($conn, "SELECT * FROM galeri ORDER BY id DESC");
      if (mysqli_num_rows($galeri) > 0) {
        while ($p = mysqli_fetch_array($galeri)) {
      ?>
          <div
            class="isotope-container"
            data-aos="fade-up"
            data-aos-delay="200">
            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item ">
              <img
                src="assets/uploads/galeri/<?= $p['foto'] ?>"
                class="img-fluid"
                alt="" />
              <div class="portfolio-info">
                <p><?= $p['keterangan'] ?></p>
                <a
                  href="assets/uploads/galeri/<?= $p['foto'] ?>"
                  title="<p><?= $p['keterangan'] ?></p>"
                  data-gallery="portfolio-gallery-product"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div>


          <?php }
      } else { ?>

          Tidak ada data

        <?php } ?>

        <!-- <div
          class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <div class="thumbnail-box">
            <img
              style="background-image: url('uploads/galeri/<?= $p['foto'] ?>')"
              class="img-fluid"
              alt="" />
            <div class="portfolio-info">
              <h4></h4>
              <a
                href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg"
                title="Product 1"
                data-gallery="portfolio-gallery-product"
                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>

            </div>
          </div>

          <div
            class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
            <img
              src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg"
              class="img-fluid"
              alt="" />
            <div class="portfolio-info">
              <h4><?= $p['keterangan'] ?></h4>
              <p>Lorem ipsum, dolor sit</p>
              <a
                href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg"
                title="<p>"
                data-gallery="portfolio-gallery-product"
                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div> -->
        <!-- 
            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img
                src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg"
                class="img-fluid"
                alt="" />
              <div class="portfolio-info">
                <h4>Branding 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a
                  href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg"
                  title="Branding 1"
                  data-gallery="portfolio-gallery-branding"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a
                  href="portfolio-details.html"
                  title="More Details"
                  class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img
                src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg"
                class="img-fluid"
                alt="" />
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a
                  href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg"
                  title="App 2"
                  data-gallery="portfolio-gallery-app"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a
                  href="portfolio-details.html"
                  title="More Details"
                  class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img
                src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg"
                class="img-fluid"
                alt="" />
              <div class="portfolio-info">
                <h4>Product 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a
                  href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg"
                  title="Product 2"
                  data-gallery="portfolio-gallery-product"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a
                  href="portfolio-details.html"
                  title="More Details"
                  class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img
                src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg"
                class="img-fluid"
                alt="" />
              <div class="portfolio-info">
                <h4>Branding 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a
                  href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg"
                  title="Branding 2"
                  data-gallery="portfolio-gallery-branding"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a
                  href="portfolio-details.html"
                  title="More Details"
                  class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img
                src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg"
                class="img-fluid"
                alt="" />
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a
                  href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg"
                  title="App 3"
                  data-gallery="portfolio-gallery-app"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a
                  href="portfolio-details.html"
                  title="More Details"
                  class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img
                src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg"
                class="img-fluid"
                alt="" />
              <div class="portfolio-info">
                <h4>Product 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a
                  href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg"
                  title="Product 3"
                  data-gallery="portfolio-gallery-product"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a
                  href="portfolio-details.html"
                  title="More Details"
                  class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img
                src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg"
                class="img-fluid"
                alt="" />
              <div class="portfolio-info">
                <h4>Branding 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a
                  href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg"
                  title="Branding 2"
                  data-gallery="portfolio-gallery-branding"
                  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a
                  href="portfolio-details.html"
                  title="More Details"
                  class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div> -->
  </section>
</main>

<div class="col-4">
  <a href="uploads/galeri/<?= $p['foto'] ?>" target="_blank" class="thumbnail-link">
    <div class="thumbnail-box">
      <div class="thumbail-img" style="background-image: url('uploads/galeri/<?= $p['foto'] ?>');">
      </div>



    </div>
  </a>
</div>

<?php include 'footer.php'; ?>