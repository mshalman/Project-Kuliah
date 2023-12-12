<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
	<link rel="stylesheet"  href="index.css">
</head>
<body>
<nav class="navbar">
	<div class="max-width">
		<h2>CRUD DATA MAHASISWA</h2>
	</div>
</nav>
<br><br><br><br><br><br><br><br>
<Section class="home">
<div class="report">
	<span id="tambah">
		<a href="tambah.php">TAMBAH MAHASISWA</a>
	</span>
				
		<table border="1">
			<tr>
				<th width="50">NO</th>
				<th width="250">Nama</th>
				<th width="120">NIM</th>
				<th width="250">Alamat</th>
				<th colspan="2">OPSI</th>
			</tr>
			<?php 
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"select * from mahasiswa");
			while($d = mysqli_fetch_array($data)){				
				?>
				<tr>
					<td align="center"><?php echo $no++; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['npm']; ?></td>
					<td><?php echo $d['alamat']; ?></td>
					<td>
						<span id="edit"><a href="edit.php?id=<?php echo $d['id']; ?>">&ensp;EDIT&ensp;</a></span>
						<span id="hapus"><a href="hapus.php?id=<?php echo $d['id']; ?>" >HAPUS</a></span>
					</td>
				</tr>
				<?php 
				}
				?>
		</table>
</div>
</Section>
</body>
</html>









