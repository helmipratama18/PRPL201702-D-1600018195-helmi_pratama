<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "hotel1";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql = "SELECT * FROM inap";
$data = $konek->query($sql);

echo "<a href='index.html'>Kembali ke Menu</a>";
echo "<h1>Daftar Inap</h1>";
echo "<table border='1'>";
echo "<tr><td>No.</td><td>Nama</td><td>ID Kamar</td><td>Jumlah Hari</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['idkamar']."</td>";
    echo "<td>".$row['jmlhari']."</td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>

 

 