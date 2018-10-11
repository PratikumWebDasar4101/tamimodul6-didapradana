<?php 
	include ('db.php');
	$sql = "SELECT * FROM data";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
			//output datanya
		?>
		<a href="posting.php">Posting</a><br><br>
		<a href="login.php?keluar=logout">Logout</a>
		<?php
			while ($row = mysqli_fetch_assoc($result)) {
				?>
				<table border="1" width="80%">
					<tr>
						<th>Nama</th>
						<th>Nim</th>
						<th>Kelas</th>
						<th>JenisKelamin</th>
						<th>Hobi</th>
						<th>Fakultas</th>
						<th>Alamat</th>
					</tr>
					<tr>
						<td><?php echo $row['nama']?></td>
						<td><?php echo $row['nim']?></td>
						<td><?php echo $row['kelas']?></td>
						<td><?php echo $row['jenkel']?></td>
						<td><?php echo $row['hobi']?></td>
						<td><?php echo $row['fakultas']?></td>
						<td><?php echo $row['alamat']?></td>
					</tr>
					<br>
				</table>
			<?php
			}
	}
?>