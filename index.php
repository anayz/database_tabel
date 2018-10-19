<html>
<head>
  <title>Menampilkan data dari database ke dalam bentuk tabel</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

  <div class="container">
  	<h2><center>DATA SISWA</center></h2>
  	<table class="tabel" align="center">
  <tr>
  	<th>id</th>
  	<th>username</th>
  	<th>password</th>
  	<th>level</th>
  	<th>fullname</th>
  </tr>
  </div>
  <?php
  // 1. Lakukan include koneksi.php untuk membuat koneksi
  include('connection.php');
  // 2. Buat perintah SQL untuk menampilkan data
  $sql_tampil ="SELECT * FROM kk4_tabel";
  // 3. Jalankan perintah diatas dengan fungsi mysqli_query
  $peserta=mysqli_query($conn,$sql_tampil);
  // 4. Lakukan fetch dengan result type MYSQL_ASSOC
  while($baris_data=mysqli_fetch_array($peserta,MYSQLI_ASSOC)){
  	echo'
  	</tr>
  		<td>'.$baris_data['ID'].'</td>
  		<td>'.$baris_data['Username'].'</td>
  		<td>'.$baris_data['Password'].'</td>
  		<td>'.$baris_data['Level'].'</td>
  		<td>'.$baris_data['Fullname'].'</td>
  	</tr>';
  }
  ?>
</body>
</html>