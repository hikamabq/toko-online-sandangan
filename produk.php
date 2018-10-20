<?php 
require_once 'modul/view.php';
headerku();
$produk = tag($tag);

if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
		if(!empty(trim($cari))){
			$produk = cari($cari);
		}
}

 ?>

<div class="konten">
	<div class="r">

<?php while($row = mysqli_fetch_assoc($produk)){ ?>
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