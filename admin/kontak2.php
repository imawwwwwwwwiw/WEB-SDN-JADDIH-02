<?php include 'header.php' ?>

<!-- content -->
<div class="content">

    <div class="container">

        <div class="box">

            <div class="box-header">
                Kontak 2
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

                        $kontak_2 = mysqli_query($conn, "SELECT * FROM kontak_2");
                        if (mysqli_num_rows($kontak_2) > 0) {
                            while ($k2 = mysqli_fetch_array($kontak_2)) {
                        ?>

                                <tr>
                                    <td><?= $k2['id'] ?></td>
                                    <td><?= $k2['nama'] ?></td>
                                    <td><?= $k2['alamat'] ?></td>
                                    <td><?= $k2['nomor'] ?></td>
                                    <td><?= $k2['email'] ?></td>
                                    <td>
                                        <a href="edit-kontak2.php?id=<?= $k2['id'] ?>" class="btn"><i class="fa fa-edit"></i></a>
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