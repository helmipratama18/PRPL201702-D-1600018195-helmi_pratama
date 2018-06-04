<html>
<head>
<link rel="stylesheet" href="styleku.css" media="screen"/>
</head>
<body>
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
<h2>Rooms</h2>
	<form method="post" action="simpan_kamar.php" onSubmit="validateForm()">
		<table>
		<tr>
				<td>ID Kamar</td>
				<td> : </td>
				<td><input type="text" name="idkamar"></td>
			</tr>
			<tr>
				<td>nama</td>
				<td> :  </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
			<p>
                Type Kamar :
      <select name="typekamar" style="color: black">
      <option value="Standar" style="color: black">Standar</option>
      <option value="Premium" style="color: black">Premium</option>
      <option value="Deluxe" style="color: black">Deluxe</option>
         </select>
		 </p>
			</tr>
			
  </table>
			<tr>
          <td>
		  <input name="" type="submit" value="Proses" />&nbsp;
           <input name="" type="reset" value="Hapus" /></td>
</tr>
</form>
</body>
</html>