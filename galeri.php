<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Galeri</title>
  <link rel="stylesheet" href="style.css">
  
<style>
body {
  background-color: #f5f5f5;
  font-family: "Segoe UI", sans-serif;
  margin: 0;
  padding: 0;
  color: #1a1a1a;
}

.content {
  margin: clamp(80px, 10vh, 120px) auto clamp(40px, 5vh, 80px);
  width: clamp(300px, 90vw, 1200px);
  background-color: #ffffff;
  display: flex;
  flex-direction: row;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  overflow: hidden;
}

.left, .right {
  width: 50%;
  padding: clamp(16px, 4vw, 40px);
  box-sizing: border-box;
}

.left img {
  width: 100%;
  height: auto;
  border-radius: 10px;
}

.right {
  background-color: #ffffff;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.right h1 {
  font-size: clamp(1.5rem, 3vw, 2.5rem);
  color: #0f1a2b;
  margin-bottom: clamp(10px, 2vw, 30px);
}

.right p {
  font-size: clamp(0.9rem, 1.5vw, 1.2rem);
  line-height: 1.6;
  color: #333;
}

/* Fotoğraf Galerisi */
.photo-gallery {
  width: clamp(300px, 90vw, 1200px);
  margin: clamp(20px, 5vh, 60px) auto;
  padding: clamp(20px, 4vw, 40px);
  background-color: #ffffff;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: clamp(10px, 2vw, 30px);
}

.photo-gallery img {
  width: clamp(100px, 20vw, 200px);
  height: clamp(100px, 20vw, 200px);
  object-fit: cover;
  border-radius: 12px;
  border: 1px solid #ccc;
  transition: transform 0.3s ease;
}

.photo-gallery img:hover {
  transform: scale(1.05);
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}


    </style>
</head>
<body>

  <!-- HEADER -->
  <header class="header">
  <nav class="navbar">
    <div class="logo">
      <img src="resimler/morainsaatlogo.png" alt="Logo">
    </div>
    <ul class="nav-links">
      <li><a href="#anasayfa">Anasayfa</a></li>
      <li><a href="#projeler">Projeler</a></li>
      <li><a href="#kurumsal">Kurumsal</a></li>
      <li><a href="#iletisim">İletişim</a></li>
    </ul>
  </nav>
</header>

  <!-- PROJE BİLGİSİ -->
  <div class="content" style="margin-top: 100px;">
    <div class="left">
      <img src="anasayfa/morarezidans.png" alt="Proje Görseli">
    </div>
    <div class="right">
      <h1>Proje Hakkında</h1>
      <p>
        Bu proje, tarihi ve kültürel değerleri görsel materyallerle ön plana çıkararak
        ziyaretçilere zengin bir içerik sunmayı amaçlamaktadır. Aşağıda projeye ait bazı
        görselleri bulabilirsiniz.
      </p>
    </div>
  </div>

  <!-- FOTOĞRAF GALERİSİ -->
  <div class="photo-gallery">
    <img src="anasayfa/morarezidans.png" alt="Galeri 1">
    <img src="anasayfa/morarezidans.png" alt="Galeri 2">
    <img src="anasayfa/morarezidans.png" alt="Galeri 3">
    <img src="anasayfa/morarezidans.png" alt="Galeri 4">
    <img src="anasayfa/morarezidans.png" alt="Galeri 5">
  </div>
  <div class="photo-gallery">
    <img src="anasayfa/morarezidans.png" alt="Galeri 1">
    <img src="anasayfa/morarezidans.png" alt="Galeri 2">
    <img src="anasayfa/morarezidans.png" alt="Galeri 3">
    <img src="anasayfa/morarezidans.png" alt="Galeri 4">
    <img src="anasayfa/morarezidans.png" alt="Galeri 5">
  </div>

  <!-- Footer -->
<footer class="footer">
  <div class="footer-container">
    
    <div class="footer-section logo-section">
      <div class="logo-content">
        
        <h3>Mora İnşaat</h3>
        <p>Kalite ve Güvenin Adresi</p>
        <img src="resimler/morainsaat.png" alt="Mora İnşaat Logo" class="footer-logo">
      </div>
    </div>

  
    <div class="footer-section middle-section">
      <h4>Hızlı Erişim</h4>
      <ul>
        <li><a href="#anasayfa">Anasayfa</a></li>
        <li><a href="#projeler">Projeler</a></li>
        <li><a href="#kurumsal">Kurumsal</a></li>
        <li><a href="#iletisim">İletişim</a></li>
      </ul>
    </div>

    
    <div class="footer-section contact-section">
      <h4>İletişim</h4>
      <p>Adres: The Paragon Tower İş Merkezi
              No: 3 Kat: 25 Ofis: 125

              Çukurambar/Ankara</p>
      <p>Telefon: <br>+90 312 473 89 89
        </p>
      <p>Email: <br>satis@morainsaat.com</p>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2025 Mora İnşaat. Tüm hakları saklıdır.</p>
  </div>
</footer>

</body>
</html>
