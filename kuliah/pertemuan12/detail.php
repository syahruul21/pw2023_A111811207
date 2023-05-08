<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query smartphone berdasarkan id
$hp = query("SELECT * FROM smartphone WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Smartphone</title>
</head>

<body>
  <h3>Detail Smartphone</h3>
  <img src="img/<?= $hp['gambar']; ?>">
  <ul>
    <li>Tipe : <?= $hp['tipe']; ?></li>
    <li>Merk : <?= $hp['merk']; ?></li>
    <li>Ram : <?= $hp['ram']; ?></li>
    <li>Internal : <?= $hp['internal']; ?></li>
    <li>Harga : <?= $hp['harga']; ?></li>
    <li><a href="ubah.php?id=<?= $hp['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $hp['id']; ?>" onclick="return confirm('apakah yakin hapus data?');">Hapus</a></li>
    <li><a href="index.php">kembali ke daftar smartphone</a></li>

  </ul>
</body>

</html>