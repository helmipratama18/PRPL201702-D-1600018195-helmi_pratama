<?php
//include kan koneksi ke database disini
include "koneksi.php";

$nama= $_POST['nama']; //get the nama value from form
$q = "SELECT * from reservasi where nama like '%$nama%' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
echo "<center>";
echo "<h2> Hasil Searching </h2>";
echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='orange'>
<td>nik</td>
<td>Nama</td>
<td>Phone</td>
<td>email</td>
<td>cekin</td>
<td>cekout</td>
<td>kamar</td>
</tr>";
while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
 echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['nik']."</td>";
    echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['phone']."</td>";
	echo "<td>".$row['email']."</td>";
    echo "<td>".$row['cekin']."</td>";
    echo "<td>".$row['cekout']."</td>";
	echo "<td>".$row['kamar']."</td>";
    echo "</tr>";
}
echo "</table>";
?>