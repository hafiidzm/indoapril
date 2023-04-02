<?php
// koneksi database
$connect = mysqli_connect("localhost","root","","indoapril");


// ambil data dari indoapril -> barang
$barang = mysqli_query($connect, "SELECT * FROM barang");

// ambil data dari indoapril -> karyawan
$karyawan = mysqli_query($connect, "SELECT * FROM karyawan");

// ambil data dari indoapril -> pasokan
$pasokan = mysqli_query($connect, "SELECT * FROM pasokan");

// ambil data dari indoapril -> penjualan
$penjualan = mysqli_query($connect, "SELECT * FROM penjualan");

// ambil data dari indoapril -> supplier
$supplier = mysqli_query($connect, "SELECT * FROM supplier");


// function tambah data
function tambah($data) {
  global $connect;

  $id_barang = htmlspecialchars($data["id_barang"]);
  $barcode = htmlspecialchars($data["barcode"]);
  $nama_barang = htmlspecialchars($data["nama_barang"]);
  $satuan = htmlspecialchars($data["satuan"]);
  $harga = htmlspecialchars($data["harga"]);
  $stok = htmlspecialchars($data["stok"]);

  $query = "INSERT INTO barang VALUE
          ('$id_barang','$barcode','$nama_barang','$satuan','$harga','$stok')";

  mysqli_query($connect, $query);

  return mysqli_affected_rows($connect);
}

// function hapus data
function hapus($id_barang) {
  global $connect;
  mysqli_query($connect, "DELETE FROM barang WHERE id_barang = $id_barang");

  return mysqli_affected_rows($connect);
}

// function update data
function update($query) {
  global $connect;
  $result = mysqli_query($connect, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// function ubah data
function ubah($data) {
  global $connect;

  $id_barang = htmlspecialchars($data["id_barang"]);
  $barcode = htmlspecialchars($data["barcode"]);
  $nama_barang = htmlspecialchars($data["nama_barang"]);
  $satuan = htmlspecialchars($data["satuan"]);
  $harga = htmlspecialchars($data["harga"]);
  $stok = htmlspecialchars($data["stok"]);

  $query = "UPDATE barang SET
              id_barang='$id_barang', barcode='$barcode', nama_barang='$nama_barang', satuan='$satuan', harga='$harga', stok='$stok'
              WHERE id_barang='$id_barang';
              ";

  mysqli_query($connect, $query);

  return mysqli_affected_rows($connect); 
}
?>