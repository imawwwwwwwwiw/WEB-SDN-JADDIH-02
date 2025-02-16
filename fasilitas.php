<?php include 'header.php'; ?>
<main class="main">
  <section id="services" class="services section light-background">
    <div class="container section-title" data-aos="fade-up">
      <h2>Fasilitas</h2>
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
                    <div class="thumbnail-box">
                      <div class="thumbail-img" style="background-image: url('assets/uploads/fasilitas/<?= $j['gambar'] ?>');">
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
</main>

<?php include 'footer.php'; ?>