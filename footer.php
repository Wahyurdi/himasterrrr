<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Menarik</title>
    <script src="https://cdn.tailwindcss.com"></script>
   
</head>
<body>

<?php
// Data untuk footer
$companyInfo = [
    'name' => 'Himaster',
    'tagline' => 'Apa itu Himaster',
    'description' => 'Himaster adalah Himpunan Mahasiswa Sistem Komputer yang mewadahi kegiatan mahasiswa jurusan Sistem Komputer Universitas Indo Global mandiri.'
];

$featuredServices = [
    ['name' => 'Web Development', 'icon' => 'fas fa-laptop-code'],
    ['name' => 'Digital Marketing', 'icon' => 'fas fa-chart-line']
];


$contactInfo = [
    ['icon' => 'fas fa-map-marker-alt', 'text' => 'jl.jend.sudirman'],
    ['icon' => 'fas fa-phone', 'text' => '(021) 1234-5678'],
    ['icon' => 'fas fa-envelope', 'text' => 'himaster@ac.id'],
    ['icon' => 'fas fa-clock', 'text' => 'Senin - Jumat: 09:00 - 17:00']
];

$socialMedia = [
    'Facebook' => ['icon' => 'fab fa-facebook', 'link' => '#'],
    'Twitter' => ['icon' => 'fab fa-twitter', 'link' => '#'],
    'Instagram' => ['icon' => 'fab fa-instagram', 'link' => '#'],
    'LinkedIn' => ['icon' => 'fab fa-linkedin', 'link' => '#'],
    'YouTube' => ['icon' => 'fab fa-youtube', 'link' => '#']
];


?>


<!-- Main Footer -->
<footer class="bg-gray-900 text-white pt-16 pb-8">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Top Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <!-- Company Info -->
            <div class="space-y-4">
                <h2 class="text-3xl font-bold text-blue-400"><?php echo htmlspecialchars($companyInfo['name']); ?></h2>
                <p class="text-xl font-semibold text-gray-300"><?php echo htmlspecialchars($companyInfo['tagline']); ?></p>
                <p class="text-gray-400"><?php echo htmlspecialchars($companyInfo['description']); ?></p>
                
                <!-- Social Media Icons -->
                <div class="flex space-x-4 mt-6">
                    <?php foreach ($socialMedia as $platform => $data): ?>
                        <a href="<?php echo htmlspecialchars($data['link']); ?>" 
                           class="bg-gray-800 p-2 rounded-full hover:bg-blue-500 transition-colors duration-300" 
                           aria-label="<?php echo htmlspecialchars($platform); ?>">
                            <i class="<?php echo htmlspecialchars($data['icon']); ?>"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Quick Links - Two Columns -->
        

            <!-- Services -->
            <div>
                <h3 class="text-lg font-semibold mb-4 text-blue-400">Layanan Kami</h3>
                <div class="grid grid-cols-1 gap-4">
                    <?php foreach ($featuredServices as $service): ?>
                        <div class="flex items-center space-x-3">
                            <i class="<?php echo htmlspecialchars($service['icon']); ?> text-yellow-500"></i>
                            <span class="text-gray-400"><?php echo htmlspecialchars($service['name']); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-semibold mb-4 text-blue-400">Hubungi Kami</h3>
                <ul class="space-y-4">
                    <?php foreach ($contactInfo as $info): ?>
                        <li class="flex items-center space-x-3">
                            <i class="<?php echo htmlspecialchars($info['icon']); ?> text-yellow-500"></i>
                            <span class="text-gray-400"><?php echo htmlspecialchars($info['text']); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>



        <!-- Bottom Bar -->
        <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-400 text-sm mb-4 md:mb-0">
                &copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($companyInfo['name']); ?>. 
                Hak Cipta Dilindungi.
            </p>
            <div class="flex space-x-4 text-sm text-gray-400">
                <a href="#" class="hover:text-blue-400 transition-colors duration-300">Kebijakan Privasi</a>
                <span>|</span>
                <a href="#" class="hover:text-blue-400 transition-colors duration-300">Syarat & Ketentuan</a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>