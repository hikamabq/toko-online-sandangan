<?php 
require_once 'theme/view.php';

if(!$_SESSION['user']){
	header('Location: login.php');
}

headerku();

$id = $_GET['id'];

if(isset($_GET['id'])){
	$id = $_GET['id'];
	if(delete($id)){
		header('Location: index.php');
	}
}

 ?>
