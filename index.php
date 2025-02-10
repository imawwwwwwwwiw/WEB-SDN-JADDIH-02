<?php include 'header.php'; ?>
<main class="main">

  <section id="hero" class="hero section dark-background">
    <div
      id="hero-carousel"
      class="carousel slide carousel-fade"
      data-bs-ride="carousel"
      data-bs-interval="5000">
      <div class="carousel-item active">
        <img src="assets/img/hero-carousel/hero-carousel-1.jpg" alt="" />
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
            <img src="assets/img/<?= $d->foto_kepsek ?>" />
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

  <section id="services" class="services section light-background">
    <div class="container section-title" data-aos="fade-up">
      <h2>Fasilitas Unggulan</h2>
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <div class="icon">
                <?php
                $jurusan = mysqli_query($conn, "SELECT * FROM fasilitas ORDER BY id ASC");
                if (mysqli_num_rows($jurusan) > 0) {
                  while ($j = mysqli_fetch_array($jurusan)) {
                ?>
                    <div class="thumbail-img" style="background-image: url('assets/upload/fasilitas/<?= $j['gambar'] ?>');">
                      <path
                        stroke="none"
                        stroke-width="0"
                        fill="#f5f5f5"
                        d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                    </div>
                    <div>
                      <p><?= $j['nama'] ?></p>
                    </div>
                  <?php }
                } else { ?>
                  Tidak ada data
                <?php } ?>
              </div>
            </div>
          </div>


  </section>

  <?php include 'footer.php'; ?>