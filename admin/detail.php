<?php 
require_once 'theme/view.php';
headerku();


$id = $_GET['id'];

if(isset($_GET['id'])){
	$detail = detail($id);
	while($data = mysqli_fetch_assoc($detail)){
		$nama 	= $data['nama'];
		$isi 		= $data['isi'];
		$harga 	= $data['harga'];
		$gambar = $data['gambar'];
		$tag 		= $data['tag'];
	}
}

 ?>


<div class="konten">

	<div class="detail">
		<div class="imgdet"><img src="../<?= $gambar ?>"></div><br>
		Nama : <?= $nama ?><br>
		Detail : <?= $isi ?><br>
		Harga : <?= $harga ?><br>
		Tag : <?= $tag ?><br>
	</div>
	
</div>

<?php 
footerku();
 ?>