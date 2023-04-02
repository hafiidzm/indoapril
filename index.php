<?php
if (isset($_POST["submit"])) {
  // cek username & password 
      if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
          // jika benar, redirect ke halaman admin
          header("Location: homepage.php");
      } else {
          // jika salah, tampilkan pesan kesalahan
          $error = true;
      }
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - IndoApril</title>
  <style>
    * {
      list-style: none;
    }
  </style>
</head>
<body>
  <img src="image/indoapril.png" alt="" width="200px">
  <h1>WELCOME TO INDOAPRIL !</h1>
  <h3>Silakan login terlebih dahulu</h3><br><br>

  <?php if(ISSET($error)) : ?>
      <p style="color: red; font-style: italic;">Username / Password salah!</p>
  <?php endif ?>
  <form action="" method="post">
    <ul>
      <li>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
      </li>
      <li>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
      </li>
      <li>
        <button type="submit" name="submit" id="submit">Masuk!</button>
      </li>
    </ul>
  </form>
</body>
</html>