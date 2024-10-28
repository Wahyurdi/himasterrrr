<?php
include 'navbar.php';
include 'loading.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UIGM Palembang</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        /* Hero Section */
       .banner {
            width: 100%;
            height:auto;
            display:block;
            margin: 0 auto;
        }

        /* Title Section */
        .title-section {
            background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
            padding: 50px 20px;
            text-align: center;
            margin-top: -50px;
            position: relative;
            z-index: 2;
        }

        .title-container {
            max-width: 1000px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .main-title {
            font-size: 3.5rem;
            color: #1a2a6c;
            margin-bottom: 20px;
            animation: fadeInDown 1s ease;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* Description Section */
        .description-section {
            background: #f5f5f5;
            padding: 50px 20px;
            text-align: center;
        }

        .description-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            animation: fadeIn 1s ease;
        }

        .description-text {
            font-size: 1.3rem;
            line-height: 1.8;
            color: #333;
            margin-bottom: 30px;
        }

        /* Social Section */
        .social-section {
            background: linear-gradient(45deg, #1a2a6c, #b21f1f);
            padding: 40px 20px;
            text-align: center;
        }

        .social-container {
            max-width: 600px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
        }

        .social-title {
            color: white;
            font-size: 2rem;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 40px;
            animation: fadeInUp 1s ease;
        }

        .social-icon {
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 35px;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
        }

        .social-icon:hover {
            transform: translateY(-5px);
        }

        .instagram {
            background: #d6249f;
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
            box-shadow: 0px 5px 15px rgba(214,36,159,0.4);
        }

        .whatsapp {
            background: #25D366;
            box-shadow: 0px 5px 15px rgba(37,211,102,0.4);
        }

        /* Maps Section */
        .maps-container {
            padding: 60px 20px;
            background: white;
        }

        .maps-wrapper {
            max-width: 1200px;
            margin: 0 auto;
        }

        .maps-responsive {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .maps-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-section {
                height: 50vh;
            }

            .main-title {
                font-size: 2.5rem;
            }

            .description-text {
                font-size: 1.1rem;
            }

            .social-icon {
                width: 60px;
                height: 60px;
                font-size: 30px;
            }
        }

        @media (max-width: 480px) {
            .hero-section {
                height: 40vh;
            }

            .main-title {
                font-size: 2rem;
            }

            .description-text {
                font-size: 1rem;
            }

            .social-icons {
                gap: 20px;
            }

            .social-icon {
                width: 50px;
                height: 50px;
                font-size: 25px;
            }
        }
    </style>
</head>
<body>

<?php
$heroTitle = "Himaster";
$heroDescription = "Untuk kepentingan Kerjasama dan lainnya,anda dapat menghubungisalah satu layanan kami.terimakasih!";
$instagramUrl = "https://www.instagram.com/himaster.uigm/";
$whatsappUrl = "https://wa.me/+6281234567890"; // Ganti nomor wa nyo
?>

<!-- bener -->
 <div class="header text-center">
        <img src="./logo/kontak.jpg" alt="Banner" class="banner animate__animated animate__fadeIn">
    </div>



<!--kontak -->
<section class="description-section">
    <div class="description-container">
        <h1 class="main-title"><?php echo htmlspecialchars($heroTitle); ?></h1>
        <p class="description-text"><?php echo htmlspecialchars($heroDescription); ?></p>
         <div class="social-icons">
            <a href="<?php echo htmlspecialchars($instagramUrl); ?>" class="social-icon instagram" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="<?php echo htmlspecialchars($whatsappUrl); ?>" class="social-icon whatsapp" target="_blank">
                <i class="fab fa-whatsapp"></i>
            </a>
    </div>
</section>



<!-- Maps Section -->
<div class="maps-container">
    <div class="maps-wrapper">
        <div class="maps-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.4849267770833!2d104.73826907478238!3d-2.96286099701329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75cdb9147ded%3A0xbc5023001e3a77b1!2sUniversitas%20Indo%20Global%20Mandiri%20Palembang!5e0!3m2!1sid!2sid!4v1729884458632!5m2!1sid!2sid" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>

</body>
</html>