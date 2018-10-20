<?php 
require_once 'modul/view.php';
headerku();

$id = $_GET['id'];
if(isset($_GET['id'])){
	$detail = detail($id);
	while($data = mysqli_fetch_assoc($detail)){
		$nama = $data['nama'];
		$harga = number_format($data['harga']);
		$isi = $data['isi'];
		$tag = $data['tag'];
		$gambar = $data['gambar'];
		$id = $data['id'];
	}
}

 ?>

<div class="konten">
	<div class="r">

	<div class="detail">
		<div class="gamdet">
			<img src="<?= $gambar ?>" alt="">
		</div>
		<div class="isidet">
			<div class="kol-3">
				<label for="">Nama</label>
				<p><?= $nama ?></p>
			</div>
			<div class="kol-3">
				<label for="">Detail</label>
				<p><?= $isi ?></p>		
			</div>
			<div class="kol-3">
				<label for="">harga</label>
				<p>Rp <?= $harga ?></p>
			</div>

			<label for=""></label>
			<br>
		</div>
			<div class="opsi">
				<a href="index.php" class="tmbl putih">Kembali</a>
				<a href="ker.php?ker=add&id=<?= $id ?>" class="tmbl hijau">Lanjut</a>
			</div>
	</div>

	</div>
</div>


<?php 
footerku();
 ?>