<?php
include "conect.php"; // menghubungkan ke file koneksi.php agar terhubung dengan database
?>

<!DOCTYPE html>
<html>
<head>
 <title>Lihat Data</title>
<!-- CSS untuk mempercantik tampilan-->
 <style type="text/css">
td{
 text-align: center;
}
</style>

</head>

<body>
<fieldset>
<legend><h1>Cari Data </h1></legend>
 <div style="margin-bottom:15px;" align="right">
  <form action="" method="post">
   <input type="text" name="input_cari" placeholder="Cari " class="css-input" style="width:250px;" />
   <input type="submit" name="cari" value="Cari" class="btn" style="padding:3px;" margin="6px;" width="50px;"  />
  </form>
 </div>

 <table width="100%" border="1px solid #000" style="border-collapse:collapse;">
  <tr style="background-color:#fc0;">
   <th>Nama</th>
   <th>idkamar</th>
   <th>Aksi</th>
  </tr>
   <?php 

   $input_cari = @$_POST['input_cari']; 
   $cari = @$_POST['cari'];

   // jika tombol cari di klik
   if($cari) {

    // jika kotak pencarian tidak sama dengan kosong
    if($input_cari != "") {
    // query mysql untuk mencari berdasarkan nama negara. .
    $sql = mysql_query("select * from rooms where nama like '%$input_cari%'") or die (mysql_error());   
    } else {
    $sql = mysql_query("select * from rooms") or die (mysql_error());
    }
    } //else //{
   // $sql = mysql_query("select * from rooms") or die (mysql_error());
    //}

   // mengecek data
   $cek = mysql_num_rows($sql);
   // jika data kurang dari 1
   if($cek < 1) {
    ?>
     <tr> <!--muncul peringata bahwa data tidak di temukan-->
      <td colspan="7" align="center style="padding:10px;""> Data Tidak Ditemukan</td>
     </tr>
    <?php
   } else {

   // mengulangi data agar tidak hanya 1 yang tampil
   while($data = mysql_fetch_array($sql)) {

   ?>
   <tr>
    <td><?php echo $data['nama'] ?></td>
    <td><?php echo $data['idkamar'] ?></td>
    <!--Hanya pemanis tampilan-->
    <td align="center">
    <button>Edit</button> 
    <button>Hapus</button>
    </td>
   </tr>
  <?php 

  } 
 }
?>
 </table>
</fieldset>
</body>
</html>