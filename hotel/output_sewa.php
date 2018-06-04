<html>

<?php
$nik=$_POST['nik'];
$kode=$_POST['kode'];
$jumlah=$_POST['jumlah'];
$lama=$_POST['lama'];
$jenis=$_POST['jenis'];
$pajak=$_POST['pajak'];


if ($kode=='Melati')
{
	
	if ($jenis=='Standar'){
		$harga=350000;
		$pajak=10000;
		}
	else if ($jenis=='Premium'){
		$harga=500000;
		$pajak=10000;
		}
	else if ($jenis=='Deluxe'){
		$harga=700000;
		$pajak=10000;
		}
}
	
else if ($kode=='Kenanga')
{
	if ($jenis=='Standar'){
		$harga=400000;
		$pajak=15000;
		}
	else if ($jenis=='Premium'){
		$harga=600000;
		$pajak=15000;
		}
	else if ($jenis=='Deluxe'){
		$harga=900000;
		$pajak=15000;
		}	
	}
	
else if ($kode=='Raflesia')
{
	if ($jenis=='Standar'){
		$harga=500000;
		$pajak=18000;
		}
	else if ($jenis=='Premium'){
		$harga=750000;
		$pajak=15000;
		}
	else if ($jenis=='Deluxe'){
		$harga=1200000;
		$pajak=15000;
		}	
	}
	
$total=($harga*$jumlah+$pajak)*$lama;

?>

<table width="30%" border="2" align="center">
  <tr>
    <td bgcolor="#66CCFF" height="61" colspan="2" align="center"><strong>STRUKTUR PEMBAYARAN KAMAR</strong></td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td>NIK</td>
    <td>: <?php echo $nik; ?></td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td>Nama Kamar</td>
    <td>: <?php echo $kode; ?></td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td>Jenis Kamar</td>
    <td>: <?php echo $jenis; ?></td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td>Harga Sewa</td>
    <td>: <?php echo "Rp." .number_format ($harga); ?></td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td>Jumlah Sewa</td>
    <td>: <?php echo $jumlah; ?> kamar</td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td>Lama Sewa</td>
    <td>: <?php echo $lama; ?> hari</td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td>Pajak Kamar</td>
    <td>: <?php echo "Rp." .number_format ($pajak); ?></td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td>Total Pembayaran</td>
    <td>: <?php echo "Rp." .number_format ($total); ?></td>
  </tr>
  <tr>
    <td bgcolor="#66CCFF" align="center" height="39" colspan="2"><a href="input_sewa.php"><input name="" type="button" value="kembali"> 
    </a></td>
  </tr>
</table>
</html>