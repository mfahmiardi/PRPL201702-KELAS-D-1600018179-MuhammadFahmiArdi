<!DOCTYPE html>
<html>
<head>
	<title>Data Hotel</title>
	<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<a href="dashboard.html">Kembali</a>
	
	<div class="reservasi" align="center">
		<div class="bg_reservasi">
			<div class="space">
				<div class="judul_reservasi">
					<h3>Reservasi</h3>
				</div>
				<form action="simpan_reservasi.php" method="post" class="isidata">
					<div class="nik">
						<h5>NIK</h5>
						<input type="text" name="nik" placeholder="NIK" maxlength="100" pattern="[0-9]+" required oninvalid="this.setCustomValidity('Harus Angka!')" oninput="setCustomValidity('')">
					</div>
					<div class="nama">
						<h5>Nama</h5>
						<input type="text" name="nama" placeholder="Nama" maxlength="100" pattern="[A-Za-z ]+" required oninvalid="this.setCustomValidity('Harus Huruf!')" oninput="setCustomValidity('')">
					</div>
					<div class="nama">
						<h5>Telepone</h5>
						<input type="text" name="nohp" placeholder="Telepone" maxlength="100" pattern="[0-9]+" required oninvalid="this.setCustomValidity('Harus Angka!')" oninput="setCustomValidity('')">
					</div>
					<div class="email">
						<h5>E-mail</h5>
						<input type="text" name="email" placeholder="ex : email@gmail.com" maxlength="100" pattern="([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z])+" required oninvalid="this.setCustomValidity('Harus Huruf!')" oninput="setCustomValidity('')">
					</div>
					<div class="tipe_ruangan">
						<h5>Tipe Ruangan</h5>
						<select id="kategori" name="tipe_ruangan" required="">
							<option value=" ">None</option>
							<option value="single">Single Room</option>
							<option value="double">Double Room</option>
							<option value="suit">Suit Room</option>
							<option value="deluxe">Deluxe Room</option>
						</select>
					</div>
					<div class="cekin">
						<h5>Check In</h5>
						<input class="date" name="cekin" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
					</div>
					<div class="cekot">
						<h5>Check Out</h5>
						<input class="date" name="cekot" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
					</div>
					<div class="jmlh_org">
						<h5>Jumlah Orang</h5>
						<select id="kategori1" name="jumlah_orang" required="">
							<option value="1">01</option>
							<option value="2">02</option>
							<option value="3">03</option>
							<option value="4">04</option>
							<option value="5">05</option>
						</select>
					</div>
					<hr>
					<div class="submit">
						<input type="submit" value="Pesan">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>