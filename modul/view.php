<?php 
require_once 'modul/conn_inc.php';

?>
<?php function headerku(){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>E-sandangan | Toko pakaian online</title>
	<link rel="stylesheet" href="modul/hikam.css">
	<link rel="stylesheet" href="modul/style.css">
	<link rel="icon" type="img/png" href="img/logo.png">
</head>
<body>

<nav>
	<div class="konten">
	<b>E-sandangan</b>
		<ul>
			<a href="index.php"><li>Beranda</li></a>
			<a href="produk.php?hal=pria"><li>Pria</li></a>
			<a href="produk.php?hal=wanita"><li>Wanita</li></a>
			<a href="masukan.php"><li>Masukan</li></a>
			<a href="keranjang.php"><li>Keranjang <img src="img/cart2p.png" alt=""></li></a>
		</ul>
		<ul style="float: right;">
			<a href="admin/"><li>Login</li></a>
		</ul>
		<form action="produk.php" method="get">
			<input type="text" name="cari" placeholder="Cari...">
			<button>Cari</button>
		</form>
	</div>
</nav>
<?php } ?>

<?php 
$hal = isset($_GET['hal']) ? $_GET['hal'] : "pria";
if($hal == "pria"){$tag = 'pria';}
elseif($hal == "wanita"){$tag = 'wanita';}
else{$tag = 'wanita';}
 ?>

<?php 
if(isset($_POST['kirimkomen'])){
	$email = $_POST['email'];
	$komen = $_POST['komen'];
	if( !empty(trim($email)) && !empty(trim($komen)) ){
		if(komen($email,$komen)){
			header('Location:index.php');
		}else{echo 'gagal';}
	}else{echo 'jangan kosong';}
}

 ?>

<?php function footerku(){ ?>
<div class="footer">
	<div class="konten">
		<div class="r">
			<div class="kol-2">
				<img src="img/commerce-28.png" alt="">
				<img src="img/googleplus.png" alt="">
				<img src="img/facebook.png" alt="">
				<img src="img/whatsapp.png" alt="">				
			</div>
			<div class="kol-2">
				E-sandangan adalah website penjualan tentang pakaian.<br>
				Kami menjual produk dengan harga yang murah kurang dari Rp 200.000. <br>
				<i style="color: #f44336;">pembayaran dilakukan ditempat</i> setelah barang dikirim. <br>
				kirim masukkan anda pada bagian masukkan website supaya kami terus berbenah diri. <br>
				Hubungi kami: <br>
				<a href="">sandangan-solo@gmail.com</a> <br>
				<a href="">www.facebook.com/sandangan.solo</a> <br>
				<a href="">085 600 9292 82</a> <br><br>
			</div>
		</div>
	</div>
</div>
<div class="fotb">
	&copy; abqory 2017 - now
</div>
</body>
</html>
<?php } ?>