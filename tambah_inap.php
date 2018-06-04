<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styleku.css" media="screen">
</head>
<header class="art-header clearfix">
<nav class="art-nav clearfix">
 <div class="art-nav-inner">
    <ul class="art-hmenu">
			<li><a href="index.html">Home</a></li>
			<li><a href="rooms.php">Rooms</a></li>
			<li><a href="reserve.php">Reservation</a></li>
			<li><a href="input_sewa.php">Transaksi</a></li>
			<li><a href="tambah_inap.php">Inap</a></li>
			</ul> 
        </div>
	
</nav>

</header>
<body>
	<h1>Inap</h1>
	<form action="simpan_inap.php" method="post">
		<table>
		<tr>
				<td>Nama</td>
				<td> : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>ID Kamar</td>
				<td> : </td>
				<td><input type="text" name="idkamar"></td>
			</tr>
			<tr>
				<td>Jumlah Hari</td>
				<td> : </td>
				<td><input type="text" name="jmlhari"></td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>