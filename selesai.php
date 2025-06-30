<?php
session_start();
if (!isset($_SESSION['data'])) {
    header("Location: index.html");
    exit;
}

$data = $_SESSION['data'];
session_destroy(); // Optional: hapus data setelah ditampilkan
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pemesanan Selesai</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 30px;
      background-color: #f5f5f5;
    }
    .card {
      background: white;
      padding: 25px;
      margin: auto;
      max-width: 500px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .btn {
      background: #00f7c4;
      color: white;
      padding: 10px 20px;
      border: none;
      margin-top: 20px;
      border-radius: 5px;
      text-decoration: none;
    }
  </style>
</head>
<body>

<div class="card">
  <h2 style="color: #00c59e;">✅ Pemesanan Berhasil</h2>
  <p>Terima kasih <strong><?= htmlspecialchars($data['nama']) ?></strong>, pesanan Anda telah kami terima.</p>
  
  <hr>

  <p><strong>Produk:</strong> <?= htmlspecialchars($data['produk']) ?></p>
  <p><strong>Jumlah:</strong> <?= htmlspecialchars($data['jumlah']) ?> pcs</p>
  <p><strong>Total Harga:</strong> Rp <?= number_format($data['total'], 0, ',', '.') ?></p>
  <p><strong>Alamat Pengiriman:</strong> <?= htmlspecialchars($data['alamat']) ?></p>
  <p><strong>Metode Pembayaran:</strong> <?= htmlspecialchars($data['pembayaran']) ?></p>
  <p><strong>Kontak WA:</strong> <?= htmlspecialchars($data['kontak']) ?></p>

  <p style="margin-top: 25px;">📦 Pesanan sedang diproses dan akan segera dikirimkan.</p>

  <a href="index.html" class="btn">Kembali ke Beranda</a>
</div>

</body>
</html>
