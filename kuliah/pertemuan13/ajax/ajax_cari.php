<?php

require '../functions.php';

$smartphone = cari($_GET['keyword']);
?>

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