<?php 
 
 	include ('db.php');

  	
	$sql = "SELECT * FROM posting";
 	$result = mysqli_query($conn, $sql);
 		if (mysqli_num_rows($result)>0) {
 			while ($row = mysqli_fetch_assoc($result)) {
 				?>
 				<table border="1" width="70%">
 					<tr>
 						<th>Posting</th>
 						<th>Gambar</th>
 						<th>Option</th>
 						<th><a href="halamanawal.php">HOME</a></th>
 					</tr>
	 				<tr>
		 				<td><?php echo $row['post']?></td>
		 				<td><img width="100px" src="<?php echo $row['gambar']; ?>" alt=""></td>
		 				<td><a href="edit-posting.php?edit=<?php echo $row['id']; ?>">Edit</a></td>
	 				</tr>
 				</table>
 				<br>
 				<?php
 			}
 		}else{
 			echo "0 results";
 		}

 		mysqli_close($conn);

 ?>