<?php include 'header.php'; ?>
<main class="main">
  <section id="contact" class="contact section">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-between gy-40 mt-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.4318196593117!2d112.74201099999999!3d-7.0758307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd80532078d3929%3A0xac6a0cba197db9ab!2sSDN%20Jaddih%202!5e0!3m2!1sid!2sid!4v1739938293220!5m2!1sid!2sid" width="1160" height="604" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
  <section id="contact" class="contact section">

    <div class="container" data-aos="fade">
      <div class="row gy-5 gx-lg-5">
        <div class="col-lg-4">
          <div class="info">
            <?php
            $pengaturan = mysqli_query($conn, "SELECT * FROM pengaturan");
            if (mysqli_num_rows($pengaturan) > 0) {
              while ($p = mysqli_fetch_array($pengaturan)) {
            ?>
                <h3><?= $p['nama'] ?></h3>
                <div class="info-item d-flex">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h4>Lokasi:</h4>
                    <p> <?= $p['alamat'] ?></p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h4>Email:</h4>
                    <p><?= $p['email'] ?></p>
                  </div>
                </div><!-- End Info Item -->
          </div>
        </div>
      <?php }
            } else { ?>

      Tidak ada data

    <?php } ?>
</main>
<?php include 'footer.php'; ?>