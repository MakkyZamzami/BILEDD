<?php
// koneksi ke database (pastikan file ini ada)
include "koneksi.php";

$pesanan_berhasil = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = $_POST['nama'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $alamat = $_POST['alamat'];
    $kontak = $_POST['kontak'];
    $pembayaran = $_POST['pembayaran'];

    $query = "INSERT INTO pesanan (nama, produk, jumlah, alamat, kontak, pembayaran) 
              VALUES ('$nama', '$produk', '$jumlah', '$alamat', '$kontak', '$pembayaran')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $pesanan_berhasil = true;
    } else {
        echo "<p style='color:red;'>Gagal memproses pesanan.</p>";
    }
}
?><!DOCTYPE html><html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pemesanan Lampu BILED</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background :#001f3f;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 12px;
            text-align: center;
        }
        h2 {
            color: #00ffcc;;
        }
        label {
            display: block;
            margin-top: 10px;
            color: #333;
            text-align: left;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background: #00ffcc;
            color: white;
            font-weight: bold;
            border: none;
            margin-top: 20px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #00ffcc;
        }
        .keranjang-logo {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .keranjang-logo img {
            width: 60px;
        }
        .success-message {
            font-size: 18px;
            color: #28a745;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if ($pesanan_berhasil): ?>
            <h2>Pesanan Sukses!</h2>
            <p class="success-message">Pesanan telah berhasil dibuat.<br>Terimakasih telah berbelanja di toko kami.</p>
        <?php else: ?>
            <h2>Form Pemesanan Lampu BILED</h2>
            <form method="POST" action="">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" required><label>Pilih Produk</label>
            <select name="produk" required>
                <option value="">-- Pilih Produk --</option>
                <option value="PRO7 P750LX">PRO7 P750LX - Rp.2.387.400</option>
                <option value="PRO7 P725BL">PRO7 P725BL - Rp.1.237.500</option>
                <option value="PRO7 P770RV">PRO7 P770RV - Rp.1.110.250</option>
                <option value="PRO7 P730RV">PRO7 P730RV - Rp.1.260.500</option>
                <option value="AES TURBO EXPERIENCE V1">AES TURBO EXPERIENCE V1 - Rp.490.000</option>
                <option value="AES TURBO EXPERIENCE V2">AES TURBO EXPERIENCE V2 - Rp.500.000</option>
                <option value="AES TURBO SE DOUBLE LASER">AES TURBO SE DOUBLE LASER - Rp.610.000</option>
                <option value="AES TURBO SE BI-LASER">AES TURBO SE BI-LASER - Rp.735.000</option>
                <option value="Vinyx P25">Vinyx P25 - Rp.260.000</option>
                <option value="Vinyx P65 Gen2">Vinyx P65 Gen2 - Rp.454.499</option>
                <option value="Vinyx P70">Vinyx P70 - Rp.550.000</option>
                <option value="Vinyx P75">Vinyx P75 - Rp.540.000</option>
            </select>

            <label>Jumlah</label>
            <input type="number" name="jumlah" min="1" required>

            <label>Alamat Pengiriman</label>
            <textarea name="alamat" rows="3" required></textarea>

            <label>Nomor Kontak (WA/HP)</label>
            <input type="text" name="kontak" required>

            <label>Metode Pembayaran</label>
            <select name="pembayaran" required>
                <option value="">-- Pilih Pembayaran --</option>
                <option value="COD">Bayar di Tempat (COD)</option>
                <option value="Transfer Bank">Transfer via Bank</option>
            </select>

            <input type="submit" value="Pesan Sekarang">
        </form>
    <?php endif; ?>
</div>

</body>
</html>