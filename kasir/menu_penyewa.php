<?php
include 'koneksi.php';
$db_futsal = new database;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Pesanan</title>
    <link rel="stylesheet" type="text/css" href="../kasir/style.css">
</head>
<body>
<div class="all">
    <div class="head">
      <header>
        <h1 class="judul">Kasir Futsal</h1>
      </header>
    </div>
 
  <div class="nav">
    <ul>
      <li><a href="home.php">HOME</a></li>
      <li><a href="menu_lapangan.php">Nama Lapangan</a></li>
      <li><a href="menu_penyewa.php">Menu Penyewa</a></li>
      <li><a href="kasir.php">Data Pesanan</a></li>
      <li><a href="../index.php">LOGOUT</a></li>
    </ul>
  </div>
  <div class="box">
  <center>
  <table border="1" cellspacing="0" cellpading="8" border="1" width="100%" style="text-align: center; font-size: 15px; margin-bottom: 20px;" class="tbl">
      <tr>
        <th class="th1">No</th>
        <th>Nama Penyewa</th>
        <th>Alamat</th>
        <th class="th2">No HP</th>
      </tr>
      <?php
      $no=2;
      foreach($db_futsal->tampilpenyewa() as $x){
      ?>
      <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $x ['nama_penyewa'];?></td>
        <td><?php echo $x ['alamat_penyewa'];?></td>
        <td><?php echo $x ['no_telp'];?></td>
      </tr>
      <?php
      }?>
    </table>
  </center>
  </div>
<div class="box" style="margin:50px;">
<h2 style="text-align: center; margin-bottom:30px; ">Selamat Datang di Halaman Kasir</h2>
</div>
 
  <div class="badan">
  </div>
</div>
</body>
</html>