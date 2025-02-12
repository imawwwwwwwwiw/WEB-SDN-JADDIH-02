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
          <h2>Selamat Datang di SD Negeri Jaddih 02</h2>
          <p>SD NEGERI JADDIH 2 merupakan salah satu sekolah jenjang SD berstatus Negeri yang didirikan pada tanggal 1 Januari 1962.</p>
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
    <h2>Fasilitas Unggulan</h2>
    <div class="container">
      <?php
      $jurusan = mysqli_query($conn, "SELECT * FROM fasilitas");
      if (mysqli_num_rows($jurusan) > 0) {
        while ($j = mysqli_fetch_array($jurusan)) {
      ?>
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item item-cyan position-relative">
                <div class="icon">
                  <div cl ass="thumbail-img" style="background-image: url('assets/img/<?= $j['gambar'] ?>');">
                  </div>
                  <img src="" alt="">
                  <svg
                    width="100"
                    height="100"
                    viewBox="0 0 600 600">
                    <path
                      stroke="none"
                      stroke-width="0"
                      fill="#f5f5f5">
                  </svg>
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

<?php include 'footer.php'; ?>