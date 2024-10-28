 <!-- Navbar -->
    <?php
     include('navbar.php');
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Himpunan Mahasiswa Sistem Komputer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
      
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            color: #333;
        }

       
        h2 {
            font-size: clamp(2rem, 4vw, 2.5rem);
            font-weight: 700;
            margin-bottom: 1.5rem;
            position: relative;
        }

        p {
            font-size: clamp(1rem, 2vw, 1.125rem);
            margin-bottom: 1rem;
            line-height: 1.8;
        }

        .section {
            padding: clamp(3rem, 8vw, 5rem) clamp(1rem, 5vw, 3rem);
            position: relative;
            overflow: hidden;
        }

       
        .section-tentang {
            
            color: black;
            display: flex;
            flex-direction: column;
            gap: 2rem;
            align-items: center;
            text-align: center;
        }

        .section-tentang img {
            width: min(320px, 80%);
            height: auto;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .section-tentang img:hover {
            transform: translateY(-10px);
        }

       
        /* VISI */
          .section-visi {
            background:  linear-gradient(135deg, #00267d, #001a5c);
            color: white;
            display: flex;
            flex-wrap: wrap;
            gap: 3rem;
            justify-content: space-between;
            align-items: center;
        }

        .section-visi .content {
            flex: 1;
            min-width: 300px;
        }

        .section-visi p {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            padding: 1.5rem;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .section-visi img {
            max-width: 400px;
            width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .section-visi img:hover {
            transform: scale(1.02);
        }


        /* Misi Sectio */
        .section-misi {
            background: linear-gradient(135deg, #e21d1d, #c41818);
            color: white;
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
            gap: 3rem;
            justify-content: space-between;
            align-items: center;
        }

        .section-misi .content {
            flex: 1;
            min-width: 300px;
        }

        .section-misi p {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            padding: 1.5rem;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .section-misi img {
            max-width: 400px;
            width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .section-misi img:hover {
            transform: scale(1.02);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .section-tentang {
                text-align: center;
            }

            .section-visi, .section-misi {
                flex-direction: column;
                text-align: center;
            }

            .section-visi img, .section-misi img {
                margin: 0 auto;
            }

            
            .section-visi, .section-misi {
                flex-direction: column;
                text-align: center;
            }

            .section-visi img, .section-misi img {
                margin: 0 auto;
            }

            .section-visi, .section-misi {
                flex-direction: column-reverse;
            }
        }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .section {
            animation: fadeIn 0.8s ease-out forwards;
        }

        /* Hover Effects */
        .section p {
            transition: transform 0.3s ease;
        }

        .section p:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
   

    <!-- Tentang Kami Section -->
    <section class="section section-tentang">
        <img src="logo/p.png" alt="Logo HMSK">
        <div class="content">
            <h2>Tentang Kami</h2>
            <p>Himpunan Mahasiswa Sistem Komputer adalah sebuah organisasi di Universitas Indo Global Mandiri yang dibentuk oleh mahasiswa jurusan Sistem Komputer. Organisasi ini berfungsi sebagai wadah untuk mengembangkan potensi mahasiswa, baik di bidang akademik maupun non-akademik.</p>
        </div>
    </section>

    <!-- Visi Section -->

    <section class="section section-visi">
        <img src="logo/vara1.png" alt="Misi Illustration">
        <div class="content">
            <h2>VISI</h2>
            <p>
              Menghasilkan Mahasiswa yang Siap Bersaing di Dunia Kerja: Membina mahasiswa dengan jaringan profesional yang baik dan soft skills yang kuat, siap menghadapi tantangan profesional
            </p>
        </div>
    </section>

    <!-- Misi Section -->
    <section class="section section-misi">
        <img src="logo/vara2.png" alt="Misi Illustration">
        <div class="content">
            <h2>MISI</h2>
            <p>
                Fasilitasi Kolaborasi dan Networking: Membangun dan memperkuat jaringan profesional antara mahasiswa, akademisi, dan industri melalui seminar, workshop, dan proyek kolaboratif.<br><br>
                Program Pengembangan Soft Skills: Mengadakan berbagai kegiatan organisasi yang mendorong partisipasi aktif anggota untuk mengasah keterampilan komunikasi, kepemimpinan, dan kerjasama.
            </p>
        </div>
    </section>

    <!-- Footer -->
    <?php include('footer.php'); ?>
</body>
</html>