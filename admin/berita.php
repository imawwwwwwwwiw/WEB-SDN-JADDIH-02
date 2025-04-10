<?php include 'header.php'; ?>

<!-- content -->
<div class="content">
	<div class="container">
		<div class="box">
			<div class="box-header">
				Berita
			</div>

			<div class="box-body">
				<a href="tambah-berita.php" class="btn" style="background-color:teal;"><i class="fa fa-plus" style="margin-bottom: 20px"></i></a>
				<?php
				if (isset($_GET['success'])) {
					echo "<div class='alert alert-success'>" . $_GET['success'] . "</div>";
				} ?>
				<form action="">
					<div class="input-group" style="display: flex; align-items: center; gap: 10px;">
						<input type="text" name="key" placeholder="Pencarian" style="padding: 10px 40%;">
						<button type="submit" style="font-size: 150%; margin: 3px;"><i class="fa fa-search"></i></button>
					</div>
				</form>

				<?php
				$limit = 5; // Jumlah berita per halaman
				$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
				$offset = ($page - 1) * $limit;

				$where = " WHERE 1=1 ";
				if (isset($_GET['key'])) {
					$where .= " AND juara LIKE '%" . addslashes($_GET['key']) . "%' ";
				}

				// Ambil total data
				$total_query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM prestasi $where");
				$total_data = mysqli_fetch_assoc($total_query)['total'];
				$total_page = ceil($total_data / $limit);

				// Ambil data berita dengan pagination
				$prestasi = mysqli_query($conn, "SELECT * FROM prestasi $where ORDER BY id DESC LIMIT $limit OFFSET $offset");
				?>

				<table class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Juara</th>
							<th>Keterangan</th>
							<th>Gambar</th>
							<th>Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php
						$no = $offset + 1;
						if (mysqli_num_rows($prestasi) > 0) {
							while ($b = mysqli_fetch_array($prestasi)) {
						?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $b['juara'] ?></td>
									<td><?= $b['keterangan'] ?></td>
									<td><img src="../assets/uploads/prestasi/<?= $b['gambar'] ?>" width="100px"></td>
									<td>
										<a href="edit-berita.php?id=<?= $b['id'] ?>" class="btn"><i class="fa fa-edit"></i></a>
										<a href="hapus.php?idprestasi=<?= $b['id'] ?>" class="btn" style="background-color:firebrick;" onclick="return confirm('Yakin ingin hapus ?')" title="Hapus Data" class="text-red"><i class="fa fa-times"></i></a>
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

				<!-- Pagination -->
				<div class="pagination">
					<ul>
						<?php if ($page > 1) : ?>
							<li><a href="?page=<?= $page - 1 ?>"><i class="fa fa-chevron-left"></i></a></li>
						<?php endif; ?>

						<?php for ($i = 1; $i <= $total_page; $i++) : ?>
							<li><a href="?page=<?= $i ?>" class="<?= ($i == $page) ? 'active' : '' ?>"><?= $i ?></a></li>
						<?php endfor; ?>

						<?php if ($page < $total_page) : ?>
							<li><a href="?page=<?= $page + 1 ?>"><i class="fa fa-chevron-right"></i></a></li>
						<?php endif; ?>
					</ul>
				</div>
				<!-- End Pagination -->

			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>