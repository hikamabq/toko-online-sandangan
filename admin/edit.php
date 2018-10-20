<?php 
require_once 'theme/view.php';

if(!$_SESSION['nama']){
	header('Location: login.php');
}

headerku();

$id = $_GET['id'];

if(isset($_GET['id'])){
	$detail = detail($id);
	while($data = mysqli_fetch_assoc($detail)){
		$nama 	= $data['nama'];
		$isi 		= $data['isi'];
		$harga 	= $data['harga'];
		$tag 		= $data['tag'];
		$id			= $data['id'];
	}
}

if(isset($_POST['edit'])){
	$nama 	= $_POST['nama'];
	$isi		= $_POST['isi'];
	$harga 	= $_POST['harga'];
	$tag		= $_POST['tag'];


	if( !empty(trim($nama)) && !empty(trim($isi)) && !empty(trim($harga)) && !empty(trim($tag)) ){
		if(edit($nama, $isi, $harga, $tag, $id)){
			header('Location: index.php');
		}else{'gagal';}
	}else{ echo '<center style="color: red; font-size: 20px;">Tidak boleh ada yang kosong</center>';}
}

 ?>



<div class="konten">

	<div class="label">
		Edit product - edit datamu apabila salah
	</div>

	<div class="addpost">
		<form method="post" enctype="multipart/from-data">
			<input type="hidden" name="id" placeholder="Nama barang" value="<?= $id ?>">
			<label>Produk [ Nama > Pria / Wanita ]</label>
				<input type="text" name="nama" placeholder="Nama barang" value="<?= $nama ?>">
				<input type="text" name="tag" placeholder="pria / wanita" value="<?= $tag ?>">
			<label>Deskripsi produk</label>
				<textarea name="isi" placeholder="Tulis spesifikasi produk disini..."><?= $isi ?></textarea>
			<label>Harga (per item) Rp</label>
				<input type="number" name="harga" placeholder="Harga barang" value="<?= $harga ?>">
			<label for=""></label>
				<a href="index.php" class="tmbl red" style="color: #fff;">Batal</a>
				<button type="submit" name="edit" class="green">Edit</button>
		</form>
	</div>

</div>

<?php 
footerku();
 ?>