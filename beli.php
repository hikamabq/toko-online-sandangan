<?php 
require_once 'modul/conn_inc.php';
require_once 'modul/view.php';
headerku();

$taging = "Pilihan Anda"

// print_r($conn);

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
						<!-- <td>Opsi</td> -->
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
					</tr>
				<?php
						if(isset($_POST['belanja'])){
						beli($conn, $data['nama'], $data['harga'], $jum );	
						}
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

		<div class="label">
			<center>Lanjut belanja dengan isi data dibawah..</center>
		</div>


<?php 
echo '
		<div class="addpost">
			<form method="post" action="">
				<label>Nama Lengkap</label>
					<input type="text" name="pembeli" placeholder="Nama depan">
					<input type="text" name="namabelakang" placeholder="nama belakang">
				<label>Alamat</label>
					<textarea name="alamat" placeholder="Tulis alamat anda"></textarea>
				<label>No Hp / Telp</label>
					<input type="number" name="telepon" placeholder="No Hp anda">
				<label>Opsi</label>
					<button type="reset" class="tmbl merah">Batal</button><button type="submit" name="belanja" class="tmbl hijau">Belanja</button>
			</form>
		</div>

		</div>
	</div>';
 ?>

</div>

<?php 
footerku();
 ?>
