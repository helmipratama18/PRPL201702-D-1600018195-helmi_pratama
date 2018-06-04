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
$data = $konek->query($sql);


echo "<a href='index.html'>Kembali ke Menu</a>";
echo "<h1>Daftar Customer</h1>";
echo "<table border='1'>";
echo "<tr><td>No.</td><td>nik</td><td>nama</td><td>phone</td><td>email</td><td>cekin</td><td>cekout</td><td>kamar</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
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
}else{
  echo "Data Kosong!";
}
echo "</table>";
?>
 


        <div id="piechart"></div>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Januari', 3],
          ['Februari', 2],
          ['Maret', 1],
          ['April', 1],
          ['Mei', 0]
        ]);

          // Optional; add a title and set the width and height of the chart
          var options = {'title':'Monthly Visitor Data', 'width':550, 'height':400};

          // Display the chart inside the <div> element with id="piechart"
          var chart = new google.visualization.PieChart(document.getElementById('piechart'));
          chart.draw(data, options);
        }
        </script>
