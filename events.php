<?php
include 'navbar.php';
include 'loading.php';
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/svg+xml" href="../P.png" />
    <title>Himaster UIGM</title>
    <link rel="stylesheet" href="berita.css" />
  </head>
  <style>
    body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}
/* CSS */
h1 {
  padding: 30px;
  color: #000;
}

.news-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  gap: 20px;
  padding: 20px;
}

.news-card {
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: all 0.5s ease;
  flex-basis: calc(33.333% - 20px);
  margin-bottom: 20px;
  opacity: 0;
  transform: translateY(20px);
}

.news-card.animate {
  animation: fadeInUp 0.5s ease forwards;
}

@keyframes fadeInUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.news-card:nth-child(1) {
  animation-delay: 0.1s;
}
.news-card:nth-child(2) {
  animation-delay: 0.2s;
}
.news-card:nth-child(3) {
  animation-delay: 0.3s;
}
.news-card:nth-child(4) {
  animation-delay: 0.4s;
}
.news-card:nth-child(5) {
  animation-delay: 0.5s;
}
.news-card:nth-child(6) {
  animation-delay: 0.6s;
}

.news-card:hover {
  transform: translateY(-5px) scale(1.03);
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
}

.news-image {
  position: relative;
  height: 200px;
  overflow: hidden;
}

.news-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.news-card:hover .news-image img {
  transform: scale(1.1);
}

.news-category {
  position: absolute;
  top: 10px;
  right: 10px;
  background: #007bff;
  color: #fff;
  padding: 5px 10px;
  border-radius: 20px;
  font-size: 12px;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

.news-card:hover .news-category {
  background-color: #0056b3;
}

.news-content {
  padding: 20px;
}

.news-content h2 {
  margin: 0 0 10px;
  font-size: 1.2em;
  color: #333;
  transition: color 0.3s ease;
}

.news-card:hover .news-content h2 {
  color: #007bff;
}

.news-date {
  font-size: 0.9em;
  color: #666;
  margin-bottom: 10px;
}

.news-excerpt {
  font-size: 0.95em;
  line-height: 1.5;
  color: #444;
  margin-bottom: 15px;
  transition: color 0.3s ease;
}

.news-card:hover .news-excerpt {
  color: #222;
}

.read-more {
  display: inline-block;
  color: #007bff;
  text-decoration: none;
  font-weight: bold;
  transition: all 0.3s ease;
  position: relative;
}

.read-more::after {
  content: "";
  position: absolute;
  width: 100%;
  height: 2px;
  bottom: -2px;
  left: 0;
  background-color: #007bff;
  transform: scaleX(0);
  transition: transform 0.3s ease;
}

.read-more:hover {
  color: #0056b3;
}

.read-more:hover::after {
  transform: scaleX(1);
}

@media (max-width: 1024px) {
  .news-card {
    flex-basis: calc(50% - 20px);
  }
}

@media (max-width: 768px) {
  .news-card {
    flex-basis: 100%;
  }
}


  </style>
  <body>
    <div id="content">
      <h1>Berita Terbaru</h1>
      <div class="news-container">
        <div class="news-card">
          <div class="news-image">
            <img src="../img/berita2.jpg" alt="Berita 2" />
            <div class="news-category">Acara</div>
          </div>
          <div class="news-content">
            <h2>judu</h2>
            <p class="news-date">tanggal</p>
            <p class="news-excerpt">isi nyo</p>
            <a
              href="bikin folder baru isi nyo salin bae di folder public"
              class="read-more"
              >Baca selengkapnya</a
            >
          </div>
        </div>
        <div class="news-card">
          <div class="news-image">
            <img src="../img/berita2.jpg" alt="Berita 2" />
            <div class="news-category">Acara</div>
          </div>
          <div class="news-content">
            <h2>judu</h2>
            <p class="news-date">tanggal</p>
            <p class="news-excerpt">isi nyo</p>
            <a
              href="bikin folder baru isi nyo salin bae di folder public"
              class="read-more"
              >Baca selengkapnya</a
            >
          </div>
        </div>

        <div class="news-card">
          <div class="news-image">
            <img src="./logo/foto3.jpg" alt="Berita 3" />
            <div class="news-category">Acara</div>
          </div>
          <div class="news-content">
            <h2>Speak UP! Mengatasi Rasa Takut Di Depan Umum</h2>
            <p class="news-date">03 Agustus 2024</p>
            <p class="news-excerpt">
              Acara Pelatihan Public Speaking telah resmi berakhir! Terima kasih
              kepada semua peserta yang telah berani keluar dari zona nyaman dan
              berbagi pengalaman. Semoga ilmu yang dibagikan dapat menginspirasi
              dan memotivasi kita semua untuk berbicara percaya diri di depan
              umum.
            </p>
            <a href="./public.php" class="read-more"
              >Baca selengkapnya</a
            >
          </div>
        </div>
      </div>
    </div>
    <?php
    include 'footer.php';
    ?>
    <script>
       
document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".news-card");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("animate");
        } else {
          entry.target.classList.remove("animate");
        }
      });
    },
    {
      threshold: 0.1,
    }
  );

  cards.forEach((card) => {
    observer.observe(card);
  });
});

    </script>
  </body>
</html>
