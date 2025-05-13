<?php include 'header.php'; ?>





  <!-- Tam ekran slideshow -->
<section class="slideshow" id="slideshow">
<div class="slide-wrapper active">
<img src="anasayfa/revizeMoraManzara.jpg" class="slide active" 
  data-title="Mora Manzara" 
  data-subtitle="Doğayla iç içe, lüks villa yaşamı"
  data-url="moramanzara.php"
  data-button="Detaylar">
  </div>
<div class="slide-wrapper ">
<img src="anasayfa/revizeMoraRezidans.jpg" class="slide " 
  data-title="Mora Rezidans" 
  data-subtitle="Modern mimarisiyle şehir yaşamına konfor katın"
  data-url="morarezidans.php"
  data-button="Detaylar">
</div>
<div class="slide-wrapper ">
<img src="anasayfa/revizeMoraVilla.jpg" class="slide " 
  data-title="Mora Villaları" 
  data-subtitle="Özgür, geniş ve prestijli yaşam alanları"
  data-url="moravilla.php"
  data-button="Detaylar">
</div>
  <div class="slide-wrapper ">
<img src="anasayfa/revizeMoraPlaza.jpeg" class="slide " 
  data-title="Mora Plaza" 
  data-subtitle="İş dünyası için modern ofis çözümleri"
  data-url="moraplaza"
  data-button="Detaylar">
</div>
  <div class="slide-wrapper ">
<img src="anasayfa/revizeMoraTophane.jpg" class="slide " 
  data-title="Mora Tophane" 
  data-subtitle="Şehrin merkezinde konforlu apartman daireleri"
  data-url="moratophane"
  data-button="Detaylar">
</div>

 <div class="slideshow-overlay">
  <h1 id="slide-title"></h1>
  <h2 id="slide-subtitle"></h2>
  <button id="slide-button"></button>
  <div class="dots"></div>
  <div class="arrow-down" onclick="scrollToNextSection()">&#x25BC;</div>
</div>

</section>

 





<script>
  const slides = document.querySelectorAll('.slide');
  const dotsContainer = document.querySelector('.dots');
  const titleEl = document.getElementById('slide-title');
  const subtitleEl = document.getElementById('slide-subtitle'); 
  const buttonEl = document.getElementById('slide-button');

  let currentSlide = 0;

 
  updateOverlayContent(currentSlide);


  slides.forEach((_, i) => {
    const dot = document.createElement('span');
    dot.classList.add('dot');
    if (i === 0) dot.classList.add('active');
    dot.addEventListener('click', () => showSlide(i));
    dotsContainer.appendChild(dot);
  });

  const dots = document.querySelectorAll('.dot');

  function showSlide(index) {
    slides.forEach((s, i) => {
      s.classList.remove('active');
      dots[i].classList.remove('active');
    });

    slides[index].classList.add('active');
    dots[index].classList.add('active');
    currentSlide = index;
    updateOverlayContent(index);
  }

  function updateOverlayContent(index) {
    const activeSlide = slides[index];
    titleEl.textContent = activeSlide.dataset.title || "";
    subtitleEl.textContent = activeSlide.dataset.subtitle || "";
    buttonEl.textContent = activeSlide.dataset.button || "";
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
  }

  setInterval(nextSlide, 5000); 

function scrollToNextSection() {
  const nextSection = document.getElementById('next-section');
  if (nextSection) {
    nextSection.scrollIntoView({ behavior: 'smooth' });
  }
}


buttonEl.addEventListener('click', () => {
  const url = slides[currentSlide].dataset.url;
  if (url) {
    window.location.href = url;
  }
});



  let startX = 0;
  let isDragging = false;

  const slideshow = document.getElementById('slideshow');

  slideshow.addEventListener('mousedown', (e) => {
    isDragging = true;
    startX = e.clientX;
  });

  slideshow.addEventListener('mouseup', (e) => {
    if (!isDragging) return;
    let diff = e.clientX - startX;
    handleSwipe(diff);
    isDragging = false;
  });

  slideshow.addEventListener('touchstart', (e) => {
    startX = e.touches[0].clientX;
  });

  slideshow.addEventListener('touchend', (e) => {
    let endX = e.changedTouches[0].clientX;
    let diff = endX - startX;
    handleSwipe(diff);
  });

  function handleSwipe(diff) {
    if (Math.abs(diff) < 50) return;
    if (diff < 0) {
      currentSlide = (currentSlide + 1) % slides.length;
    } else {
      currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    }
    showSlide(currentSlide);
  }
  function showSlide(index) {
  const slideWrappers = document.querySelectorAll('.slide-wrapper');

  slideWrappers.forEach((wrapper, i) => {
    wrapper.classList.remove('active', 'zooming');
    slides[i].classList.remove('active');
    dots[i].classList.remove('active');
  });

  const newWrapper = slideWrappers[index];
  newWrapper.classList.add('active');
  void newWrapper.offsetWidth; 
  newWrapper.classList.add('zooming'); 

  slides[index].classList.add('active');
  dots[index].classList.add('active');
  currentSlide = index;
  updateOverlayContent(index);
}

</script>







    <!-- ara kısım 1 - 1 -->
  <!-- sahiplik bilgileri -->
   
  <div class="sahiplik-icerik">
  <div class="istatistikler">
    <div class="item">
      <span class="sayi" data-target="5">0</span>
      <span class="aciklama">Proje</span>
    </div>
    <div class="item">
      <span class="sayi" data-target="65">0</span>
      <span class="aciklama">Konut</span>
    </div>
    <div class="item">
      <span class="sayi" data-target="75">0</span>
      <span class="aciklama">Ofis</span>
    </div>
    <div class="item">
      <span class="sayi" data-target="300">0</span>
      <span class="aciklama">Daire</span>
    </div>
    <div class="item">
      <span class="sayi" data-target="99999999">0</span>
      <span class="aciklama">M² İnşaat Alanı</span>
    </div>
  </div>
</div>


<!-- krolonojik sıralama projeler içinke  -->
<a href="moratophane.php">
<div class="timeline-container">
  <div class="timeline-item">
    
    <img src="anasayfa/moratophane.png" alt="Mora Tophane">
    <h3>MORA TOPHANE</h3>
    <p>2018</p>
  </div>
</a>
<a href="moraplaza.php">
  <div class="timeline-item">
    
    <img src="anasayfa/moraplaza.png" alt="Mora Plaza">
    <h3>MORA PLAZA</h3>
    <p>2019</p>
  </div>
  </a>
<a href="moravilla.php">
  <div class="timeline-item">
    
    <img src="anasayfa/moravilla.png" alt="Mora Villaları">
    <h3>MORA VİLLALARI</h3>
    <p>2020</p>
  </div>
  </a>
<a href="morarezidans.php">
  <div class="timeline-item">
    
    <img src="anasayfa/morarezidans.png" alt="Mora Rezidans">
    <h3>MORA REZİDANS</h3>
    <p>2022</p>
  </div>
  </a>
<a href="moramanzara.php">
  <div class="timeline-item">
    
    <img src="anasayfa/moramanzara.png" alt="Mora Manzara">
    <h3>MORA MANZARA</h3>
    <p>2024</p>
  </div>
  </a>
</div>


<!-- içerik 1 -1  -->
 <a href="moramanzara.php">
<div class="content" id="next-section">
  <div class="left">
    <img src="anasayfa/revizemoraManzara.jpg" alt="Mora Manzara">
  </div>
  <div class="right">
    <h1>Mora Manzara</h1>
    <p id="Mora-Manzara" class="typewriter" data-text="Ankara’ya sadece 20 km uzaklıkta, Gölbaşı Hacılar’ın zirvesinde konumlanan Mora Villaları, 47.300 m² alanda yalnızca 31 özel villa ile doğayla iç içe, ferah ve ayrıcalıklı bir yaşam sunuyor. Yüksek tavanlı mimarisi, geniş bahçeleri, göl manzarası ve kuş sesleriyle şehirden uzak, huzura yakın bir hayat sizi bekliyor."></p>
    <div class="photo-gallery">
      <img src="manzara/dis1.jpg" alt="Foto 1">
      <img src="manzara/dis7.jpg" alt="Foto 2">
      <img src="manzara/dis3.jpg" alt="Foto 3">
      
    </div>
</div>
</div>  
</a>




<!-- içerik 1 -2  -->
 <a href="morarezidans.php">
<div class="content reverse">
  <div class="left">
    <img src="anasayfa/revizemorarezidans.jpg" alt="Mora rezidans">
  </div>
  <div class="right">
  <h1>Mora Rezidans</h1>
    <p id="Mora-Rezidans" class="typewriter" data-text="Mora Rezidans, Mora İnşaat imzasıyla hayata geçen, mimarisiyle fark yaratan prestijli bir yatırım fırsatı. Ankara’nın yükselen bölgelerinden birinde konumlanan bu proje, 198 daire ve 330 oda ile geniş hedef kitleye hitap ediyor. Özgün tasarımı ve fonksiyonel yaşam alanlarıyla hem oturum hem kiralama açısından yüksek talep potansiyeli sunuyor. Spor kompleksi, havuz, fitness, sauna ve jakuzi gibi ayrıcalıklar projeye değer katarken, Mora kalitesi uzun vadeli kazanç için güçlü bir zemin oluşturuyor."></p>
    <div class="photo-gallery">
      <img src="rezidans/dis1.jpg" alt="Foto 1">
      <img src="rezidans/dis2.jpg" alt="Foto 2">
      <img src="rezidans/ic1.jpg" alt="Foto 3">
      
    </div>
</div>
</div>  
</a>


<!-- içerik 1 -3  -->
 <a href="moravilla.php">
<div class="content ">
  <div class="left">
    <img src="villalar/dis2.jpg" alt="Mora villa">
  </div>
  <div class="right">
  <h1>Mora Villaları</h1>
    <p id="Mora-Villa" class="typewriter" data-text="Ankara’ya sadece 20 km mesafede konumlanan bu özel villa, 530 m² net kullanım alanı, 1.250 m² bahçe ve özel havuzuyla yatırımcılara yüksek yaşam konforu ve değerli bir mülk sunuyor. Yüksek tavanlı, ferah iç hacmiyle klasik konut anlayışını aşan bu yapı, metrekare değil metreküp odaklı mimarisiyle dikkat çekiyor. Doğayla iç içe, geniş yeşil alanı, sessizliği ve sunduğu ayrıcalıklarla hem yaşam hem kira getirisi açısından güçlü bir yatırım fırsatı oluşturuyor."></p>
    <div class="photo-gallery">
      <img src="villalar/dis1.jpg" alt="Foto 1">
      <img src="villalar/ic3.jpg" alt="Foto 2">
      <img src="villalar/ic13.jpg" alt="Foto 3">
      
    </div>
</div>
</div>  
</a>

            <!-- içerik 1 -4  -->
             <a href="moraplaza.php">
            <div class="content reverse">
            <div class="left">
                <img src="plaza/dis1.jpeg" alt="Mora plaza">
            </div>
            <div class="right">
            <h1>Mora Plaza</h1>
    <p id="Mora-Plaza" class="typewriter" data-text="Rize’nin kalbinde, yeni ofis vizyonu ile planlanmış 28 ofisten oluşan Rize’nin en gözde ofis merkezi. Kat yüksekliği, ısıtma ve soğutma sistemi, alüminyum doğrama, cam giydirme, 24 saat güvenlik hizmetiyle Rize’de fark yaratan bir ticaret merkezi. İş insanlarının huzurla ticaretlerini büyüttükleri Rize’de benzersiz bir plaza."></p>
    <div class="photo-gallery">
                <img src="plaza/ic1.jpg" alt="Foto 1">
                <img src="plaza/ic19.jpg" alt="Foto 2">
                <img src="plaza/ic10.jpg" alt="Foto 3">
                
                </div>
            </div>
            </div>  
            </a>
        <!-- içerik 1 -5  -->
         <a href="moratophane.php">
        <div class="content">
        <div class="left">
            <img src="tophane/dis1.jpg" alt="Mora tophane">
        </div>
        <div class="right">
        <h1>Mora Tophane</h1>
    <p id="Mora-Tophane" class="typewriter" data-text="Rize merkezde Rize’nin en eski mahallelerinden biri olan tophane mahallesinde, güney çevre yoluna bitişik Atatürk caddesine yürüme mesafesindeki binamız merkezi konumdadır. 2000 metre kare arsa üzerine inşa ettiğimiz binamızda her katta 170 metrekare brüt 3 daire bulunmaktadır. Toplam 36 adet, denizi gören daireden oluşan binamızda, her daireye bir araçlık kapalı otopark, bina toplantı odası, bina çocuk oyun odası, mescit ve spor salonu bulunmaktadır."></p>
    <div class="photo-gallery">
            <img src="tophane/ic4.jpg" alt="Foto 1">
            <img src="tophane/ic32.jpg" alt="Foto 2">
            <img src="tophane/ic1.jpg" alt="Foto 3">
            
            </div>
        </div>
        </div>  
        </a>


<!-- içerik 1 - 6 -->
<!-- CTA -->
<section class="cta">
  <h2>Bizimle İletişime Geçin</h2>
  <p>Mora İnşaat ile iş birliği yapmak, teklif almak veya bilgi edinmek için bize ulaşın.</p>
  <form class="contact-form">
    <input type="text" placeholder="Ad Soyad" required>
    <input type="email" placeholder="E-posta" required>
    <textarea placeholder="Mesajınız..." rows="4" required></textarea>
    <button type="submit">Gönder</button>
  </form>
</section>










  

  
  <script>
  
const sayilar = document.querySelectorAll('.sayi');


const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    
    if (entry.isIntersecting) {
      const sayi = entry.target; 
      const hedef = +sayi.getAttribute('data-target'); 
      let sayac = 0;
      const hiz = hedef < 1000 ? 20 : 5; 

      const guncelle = () => {
        const artis = Math.ceil(hedef / 100); 
        if (sayac < hedef) {
          sayac += artis;
          sayi.innerText = sayac.toLocaleString();
          setTimeout(guncelle, hiz); 
        } else {
          sayi.innerText = hedef.toLocaleString(); 
        }
      };

      guncelle();
      observer.unobserve(sayi);
    }
  });
}, {
  threshold: 0.5 
});


sayilar.forEach(sayi => {
  observer.observe(sayi);
});


</script>

<script>
function startTypewriter(element, text, speed = 10) {
  if (element.dataset.typed === "true") return;
  element.dataset.typed = "true";

  let i = 0;
  element.innerHTML = ""; 

  function type() {
    if (i < text.length) {
      element.innerHTML += text.charAt(i);
      i++;
      setTimeout(type, speed);
    }
  }

  type();
}

document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const text = el.dataset.text;
        if (text) {
          startTypewriter(el, text);
          observer.unobserve(el);
        }
      }
    });
  }, {
    threshold: 0.5
  });

  document.querySelectorAll(".typewriter").forEach(el => {
    observer.observe(el);
  });
});
</script>




<?php include 'footer.php'; ?>
