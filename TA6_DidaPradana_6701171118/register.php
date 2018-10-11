<?php 

include ('db.php');

 ?>
 <form method="post">
 	<input type="text" name="username"> Username <br><br>
 	<input type="password" name="password"> Password <br><br>
 	<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<input type="radio" name="kelas" value="D3MI-41-01"> D3MI-41-01<br>
					<input type="radio" name="kelas" value="D3MI-41-02"> D3MI-41-02<br>
					<input type="radio" name="kelas" value="D3MI-41-03"> D3MI-41-03
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" value="Laki-laki" name="jenkel">Laki-laki <input type="radio" value="Perempuan" name="jenkel">Perempuan</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td> <input type="checkbox" name="hobi" value="Makan"> Makan<br>
 					 <input type="checkbox" name="hobi" value="Minum"> Minum<br>
 					 <input type="checkbox" name="hobi" value="Tidur"> Tidur<br> 
 				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td> <select name="fakultas">
						  <option value="FIT">FIT</option>
						  <option value="FTE">FTE</option>
						  <option value="FIK">FIK</option>
						  <option value="FKB">FKB</option>
					</select> 
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea rows="10" cols="30" name="alamat"></textarea></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" value="kirim"></td>
			</tr>
		</table>
 </form>
 <?php
 if (isset($_POST['nim'])) {
 	$username = $_POST['username'];
 	$password = $_POST['password'];
 	$nama       = $_POST['nama'];
	$nim        = $_POST['nim'];
	$kelas  	= $_POST['kelas'];
	$jenkel		= $_POST['jenkel'];
	$hobi		= $_POST['hobi'];
	$fakultas	= $_POST['fakultas'];
	$alamat		= $_POST['alamat'];

 	$sql1 = "INSERT INTO akun (username, password) 
	            VALUES ('$username', '$password')";

	$sql = "INSERT INTO data (nama, nim, kelas, jenkel, hobi, fakultas, alamat) 
	            VALUES ('$nama', '$nim', '$kelas', '$jenkel', '$hobi', '$fakultas', '$alamat')";

	    if (mysqli_query($conn, $sql1)) {

	        	

	    		if (mysqli_query($conn, $sql)) {
	        	echo "	<script>
         				alert('Data berhasil di tambah');
         				location='login.php';
         				</script>";
	    		}else {
	        		echo "Error: " . $sql . "<br?" . mysqli_error($conn);
	    		}

	    }else {
	        echo "Error: " . $sql . "<br?" . mysqli_error($conn);
	    }

	    // mysqli_close($conn);
 }

 ?>