<?php
  require "function.php";

// koneksi ke database
$connect = mysqli_connect("localhost","root","","indoapril");

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal untuk ditambahkan!');
            </script>
        ";
    }
}
?>

<style>
  li {
    list-style: none;
  }

  table {
    margin-left: 50px;
  }

  button {
    height: 30px;
    width: 100%;
  }
</style>

<!DOCTYPE html>
<html>
<head>
  <title>Tambah Data Stok Barang - IndoApril</title>
  <!-- link style (css) -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Tambah Data Stok Barang</h1><br><br>
  <table border="0" cellpadding="10" cellspacing="0">
    <form action="" method="post">
      <tr>
        <td>
          <label for="id_barang">ID Barang: </label>
        </td>
        <td>
          <input type="text" name="id_barang" id="id_barang" required>
        </td>
        <td>
          <label for="id_barang">*maksimal 4 angka</label>
        </td>
      </tr>
      <tr>
        <td>
          <label for="barcode">Barcode: </label>
        </td>
        <td>
          <input type="text" name="barcode" id="barcode" required>
        </td>
        <td>
          <label for="barcode">*maksimal 10 angka</label>
        </td>
      </tr>
      <tr>
        <td>
          <label for="nama_barang">Nama Barang: </label>
        </td>
        <td>
          <input type="text" name="nama_barang" id="nama_barang" required>
        </td>
        <td>
          <label for="nama_barang">*full kapital</label>
        </td>
      </tr>
      <tr>
        <td>
          <label for="satuan">Satuan: </label>
        </td>
        <td>
          <input type="text" name="satuan" id="satuan" required>
        </td>
        <td>
          <label for="satuan">*ex: PCS; DUS; KALENG</label>
        </td>
      </tr>
      <tr>
        <td>
          <label for="harga">Harga: </label>
        </td>
        <td>
          <input type="text" name="harga" id="harga" value="Rp" required>
        </td>
        <td>
          <label for="harga">*langsung inputkan harga: Rp2.000</label>
        </td>
      </tr>
      <tr>
        <td>
          <label for="stok">Stok: </label>
        </td>
        <td>
          <input type="text" name="stok" id="stok" required>
        </td>
        <td></td>
      </tr>
      <tr>
        <td colspan="3">
          <button type="submit" name="submit" id="submit">submit!</button>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <a href="index.php">kembali ke halaman awal!</a>
        </td>
      </tr>
    </form>
  </table>
</body>
</html>