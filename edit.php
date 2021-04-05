<!DOCTYPE html>
<html lang="en">
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	
	<title>Edit Data</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['nim'];
	$nama=$_POST['nama'];
	$tempat_tinggal=$_POST['tempat_tinggal'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE tbl_mahasiswa SET nim='$nim',nama='$nama',tempat_tinggal='$tempat_tinggal' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];
 

$result = mysqli_query($mysqli, "SELECT * FROM tbl_mahasiswa WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$nim = $user_data['nim'];
	$nama = $user_data['nama'];
	$tempat_tinggal = $user_data['tempat_tinggal'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>NIM</td>
				<td><input type="text" name="nim" value=<?php echo $nim;?>></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>Tempat Tinggal</td>
				<td><input type="text" name="tempat_tinggal" value=<?php echo $tempat_tinggal;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>