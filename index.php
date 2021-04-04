<DOCTYPE>
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

	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
            <li><a href="index.php?page=login">Login<a></li>
		</ul>
	</div>

	<div class="badan">


	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'home':
				include "/home.php";
                break;
            
            case 'login':
                include "/login.php"
		
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "/home.php";
	}

	 ?>

	</div>
</div>
</body>
</html>