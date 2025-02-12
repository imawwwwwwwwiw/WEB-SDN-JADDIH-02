<?php include 'header.php'; ?>
<main class="main">
  <section id="blog-posts" class="blog-posts section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Fasilitas</h2>
      <div class="container">
        <div class="row gy-4">
          <div class="col gy-2">
            <?php
            $jurusan = mysqli_query($conn, "SELECT * FROM fasilitas ORDER BY id DESC");
            if (mysqli_num_rows($jurusan) > 0) {
              while ($j = mysqli_fetch_array($jurusan)) {
            ?>

                <div class="col-4">
                  <div class="thumbnail-box">
                    <div class="thumbail-img" style="background-image: url('assets/uploads/fasilitas/<?= $j['gambar'] ?>');">
                    </div>
                    <h3><?= $j['nama'] ?></h3>
                  </div>

                </div>
                </a>
          </div>

        <?php }
            } else { ?>

        Tidak ada data

      <?php } ?>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>