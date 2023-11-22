<?php
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $datadb = "perpustakaan";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $datadb);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO `buku` (`Judul_Buku`, `Deskripsi`, `ISBN`, `ISBN_13`, `Kategori`, `Pengarang`, `Penerbit`, `Tahun_Penerbitan`, `Jumlah`, `Harga`, `Stok`, `Status`, `Diterima_Pada`) VALUES ('". $_POST["Judul Buku"]."', '". $_POST["Deskripsi"]."', '". $_POST["ISBN"]."', '". $_POST["ISBN 13"]."', '". $_POST["Kategori"]."', '". $_POST["Pengarang"]."', '". $_POST["Penerbit"]."', '". $_POST["Tahun Penerbitan"]."', '". $_POST["Harga"]."', '". $_POST["Jumlah"]."', '". $_POST["Status"]."', '". $_POST["Diterima Pada"]."');";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>