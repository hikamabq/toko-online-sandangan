<?php 
require_once 'theme/view.php';

if(!isset($_SESSION['nama'])){
	header('Location: login.php');
}

headerku();

$pembelian= pembelian();

if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	$produk = cari($cari);
	$taging = "Produk kami";
}


 ?>

<?php menu(); ?>

<div class="konten">

<div class="label">Pembeli</div> <br>
	<div class="dashboard">
		<table>
			<thead>
				<tr>
					<td width="40">No</td>
					<td width="300">Nama Pembeli</td>
					<td width="170">Barang</td>
					<td>jumlah</td>
					<td>Alamat</td>
					<td>No Telp</td>
				</tr>
			</thead>
			<tbody>
<?php 
$no = 0;
while($row = mysqli_fetch_assoc($pembelian)){ 
$no++;
	?>
				<tr>
					<td align="center"><?= $no ?></td>
					<td><?= $row['pembeli'] ?></td>
					<td><?= $row['nama'] ?></td>
					<td align="center"><?= $row['jumlah'] ?></td>
					<td align="center"><?= $row['alamat'] ?></td>
					<td align="center">0<?= $row['telepon'] ?></td>
				</tr>
<?php } ?>
			</tbody>
		</table>
	</div>
	
</div>

<?php 
footerku();

 ?>