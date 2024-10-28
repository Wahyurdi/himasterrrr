<?php
session_start();

function showPopupMessage($type = '') {
    if (isset($_SESSION['popup_message'])) {
        $message = $_SESSION['popup_message'];
        unset($_SESSION['popup_message']);
        return $message;
    }
    return '';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Himaster</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
        :root {
            --primary-color: #3498db;
            --background-color: #ffffff;
            --text-color: #333333;
            --hover-color: #f0f0f0;
            --shadow-color: rgba(0, 0, 0, 0.1);
            --transition-speed: 0.3s;
            --link-hover: rgba(255, 255, 255, 0.2);
            --active-link: rgba(255, 255, 255, 0.3);
            --navbar-height: 70px;
        }

        body {
            font-family: "Arial", sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            transition: background-color var(--transition-speed),
                color var(--transition-speed);
        }

        .navbar {
            background-color: #f1f1f1;
            box-shadow: 0 2px 4px var(--shadow-color);
            position: sticky;
            top: 0;
            z-index: 1000;
            height: var(--navbar-height);
            display: flex;
            align-items: center;
           
        }

        .navbar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
        }

        .navbar-logo {
            display: flex;
            align-items: center;
            gap: 1.2rem;
            padding: 0.5rem 0;
        }

        .navbar-logo .logo {
            height: 45px;
            width: auto;
            object-fit: contain;
            transition: transform 0.3s ease;
        }

        .navbar-logo:hover .logo {
            transform: scale(1.05);
        }

        .navbar-logo .title {
            color: white;
            font-size: 1.8rem;
            font-weight: bold;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            background: black;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-links {
            display: flex;
            gap: 2rem;
            margin: 0 3rem;
        }

        .nav-link {
            text-decoration: none;
            color: black;
            padding: 0.8rem 1.2rem;
            border-radius: 0.25rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        .nav-link:hover {
            background: var(--link-hover);
            transform: translateY(-2px);
        }

        .dropdown .fa-chevron-down {
            font-size: 0.8rem;
            transition: transform 0.3s ease;
        }

        .dropdown:hover .fa-chevron-down {
            transform: rotate(-180deg);
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%) translateY(10px);
            opacity: 0;
            visibility: hidden;
            background:white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            min-width: 300px;
            z-index: 1000;
        }

        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }

        .dropdown-content {
            padding: 1rem;
        }

        .dropdown-header {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding-bottom: 1rem;
            margin-bottom: 1rem;
            border-bottom: 1px solid var(--hover-color);
        }

        .dropdown-header i {
            font-size: 1.5rem;
            color: var(--primary-color);
        }

        .dropdown-header h3 {
            color: var(--text-color);
            font-size: 1.1rem;
            margin: 0;
        }

        .dropdown-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0.75rem;
        }

        .dropdown-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem;
            text-decoration: none;
            color: var(--text-color);
            border-radius: 8px;
            transition: all 0.3s ease;
            background: transparent;
        }

        .dropdown-item i {
            font-size: 1.1rem;
            color: var(--primary-color);
            transition: transform 0.3s ease;
        }

        .dropdown-item:hover {
            background: var(--hover-color);
            transform: translateY(-2px);
        }

        .dropdown-item:hover i {
            transform: scale(1.2);
        }

        .dropdown-item span {
            font-size: 0.9rem;
        }


        .navbar-actions {
            display: flex;
            gap: 1rem;
            margin-left: 1.5rem;
        }

        .navbar-actions button {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: black;
            cursor: pointer;
            padding: 0.8rem;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .navbar-actions button:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: rotate(15deg);
        }

          .menu-button {
    display: none !important;
}


        

        @media (max-width: 768px) {
            .navbar-container {
                padding: 0 1rem;
            }

            .navbar-logo .title {
                font-size: 1.4rem;
            }

            .navbar-logo .logo {
                height: 35px;
            }

            .menu-button {
                display: flex !important;
                align-items: center;
                justify-content: center;
            }

            .navbar-links {
                position: absolute;
                top: var(--navbar-height);
                left: 0;
                right: 0;
                background: white;
                padding: 1rem;
                gap: 1rem;
                margin: 0;
                display: none;
                flex-direction: column;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .navbar-links.active {
                display: flex;
            }
            

            .dropdown-menu {
                position: static;
                transform: none;
                opacity: 1;
                visibility: visible;
                box-shadow: none;
                min-width: 100%;
                display: none;
            }
             .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateX(-0%) translateY(0);
        }

            .dropdown.active .dropdown-menu {
                display: block;
            }

            .dropdown-grid {
                grid-template-columns: 1fr;
            }

            .navbar-actions {
                margin-left: auto;
            }
        }

        .dark-mode {
            --background-color: #1a202c;
            --text-color: #ffffff;
            --hover-color: #2d3748;
            --search-background: #2d3748;
            --shadow-color: rgba(0, 0, 0, 0.3);
        }

        .dark-mode .dropdown-menu {
            background: #2d3748;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        .dark-mode .dropdown-header {
            border-bottom-color: #4a5568;
        }

        .dark-mode .dropdown-item:hover {
            background: #4a5568;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
            .popup-trigger {
            background: linear-gradient(135deg, #00267d, #001a5c);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 500;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .popup-trigger:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 38, 125, 0.3);
        }

        /* Popup Overlay */
        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(5px);
            z-index: 1000;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        /* Popup Content */
        .popup-content {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.7);
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            z-index: 1001;
            width: 90%;
            max-width: 500px;
            opacity: 0;
            transition: all 0.3s ease;
            text-align: center;
        }

        /* Popup Animation Classes */
        .popup-overlay.active {
            display: block;
            opacity: 1;
        }

        .popup-content.active {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }

        /* Popup Content Styling */
        .popup-header {
            margin-bottom: 1.5rem;
        }

        .popup-header i {
            font-size: 3rem;
            color: #00267d;
            margin-bottom: 1rem;
            animation: pulse 2s infinite;
        }

        .popup-header h2 {
            color: #00267d;
            font-size: 1.8rem;
            margin: 0.5rem 0;
        }

        .popup-body {
            margin-bottom: 1.5rem;
            color: #666;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .popup-timer {
            font-size: 1.2rem;
            color: #00267d;
            font-weight: bold;
            margin: 1rem 0;
        }

        .popup-close {
            display: inline-block;
            padding: 12px 24px;
            background: linear-gradient(135deg, #00267d, #001a5c);
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .popup-close:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 38, 125, 0.3);
        }

        /* Animations */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        @keyframes slideIn {
            0% { transform: translateY(-100px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }

        /* Progress Bar */
        .progress-bar {
            width: 100%;
            height: 4px;
            background: #eee;
            border-radius: 2px;
            margin: 1rem 0;
            overflow: hidden;
        }

        .progress-bar-fill {
            width: 0%;
            height: 100%;
            background: linear-gradient(90deg, #00267d, #001a5c);
            transition: width 0.3s ease;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .popup-content {
                width: 95%;
                padding: 1.5rem;
            }

            .popup-header h2 {
                font-size: 1.5rem;
            }

            .popup-body {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <audio id="audio" autoplay loop style="display: none;">
        <source src="./lagu/lagu.mp3" type="audio/mpeg">
    </audio>
    <nav class="navbar">
        <div class="navbar-container">
            <div class="navbar-logo">
                <img src="./logo/p.png" alt="Logo" class="logo" />
                <span class="title">HIMASTER</span>
            </div>

            <div class="navbar-links">
                <div class="nav-item">
                    <a href="home.php" class="nav-link active">
                        <span>Home</span>
                    </a>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link">
                        <span>Profil</span>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-content">
                            <div class="dropdown-header">
                                <i class="fas fa-users"></i>
                                <h3>Profil Divisi</h3>
                            </div>
                            <div class="dropdown-grid">
                                <a href="./pengurus.php" class="dropdown-item">
                                   <i class="fa fa-user-secret" aria-hidden="true"></i>
                                    <span>Pengurus</span>
                                </a>
                                <a href="./it.php" class="dropdown-item">
                                   <i class="fa fa-code" aria-hidden="true"></i>
                                    <span>IT</span>
                                </a>
                                <a href="./humas.php" class="dropdown-item">
                                   <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                    <span>Humas</span>
                                </a>
                                <a href="./psdm.php" class="dropdown-item">
                                    <i class="fa fa-street-view" aria-hidden="true"></i>
                                    <span>PSDM</span>
                                </a>
                                <a href="pubdok.php" class="dropdown-item">
                                    <i class="fa fa-folder-open" aria-hidden="true"></i>
                                    <span>Pubdok</span>
                                </a>
                                <a href="media.php" class="dropdown-item">
                                    <i class="fa fa-camera-retro" aria-hidden="true"></i>
                                    <span>Media</span>
                                </a>
                                <a href="opra.php" class="dropdown-item">
                                    <i class="fas fa-calendar-check"></i>
                                    <span>Operasional</span>
                                </a>
                                <a href="wirau.php" class="dropdown-item">
                                    <i class="fa fa-line-chart" aria-hidden="true"></i>
                                    <span>Kewirausahaan</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link">
                        <span>Berita</span>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-content">
                            <div class="dropdown-header">
                                <i class="fas fa-newspaper"></i>
                                <h3>Kategori Berita</h3>
                            </div>
                            <div class="dropdown-grid">
                                <a href="./penguman.php" class="dropdown-item">
                                    <i class="fas fa-bullhorn"></i>
                                    <span>Pengumuman</span>
                                </a>
                                <a href="./events.php" class="dropdown-item">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Event</span>
                                </a>
                                <a href="filosofi.php" class="dropdown-item">
                                    <i class="fas fa-newspaper"></i>
                                    <span>Filosofi Logo</span>
                                </a>
                                <a href="./kontak.php" class="dropdown-item">
                                    <i class="fa fa-address-book" aria-hidden="true"></i>
                                    <span>Kontak</span>
                                </a>
                                  <button class="popup-trigger" onclick="showPopup() "class="dropdown-item">
                                      <i class="fas fa-user-plus"></i> Daftar anggota baru
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="navbar-actions">
                <button id="darkModeBtn">
                    <i class="fas fa-moon"></i>
                </button>
                <button id="menuBtn" class="menu-button">
                    <i class="fas fa-bars"></i>
                </button>
            </div>


        </div>
          <!-- Popup Overlay -->
<div class="popup-overlay" id="popupOverlay">
    <div class="popup-content" id="popupContent">
        <div class="popup-header">
            <i class="fas fa-clock"></i>
            <h2>Coming Soon!</h2>
        </div>
        <div class="popup-body">
            <p>Silakan kembali lagi di lain hari</p>
            <div class="progress-bar">
                <div class="progress-bar-fill" id="progressBar"></div>
            </div>
           
        <button class="popup-close" onclick="hidePopup()">oke</button>
    </div>
</div>
    </nav>
  

<script>

       

  const audio = document.getElementById('audio');

        // Ambil waktu pemutaran dari session PHP saat halaman baru dimuat
        window.addEventListener('load', () => {
            <?php if (isset($_SESSION['currentTime'])): ?>
            audio.currentTime = <?php echo $_SESSION['currentTime']; ?>;
            audio.play();
            <?php endif; ?>
        });

        // Kirim waktu pemutaran ke PHP sebelum meninggalkan halaman
        window.addEventListener('beforeunload', () => {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "save_time.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send("currentTime=" + audio.currentTime);
        });


        document.addEventListener('DOMContentLoaded', function() {
            // Element selections
            const menuBtn = document.getElementById('menuBtn');
            const navLinks = document.querySelector('.navbar-links');
            const darkModeBtn = document.getElementById('darkModeBtn');
            const dropdowns = document.querySelectorAll('.dropdown');
            const body = document.body;

            
            // Dark Mode functionality
            function initDarkMode() {
                const isDarkMode = localStorage.getItem('darkMode') === 'true';
                if (isDarkMode) {
                    body.classList.add('dark-mode');
                    updateDarkModeIcon(true);
                }

                darkModeBtn.addEventListener('click', () => {
                    body.classList.toggle('dark-mode');
                    const isDark = body.classList.contains('dark-mode');
                    localStorage.setItem('darkMode', isDark);
                    updateDarkModeIcon(isDark);
                });
            }

            function updateDarkModeIcon(isDark) {
                const icon = darkModeBtn.querySelector('i');
                if (isDark) {
                    icon.classList.remove('fa-moon');
                    icon.classList.add('fa-sun');
                } else {
                    icon.classList.remove('fa-sun');
                    icon.classList.add('fa-moon');
                }
            }

            // Mobile Menu functionality
            function initMobileMenu() {
                menuBtn.addEventListener('click', () => {
                    navLinks.classList.toggle('active');
                    const icon = menuBtn.querySelector('i');
                    icon.classList.toggle('fa-bars');
                    icon.classList.toggle('fa-times');
                });

                // Close menu when clicking outside
                document.addEventListener('click', (e) => {
                    if (!navLinks.contains(e.target) && 
                        !menuBtn.contains(e.target) && 
                        navLinks.classList.contains('active')) {
                        navLinks.classList.remove('active');
                        menuBtn.querySelector('i').classList.replace('fa-times', 'fa-bars');
                    }
                });
            }

            // Dropdown functionality
            function initDropdowns() {
                dropdowns.forEach(dropdown => {
                    const link = dropdown.querySelector('.nav-link');
                    
                    link.addEventListener('click', (e) => {
                        if (window.innerWidth <= 768) {
                            e.preventDefault();
                            
                            // Close other dropdowns
                            dropdowns.forEach(other => {
                                if (other !== dropdown) {
                                    other.classList.remove('active');
                                    const otherChevron = other.querySelector('.fa-chevron-down');
                                    if (otherChevron) otherChevron.style.transform = 'rotate(0)';
                                }
                            });
                            
                            // Toggle current dropdown
                            dropdown.classList.toggle('active');
                            const chevron = dropdown.querySelector('.fa-chevron-down');
                            chevron.style.transform = dropdown.classList.contains('active') 
                                ? 'rotate(-180deg)' 
                                : 'rotate(0)';
                        }
                    });
                });
            }

            // Search functionality
            function initSearch() {
                let searchTimeout;

                function performSearch() {
                    const searchTerm = searchInput.value.trim().toLowerCase();
                    if (!searchTerm) {
                        searchResults.style.display = 'none';
                        return;
                    }

                    const results = {
                        anggota: sampleData.anggota.filter(item => 
                            item.nama.toLowerCase().includes(searchTerm) ||
                            item.jabatan.toLowerCase().includes(searchTerm) ||
                            item.divisi.toLowerCase().includes(searchTerm)
                        ),
                        berita: sampleData.berita.filter(item =>
                            item.judul.toLowerCase().includes(searchTerm) ||
                            item.kategori.toLowerCase().includes(searchTerm)
                        ),
                        agenda: sampleData.agenda.filter(item =>
                            item.nama.toLowerCase().includes(searchTerm) ||
                            item.lokasi.toLowerCase().includes(searchTerm)
                        )
                    };

                    displaySearchResults(results);
                }

                

                // Close search results when clicking outside
                
            }

            // Initialize all functionalities
            initDarkMode();
            initMobileMenu();
            initDropdowns();
            initSearch();

            // Handle window resize
            window.addEventListener('resize', () => {
                if (window.innerWidth > 768) {
                    navLinks.classList.remove('active');
                    menuBtn.querySelector('i').classList.replace('fa-times', 'fa-bars');
                    
                    dropdowns.forEach(dropdown => {
                        dropdown.classList.remove('active');
                        const chevron = dropdown.querySelector('.fa-chevron-down');
                        if (chevron) chevron.style.transform = 'rotate(0)';
                    });
                }
            });
        });

        // anggota baru
         function showPopup() {
    const overlay = document.getElementById('popupOverlay');
    const content = document.getElementById('popupContent');
    const progressBar = document.getElementById('progressBar');
    const timer = document.getElementById('timer');
    
    overlay.classList.add('active');
    content.classList.add('active');
    
    //  bar animation
    let progress = 0;
    const progressInterval = setInterval(() => {
        progress += 1;
        progressBar.style.width = `${progress}%`;
        
        if (progress >= 100) {
            clearInterval(progressInterval);
        }
    }, 50);

  
}

function hidePopup() {
    const overlay = document.getElementById('popupOverlay');
    const content = document.getElementById('popupContent');
    
    overlay.classList.remove('active');
    content.classList.remove('active');
}


document.getElementById('popupOverlay').addEventListener('click', function(e) {
    if (e.target === this) {
        hidePopup();
    }
});
    </script>
</body>
</html>