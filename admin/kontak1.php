<?php include 'header.php' ?>

<!-- content -->
<div class="content">

    <div class="container">

        <div class="box">

            <div class="box-header">
                Kontak 1
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

                        $kontak_1 = mysqli_query($conn, "SELECT * FROM kontak_1");
                        if (mysqli_num_rows($kontak_1) > 0) {
                            while ($k1 = mysqli_fetch_array($kontak_1)) {
                        ?>

                                <tr>
                                    <td><?= $k1['id'] ?></td>
                                    <td><?= $k1['nama'] ?></td>
                                    <td><?= $k1['alamat'] ?></td>
                                    <td><?= $k1['nomor'] ?></td>
                                    <td><?= $k1['email'] ?></td>
                                    <td>
                                        <a href="edit-kontak1.php?id=<?= $k1['id'] ?>" title="Edit Data" class="text-orange"><i class="fa fa-edit"></i></a>
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