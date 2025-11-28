<footer class="mega-footer">

    <div class="footer-container">

        <!-- Tentang Kami -->
        <div class="footer-section">
            <h3>Tentang Kami</h3>
            <p>
                Misi kami di <strong>RasaKita</strong> adalah membuat kegiatan memasak
                menjadi lebih mudah, menyenangkan, dan menginspirasi. Kami percaya bahwa
                berbagi resep dapat membantu satu sama lain menciptakan hidangan yang lebih baik.
            </p>
        </div>

        <!-- Negara (opsional, bisa dihapus jika tidak perlu) -->
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

        <!-- Menu tambahan -->
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

        <!-- Social Media -->
        <div class="footer-section">
            <h3>Ikuti Kami</h3>
            <div class="social-icons">
                <a href="#"><img src="/assets/img/facebook.png" alt="fb"></a>
                <a href="#"><img src="/assets/img/instagram.png" alt="ig"></a>
                <a href="#"><img src="/assets/img/youtube.png" alt="yt"></a>
                <a href="#"><img src="/assets/img/tiktok.png" alt="tiktok"></a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        &copy; <?php echo date("Y"); ?> RasaKita. Semua hak dilindungi.
    </div>

</footer>


<style>
/* --- FOOTER STYLE --- */

.mega-footer {
    background: #fff;
    border-top: 1px solid #e4e4e4;
    margin-top: 40px;
    padding: 40px 20px 10px 20px;
    font-family: Arial, sans-serif;
    color: #444;
}

.footer-container {
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 30px;
}

.footer-section h3 {
    margin-bottom: 10px;
    font-size: 16px;
    color: #222;
}

.footer-section p {
    font-size: 14px;
    line-height: 1.5;
}

.country-list a,
.footer-section ul li a {
    font-size: 14px;
    color: #555;
    margin-right: 10px;
    text-decoration: none;
}

.country-list a:hover,
.footer-section ul li a:hover {
    color: #ff5500;
}

.footer-section ul {
    list-style: none;
    padding: 0;
}

.footer-section ul li {
    margin-bottom: 6px;
}

.social-icons img {
    width: 24px;
    margin-right: 10px;
    transition: 0.2s;
}

.social-icons img:hover {
    opacity: 0.6;
}

.footer-bottom {
    text-align: center;
    margin-top: 30px;
    padding-top: 15px;
    font-size: 13px;
    color: #666;
    border-top: 1px solid #e4e4e4;
}
</style>
