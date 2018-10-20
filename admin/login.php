<?php 
require_once 'theme/fungsi.php';

if(isset($_SESSION['nama'])){
	header('Location: index.php');
}

if(isset($_POST['login'])){
	$nama = $_POST['nama'];
	$pass = $_POST['password'];

	if( !empty(trim($nama)) && !empty(trim($pass)) ){
		if(cek_user($nama, $pass)){
			$_SESSION['nama'] = $nama;
			header('Location: index.php');
		}else{
			header('Location: login.php');
			// echo 'gagal';
		}
	}else{
		header('Location: login.php');
		// echo 'kosong';
	}
}

// require_once 'theme/view.php';
 ?>

<style type="text/css">
*{
	margin: 0; padding: 0;
	font-family: "Segoe UI", sans-serif;
	max-width: 100% !important;
}
.login{
	width: 400px; margin: 10% auto;
	background-color: #f0f0f0;
	padding: 10px;
}
.login p{
	display: block;
	text-align: center;
	font-size: 20px;
}
.login form{
	padding: 10px;
}
.login input{
	width: 100%; margin: 3px 0px;
	padding: 10px;
	border: none;
}
.login input[type="submit"]{
	background-color: #5cb85c;
	color: white; cursor: pointer;
}
.login input[type="submit"]:hover{
	background-color: #449d44;
}

</style>

<div class="login">
	<p>Login</p>
	<form method="post">
		<input type="text" name="nama" placeholder="Username">
		<input type="password" name="password" placeholder="Password">
		<input type="submit" name="login">
	</form>
</div>