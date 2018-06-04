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

$idcustomer = $_POST ['nama'];
$idkamar = $_POST ['idkamar'];
$jmlhari = $_POST ['jmlhari'];

$sql = "INSERT INTO inap (nama, idkamar, jmlhari) VALUES ('$idcustomer','$idkamar','$jmlhari')";
if($konek->query($sql)){
	echo "Data Inap Berhasil Di tambah! <br/>";
}
else{
	echo "Data Inap Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href = 'tampil_inap.php'>Tambah Data Inap<a/>";
?>