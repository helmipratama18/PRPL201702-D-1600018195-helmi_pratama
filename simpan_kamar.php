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

$idkamar = $_POST ['idkamar'];
$nama = $_POST ['nama'];
$typekamar = $_POST ['typekamar'];


$sql = "INSERT INTO rooms(idkamar,typekamar,nama) VALUES ('$idkamar','$typekamar','$nama')";
if($konek->query($sql)){
	echo "Data Kamar Berhasil Di tambah! <br/>";
}
else{
	echo "Data Kamar Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href = 'tampil_kamar.php'>Tambah Data Kamar<a/>";
?>
</body>
</html>