<!DOCTYPE html><html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Beranda - BILED Kere</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #001f3f;
      color: #fff;
    }
    header {
      background-color: #000;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .brand {
      font-size: 24px;
      font-weight: bold;
      color: #00ffcc;
    }
    nav a {
      color: #fff;
      margin-left: 20px;
      text-decoration: none;
    }
    nav a:hover {
      text-decoration: underline;
    }
    .produk-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      padding: 20px;
    }
    .produk {
      background-color: #003366;
      border-radius: 8px;
      padding: 15px;
      text-align: center;
    }
    .produk img {
      max-width: 100%;
      border-radius: 8px;
    }
    .produk h3 {
      color: #00ffcc;
    }
    .produk p {
      font-size: 14px;
    }
    .produk .harga {
      font-weight: bold;
      color: #00ffcc;
    }
    .produk button {
      background-color: #00ffcc;
      border: none;
      color: #000;
      padding: 10px;
      margin-top: 10px;
      border-radius: 4px;
      cursor: pointer;
    }
    .produk button:hover {
      background-color: #00d9b3;
    }
  </style>
</head>
<body>
  <header>
    <div class="brand">BILED Kere</div>
    <nav>
      <a href="index.php">Beranda</a>
      <a href="login.php">Login</a>
      <a href="register.php">Daftar</a>
    </nav>
  </header>  <div class="produk-container">
    <div class="produk">
      <img src="P750LX.jpg" alt="P750LX">
      <h3>PRO7 P750LX</h3>
      <p>Double Laser 60W/90W, 5500K. Teknologi laser dengan performa tinggi. (Harga Untuk 1 Lampu)</p>
      <p class="harga">Rp.2.387.400</p>
      <button onclick="location.href='order.php?produk=P750LX'">Pesan Sekarang</button>
    </div>
    <div class="produk">
      <img src="P725BL.jpg" alt="P725BL">
      <h3>PRO7 P725BL</h3>
      <p>Bi-LED 2.5" 60W/70W, 5700K. Blue Lens, cocok untuk segala medan.(Harga Untuk 1 Lampu)</p>
      <p class="harga">Rp.1.237.500</p>
      <button onclick="location.href='order.php?produk=P725BL'">Pesan Sekarang</button>
    </div>
    <div class="produk">
      <img src="P770RV.jpg" alt="P770RV">
      <h3>PRO7 P770RV</h3>
      <p>Laser Spot 75W/85W, 5500K. Signature Edition dengan desain eksklusif.(Harga Untuk 1 Lampu)</p>
      <p class="harga">Rp.1.110.250</p>
      <button onclick="location.href='order.php?produk=P770RV'">Pesan Sekarang</button>
    </div>
    <div class="produk">
      <img src="P730RV.jpg" alt="P730RV">
      <h3>PRO7 P730RV</h3>
      <p>3 Inch Blue Lens. Temperature Color 5700K. Cahaya Sangat Terang, Fokus, dan Padat, Jarak Sinar Jauh dan Fokus.(Harga Untuk 1 Lampu)</p>
      <p class="harga">Rp.1.260.500</p>
      <button onclick="location.href='order.php?produk=P770RV'">Pesan Sekarang</button>
    </div>
    <div class="produk">
      <img src="V1.jpg" alt="V1">
      <h3>AES TURBO EXPERIENCE V1</h3>
      <p>AES EXPERIENCE V1. 2,5 Inch Turbo SE 9-16V, Cahaya Flat.(Harga Untuk 1 Lampu)</p>
      <p class="harga">Rp.490.000</p>
      <button onclick="location.href='order.php?produk=P770RV'">Pesan Sekarang</button>
    </div>
    <div class="produk">
      <img src="V2.jpg" alt="V2">
      <h3>AES TURBO EXPERIENCE V2</h3>
      <p>AES TURBO EXPERIENCE V2. 2,5 Inch 60/70 WATT Cahaya Flat.(Harga Untuk 1 Lampu)</p>
      <p class="harga">Rp.500.000</p>
      <button onclick="location.href='order.php?produk=P770RV'">Pesan Sekarang</button>
    </div>
    <div class="produk">
      <img src="DOUBLELASER.jpg" alt="DOUBLELASERR">
      <h3>AES TURBO DOUBLE LASER</h3>
      <p>2,5 Inch Bowl Peojector AES Turbo SE, Double Laser.(Harga Untuk 1 Lampu)</p>
      <p class="harga">Rp.600.000</p>
      <button onclick="location.href='order.php?produk=P770RV'">Pesan Sekarang</button>
    </div>
    <div class="produk">
      <img src="BILASER.jpg" alt="BILASER">
      <h3>AES TUEBO BILASER</h3>
      <p>3 inch, Taiwan led chip 6 big power + 2 super ledd chip 5050.(Harga Untuk 1 Lampu)</p>
      <p class="harga">Rp.735.000</p>
      <button onclick="location.href='order.php?produk=P770RV'">Pesan Sekarang</button>
    </div>
    <div class="produk">
      <img src="P25.jpg" alt="P25">
      <h3>VYNIX P25</h3>
      <p>Projie WST 2,5 Inch, cut of RHD.(Harga Untuk 1 Lampu)</p>
      <p class="harga">Rp.260.000</p>
      <button onclick="location.href='order.php?produk=P770RV'">Pesan Sekarang</button>
    </div>
    <div class="produk">
      <img src="P65.jpg" alt="P65">
      <h3>VYNIX P65</h3>
      <p>Projie Biled 3 Inch, Lensa Premium Purple Lens.(Harga Untuk 1 Lampu)</p>
      <p class="harga">Rp.490.000</p>
      <button onclick="location.href='order.php?produk=P770RV'">Pesan Sekarang</button>
    </div>
    <div class="produk">
      <img src="P75.jpg" alt="P75">
      <h3>VYNIX P75</h3>
      <p>Projie Biled3 Inch, cutt of FLAT, Lensa Premium Purple Lens.(Harga Untuk 1 Lampu)</p>
      <p class="harga">Rp.540.000</p>
      <button onclick="location.href='order.php?produk=P770RV'">Pesan Sekarang</button>
    </div>
    <div class="produk">
      <img src="P70.jpg" alt="P70">
      <h3>VYNIX P70</h3>
      <p>Projie Biled 3 Inch, Premium Purple Lens, cutt of RHD.</p>
      <p class="harga">Rp.550.000</p>
      <button onclick="location.href='order.php?produk=P770RV'">Pesan Sekarang</button>
    </div>
  </div>
</body>
</html>