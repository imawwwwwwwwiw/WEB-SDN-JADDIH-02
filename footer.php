<footer id="footer" class="footer dark-background">
    <div class="container footer-top">
        <div class="row gy-6">
            <!-- Kontak 1 -->
            <div class="col-lg-4 footer-about text-center">
                <a href="index.html" class="logo d-flex justify-content-center align-items-center">
                    <span class="sitename">kontak 1</span>
                </a>
                <?php
                $kontak_1 = mysqli_query($conn, "SELECT * FROM kontak_1");
                if (mysqli_num_rows($kontak_1) > 0) {
                    while ($k1 = mysqli_fetch_array($kontak_1)) {
                ?>
                        <div class="footer-contact pt-3">
                            <p><?= $k1['nama'] ?></p>
                            <p><?= $k1['alamat'] ?></p>
                            <p class="mt-3">
                                <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $k2['nomor']) ?>" target="_blank" style="font-size: 28px; color: #25D366;">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </p>
                        </div>
                    <?php }
                } else { ?>
                    Tidak ada data
                <?php } ?>
            </div>
            <!-- Kontak 2 -->
            <div class="col-lg-4 footer-about text-center">
                <a href="index.html" class="logo d-flex justify-content-center align-items-center">
                    <span class="sitename">kontak 2</span>
                </a>
                <?php
                $kontak_2 = mysqli_query($conn, "SELECT * FROM kontak_2");
                if (mysqli_num_rows($kontak_2) > 0) {
                    while ($k2 = mysqli_fetch_array($kontak_2)) {
                ?>
                        <div class="footer-contact pt-3">
                            <p><?= $k2['nama'] ?></p>
                            <p><?= $k2['alamat'] ?></p>
                            <p class="mt-3">
                                <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $k2['nomor']) ?>" target="_blank" style="font-size: 28px; color: #25D366;">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </p>
                        </div>
                    <?php }
                } else { ?>
                    Tidak ada data
                <?php } ?>
            </div>
            <!-- Kontak 3 -->
            <div class="col-lg-4 footer-about text-center">
                <a href="index.html" class="logo d-flex justify-content-center align-items-center">
                    <span class="sitename">kontak 3</span>
                </a>
                <?php
                $kontak_3 = mysqli_query($conn, "SELECT * FROM kontak_3");
                if (mysqli_num_rows($kontak_3) > 0) {
                    while ($k3 = mysqli_fetch_array($kontak_3)) {
                ?>
                        <div class="footer-contact pt-3">
                            <p><?= $k3['nama'] ?></p>
                            <p><?= $k3['alamat'] ?></p>
                            <p class="mt-3">
                                <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $k2['nomor']) ?>" target="_blank" style="font-size: 28px; color: #25D366;">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </p>
                        </div>
                    <?php }
                } else { ?>
                    Tidak ada data
                <?php } ?>
            </div>

        </div>

        <div class="container copyright text-center mt-4">
            <p>
                © <span>Copyright</span>
                <strong class="px-1 sitename">SD NEGERI JADDIH 02</strong>
                <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                Designed by
                <a href="https://www.instagram.com/imaaaaaaaaaha/" style="color: #25D366;">Karimah</a> and
                <a href="https://www.instagram.com/itz.auliaz" style="color: #25D366;">Aulia Azzahra</a>
            </div>
        </div>
</footer>