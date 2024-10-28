<?php
include 'navbar.php';
include 'loading.php';
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/svg+xml" href="./logo/P.png" />
    <title>Himaster uigm</title>
</head>
<style>
    body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}
.hero-section {
  background-image: url("./logo/pu.jpg");
  background-size: cover;
  background-position: center;
  height: 500px; /* Sesuaikan tinggi sesuai kebutuhan */
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: white;
  position: relative;
  border-bottom: 1px solid #333; /* Menambahkan garis bawah */
}

.hero-section::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(
    0,
    0,
    0,
    0.5
  ); /* Lapisan gelap untuk meningkatkan keterbacaan teks */
}

.hero-content {
  position: relative;
  z-index: 1;
  max-width: 800px;
  padding: 20px;
}

.hero-content h1 {
  font-size: 3em;
  margin-bottom: 20px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.hero-content p {
  font-size: 1.2em;
  margin-bottom: 30px;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}

.cta-button {
  display: inline-block;
  padding: 12px 24px;
  background-color: #007bff;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

.cta-button:hover {
  background-color: #0056b3;
}

@media (max-width: 768px) {
  .hero-content h1 {
    font-size: 2em;
  }

  .hero-content p {
    font-size: 1em;
  }
}

.featured-image-container {
  width: 100%;
  max-width: 1200px;
  margin: 70px auto; /* Menambahkan margin atas dan bawah */
  padding: 20px;
  box-sizing: border-box;
}

.featured-image {
  width: 100%;
  height: auto;
  display: block;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  margin-bottom: 30px; /* Menambahkan jarak antara gambar dan caption */
}

.image-caption {
  text-align: center;
  padding: 20px 0;
}

.image-caption h2 {
  font-size: 1em;
  color: #333;
  margin-bottom: 20px;
}

.image-caption p {
  font-size: 1.1em;
  color: #666;
  line-height: 1.6;
  max-width: 800px;
  margin: 0 auto;
  margin-bottom: 30px;
}

#content {
  margin-top: 60px;
}

@media (max-width: 768px) {
  .featured-image-container {
    padding: 10px;
    margin: 20px auto; /* Mengurangi margin pada layar kecil */
  }

  .featured-image {
    margin-bottom: 20px; /* Mengurangi jarak pada layar kecil */
  }

  .image-caption h2 {
    font-size: 1.5em;
    margin-bottom: 15px;
  }

  .image-caption p {
    font-size: 1em;
  }

  #content {
    margin-top: 40px; /* Mengurangi margin atas pada layar kecil */
  }
}

.side-by-side-container {
  display: flex;
  max-width: 1200px;
  margin: 40px auto;
  padding: 20px;
  box-sizing: border-box;
}

.image-side {
  flex: 1;
  padding-right: 20px;
}

.side-image {
  width: 100%;
  height: auto;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.text-side {
  flex: 1;
  padding-left: 20px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.text-side h2 {
  font-size: 2em;
  color: #333;
  margin-bottom: 20px;
}

.text-side p {
  font-size: 1.1em;
  color: #666;
  line-height: 1.6;
  margin-bottom: 15px;
}

.learn-more-btn {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  font-weight: bold;
  transition: background-color 0.3s ease;
  align-self: flex-start;
}

.learn-more-btn:hover {
  background-color: #0056b3;
}

/* Responsiveness */
@media (max-width: 768px) {
  .side-by-side-container {
    flex-direction: column;
    padding: 10px;
  }

  .image-side {
    padding-right: 0;
    margin-bottom: 20px;
  }

  .text-side {
    padding-left: 0;
  }

  .text-side h2 {
    font-size: 1.5em;
  }

  .text-side p {
    font-size: 1em;
  }
}
</style>
<body>
    <div class="hero-section">
      <div class="hero-content">
        <h1>Speak UP! Mengatasi Rasa Takut Di Depan Umum</h1>
        <p>03 agustus 2024</p>
        <a
          href="https://www.instagram.com/p/C-MJQdzP6EZ/?igsh=b254dW41dHFiMHE3"
          class="cta-button"
          >klik sini</a
        >
      </div>
    </div>

    <div class="featured-image-container">
      <img
        src="./logo/foto3.jpg"
        alt="Gambar Utama Himaster"
        class="featured-image"
      />
      <div class="image-caption">
        <h2>public specking himaster 2024</h2>
        <p>
          Acara Pelatihan Public Speaking telah resmi berakhir! Terima kasih
          kepada semua peserta yang telah berani keluar dari zona nyaman dan
          berbagi pengalaman. Semoga ilmu yang dibagikan dapat menginspirasi dan
          memotivasi kita semua untuk berbicara percaya diri di depan umum.
        </p>
      </div>
    </div>

    <div class="side-by-side-container">
      <div class="image-side">
        <img src="./logo/pu2.jpg" alt="Gambar Himaster" class="side-image" />
      </div>
      <div class="text-side">
        <h2>Himaster UIGM</h2>
        <p>
          Dalam seminar ini, kita akan membahas berbagai strategi dan teknik
          untuk mengatasi rasa takut yang sering muncul saat berbicara di depan
          umum. Dengan menghadirkan tips-tips praktis dan latihan-latihan yang
          dapat langsung diterapkan, Anda akan dibimbing untuk menjadi lebih
          percaya diri dan mampu menyampaikan ide-ide Anda dengan jelas dan
          efektif.
        </p>
        <p>
          Acara ini dipandu oleh Mila Nabila, seorang moderator berpengalaman
          yang akan membantu Anda memahami cara mengendalikan perasaan gugup dan
          membangun kepercayaan diri. Ini adalah kesempatan yang tidak boleh
          dilewatkan bagi siapa saja yang ingin meningkatkan keterampilan
          berbicara di depan umum, baik untuk keperluan profesional maupun
          pribadi.
        </p>
        <a
          href="https://www.instagram.com/p/C-MJQdzP6EZ/?igsh=b254dW41dHFiMHE3"
          class="learn-more-btn"
          >klik disini</a
        >
      </div>
    </div>
    <?php
    include 'footer.php';
    ?>
    <script></script>
  </body>
</html>
