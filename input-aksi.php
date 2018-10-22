<?php
include 'connection.php';
$id = $_POST ['id'];
$Username = $_POST ['username'];
$Password = $_POST ['password'];
$Level =$_POST ['level'];
$Fullname = $_POST ['fullname'];

$sql_insert="INSERT INTO kk4_tabel VALUES ('$id', '$Username', '$Password', '$Level', '$Fullname')";

mysqli_query($conn,$sql_insert)or die(mysqli_error($conn));

echo '<script>
alert ("Data Berhasil Disimpan");
location="index.php?"
</script>';
?>