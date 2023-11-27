<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.118.2">
  <title>Perpustakaan</title>


  <link rel="stylesheet" href="Framework/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="Framework/bootstrap/dist/css/docs.css">
  <script src="Framework/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="Framework/YearPicker/dist/yearpicker.css">
  <script src="Framework/YearPicker/src/js/jquery-3.3.1.slim.min.js">
    <script src="Framework/YearPicker/src/js/jquery.min.js">
  </script>
  <link rel="stylesheet" href="jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

</head>

<body class="bg-body-secondary">

<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="check-circle-fill" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

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
  
  $sql = "INSERT INTO `buku` (`Judul_Buku`, `Deskripsi`, `ISBN`, `ISBN_13`, `Kategori`, `Pengarang`, `Penerbit`, `Tahun_Penerbitan`, `Jumlah`, `Harga`, `Stok`, `Status`, `Diterima_Pada`) VALUES ('". $_POST["Judul_Buku"]."', '". $_POST["Deskripsi"]."', '". $_POST["ISBN"]."', '". $_POST["ISBN_13"]."', '". $_POST["Kategori"]."', '". $_POST["Pengarang"]."', '". $_POST["Penerbit"]."', '". $_POST["Tahun_Penerbitan"]."', '". $_POST["Jumlah"]."', '". $_POST["Harga"]."', '". $_POST["Jumlah"]."', '". $_POST["Status"]."', '". $_POST["Diterima_Pada"]."');";
  
  if ($conn->query($sql) === TRUE) {
  header("location: /TambahBuku.php?pesan=Berhasil");
  } else {
  header("location:/TambahBuku.php?pesan=Gagal");
  }
  
  $conn->close();
?>

</body>

</html>