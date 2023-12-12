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
	<div class="Container">
		<div class="card-container">
			<div class="left">
				<div class="left-container">
					<h2>TUGAS KULIAH 2</h2>
					<h2>CRUD</h2>
					<h1>DATA MAHASISWA</h1>
					<br/>
					<p>Nama : Muhammad Shalman Alfarisi</p>
					<p>NPM : 217064516050</p>
					<P>Program Studi : Informatika</P>
					<p>Mata Kuliah : Pemrograman web</p>
					<br>
					<span id="oke"><a href="index.php">KEMBALI</a></span>
				</div>

			</div>
			<div class="right">
				<div class="right-container">
				<form method="post" action="tambah_aksi.php">			
					<h1>MENGISI DATA</h1>
					<table>
						<tr>			
							<td>Nama</td>
							<td><input type="text" name="nama"></td>
						</tr>
						<tr>
							<td>NIM</td>
							<td><input type="number" name="npm"></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><textarea rows="3" name="alamat"></textarea></td>
							<td></td>
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
</body>
</html>




