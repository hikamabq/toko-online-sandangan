<?php 
require_once 'theme/view.php';
headerku();

$produk = tag($tag);
$t = tag($tag);
while($tt = mysqli_fetch_assoc($t)){
	$tagg = $tt['tag'];
}

if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	$produk = cari($cari);
	$taging = "Produk kami";
}

 ?>

<?php menu(); ?>

<div class="konten">


	<div class="dashboard">
	<div class="label"><?= $tagg ?></div><br>
		<table>
			<thead>
				<tr>
					<td width="40">No</td>
					<td width="290">Nama</td>
					<td width="170">Harga</td>
					<td>Tag</td>
					<td>Opsi</td>
				</tr>
			</thead>
			<tbody>
<?php 
$no = 0;
while($row = mysqli_fetch_assoc($produk)){ 
$no++;
	?>
				<tr>
					<td align="center"><?= $no ?></td>
					<td><?= $row['nama'] ?></td>
					<td align="right">Rp. <?= number_format($row['harga']) ?></td>
					<td align="center"><?= $row['tag'] ?></td>
					<td align="center">
						<a href="detail.php?id=<?= $row['id'] ?>" class="blue">Detail</a> 
						<a href="edit.php?id=<?= $row['id'] ?>" class="green">Edit</a> 
						<a href="delete.php?id=<?= $row['id'] ?>" class="red">Delete</a> 
					</td>
				</tr>
<?php } ?>
			</tbody>
		</table>
	</div>
	
</div>

<?php 
footerku();
 ?>