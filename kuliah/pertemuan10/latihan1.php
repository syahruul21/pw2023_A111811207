<?php
// Koneksi ke DB & Pilih DB 
$conn = mysqli_connect('localhost', 'root', '', 'tokohp_db');

// Query isi tabel smartphone
$result  = mysqli_query($conn, "SELECT * FROM smartphone");

// Ubah data ke dalam array
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array associative
// $row = mysqli_fetch_array($result); // kedua-duanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

// tampung ke variabel mahasiswa
$smartphone = $rows;

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

  <h3>Daftar Smartphone</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Tipe</th>
      <th>Merk</th>
      <th>Ram</th>
      <th>Internal</th>
      <th>Harga</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($smartphone as $hp) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $hp['gambar']; ?>" width="50"></td>
        <td><?= $hp['tipe']; ?></td>
        <td><?= $hp['merk']; ?></td>
        <td><?= $hp['ram']; ?></td>
        <td><?= $hp['internal']; ?></td>
        <td><?= $hp['harga']; ?></td>
        <td>
          <a href="">Ubah</a> | <a href="">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>