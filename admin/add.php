<?php 
require_once 'theme/view.php';

if(!$_SESSION['nama']){
	header('Location: login.php');
}

headerku();

if(isset($_POST['upload'])){
	$nama 	= $_POST['nama'];
	$isi		= $_POST['isi'];
	$harga 	= $_POST['harga'];
	$tag		= $_POST['tag'];

	$_FILES['foto'];

	$namagam = $_FILES['foto']['name'];
	$asalgam = $_FILES['foto']['tmp_name'];

	move_uploaded_file($asalgam, '../img/'.$namagam);

	$gambar = 'img/'.$namagam;
	$gambar2 = '../img/'.$namagam;

	if( !empty(trim($nama)) && !empty(trim($isi)) && !empty(trim($harga)) && !empty(trim($tag)) ){
		if(add($nama, $isi, $harga, $tag, $gambar)){
			header('Location: index.php');
		}else{'gagal';}
	}else{ echo '<center style="color: red; font-size: 20px;">Tidak boleh ada yang kosong</center>';}
	
}

 ?>


<div class="konten">

	<div class="label">
		Add product - tambah produk untuk dijual
	</div>

	<div class="addpost">
		<form method="post" enctype="multipart/form-data">
			<label>Produk [ Nama > Pria / Wanita ]</label>
				<input type="text" name="nama" placeholder="Nama barang">
				<input type="text" name="tag" placeholder="pria / wanita">
			<label>Deskripsi produk</label>
				<textarea name="isi" placeholder="Tulis spesifikasi produk disini..."></textarea>
			<label>Harga (per item) Rp</label>
				<input type="number" name="harga" placeholder="Harga barang">
			<label>Gambar produk</label>
				<input type="file" name="foto" placeholder="browse...">
				<button type="reset" class="red">Batal</button><button type="submit" name="upload" class="blue">Upload</button>
		</form>
	</div>

</div>

<?php 
footerku();
 ?>