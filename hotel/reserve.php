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
<html>
<body>
<div align="center">

  <!-- <center> -->
  <table width="383" height="201" border="1">
  <h2>Reservation</h2>
  <form method="post" action="simpan_customer.php" onSubmit="validateForm()">
  <p>
        NIK : <br />
        <input name="nik" type="text" value="" maxlength="100" id="formNIK" class="form-control" style="max-width:600px;" placeholder="NIK" pattern="[0-9]+" required oninvalid="this.setCustomValidity('Just for number')" oninput="setCustomValidity('')"/>
        <span id="formNIKError" style="color:#CC0000;display:none;">NIK is empty.</span>
    </p>
  <p>
        Nama : <br />
        <input name="nama" type="text" value="" maxlength="100" id="formNama" class="form-control" style="max-width:600px;" placeholder="Nama" pattern="[A-Za-z ]+" required oninvalid="this.setCustomValidity('Just for word')" oninput="setCustomValidity('')" />
        <span id="formNamaError" style="color:#CC0000;display:none;">Name is empty.</span>
    </p>
  <p>
        Phone : <br />
        <input name="phone" type="text" value="" maxlength="100" id="formPhone" class="form-control" style="max-width:600px;" placeholder="Phone" pattern="[0-9]+" required oninvalid="this.setCustomValidity('Just for number')" oninput="setCustomValidity('')" />
        <span id="formPhoneError" style="color:#CC0000;display:none;">Phone is empty.</span>
    </p>
  <p>
        Email : <br />
        <input name="email" type="text" value="" maxlength="150" id="formEmail" class="form-control" style="max-width:600px;" placeholder="Email" pattern="([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z])+" required oninvalid="this.setCustomValidity('Pleace include @')" oninput="setCustomValidity('')" />
        <span id="formEmailError" style="color:#CC0000; display:none;">Email is empty or invalid.</span>
    </p>
  <p>
        Cek In : <br />
        <input name="cekin" type="date" value="" maxlength="100" id="formCekin" class="form-control" style="max-width:600px;" required />
        <span id="formCekinError" style="color:#CC0000;display:none;">Cek in is empty.</span>
    </p>
  <p>
        Cek Out : <br />
		<input name="cekout" type="date" value="" maxlength="100" id="formCekout" class="form-control" style="max-width:600px;" required />		
        <span id="formCekoutError" style="color:#CC0000;display:none;">Cek out is empty.</span>
    </p>

  <P > 
      Chooses Room : <br />
      <select name="kamar" style="color: black">
      <option value="Standar" style="color: black">Standar </option>
      <option value="Premium" style="color: black">Premium </option>
      <option value="Deluxe" style="color: black">Deluxe </option>
    </select>
  </P>
    <input name="" type="submit" value="Submit" />&nbsp;
	<input name="" type="reset" value="Reset" />
  </body>
  </html>