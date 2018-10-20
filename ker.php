<?php

require_once 'modul/conn_inc.php';

	if( isset($_GET['ker']) ){
		$ker = $_GET['ker'];
		
		if($ker == 'add'){
			if( isset($_GET['id']) ){
				$id = $_GET['id'];
				if( isset($_SESSION['barang'][$id]) ){
					$_SESSION['barang'][$id] += 1;	
				} else{
					$_SESSION['barang'][$id] = 1;
				}
			}
		}
		
		elseif($ker == 'plus'){
			if( isset($_GET['id']) ){
				$id = $_GET['id'];
				if( isset($_SESSION['barang'][$id]) ){
					$_SESSION['barang'][$id] += 1;	
				}
			}
		}
		
		elseif($ker == 'min'){
			if( isset($_GET['id']) ){
				$id = $_GET['id'];
				if( isset($_SESSION['barang'][$id]) ){
					$_SESSION['barang'][$id] -= 1;
					if($_SESSION['barang'][$id] == 0){
						unset($_SESSION['barang'][$id]);
					}	
				}
			}
		}
		
		elseif($ker == 'del'){
			if( isset($_GET['id']) ){
				$id = $_GET['id'];
				if( isset($_SESSION['barang'][$id]) ){
					unset($_SESSION['barang'][$id]);	
				}
			}
		}

		elseif($ker == 'batal'){
			if( isset($_GET['id']) ){
				$id = $_GET['id'];
				if( isset($_SESSION['barang'][$id]) ){
					session_destroy();	
				}
			}
		}
		header('Location: keranjang.php');
	}
	

?>