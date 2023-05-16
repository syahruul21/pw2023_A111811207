<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// cek apakah tombol sudah dipencet
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('Data berhasil ditambahkan!');
          document.location.href = 'index.php';
          </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Smartphone</title>
  <style>
    ul li {
      list-style: none;
      padding: 5px 0;
    }
  </style>
</head>

<body>

  <h3>Form Tambah Data Smartphone</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <ul>
      <li>
        <label>
          Tipe :
          <input type="text" name="tipe" autofocus required>
        </label>
      </li>
      <li>
        <label>
          Merk :
          <input type="text" name="merk" required>
        </label>
      </li>
      <li>
        <label>
          RAM :
          <input type="text" name="ram" required>
        </label>
      </li>
      <li>
        <label>
          Internal :
          <input type="text" name="internal" required>
        </label>
      </li>
      <li>
        <label>
          Harga :
          <input type="text" name="harga" required>
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        </label>
        <img src="img/no_photo.png" width="120" style="display: block;" class="img-preview">
      </li>
      <button type="submit" name="tambah">Tambah Data!</button>
    </ul>

  </form>
  <script src="js/script.js"></script>
</body>

</html>