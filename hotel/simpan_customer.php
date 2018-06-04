<html>
<body>
<?php 
//membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$idb_name = "hotel1";

$konek = new mysqli($host, $username, $password, $idb_name);

//cek koneksi
if($konek->connect_error){
	die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$nik = $_POST ['nik'];
$nama = $_POST ['nama'];
$phone= $_POST ['phone'];
$email = $_POST ['email'];
$cekin = $_POST ['cekin'];
$cekout = $_POST ['cekout'];
$kamar= $_POST ['kamar'];


$sql = "INSERT INTO reservasi(nik,nama,phone,email,cekin,cekout,kamar) VALUES ('$nik','$nama','$phone','$email','$cekin','$cekout','$kamar')";
if($konek->query($sql)){
	echo "Data Customer Berhasil Di tambah! <br/>";
}
else{
	echo "Data Customer Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href = 'tampil_customer.php'>Tambah Data Customer<a/>";
?>

</body>
</html>