<?php include 'header.php'; ?>
<main class="main">
  <section id="testimonials" class="testimonials section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Struktur Sekolah</h2>
      <div class="container">
        <div class="row position-relative">
          <div class="testimonial-item">
            <img src="assets/uploads/struktur.jpg" class="img-fluid" alt="Struktur" />
          </div>
        </div>
      </div>
    </div>
    <!-- visi misi -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Visi Misi Sekolah</h2>
      <div class="row gy-4">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="testimonial-item">
            <h3>Visi</h3>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span><?= $d->Isi_Visi ?></span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="testimonial-item">
            <h3>Misi</h3>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span><?= $d->Isi_Misi ?></span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
</main>
<?php include 'footer.php'; ?>