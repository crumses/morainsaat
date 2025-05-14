<?php include 'header.php'; ?>


<style>
     .hero {
      height: 50vh;
      background: url('anasayfa/resepsiyon.jpg') center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      text-align: center;
     
    }

    .hero::after {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(15, 26, 43, 0.6);
      
    }

    .hero-content {
      position: relative;
      color: #fdfaf5;
      z-index: 2;
      max-width: 800px;
      
    }

    .hero-content h1 {
      font-size: clamp(2.5rem, 6vw, 4rem);
      color: #e0c063;
      margin-bottom: 1rem;
    }

    .hero-content p {
      font-size: clamp(1.2rem, 2vw, 1.5rem);
    }
    </style>





<!-- içerik 1 - 6 -->
<div class="content" id="iletisim">
  <!-- iletişim formu -->
  <div class="ismail">
    <form class="contact-form">
      <h2>Bizimle İletişime Geçin</h2>

      <label for="name">Ad Soyad</label>
      <input type="text" id="name" name="name" placeholder="Adınızı giriniz" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="E-posta adresiniz" required>

      <label for="subject">Konu</label>
      <input type="text" id="subject" name="subject" placeholder="Konu başlığı" required>

      <label for="message">Mesajınız</label>
      <textarea id="message" name="message" rows="5" placeholder="Mesajınızı buraya yazın..." required></textarea>

      <button type="submit">Gönder</button>
    </form>
  </div>

  <!-- google haritaa -->
  <div class="bilal">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3060.4373906720625!2d32.809930075800885!3d39.909226971525825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d34f4db7aa759f%3A0xb4d32a2dbda9c7b!2zTW9yYSDEsG7Fn2FhdA!5e0!3m2!1str!2str!4v1747211867416!5m2!1str!2str" 
    width="100%" height="100%" style="border:5;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>


<script>
  function adjustBodyPadding() {
    const header = document.querySelector('.header');
    if (header) {
      const headerHeight = header.offsetHeight;
      document.body.style.paddingTop = headerHeight + 'px';
    }
  }

  window.addEventListener('load', adjustBodyPadding);
  window.addEventListener('resize', adjustBodyPadding);
</script>
<?php include 'footer.php'; ?>
