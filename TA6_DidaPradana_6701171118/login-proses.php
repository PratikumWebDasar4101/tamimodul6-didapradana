<?php 
session_start();
include("db.php");

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * from akun where username='$username' and password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) != 0) {
	$_SESSION["username"] = $username;
	$_SESSION['berhasil'] = "sukses";
	header("Location: halamanawal.php");
}else {
	echo "Gagal Login";
}
?>