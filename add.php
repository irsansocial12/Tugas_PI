<html>
<head>
	<title>Input Data</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Tempat Tinggal</td>
				<td><input type="text" name="tempat_tinggal"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['nim'];
		$email = $_POST['nama'];
		$mobile = $_POST['tempat_tinggal'];
		
		// include database connection file
		include_once("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO tbl_mahasiswa(nim,nama,tempat_tinggal) VALUES('$nim','$nama','$tempat_tinggal')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>