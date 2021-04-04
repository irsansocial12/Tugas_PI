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
<table>
<tr>
<th>Id</th>
<th>nama</th>
<th>nim</th>
<th>tempat_tinggal</th>
</tr>
<?php 
		$no = 1; foreach($mahasiswa as $u){ 
		?>
		<tr>
			<td><?php echo $u->Id++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->nim ?></td>
			<td><?php echo $u->tempat_tinggal ?></td>
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