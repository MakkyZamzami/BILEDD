<?php
include 'koneksi.php';

$pesan = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            

            $check = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE username='$username' OR email='$email'");
            if (mysqli_num_rows($check) > 0) {
                echo "<script> alert('Username atau Email sudah digunakan!'); window.history.back(); </script>";
            } else {
                $simpan = mysqli_query($koneksi, "INSERT INTO pendaftaran (username, password, email) VALUES ('$username', '$password', '$email')");
                if ($simpan) {
                    echo "<script> alert('Pendaftaran berhasil! Silakan login.'); window.location.href = 'login.php'; </script>";
                } else {
                    echo "<p style='color:red;'>Gagal menyimpan data.</p>";
                }
            }
        }
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Pendaftaran - BILED Kere</title>
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

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 12px;
      border: none;
      border-radius: 4px;
    }

    input[type="submit"],
    .btn-back {
      background-color: #00ffcc;
      color: #000;
      padding: 10px;
      width: 100%;
      font-weight: bold;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-bottom: 10px;
    }

    input[type="submit"]:hover,
    .btn-back:hover {
      background-color: #00d9b3;
    }

    .message {
      margin-top: 15px;
      color: yellow;
    }
  </style>
</head>
<body>

  <h2>Pendaftaran Akun BILED Kere</h2>

  <form action="" method="POST">
    <label>Nama Lengkap:</label>
    <input type="text" name="username" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <input type="submit" value="DAFTAR">
  </form>

  <