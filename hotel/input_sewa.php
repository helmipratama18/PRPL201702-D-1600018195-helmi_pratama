<html>
<head>
<link rel="stylesheet" href="ss.css" media="screen"/>
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
<form name="form1" action="output_sewa.php" method="post">
  <table width="35%" border="2" align="center">
    <tr>
      <td bgcolor="#66CCFF" align="center" height="46" colspan="2"><strong>PENYEWAAN KAMAR</strong></td>
    </tr>
    <tr>
      <td bgcolor="#66CCFF" width="25%">NIK</td>
      <td bgcolor="#CCCCCC" width="75%">: <label for="nik"></label>
      <input type="text" name="nik" id="nik" required></td>
    </tr>
    <tr>
      <td bgcolor="#66CCFF">Kode Kamar</td>
      <td bgcolor="#CCCCCC">:
        <label for="kode"></label>
        <select name="kode" id="kode" required>
          <option selected>pilih</option>
          <option value="Melati">KM01</option>
          <option value="Kenanga">KK02</option>
          <option value="Raflesia">KR03</option>
      </select></td>
    </tr>
    <tr>
      <td bgcolor="#66CCFF">Jenis Kamar</td>
      <td bgcolor="#CCCCCC">:<label>
            <input type="radio" name="jenis" value="Standar" id="jenis_0" required/>
            Standar</label>
          <label>
            <input type="radio" name="jenis" value="Premium" id="jenis_1" required/>
            Premium</label>
          <label>
            <input type="radio" name="jenis" value="Deluxe" id="jenis_2" required/>
            Deluxe</label>
        </p>
    </tr>
    <tr>
      <td bgcolor="#66CCFF">Jumlah Sewa</td>
      <td bgcolor="#CCCCCC">:
        <label for="jumlah"></label>
      <input type="text" name="jumlah" id="jumlah" required></td>
    </tr>
	<tr>
      <td bgcolor="#66CCFF">Jumlah Orang</td>
      <td bgcolor="#CCCCCC">:
        <label for="pajak"></label>
      <input type="text" name="pajak" id="pajak" required></td>
    </tr>
    <tr>
      <td bgcolor="#66CCFF">Lama Sewa</td>
      <td bgcolor="#CCCCCC">:
        <label for="lama"></label>
      <input type="text" name="lama" id="lama" required></td>
    </tr>
    <tr>
      <td bgcolor="#66CCFF" align="center" height="42" colspan="2"><input type="submit" name="proses" id="proses" value="proses"></td>
    </tr>
  </table>
</form>
</body>
</html>