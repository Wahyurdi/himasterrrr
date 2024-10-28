<?php
include 'navbar.php';
include 'loading.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Himpunan Mahasiswa Sistem Komputer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
        }
      .hero-section {
      background-image: url("./logo/hima.png");
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
        .container-custom {
            max-width: 2200px;
            margin: 0 auto;
            padding: 70px;
        }
        .about {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            padding: 40px 20px;
            background-color: #f8f9fa;
        }
        .about img {
            max-width: 300px;
            height: auto;
            margin-right: 50px;
            margin-bottom: 20px;
        }
        .about .about-text {
            flex: 1;
            min-width: 300px;
        }
        .about .about-text h2 {
            font-size: 28px;
            font-weight: bold;
            color: #000080;
            margin-bottom: 20px;
        }
        .photo{
             width: 70%;
            height: 100%;
            margin: 0 0 0 70px;
            object-fit: cover;
            backface-visibility: hidden;
        }
        .vision-mission {
            background-color: #e9ecef;
            padding: 40px 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: flex-start;
        }
        .vision-mission .col-md-6 {
            flex: 1;
            min-width: 300px;
            margin: 20px 20px 20px;
            text-align: center;
        }
        .vision-mission .col-md-6 img {
            max-width: 100%;
            height: auto;
            margin-bottom: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .vision-mission .col-md-6 img:hover {
            transform: scale(1.05);
        }
        .btn{
            color:red;
        }
        .text-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .text-container h4 {
            font-size: 24px;
            font-weight: bold;
            color: #000080;
            margin-bottom: 15px;
        }
        .text-container p {
            text-align: justify;
            color: #333;
        }
       
        .program-title {
            font-size: 28px;
            font-weight: bold;
            color: #000000;
            text-align: center;
            margin-bottom: 30px;
        }
        .program-card {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .program-card:hover {
            transform: translateY(-5px);
        }
        .program-card img {
            max-width: 100%;
            height: auto;
            margin-right: 40px;
            margin-bottom: 20px;
            border-radius: 10px;
        }
        .program-card div {
            flex: 1;
            min-width: 300px;
        }
        .video-container {
            display: flex;
            justify-content: center;
            margin: 40px 0;
        }
        .video-container video {
            width: 100%;
            max-width: 800px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .follow-us {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin: 40px 0;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
        }
        .follow-us img {
            max-width: 200px;
            height: auto;
            margin-right: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
        }
        .follow-us h5 {
            color: #000080;
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 10px;
        }
        .follow-us a {
            color: #000080;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .follow-us a:hover {
            color: #0000ff;
        }
        @media (max-width: 768px) {
            .about, .vision-mission, .program-card, .follow-us {
                flex-direction: column;
                align-items: center;
            }
            .about img, .vision-mission .col-md-6 img, .program-card img {
                margin-right: 0;
            }
            
        }
    </style>
</head>
<body>


    <!-- Banner Image -->
    <div class="hero-section">
      <div class="hero-content">
        <h1>Welcome Website Himaster Uigm</h1>
        <p>tentang kami</p>
        <a
          href="./tentang-kami.php"
          class="cta-button"
          >klik sini</a
        >
      </div>
    </div>

    <!-- About Us Section -->
    
        <div class="about animate__animated animate__fadeInUp">
            <img src="logo/p.png" alt="Logo Himaster">
            <div class="about-text">
                <h2>Tentang Kami</h2>
                <p>Himpunan Mahasiswa Sistem Komputer adalah sebuah organisasi di Universitas Indo Global Mandiri yang dibentuk oleh mahasiswa jurusan Sistem Komputer. Organisasi ini bertujuan untuk mengembangkan potensi mahasiswa dalam bidang akademik maupun non-akademik.</p>
            </div>
        </div>
    

    <!-- Chairperson and Vice Chairperson Photos -->
        <div class="vision-mission">
            <div class="col-md-6 animate__animated animate__fadeInLeft">
              <div class="photo">
                    <img src="./logo/valdo.png" alt="Foto John Doe 1">
                </div>
                <div class="text-container">
                    <h4>VISI</h4>
                    <p>Menghasilkan Relawan yang Siap Mengabdi dalam Bidang Teknologi Informasi dan Komunikasi serta Mampu Bersaing di Era Globalisasi.</p>
                </div>
            </div>
            <div class="col-md-6 animate__animated animate__fadeInRight">
               <div class="photo">
                    <img src="./logo/jemi.png" alt="Foto John Doe 1">
                </div>
                <div class="text-container">
                    <h4>MISI</h4>
                    <p>Fasilitasi Kolaborasi dan Networking di antara Mahasiswa.
                       Meningkatkan Keterampilan dan Pengetahuan Mahasiswa dalam Bidang Teknologi Informasi.
                       Mendorong Partisipasi Aktif Mahasiswa dalam Kegiatan Akademik dan Non-Akademik.</p>
                </div>
            </div>
        </div>
   

    <!-- Program Kerja Himaster Section -->
    
        <div class="program-title animate__animated animate__fadeInUp">PROGRAM KERJA HIMASTER</div>
        <div class="program-content">
            <div class="program-card animate__animated animate__fadeInUp">
                <img src="https://via.placeholder.com/400x300" alt="Program Image">
                <div>
                    <h5>PELATIHAN "NETWORKING COURSE MIKROTIK SPECIALIST"</h5>
                    <p>Himpunan Mahasiswa Sistem Komputer (HIMASTER) menyelenggarakan pelatihan yang diikuti oleh mahasiswa untuk meningkatkan kemampuan networking dalam tahun 2023 yang dipimpin oleh Chandra Setiawan, S.T., M.T.</p>
                    <a href="./tentang-kami.php" class="btn btn-primary">Read More →</a>
                </div>
            </div>
        </div>
    
    <!-- Video Section -->
    <div class="container-custom video-container animate__animated animate__fadeInUp">
       <video width="600" controls>
        <source src="logo/testvideo.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <!-- Follow Us Instagram Section -->
    <div class="container-custom follow-us animate__animated animate__fadeInUp">
        <img src="./logo/ig.png" alt="Instagram">
        <div>
            <h5>Follow Our Instagram</h5>
            <p> <a href="https://www.instagram.com/himaster.uigm/" target="_blank">@himaster.uigm</a></p>
        </div>
    </div>

    <!-- Footer placeholder -->
   <?php
    include 'footer.php';
   ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script>
      
    </script>
</body>
</html>
