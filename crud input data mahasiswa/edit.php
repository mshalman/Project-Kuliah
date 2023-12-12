<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
	<link rel="stylesheet"  href="create.css">
</head>
<body>
<nav class="navbar">
	<div class="max-width">
		<h2>CRUD DATA MAHASISWA</h2>
	</div>
</nav>
<section class="home">
	<div class="Container">
		<div class="card-container">
			<div class="left">
				<div class="left-container">
				<h2>TUGAS KULIAH 2</h2>
					<h2>CRUD</h2>
					<h2>DATA MAHASISWA</h2>
					<br/>
					<p>Nama : Muhammad Shalman Alfarisi</p>
					<p>NPM : 217064516050</p>
					<P>Program Studi : Informatika</P>
					<p>Mata Kuliah : Pemrograman web</p>
					<br>
					<span id="kembali"><a href="index.php">KEMBALI</a></span>
					
				</div>
			</div>
		
 
				<?php
				include 'koneksi.php';
				$id = $_GET['id'];
				$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
				while($d = mysqli_fetch_array($data)){
					?>
		
				<div class="right">
					<div class="right-container">
						<form method="post" action="update.php">
						<h1>EDIT DATA MAHASISWA</h1>
						<br>
						<br>
							<table>
								<tr>			
									<td>Nama</td>
									<td>
										<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
										<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
									</td>
								</tr>
								<tr>
									<td>NIM</td>
									<td><input type="number" name="npm" value="<?php echo $d['npm']; ?>"></td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
								</tr>
								<tr>
									<td></td>
									<td><input type="submit" value="SIMPAN"></td>
								</tr>		
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
		</section>	
		<?php 
	}
	?>
 
</body>
</html>

