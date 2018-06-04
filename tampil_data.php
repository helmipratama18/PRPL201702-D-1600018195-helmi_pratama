<html>
<head>
  <style>
    body{
     font-family: 'Courier New';
     background-color: #16a085;
    }
    table{
      border-radius: 5px;
      border: #ccc 1px solid;
      background-color: #eaebec;

    }
    table td {
    padding: 10px 10px;
    border-top: 1px solid #ffffff;
    border-bottom: 1px solid #e0e0e0;
    border-left: 1px solid #e0e0e0;
    background: #fafafa;
    background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
    background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}
    a{

      text-decoration: none;
    }
  </style>
</head>
<body>
<center>

<h1>Daftar Reservasi </h1>

<h4>Pencarian (Tgl Awal - Tgl Akhir)</h4>
<form action="" method="POST">
<input type="date" name="cekin">
<input type="date" name="cekout">
<input type="submit" id="submit" name="submit2" value="Cari">
<input type="submit" id="submit" name="submit1" value="Reset">
</form>
<table>
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

$sql = "SELECT * FROM reservasi";

if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $sql="SELECT * FROM  reservasi where nik like '%$qcari%' or cekin like '%$qcari' or cekout like '%$qcari' ";
}

if(isset($_POST['submit2'])){
  $qcari=$_POST['cekin'];
  $qcari2=$_POST['cekout'];
  $sql="SELECT * FROM  reservasi where cekin between '$qcari' and '$qcari2'";
}

if(isset($_POST['submit1'])){
  
  $sql="SELECT * FROM  reservasi ";
}
$data = $konek->query($sql);

//echo "<a href='index.php'>Kembali ke Menu</a>";
//echo "<h1>Daftar Pesanan</h1>";
//echo "<table>";
//echo "<table border-radius='1'>";
//echo "<table allign='center'>";
echo "<a href='index.html'>Kembali ke Menu</a>";
echo "<b><tr><tr><td>No.</td><td>nik</td><td>nama</td><td>phone</td><td>email</td><td>cekin</td><td>cekout</td><td>kamar</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td><p>".$no++."</td>";
    echo "<td>".$row['nik']."</td>";
    echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['phone']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['cekin']."</td>";
	echo "<td>".$row['cekout']."</td>";
	echo "<td>".$row['kamar']."</td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
//echo "</table>";

$konek->close();
?>
</table></center>

</body>
</html>