<?php 
//membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$idb_name = "hotelmedan";

$konek = new mysqli($host, $username, $password, $idb_name);

//cek koneksi
if($konek->connect_error){
	die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$nik = $_POST ['nik'];
$nama = $_POST ['nama'];
$nohp = $_POST ['nohp'];
$email = $_POST ['email'];
$tipe_ruangan = $_POST ['tipe_ruangan'];
$cekin = $_POST ['cekin'];
$cekot = $_POST ['cekot'];
$jumlah_orang = $_POST ['jumlah_orang'];

$sql = "INSERT INTO reservasi(nik, nama, nohp, email, tipe_ruangan, cekin, cekot, jumlah_orang) VALUES ('$nik','$nama','$nohp','$email','$tipe_ruangan','$cekin','$cekot','$jumlah_orang')";
if($konek->query($sql)){
	echo "Data Customer Berhasil Di tambah! <br/>";
}
else{
	echo "Data Customer Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href = '../index.html'>Kembali Ke Menu<a/>";
?>