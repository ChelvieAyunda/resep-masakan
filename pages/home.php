<?php
// PHP Sederhana untuk mendapatkan tahun saat ini
$current_year = date("Y");

/**
 * CATATAN PENTING:
 * Di kode ini, saya menggunakan placeholder untuk gambar. 
 * PASTIKAN Anda memiliki file gambar di lokasi: ../assets/img/
 * Jika gambar tidak ada, card akan terlihat kosong.
 */
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RasaKita - Resep Terbaru</title>
    
    <link rel="stylesheet" href="../css/style.css"> 

</head>
<body>

    <header>
        <div class="navbar container">
            <div class="logo">
                <a href="../pages/home.php">RasaKita</a>
            </div>
            <div class="nav-links">
                <a href="../pages/home.php">Home</a>
                <a href="../pages/resep.php">Resep</a>
                <a href="../pages/kategori.php">Kategori</a>
                <a href="../pages/favorite.php">Favorit</a>
                <a href="../auth/login.php">Login</a>
                <a href="../auth/register.php">Register</a>
            </div>
        </div>
    </header>

    <main class="container">
        
        <h1>Resep Terbaru</h1>
        
        <div class="grid">
            
            <a href="detail_resep.php?id=1" class="card">
                <img src="../assets/img/resep_soto.jpg" alt="Soto Ayam">
                <div class="content">
                    <div class="title">Soto Ayam Kuah Bening</div>
                    <div class="author">Oleh: Budi Santoso</div>
                </div>
            </a>
            
            <a href="detail_resep.php?id=2" class="card">
                <img src="../assets/img/resep_rendang.jpg" alt="Rendang Daging">
                <div class="content">
                    <div class="title">Rendang Daging Sapi Empuk</div>
                    <div class="author">Oleh: Siti Aminah</div>
                </div>
            </a>

            <a href="detail_resep.php?id=3" class="card">
                <img src="../assets/img/resep_nasigoreng.jpg" alt="Nasi Goreng">
                <div class="content">
                    <div class="title">Nasi Goreng Kampung Pedas</div>
                    <div class="author">Oleh: Chef Juna</div>
                </div>
            </a>

            <a href="detail_resep.php?id=4" class="card">
                <img src="../assets/img/resep_gulai.jpg" alt="Gulai Ikan">
                <div class="content">
                    <div class="title">Gulai Ikan Kakap Merah</div>
                    <div class="author">Oleh: Farah Quinn</div>
                </div>
            </a>

            </div>
        
    </main>

    <footer class="mega-footer">

        <div class="footer-container">

            <div class="footer-section">
                <h3>Tentang Kami</h3>
                <p>
                    Misi kami di <strong>RasaKita</strong> adalah membuat kegiatan memasak
                    menjadi lebih mudah, menyenangkan, dan menginspirasi. Kami percaya bahwa
                    berbagi resep dapat membantu satu sama lain menciptakan hidangan yang lebih baik.
                </p>
            </div>

            <div class="footer-section">
                <h3>Komunitas RasaKita</h3>
                <div class="country-list">
                    <a href="#">Indonesia</a>
                    <a href="#">Malaysia</a>
                    <a href="#">Singapura</a>
                    <a href="#">Filipina</a>
                    <a href="#">Thailand</a>
                    <a href="#">Vietnam</a>
                    <a href="#">Lihat Semua</a>
                </div>
            </div>

            <div class="footer-section">
                <h3>Selengkapnya</h3>
                <ul>
                    <li><a href="#">Premium</a></li>
                    <li><a href="#">Karir</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Kirim Saran</a></li>
                    <li><a href="#">Kebijakan Privasi</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Ikuti Kami</h3>
                <div class="social-icons">
                    <a href="#"><img src="../assets/img/facebook.png" alt="Facebook"></a>
                    <a href="#"><img src="../assets/img/instagram.png" alt="Instagram"></a>
                    <a href="#"><img src="../assets/img/youtube.png" alt="Youtube"></a>
                    <a href="#"><img src="../assets/img/tiktok.png" alt="TikTok"></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            &copy; <?php echo $current_year; ?> RasaKita. Semua hak dilindungi.
        </div>

    </footer>

</body>
</html>


<?php
// PHP Sederhana untuk mendapatkan tahun saat ini, digunakan di footer
$current_year = date("Y");

/**
 * PENTING:
 * Bagian di dalam <div class="grid"> adalah contoh statis (hardcoded).
 * Dalam pengembangan nyata, Anda akan mengganti seluruh blok statis ini 
 * dengan koneksi database dan loop PHP (misalnya: while/foreach) untuk 
 * menampilkan resep secara dinamis.
 */
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RasaKita - Resep Terbaru</title>
    
    <link rel="stylesheet" href="assets/style.css"> 

</head>
<body>

    <header>
        <div class="navbar container">
            <div class="logo">
                <a href="home.php">RasaKita</a>
            </div>
            <div class="nav-links">
                <a href="home.php">Home</a>
                <a href="resep.php">Resep</a>
                <a href="kategori.php">Kategori</a>
                <a href="favorite.php">Favorit</a>
                <a href="../auth/login.php">Login</a>
                <a href="../auth/register.php">Register</a>
            </div>
        </div>
    </header>

    <main class="container">
        
        <h1>Resep Terbaru</h1>
        
        <div class="grid">
            
            <a href="detail_resep.php?id=1" class="card">
                <img src="../assets/img/resep_soto.jpg" alt="Soto Ayam">
                <div class="content">
                    <div class="title">Soto Ayam Kuah Bening</div>
                    <div class="author">Oleh: Budi Santoso</div>
                </div>
            </a>
            
            <a href="detail_resep.php?id=2" class="card">
                <img src="../assets/img/resep_rendang.jpg" alt="Rendang Daging">
                <div class="content">
                    <div class="title">Rendang Daging Sapi Empuk</div>
                    <div class="author">Oleh: Siti Aminah</div>
                </div>
            </a>

            <a href="detail_resep.php?id=3" class="card">
                <img src="../assets/img/resep_nasigoreng.jpg" alt="Nasi Goreng">
                <div class="content">
                    <div class="title">Nasi Goreng Kampung Pedas</div>
                    <div class="author">Oleh: Chef Juna</div>
                </div>
            </a>

            <a href="detail_resep.php?id=4" class="card">
                <img src="../assets/img/resep_gulai.jpg" alt="Gulai Ikan">
                <div class="content">
                    <div class="title">Gulai Ikan Kakap Merah</div>
                    <div class="author">Oleh: Farah Quinn</div>
                </div>
            </a>
            
            <a href="detail_resep.php?id=5" class="card">
                <img src="../assets/img/resep_sambal.jpg" alt="Sambal Matah">
                <div class="content">
                    <div class="title">Sambal Matah Khas Bali</div>
                    <div class="author">Oleh: Nia Sari</div>
                </div>
            </a>

            <a href="detail_resep.php?id=6" class="card">
                <img src="../assets/img/resep_cake.jpg" alt="Red Velvet Cake">
                <div class="content">
                    <div class="title">Red Velvet Cake Lembut</div>
                    <div class="author">Oleh: Lisa Baking</div>
                </div>
            </a>
            
            </div>
        
    </main>

    <footer class="mega-footer">

        <div class="footer-container">

            <div class="footer-section">
                <h3>Tentang Kami</h3>
                <p>
                    Misi kami di <strong>RasaKita</strong> adalah membuat kegiatan memasak
                    menjadi lebih mudah, menyenangkan, dan menginspirasi. Kami percaya bahwa
                    berbagi resep dapat membantu satu sama lain menciptakan hidangan yang lebih baik.
                </p>
            </div>

            <div class="footer-section">
                <h3>Komunitas RasaKita</h3>
                <div class="country-list">
                    <a href="#">Indonesia</a>
                    <a href="#">Malaysia</a>
                    <a href="#">Singapura</a>
                    <a href="#">Filipina</a>
                    <a href="#">Thailand</a>
                    <a href="#">Vietnam</a>
                    <a href="#">Lihat Semua</a>
                </div>
            </div>

            <div class="footer-section">
                <h3>Selengkapnya</h3>
                <ul>
                    <li><a href="#">Premium</a></li>
                    <li><a href="#">Karir</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Kirim Saran</a></li>
                    <li><a href="#">Kebijakan Privasi</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Ikuti Kami</h3>
                <div class="social-icons">
                    <a href="#"><img src="../assets/img/facebook.png" alt="Facebook"></a>
                    <a href="#"><img src="../assets/img/instagram.png" alt="Instagram"></a>
                    <a href="#"><img src="../assets/img/youtube.png" alt="Youtube"></a>
                    <a href="#"><img src="../assets/img/tiktok.png" alt="TikTok"></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            &copy; <?php echo $current_year; ?> RasaKita. Semua hak dilindungi.
        </div>

    </footer>

</body>
</html>