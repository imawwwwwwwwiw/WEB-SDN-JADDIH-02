<?php include 'header.php' ?>

<!-- content -->
<div class="content">

    <div class="container">

        <div class="box">

            <div class="box-header">
                Kontak 3
            </div>

            <div class="box-body">

                <?php
                if (isset($_GET['success'])) {
                    echo "<div class='alert alert-success'>" . $_GET['success'] . "</div>";
                }
                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Nomor</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        $kontak_3 = mysqli_query($conn, "SELECT * FROM kontak_3");
                        if (mysqli_num_rows($kontak_3) > 0) {
                            while ($k3 = mysqli_fetch_array($kontak_3)) {
                        ?>

                                <tr>
                                    <td><?= $k3['id'] ?></td>
                                    <td><?= $k3['nama'] ?></td>
                                    <td><?= $k3['alamat'] ?></td>
                                    <td><?= $k3['nomor'] ?></td>
                                    <td><?= $k3['email'] ?></td>
                                    <td>
                                        <a href="edit-kontak3.php?id=<?= $k3['id'] ?>" class="btn"><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>

                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="5">Data tidak ada</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>

        </div>

    </div>

</div>

<?php include 'footer.php' ?>