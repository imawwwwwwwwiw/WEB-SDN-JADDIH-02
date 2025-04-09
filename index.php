<?php include 'header.php'; ?>
<main class="main">

  <section id="hero" class="hero section dark-background">
    <div
      id="hero-carousel"
      class="carousel slide carousel-fade"
      data-bs-ride="carousel"
      data-bs-interval="5000">
      <div class="carousel-item active">
        <img src="assets/uploads/identitas/<?= $d->background ?>" />
        <div class="container">
          <h2>SELAMAT DATANG DI SD NEGERI JADDIH 02</h2>
          <p>SD Negeri Jaddih 2 merupakan salah satu sekolah jenjang SD berstatus Negeri yang didirikan pada tanggal 1 Januari 1962.</p>
        </div>
      </div>
    </div>
  </section>
  <section id="about" class="about section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Sambutan Kepala Sekolah</h2>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-6 text-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="./assets/uploads/identitas/<?= $d->foto_kepsek ?>" class="img-fluid rounded shadow" alt="Kepala Sekolah">
          </div>
          <div class="col-lg-7 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="our-story">
              <h3><?= $d->nama_kepsek ?></h3>
              <p><?= $d->sambutan_kepsek ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include 'footer.php'; ?>