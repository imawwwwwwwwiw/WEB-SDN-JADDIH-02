<?php include 'header.php'; ?>
<main class="main">

  <section id="hero" class="hero section dark-background">
    <div
      id="hero-carousel"
      class="carousel slide carousel-fade"
      data-bs-ride="carousel"
      data-bs-interval="5000">
      <div class="carousel-item active">
        <img src="assets/uploads/identitas/<?= $d->background ?>" alt="" />
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
        <div class="row position-relative">
          <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/uploads/identitas/<?= $d->foto_kepsek ?>" />
          </div>
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <div class="our-story">
              <h3><?= $d->nama_kepsek ?></h3>
              <p><?= $d->sambutan_kepsek ?></p>
            </div>
          </div>
        </div>
      </div>
  </section>
</main>
<section id="services" class="services section light-background">
  <div class="container section-title" data-aos="fade-up">
    <h2>Berita Terbaru</h2>
    <div class="container">
      <?php
      $fasilitas = mysqli_query($conn, "SELECT * FROM fasilitas");
      if (mysqli_num_rows($fasilitas) > 0) {
      ?>
        <div class="row">
          <?php while ($j = mysqli_fetch_array($fasilitas)) { ?>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="post-img position-relative overflow" style="margin: 10px;">
                <div class="icon">
                  <div class="service-item row position">
                    <img src="assets/uploads/fasilitas/<?= $j['gambar'] ?>" />
                    <h3><?= $j['nama'] ?></h3>
                    <p><?= $j['keterangan'] ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php }
        } else { ?>
          Tidak ada data
        <?php } ?>
</section>

<?php include 'footer.php'; ?>