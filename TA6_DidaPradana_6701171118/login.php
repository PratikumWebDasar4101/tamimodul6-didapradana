<?php
session_start();
include ("db.php");

	if (isset($_SESSION['berhasil'])) {
		header("Location: halamanawal.php");
	}

	if (isset($_GET['keluar'])) {
		session_destroy();
		header("Location: login.php");
	}
?>
<form method="post" action="login-proses.php">
    <input type="text" name="username"> Username<br>
    <input type="password" name="password"> Password<br>
    <br>
    <input type="submit" name="kirim" value="LOGIN"> &nbsp; &nbsp; &nbsp; &nbsp;
    <a href="register.php">Daftar</a> 
</form>
<?php

?>