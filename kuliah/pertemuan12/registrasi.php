<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('akun berhasil terdaftar!');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo 'akun gagal terdaftar!';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar akun</title>
  <style>
    ul {
      list-style: none;
    }
  </style>
</head>

<body>
  <h3>Daftar akun</h3>

  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Username :
          <input type="text" name="username" autofocus autocomplete="off" required>
        </label>
      </li>
      <li>
        <label>
          Password :
          <input type="password" name="password1" required>
        </label>
      </li>
      <li>
        <label>
          Konfirmasi Password :
          <input type="password" name="password2" required>
        </label>
      </li>
      <button type="submit" name="registrasi">Daftar akun</button>
    </ul>
  </form>
</body>

</html>