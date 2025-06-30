<!-- index.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beranda - BILED Kere</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #001f3f; /* biru dongker */
      color: #fff;
    }

    .navbar {
      background-color: rgba(0, 0, 0, 0.7);
      padding: 15px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .brand {
      font-size: 20px;
      font-weight: bold;
      color: #00ffcc;
    }

    .nav-buttons {
      display: flex;
      gap: 10px;
    }

    .nav-buttons a {
      text-decoration: none;
      background-color: #00ffcc;
      color: #000;
      padding: 8px 14px;
      border-radius: 4px;
      font-weight: bold;
      transition: background-color 0.3s;
    }

    .nav-buttons a:hover {
      background-color: #00d9b3;
    }

    .container {
      padding: 60px 30px 40px 30px;
      max-width: 800px;
    }

    h1 {
      font-size: 36px;
      color: #00ffcc;
      margin-bottom: 20px;
    }

    p {
      font-size: 18px;
      line-height: 1.6;
      color: #f0f0f0;
      margin-bottom: 15px;
    }

    .footer {
      margin-top: 60px;
      text-align: left;
      font-size: 14px;
      color: #ccc;
      padding: 20px 30px;
      background-color: rgba(0, 0, 0, 0.5);
    }
  </style>
</head>
<body>

  <div class="navbar">
    <div class="brand">BILED Kere</div>
    <div class="nav-buttons">
      <a href="pendaftaran.php">Daftar</a>
      <a href="#">Login</a>
    </div>
  </div>

  <div class="container">
    <h1>Selamat Datang di BILED Kere</h1>
    <p>
      BILED Kere adalah solusi hemat dan terang untuk penerangan kendaraan Anda.
      Kami menyediakan lampu BILED dengan kualitas bagus namun tetap ramah kantong.
    </p>
    <p>
      Jelajahi berbagai pilihan lampu BILED terbaik dengan harga bersahabat hanya di sini.
      Karena terang itu penting, tapi tetap harus irit!
    </p>
  </div>

  <div class="footer">
    &copy; <?php echo date("Y"); ?> BILED Kere. Semua Hak Dilindungi.
  </div>

</body>
</html>