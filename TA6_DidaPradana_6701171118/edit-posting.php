<?php 

	include ('db.php');
	$id = $_GET['edit'];
	$sql = mysqli_query($conn, "SELECT * FROM posting WHERE id ='$id'");
	$row = mysqli_fetch_assoc($sql);
 ?>
 <form enctype="multipart/form-data" method="post">

	Posting <br><br>
	<textarea rows="20" cols="80" name="post">
		<?php
		echo $row['post'];
		?>
	</textarea>
	<br>
	<input type="file" name="gambar" value="<?php echo $row['gambar']; ?>"> Upload Foto<br><br><br>
	<input type="submit" name="kirim" value="POST">
	<a href="halamanawal.php">Home</a>

</form>
