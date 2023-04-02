<?php
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stok Barang - IndoApril</title>
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
    <h2>Stok Barang: </h2>
    <a href="tambah.php">tambah data stok barang!</a>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No.</th>
        <th>ID Barang</th>
        <th>Barcode</th>
        <th>Nama Barang</th>
        <th>Satuan</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
      </tr>
    <?php $i=1; ?>
    <?php while( $row = mysqli_fetch_assoc($barang) ) :?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $row["id_barang"] ?></td>
      <td><?php echo $row["barcode"] ?></td>
      <td><?php echo $row["nama_barang"] ?></td>
      <td><?php echo $row["satuan"] ?></td>
      <td><?php echo $row["harga"] ?></td>
      <td><?php echo $row["stok"] ?></td>
      <td>
        <a href="ubah.php?id_barang=<?= $row["id_barang"]; ?>">ubah</a> | <a href="hapus.php?id_barang=<?= $row["id_barang"]; ?>">hapus</a>
      </td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>
    </table>
  </div>
  
</body>
</html>