<?php 

include ('db.php');
 ?>
<form enctype="multipart/form-data" method="post">

	Posting <br><br>
	<textarea rows="20" cols="80" name="post">
		
	</textarea>
	<br>
	<input type="file" name="gambar"> Upload Foto<br><br><br>
	<input type="submit" name="kirim" value="POST"><br><br><br>
	<a href="halamanawal.php">Home</a>
</form>


<?php  

	if (isset($_POST['kirim'])) {

		$dir = "uploads/";
		$nama_file = $_FILES["gambar"]["name"];
		$nama_file_tmp = $_FILES["gambar"]["tmp_name"];
		$nama_file_temp = explode(".", $_FILES["gambar"]["name"]);
		$nama_file_baru = time() . '.' . end($nama_file_temp);
		$target_file = $dir . $nama_file_baru;
		
		$post = $_POST['post'];
		$gambar = $_POST['gambar'];

		$sql = "INSERT INTO posting(post, gambar)
	            VALUES ('$post', '$target_file')";

	    if (mysqli_query($conn, $sql) && move_uploaded_file($nama_file_tmp, $target_file)) {

			echo "	<script>
         				alert('Data berhasil di tambah');
         				location='daftarposting.php';
         			</script>";	    	

	    }else {
	        echo "Error: " . $sql . "<br?" . mysqli_error($conn);
	    }

	}



?>