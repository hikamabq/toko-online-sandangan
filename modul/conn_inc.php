<?php 
$conn = mysqli_connect('localhost','root','','datapro');

session_start();

function tampil(){
	$query = "SELECT * FROM produk ORDER BY id DESC LIMIT 8";
	return result($query);
}

function tag($tag){
	$query = "SELECT * FROM produk WHERE tag = '$tag' ORDER BY id DESC";
	return result($query);
}

function detail($id){
	$query = "SELECT * FROM produk WHERE id = $id";
	return result($query);
}

function cari($cari){
	$query = "SELECT * FROM produk WHERE nama LIKE '%$cari%' ORDER BY id DESC ";
	return result($query);
}

function beli($conn, $nama, $harga, $jum){
	if(isset($_POST['belanja'])){
		$pembeli = $_POST['pembeli'];
		$barang = $_SESSION['barang'];
		$alamat = $_POST['alamat'];
		$telepon = $_POST['telepon'];

		if( !empty(trim($pembeli)) && !empty(trim($alamat)) && !empty(trim($telepon)) ){

			$sql = "INSERT INTO pembelian(nama,pembeli,harga,jumlah,alamat,telepon) 
							VALUES('$nama','$pembeli','$harga','$jum','$alamat','$telepon') ";
			$result = $conn->query($sql);

			session_destroy();
			header('Location:trims.php');
		}
	}
}

function komen($conn){
	if(isset($_POST['kirim'])){
		$email = $_POST['email'];
		$komen = $_POST['komen'];

		if( !empty(trim($email)) && !empty(trim($komen)) ){

			$sql = "INSERT INTO komentar(email,komentar) VALUES ('$email','$komen') ";
			$result = $conn->query($sql);

			header('Location:masukan.php');
		}
	}
}
function masukan(){
	$query = "SELECT * FROM komentar ORDER BY id DESC LIMIT 8";
	return result($query);
}
	


function result($query){
	global $conn;
	if($result = mysqli_query($conn, $query)){
		return $result;
	}
}


 ?>