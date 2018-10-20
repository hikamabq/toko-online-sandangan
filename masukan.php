<?php 
require_once 'modul/view.php';
headerku();
$tampil = tampil();
$masukan = masukan();
 ?>

<div class="konten">
<div class="r">
	<div class="label">Masukan anda</div>
	<br>
	<p>Berikan kami masukan terbaik anda, demi kemajuan toko online dan menyamanan dalam berbelanja online.</p>
	<br>
	<div class="kol-2">
	<?php echo '
		<form method="post" action="'.komen($conn).'" class="form full">
			<label for="">Email</label>
			<input type="email" name="email" class="input" placeholder="E-mail">
			<label for="" >Komentar</label>
			<textarea name="komen" class="text"></textarea>
			<label for=""></label>
			<button type="submit" name="kirim" class="tmbl biru">Kirim</button>
		</form>
		 '; ?>
	</div>
	<div class="kol-2">
<?php while($row = mysqli_fetch_assoc($masukan)){ ?>
		<div class="posting">
			<b><?= $row['email'] ?></b>
			<h5><?= $row['waktu'] ?></h5> <br>
			<p><?= $row['komentar'] ?></p>
		</div>
<?php } ?>
	</div>

</div>
</div>


<?php 
footerku();
 ?>