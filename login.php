<?php
include 'koneksi.php';

$pesan = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_assoc($query);

if ($data) {
    // Login berhasil
    header("Location: beranda1.php");
    exit;
} else {
    echo "<script>alert('Username atau password salah!'); window.location.href='login.php';</script>";
}
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login - BILED Kere</title>
  <style>
    body {
      background-color: #001f3f;
      color: #fff;
      font-family: Arial, sans-serif;
      padding: 40px;
    }

    form {
      background-color: rgba(0,0,0,0.6);
      padding: 20px;
      max-width: 400px;
      border-radius: 8px;
    }

    input[type="username"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 12px;
      border: none;
      border-radius: 4px;
    }

    input[type="submit"] {
      background-color: #00ffcc;
      color: #000;
      padding: 10px;
      width: 100%;
      font-weight: bold;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #00d9b3;
    }

    .message {
      margin-top: 15px;
      color: yellow;
    }
  </style>
</head>
<body>

  <h2>Login ke BILED Kere</h2>

  <form action="login.php" method="POST">
    <label>Username:</label>
    <input type="username" name="username" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <input type="submit" value="Login">
  </form>

  <?php if ($pesan): ?>
    <div class="message"><?= $pesan ?></div>
  <?php endif; ?>

</body>
</html>