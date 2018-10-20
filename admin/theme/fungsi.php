<?php 
$conn = mysqli_connect('localhost','root','','datapro');

session_start();

function cek_user($nama,$pass){
	$query = "SELECT * FROM user WHERE username='$nama' AND password='$pass'";
	global $conn;
	if($result = mysqli_query($conn,$query)){
		if(mysqli_num_rows($result) != 0 ) return true;
		else return false;
	}
}

function produk(){
	$query = "SELECT * FROM produk ORDER BY waktu DESC";
	return result($query);
}
function pembelian(){
	$query = "SELECT * FROM pembelian";
	return result($query);
}
function cari($cari){
	$query = "SELECT * FROM produk WHERE nama LIKE '%$cari%' ORDER BY id DESC ";
	return result($query);
}
function detail($id){
	$query = "SELECT * FROM produk WHERE id = $id";
	return result($query);
}
//menambah isi data
function add($nama, $isi, $harga, $tag, $gambar){
  $query = "INSERT INTO produk(nama, isi, harga, tag, gambar) VALUES('$nama', '$isi', '$harga', '$tag', '$gambar') ";
  return result($query);
}
//mengedit data
function edit($nama, $isi, $harga, $tag, $id ){
  $query = "UPDATE produk SET nama='$nama', isi='$isi', harga='$harga', tag='$tag' WHERE id = $id";
  return result($query);
}
//mendelete isi dari table
function delete($id){
  $query = "DELETE FROM produk WHERE id = $id";
  return result($query);
}
function tag($tag){
	$query = "SELECT * FROM produk WHERE tag = '$tag' ORDER BY id DESC";
	return result($query);
}

function result($query){
	global $conn;
	if($result = mysqli_query($conn,$query)){
		return $result;
	}
}

 ?>