<?php
include 'navbar2.php';
include 'loading.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filosofi Logo Himaster</title>
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}


main {
    padding: 20px;
}

.filosofi-logo, .referensi-logo, .rancangan-logo {
    margin-top: 20px;
}

.filosofi-logo h1, .referensi-logo h2, .rancangan-logo h2 {
    font-size: 1.8em;
    margin-bottom: 10px;
    text-align: center;
}

.logo-section {
    display: flex;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
}

.logo-img {
    width: 100%;
    max-width: 150px;
}

.logo-description p {
    margin-bottom: 5px;
}

.reference-images {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    margin-top: 10px;
}

.reference-images img, .rancangan-content img {
    width: 100%;
    max-width: 100px;
}

.rancangan-content {
    text-align: center;
}

.rancangan-content p {
    margin-top: 10px;
}



/* Responsif */
@media (max-width: 768px) {

    .logo-section {
        flex-direction: column;
        text-align: center;
    }

    .reference-images img, .rancangan-content img {
        max-width: 80px;
    }
}

</style>
<body>
   
    <!-- Content -->
    <main>
        <section class="filosofi-logo">
            <h1>Filosofi Logo</h1>
            <div class="logo-section">
                <img src="./logo/p.png" alt="Logo Himaster" class="logo-img">
                <div class="logo-description">
                    <p><strong>Warna:</strong></p>
                    <p><strong>Biru</strong> - Tanggung jawab, Kepercayaan, Profesional.</p>
                    <p><strong>Merah</strong> - Berani, Energi, Semangat.</p>
                    <p><strong>Kuning</strong> - Optimis, Cerdik, Cerdas.</p>
                    <p><strong>Hitam</strong> - Kuat, Persatuan, Elegan.</p>
                </div>
            </div>
        </section>

        <section class="referensi-logo">
            <h2>Referensi Logo</h2>
            <div class="reference-images">
                <img src="./logo/Picture1.png" alt="Referensi Logo 1">
                <img src="./logo/Picture2.png" alt="Referensi Logo 2">
                <img src="./logo/Picture3.png" alt="Referensi Logo 3">
            </div>
        </section>

        <section class="rancangan-logo">
            <h2>Rancangan Logo</h2>
            <div class="rancangan-content">
                <img src="./logo/logo-left.png" alt="Rancangan Logo 1">
                <img src="./logo/logo-mid.png" alt="Rancangan Logo 2">
                <img src="./logo/logo-right.png" alt="Rancangan Logo 3">
                <p>Rancangan logo HIMASTER mengambil referensi dari bentuk gear dan "sistem" sebagai kata kunci. Bentuk S dan K dimodifikasi mengikuti referensi logo.</p>
            </div>
        </section>
    </main>
    <?php
    include 'footer.php';
    ?>
</body>
</html>
