<?php include 'header.php'; ?>
<main class="main">
  <section id="services" class="services section light-background">
    <div class="container section-title" data-aos="fade-up">
      <h2>Fasilitas</h2>
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
</main>
<?php include 'footer.php'; ?>