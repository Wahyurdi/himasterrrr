<?php
include 'navbar.php';
include 'loading.php';
function generateEnhancedMediaKreatifCard($title, $description, $memberCount) {
ob_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Humas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        :root {
            --card-1-gradient: linear-gradient(145deg, #ffffff, #f5f5f5);
            --card-2-gradient: linear-gradient(145deg, #f8f9fa, #e9ecef);
            --card-3-gradient: linear-gradient(145deg, #fff5f5, #fff0f0);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            box-sizing: border-box;
            margin: 0;
            
        }

         .tentang-card {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            margin:  40px auto;
            max-width: 400px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .tentang-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }
        .pp-container {
            background-color: transperent;
            padding: 30px 0;
            text-align: center;
        }
        .pp {
            width: 100px;
            height: 100px;
            background-color: #007bff;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 40px;
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        .content {
            padding: 30px;
        }
        h2 {
            margin: 0 0 15px;
            color: #333;
            font-size: 24px;
            text-align: center;
        }
        p {
            margin: 0 0 20px;
            color: #666;
            line-height: 1.6;
        }
        .member-count {
            background: linear-gradient(45deg, #007bff, #00c6ff);
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            position: relative;
            overflow: hidden;
        }
        .member-count::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: rgba(255, 255, 255, 0.1);
            transform: rotate(45deg);
            animation: shine 3s linear infinite;
        }
        @keyframes shine {
            0% { transform: translateX(-100%) rotate(45deg); }
            100% { transform: translateX(100%) rotate(45deg); }
        }
        @media (max-width: 480px) {
            .tentang-card {
                margin: 10px;
            }
            h2 { font-size: 20px; }
            p { font-size: 14px; }
            .member-count { font-size: 24px; }
        }

    
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            justify-content: center;
        }

        /* Style 1: Modern Minimal */
        .id-card-1 {
            width: 300px;
            padding: 20px;
            background: var(--card-1-gradient);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .id-card-1:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        /* Style 2: Elegant Border */
        .id-card-2 {
            width: 300px;
            padding: 20px;
            background: var(--card-2-gradient);
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            border: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .id-card-2::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #3498db, #2ecc71);
            border-radius: 15px 15px 0 0;
        }

        /* Style 3: Soft Design */
        .id-card-3 {
            width: 300px;
            padding: 20px;
            background: var(--card-3-gradient);
            border-radius: 20px;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .id-card-3::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, transparent 50%, rgba(255, 182, 193, 0.1) 50%);
            border-radius: 0 0 20px 0;
        }

      .photo-container {
            width: 260px;  /* Ukuran foto lebih besar */
            height:400px;
            margin: 0 auto 15px;
            position: relative;
            cursor: pointer;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .photo {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        }

        .photo.hidden {
            opacity: 0;
            pointer-events: none;
            transform: scale(1.1);
        }

        .photo-container:hover .photo:not(.hidden) {
            transform: scale(1.05);
        }

        /* indikator foto */
        .photo-indicator {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.5);
            padding: 4px 8px;
            border-radius: 12px;
            color: white;
            font-size: 0.8em;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .photo-container:hover .photo-indicator {
            opacity: 1;
        }

        .info {
            padding: 15px 0;
        }

        .name {
            font-size: 1.5em;
            font-weight: bold;
            margin: 10px 0;
            color: #2c3e50;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .rank {
            font-size: 1.1em;
            color: #34495e;
            margin: 8px 0;
            font-weight: 500;
        }

        .npm {
            background: rgba(52, 152, 219, 0.1);
            color: #2980b9;
            padding: 5px 15px;
            border-radius: 20px;
            display: inline-block;
            margin: 8px 0;
            font-size: 0.9em;
        }

        .address {
            color: #7f8c8d;
            margin: 12px 0;
            font-size: 0.9em;
            line-height: 1.4;
        }

        .social-media {
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        .social-media a {
            color: #2c3e50;
            font-size: 1.5em;
            text-decoration: none;
            transition: all 0.3s ease;
            padding: 8px;
        }

        .social-media a:hover {
            color: #3498db;
            transform: scale(1.1);
        }

        .badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(46, 204, 113, 0.2);
            color: #27ae60;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 0.8em;
            font-weight: 500;
        }

        @media (max-width: 768px) {
            .id-card-1, .id-card-2, .id-card-3 {
                width: 370px;
            }

            .photo-container {
                width: 270px;
                height: 460px;
            }
        }
    </style>
</head>
<body>

          <div class="tentang-card">
        <div class="pp-container">
            <div class="pp">
                <i class="fa fa-code"></i>
            </div>
        </div>
        <div class="content">
            <h2><?php echo htmlspecialchars($title); ?></h2>
            <p><?php echo htmlspecialchars($description); ?></p>
        </div>
        <div class="member-count">
            <span id="counter">0</span> Anggota
        </div>
    </div>

    <div class="container">
        <?php
        $persons = [
            [
                'style' => '1',
                'name' => 'satria dwi anggara',
                'rank' => 'kordinator',
                'npm' => '2022310023',
                'address' => 'Ankatan-2022',
                'instagram' => 'satrrriiiaaa',
                'photo1' => './logo/satria1.png',
                'photo2' => './logo/satria.png'
            ],
            [
                'style' => '1',
                'name' => 'eko joyo satrio',
                'rank' => 'anggota',
                'npm' => '2022310025',
                'address' => 'Ankatan-2022',
                'instagram' => 'satrio021',
                'photo1' => './logo/jemi.png',
                'photo2' => './logo/jemi1.png'
            ],
            [
                'style' => '1',
                'name' => 'akbar peratama',
                'rank' => 'anggota',
                'npm' => '2022310055',
                'address' => 'Angkatan-2022',
                'instagram' => 'xxshaga._',
                'photo1' => './logo/haikal1.png',
                'photo2' => './logo/haikal.png'
            ],
            [
                'style' => '1',
                'name' => 'prastya faturahman',
                'rank' => 'anggota',
                'npm' => '2022310033',
                'address' => 'Angkatan-2022',
                'instagram' => '_prsxxv',
                'photo1' => './logo/fara.png',
                'photo2' => './logo/fara1.png'
            ],
             [
                'style' => '3',
                'name' => 'dwi risky amelia',
                'rank' => 'anggota',
                'npm' => '2022310001',
                'address' => 'Angkatan-2022',
                'instagram' => 'dwiiriskyamelia',
                'photo1' => './logo/ayat.png',
                'photo2' => './logo/ayat1.png'
            ],
             [
                'style' => '1',
                'name' => 'muhammad ardiansyah',
                'rank' => 'anggota',
                'npm' => '2023310048',
                'address' => 'Angkatan-2023',
                'instagram' => '/muhamadardiansyah__', 
                'photo1' => './logo/anggi.png',
                'photo2' => './logo/anggi1.png'
            ],
             [
                'style' => '3',
                'name' => 'fitria nopriyanti',
                'rank' => 'anggota',
                'npm' => '2023310047',
                'address' => 'Angkatan-2023',
                'instagram' => 'ppitria._',
                'photo1' => './logo/meta.png',
                'photo2' => './logo/meta1.png'
            ],
             
        ];

         foreach ($persons as $person) {
            echo <<<HTML
            <div class="id-card-{$person['style']}">
                <div class="photo-container" onclick="togglePhoto(this)" data-current="1">
                    <img src="{$person['photo1']}" class="photo" alt="Foto 1">
                    <img src="{$person['photo2']}" class="photo hidden" alt="Foto 2">
                    <div class="photo-indicator">Klik untuk melihat foto lainnya</div>
                </div>
                <div class="info">
                    <div class="name">{$person['name']}</div>
                    <div class="rank">{$person['rank']}</div>
                    <div class="npm">{$person['npm']}</div>
                    <div class="address">{$person['address']}</div>
                    <div class="social-media">
                        <a href="https://instagram.com/{$person['instagram']}" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            HTML;
        }
        ?>
    </div>
     <?php
    include 'footer.php';
    ?>

    <script>

               function animateCounter(target, duration) {
            let start = 0;
            const increment = target / (duration / 16);
            const counter = document.getElementById('counter');
            
            const timer = setInterval(() => {
                start += increment;
                counter.textContent = Math.floor(start);
                
                if (start >= target) {
                    clearInterval(timer);
                    counter.textContent = target;
                }
            }, 16);
        }
        
        window.onload = () => {
            animateCounter(<?php echo $memberCount; ?>, 2000);
            
            const card = document.querySelector('.media-kreatif-card');
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100);
        };

         function togglePhoto(container) {
            const photos = container.getElementsByClassName('photo');
            const currentPhoto = parseInt(container.dataset.current);
            
            // Toggle foto
            photos[0].classList.toggle('hidden');
            photos[1].classList.toggle('hidden');
            
            // Update indikator current photo
            container.dataset.current = currentPhoto === 1 ? 2 : 1;
            
            // Tambahkan efek ripple saat klik
            const ripple = document.createElement('div');
            ripple.classList.add('ripple');
            container.appendChild(ripple);
            setTimeout(() => ripple.remove(), 1000);
        }
    </script>
    
</body>
</html>
<?php
    return ob_get_clean();
}

// Usage
echo generateEnhancedMediaKreatifCard(
    "Oprasional",
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur velit tempore incidunt nobis architecto vel, laborum voluptatum quis deserunt? Alias sapiente cumque architecto officia dolorem nesciunt quia illum, accusamus corrupti?",
    7
);
?>