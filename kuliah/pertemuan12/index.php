<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$smartphone = query("SELECT * FROM smartphone");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $smartphone = cari($_POST['keyword']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Smartphone</title>
</head>

<body>
  <a href="logout.php">Logout</a>
  <h3>Daftar Smartphone</h3>

  <a href="tambah.php">Tambah data</a>
  <br><br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="30" placeholder="masukkan keyord pencarian.." autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari</button>
  </form>
  <br>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Tipe</th>
      <th>Aksi</th>
    </tr>

    <?php if (empty($smartphone)) : ?>
      <tr>
        <td colspan="4">
          <p>Data smartphone tidak ditemukan!</p>
        </td>
      </tr>
    <?php endif; ?>

    <?php $i = 1;
    foreach ($smartphone as $hp) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $hp['gambar']; ?>" width="50"></td>
        <td><?= $hp['tipe']; ?></td>
        <td>
          <a href="detail.php?id=<?= $hp['id']; ?>">Lihat detail</a>

        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>