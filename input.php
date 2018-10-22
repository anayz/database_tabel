<<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan PHP dan MySQL - Menampilkan Data dari Database</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="Judul">
	<h1>Membuat CRUD dengan PHP dan MySQL</h1>
	<h2>Menampilkan Data dari Database</h2>
</div>

<br/>
<a href="index.php">Lihat Semua Data</a>
<br/>
<h3>Input Data Baru</h3>
<form action="input-aksi.php" method="post">
	<table>
		<tr> 
			<td>id</td>
			<td><input type="text" name="id"></td>
		</tr> 
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password"></td>
		<tr>
			<td>Level</td>
			<td><input type="text" name="level"></td>
		</tr>
		<tr>
			<td>Fullname</td>
			<td><input type="text" name="fullname"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="Submit" name="Simpan"></td>
		</tr>
		</tr>
	</table>
</form>
</body>
</html>