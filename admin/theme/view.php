<?php 
require_once 'fungsi.php';
 ?>
<?php function headerku(){ ?>
<!DOCTYPE html>
<html>
<head>
	<title>CP-admin</title>
	<link rel="stylesheet" type="text/css" href="theme/style.css">
	<link rel="icon" type="img/png" href="../img/logo.png">
</head>
<body>

<nav>

	<div class="brand">
		Hai <?= $_SESSION['nama'];  ?> !
	</div>

	<div class="konten">
		<ul>
			<a href="index.php"><li>Semua</li></a>
			<a href="add.php"><li>Tambah data</li></a>
			<a href="pembeli.php"><li>Pembeli</li></a>
			<a href="logout.php"><li>Logout</li></a>
		</ul>
		<form action="index.php" method="get">
			<input type="text" name="cari" placeholder="Cari disini...">
			<button>Cari</button>
		</form>
	</div>
</nav>
<?php } ?>


<?php function menu(){ ?>
<div class="menuad">
<h2>Kategori</h2>
	<ul>
		<a href="alldash.php?hal=pria"><li>Pria</li></a>
		<a href="alldash.php?hal=wanita"><li>Wanita</li></a>
	</ul>
</div>
<?php } ?>

<?php 
$hal = isset($_GET['hal']) ? $_GET['hal'] : "pria";
if($hal == "pria"){$tag = 'pria';}
elseif($hal == "wanita"){$tag = 'wanita';}
else{$tag = 'wanita';}
 ?>

<?php function footerku(){ ?>

<div class="footer">
	&copy; abqory 2017 - now
</div>

</body>
</html>
<?php } ?>