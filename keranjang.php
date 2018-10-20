<?php 
require_once 'modul/conn_inc.php';
require_once 'modul/view.php';
headerku();

$taging = "Keranjang belanjamu"

 ?>

<div class="konten">
	
	<div class="isi">
		 <div class="label">
		 	<?= $taging ?>
		 </div>
		<div class="keranjang">
			<table>
				<thead>
					<tr>
						<td width="40">No</td>
						<td width="300">Nama</td>
						<td>Harga</td>
						<td>Jumlah</td>
						<td>Total</td>
						<td>Opsi</td>
					</tr>
				</thead>
				<tbody>

				<?php 
				$total = 0;
				
				if(isset($_SESSION['barang'])){
					$no = 0;
					foreach($_SESSION['barang'] as $key => $jum){
						$query = mysqli_query($conn, "SELECT * FROM produk WHERE id = $key");
						$data  = mysqli_fetch_array($query);
						
						$harga = $data['harga'] * $jum;
						$total += $harga;
						$no++;
			
				?>
					<tr>
						<td align="center"><?= $no ?></td>
						<td><?= $data['nama'] ?></td>
						<td align="right">Rp. <?= number_format($data['harga']) ?></td>
						<td align="center"> <?= $jum ?> </td>
						<td align="right">Rp. <?= number_format($harga) ?></td>
						<td align="center">
						<a href="ker.php?ker=plus&id=<?=$key?>" class="tmbl merah">Tambah</a> 
						<a href="ker.php?ker=min&id=<?=$key?>" class="tmbl oranye">Kurang</a> 
						<a href="ker.php?ker=del&id=<?=$key?>" class="tmbl hijau">Hapus</a> 
						</td>
					</tr>
				<?php 
					} 
				} 
				?>
				</tbody>
			</table>

				<?php 
				if($total == 0){
				 // header('Location: index.php'); 
					echo "<h1 style='padding:30px;'><center>Kosong...!!!</center></h1>";
				} 
				?>

				<div id="bayar">
					Total Belanja : Rp. <?=number_format($total)?>
				</div>
<?php if($total != 0 ){ ?>
				<div class="lanjut">
					<a href="ker.php?ker=batal&id=<?=$key?>" class="tmbl merah">Batal Beli</a>
					<a href="beli.php" class="tmbl hijau">Lanjut Beli</a>
				</div>
<?php } ?>
		</div>

		<!-- ongkir -->
		<div class="ongkir">
			Cek ongkir berdasarkan jarak
			<form method="get">
				<select name="jarak">
					<option>0 km</option>
					<option>1 km</option>
					<option>2 km</option>
					<option>3 km</option>
					<option>3 km keatas</option>
				</select>
				<button type="submit" name="cek" value="cek">cek</button>
			</form>
			
			hasil:
		<?php 
			if(isset($_GET['cek'])){
				$jarak = $_GET['jarak'];
				switch($jarak){
					case "0 km":
						echo "gratis";
					break;
					case "1 km":
						echo "Rp 10.000";
					break;
					case "2 km":
						echo "Rp 20.000";
					break;
					case "3 km":
						echo "Rp 30.000";
					break;
					case "3 km keatas":
						echo "Rp 50.000";
					break;
				}
			}

		 ?>
		</div>
		<!-- ongkir -->
	</div>

</div>


<?php 
footerku();
 ?>