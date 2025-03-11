<?php include 'header.php'; ?>

<!-- Content -->
<div class="content">
	<div class="container">
		<div class="box">
			<div class="box-header">
				Galeri
			</div>

			<div class="box-body">
				<a href="tambah-galeri.php" class="text-green"><i class="fa fa-plus"></i> Tambah</a>

				<?php
				if (isset($_GET['success'])) {
					echo "<div class='alert alert-success'>" . $_GET['success'] . "</div>";
				}
				?>

				<form action="">
					<div class="input-group">
						<input type="text" name="key" placeholder="Pencarian" style="padding: 10px 40%;">
						<button type="submit" style="font-size: 150%; margin: 3px;"><i class="fa fa-search"></i></button>
					</div>
				</form>

				<?php
				// Konfigurasi Pagination
				$limit = 5; // Jumlah data per halaman
				$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
				$offset = ($page - 1) * $limit;

				// Filter pencarian jika ada
				$where = " WHERE 1=1 ";
				if (isset($_GET['key'])) {
					$where .= " AND keterangan LIKE '%" . addslashes($_GET['key']) . "%' ";
				}

				// Query untuk mendapatkan total data
				$total_data = mysqli_query($conn, "SELECT COUNT(*) AS total FROM galeri $where");
				$total_rows = mysqli_fetch_assoc($total_data)['total'];
				$total_pages = ceil($total_rows / $limit);

				// Query untuk mengambil data dengan pagination
				$galeri = mysqli_query($conn, "SELECT * FROM galeri $where ORDER BY id DESC LIMIT $limit OFFSET $offset");
				?>

				<table class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Foto</th>
							<th>Keterangan</th>
							<th>Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php
						$no = $offset + 1;
						if (mysqli_num_rows($galeri) > 0) {
							while ($p = mysqli_fetch_array($galeri)) {
						?>
								<tr>
									<td><?= $no++ ?></td>
									<td><img src="../assets/uploads/galeri/<?= $p['foto'] ?>" width="100px"></td>
									<td><?= $p['keterangan'] ?></td>
									<td>
										<a href="edit-galeri.php?id=<?= $p['id'] ?>" title="Edit Data" class="text-orange"><i class="fa fa-edit"></i></a>
										<a href="hapus.php?idgaleri=<?= $p['id'] ?>" onclick="return confirm('Yakin ingin hapus?')" title="Hapus Data" class="text-red"><i class="fa fa-times"></i></a>
									</td>
								</tr>
							<?php }
						} else { ?>
							<tr>
								<td colspan="4">Data tidak ada</td>
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

						<?php for ($i = 1; $i <= $total_pages; $i++) : ?>
							<li><a href="?page=<?= $i ?>" class="<?= ($i == $page) ? 'active' : '' ?>"><?= $i ?></a></li>
						<?php endfor; ?>

						<?php if ($page < $total_pages) : ?>
							<li><a href="?page=<?= $page + 1 ?>"><i class="fa fa-chevron-right"></i></a></li>
						<?php endif; ?>
					</ul>
				</div>

			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>