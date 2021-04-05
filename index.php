<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang di Sistem Informasi Mahasiswa USU</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>

<div class="content">
	<header>
		<h1 class="judul">Sistem Informasi Mahasiswa USU</h1>
		<h3 class="deskripsi">Halaman Awal</h3>
	</header>
	<button type="button" class="btn btn"><?php echo anchor('/tambah','Tambah Data'); ?></button>
<table>
<tr>
<th>Nomor</th>
<th>NIM</th>
<th>Nama</th>
<th>Tempat Tinggal</th>
<th>Opsi</th>
</tr>
<?php
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM tbl_mahasiswa")or die(mysql_error());
		$no = 1;
		while($mahasiswa = mysql_fetch_array($query_mysql)){ 
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $mahasiswa['nim']; ?></td>
			<td><?php echo $mahasiswa['nama']; ?></td>
			<td><?php echo $mahasiswa['tempat_tinggal']; ?></td>
			<td>
			    <button type="button" class="btn btn-link"><?php echo anchor('/edit'.$u->Id,'Edit'); ?></button> |
                 <button type="button" class="btn btn-link"><?php echo anchor('/hapus'.$u->Id,'Hapus'); ?></button>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
</body>
</html>