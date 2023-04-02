<?php
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Penjualan - IndoApril</title>

  <!-- link css -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="navbar">
    <h1 class="indoapril">
      <a href="homepage.php"><img src="image/indoapril.png" alt="" width="200px"></a>
    </h1>
    <ul>
      <li>
        <a href="supplier.php">Supplier</a>
      </li>
      <li>
        <a href="pasokan.php">Pasokan</a>
      </li>
      <li>
        <a href="penjualan.php">Penjualan</a>
      </li>
      <li>
        <a href="karyawan.php">Karyawan</a>
      </li>
      <li>
        <a href="stok_barang.php">Stok barang</a>
      </li>
    </ul>
  </nav>


  <div class="parent">

    <h2>Penjualan (Keluar): </h2>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>ID Barang</th>
        <th>Barcode</th>
        <th>Nama Barang</th>
        <th>Harga Jual</th>
        <th>Tanggal Jual</th>
        <th>ID Karyawan</th>
      </tr>

    <?php $i=1; ?>
    <?php while( $row = mysqli_fetch_assoc($penjualan) ) :?>
    <tr>
      <td><?php echo $row["id_barang"] ?></td>
      <td><?php echo $row["barcode"] ?></td>
      <td><?php echo $row["nama_barang"] ?></td>
      <td><?php echo $row["harga_jual"] ?></td>
      <td><?php echo $row["tanggal_jual"] ?></td>
      <td><?php echo $row["id_karyawan"] ?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>
    </table>
  </div>
  
</body>
</html>