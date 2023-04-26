<?php
require 'functions.php';

// jika tidak id di URL
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari URL
$id = $_GET['id'];

//query smartphone berdasarkan id
$hp = query("SELECT * FROM smartphone WHERE id = $id");

// cek apakah tombol ubah sudah dipencet
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('Data berhasil diubah!');
          document.location.href = 'index.php';
          </script>";
  } else {
    echo "data gagal diubah!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Smartphone</title>
  <style>
    ul li {
      list-style: none;
      padding: 5px 0;
    }
  </style>
</head>

<body>

  <h3>Form Ubah Data Smartphone</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $hp['id']; ?>">
    <ul>
      <li>
        <label>
          Tipe :
          <input type="text" name="tipe" autofocus required value="<?= $hp['tipe']; ?>">
        </label>
      </li>
      <li>
        <label>
          Merk :
          <input type="text" name="merk" required value="<?= $hp['merk']; ?>">
        </label>
      </li>
      <li>
        <label>
          RAM :
          <input type="text" name="ram" required value="<?= $hp['ram']; ?>">
        </label>
      </li>
      <li>
        <label>
          Internal :
          <input type="text" name="internal" required value="<?= $hp['internal']; ?>">
        </label>
      </li>
      <li>
        <label>
          Harga :
          <input type="text" name="harga" required value="<?= $hp['harga']; ?>">
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required value="<?= $hp['gambar']; ?>">
        </label>
      </li>
      <button type="submit" name="ubah">Ubah Data!</button>
    </ul>

  </form>

</body>

</html>