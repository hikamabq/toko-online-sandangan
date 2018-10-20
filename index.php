<?php 
require_once 'modul/view.php';
headerku();
$tampil = tampil();
 ?>

<div class="banner">
	<div class="konten">
		<div class="info">
			<img src="img/check-in.png" alt="">
			<p>
				Toko pakaian kesukaan anda, disini anda bisa membeli apapun kurang dari Rp 200.000.
				silahkan menikmati belanja anda...
			</p>
			<p>Atau datang langsung ke toko kami yang bergaya Prancis.</p>
			<br>
			<p>Surakarta</p>
		</div>
	</div>
</div>

<div class="konten">

<div class="label">Terbaru</div>

	<div class="r">

<?php while($row = mysqli_fetch_assoc($tampil)){ ?>
		<div class="k4">
			<div class="post">
				<p><?= $row['nama']  ?></p>
				<div class="gambar">
					<a href="detail.php?id=<?= $row['id']?>"><img src="<?= $row['gambar']  ?>" alt=""></a>
				</div>
				<h3>Rp <?= number_format($row['harga'])  ?></h3>
				<div class="cap">
					<a href="detail.php?id=<?= $row['id']?>" class="tmbl putih">Detail</a>
					<a href="ker.php?ker=add&id=<?= $row['id'] ?>" class="tmbl biru">Add to cart</a>
				</div>
			</div>
		</div>
<?php } ?>

	</div>
</div>


<?php 
footerku();
 ?>