<?php 
include 'header.php';
?>
<!-- IMAGE -->
<div class="container-fluid" style="margin: 0;padding: 0;">
	<div class="image" style="margin-top: -21px">
		<img src="image/home/dairi.jpg" style="width: 100%;  height: 650px;">
	</div>
</div>
<br>
<br>

<!-- PRODUK TERBARU -->
<div class="container">


		<h4 class="text-center" style="font-family: arial; padding-top: 10px; padding-bottom: 10px; font-style: italic; line-height: 29px; border-top: 2px solid #333333; border-bottom: 2px solid #333333;">Dairi (Surat Batak: ᯑᯤᯒᯪ) adalah sebuah kabupaten yang berada di provinsi Sumatra Utara, Indonesia. Ibu kotanya terletak di kecamatan Sidikalang.[7][8] Kabupaten ini kemudian dimekarkan menjadi dua kabupaten, yaitu Kabupaten Dairi sebagai kabupaten induk dan Kabupaten Pakpak Bharat dengan dasar hukum Undang Undang Nomor 9 Tahun 2003 Tentang Pembentukan Kabupaten Nias Selatan, Kabupaten Pakpak Bharat dan Kabupaten Humbang Hasundutan yang dikeluarkan pada tanggal 25 Februari 2003.</h4>


	<h2 style=" width: 100%; border-bottom: 4px solid #333333; margin-top: 80px;"><b>OBJECT WISATA</b></h2>

	<div class="row">
		<?php 
		$result = mysqli_query($conn, "SELECT * FROM produk");
		while ($row = mysqli_fetch_assoc($result)) {
			?>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="image/produk/<?= $row['image']; ?>" >
					<div class="caption">
						<h3><?= $row['nama'];  ?></h3>
						<h6>Taman Wisata Iman Harga Tiket Masuk : Rp5.000 – Rp10.000. Jam Buka : 06.00 – 18.30.</h6>
						<div class="row">
							<div class="col-md-6">
								<a href="detail_produk.php?produk=<?= $row['kode_produk']; ?>" class="btn btn-warning btn-block">Detail</a> 
							</div>
							<?php if(isset($_SESSION['kd_cs'])){ ?>
								<div class="col-md-6">
									<a href="proses/add.php?produk=<?= $row['kode_produk']; ?>&kd_cs=<?= $kode_cs; ?>&hal=1" class="btn btn-success btn-block" role="button"><i class="glyphicon glyphicon-shopping-cart"></i> Tambah</a>
								</div>
								<?php 
							}
							
							?>

						</div>

					</div>
				</div>
			</div>
			<?php 
		}
		?>
	</div>

</div>
<br>
<br>
<br>
<br>
<?php 
include 'footer.php';
?>