<?php
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'tokohp_db');
}

function query($query)
{
  $conn = koneksi();
  $result  = mysqli_query($conn, $query);
  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $tipe = htmlspecialchars($data['tipe']);
  $merk = htmlspecialchars($data['merk']);
  $ram = htmlspecialchars($data['ram']);
  $internal = htmlspecialchars($data['internal']);
  $harga = htmlspecialchars($data['harga']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
              smartphone
            VALUES
            (null, '$tipe', '$merk', '$ram', '$internal', '$harga', '$gambar')
          ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
