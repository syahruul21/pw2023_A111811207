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
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM smartphone WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();
  $id = $data['id'];
  $tipe = htmlspecialchars($data['tipe']);
  $merk = htmlspecialchars($data['merk']);
  $ram = htmlspecialchars($data['ram']);
  $internal = htmlspecialchars($data['internal']);
  $harga = htmlspecialchars($data['harga']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE smartphone SET
              tipe = '$tipe',
              merk = '$merk',
              ram = '$ram',
              internal = '$internal',
              harga = '$harga',
              gambar = '$gambar'
            WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM smartphone
					WHERE
				tipe LIKE '%$keyword%' OR
				merk LIKE '%$keyword%' OR
				ram LIKE '%$keyword%' OR
				internal LIKE '%$keyword%' OR
				harga LIKE '%$keyword%'
				";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
