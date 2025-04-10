<?php include 'header.php' ?>


<div class="content">

	<div class="container">

		<div class="box">

			<div class="box-header">
				PPDB
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
							<th>Tanggal</th>
							<th>lokasi</th>
							<th>jadwal masuk</th>
							<th>Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php
						$no = 1;

						$where = " WHERE 1=1 ";
						if (isset($_GET['key'])) {
							$where .= " AND judul LIKE '%" . addslashes($_GET['key']) . "%' ";
						}

						$ppdb = mysqli_query($conn, "SELECT * FROM ppdb $where ORDER BY id DESC");
						if (mysqli_num_rows($ppdb) > 0) {
							while ($p = mysqli_fetch_array($ppdb)) {
						?>

								<tr>
									<td><?= $no++ ?></td>
									<td><?= $p['tanggal'] ?></td>
									<td><?= $p['lokasi'] ?></td>
									<td><?= $p['jadwal_masuk'] ?></td>
									<td>
										<a href="edit-ppdb.php?id=<?= $p['id'] ?>" class="btn"><i class="fa fa-edit"></i></a>

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