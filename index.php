<?php include 'header.php'; ?>

<!-- Top Navigation & Search Bar -->
<div class="search-section">
    <div class="container search-container">
        <form action="index.php" method="GET" class="search-form">
            <input type="text" name="keyword" placeholder="Cari nama tanaman herbal, sediaan, atau khasiat..." class="search-input">
            <button type="submit" class="search-btn">🔍</button>
        </form>
    </div>
</div>

<div class="container layout-wrapper">
    <!-- KOLOM KIRI: Konten Utama (Direktori & Filter) -->
    <main class="main-column">
        
        <!-- Filter Box -->
        <section class="filter-box">
            <h3>📑 FILTER DIREKTORI HERBAL</h3>
            <form class="filter-grid" action="index.php" method="GET">
                <select name="kategori">
                    <option value="">Semua Kategori Khasiat</option>
                    <option value="pencernaan">Pencernaan</option>
                    <option value="imunitas">Daya Tahan Tubuh</option>
                    <option value="kulit">Kesehatan Kulit</option>
                </select>

                <select name="sediaan">
                    <option value="">Semua Bentuk Sediaan</option>
                    <option value="kapsul">Kapsul Ekstrak</option>
                    <option value="serbuk">Serbuk Instan</option>
                    <option value="segara">Rimpang/Bahan Segar</option>
                </select>

                <button type="submit" class="btn-tampilkan">🔍 Tampilkan</button>
            </form>
        </section>

        <!-- Indeks A-Z -->
        <section class="index-box">
            <h4>🔤 INDEKS NAMA HERBAL</h4>
            <div class="alphabet-list">
                <?php foreach(range('A', 'Z') as $char): ?>
                    <a href="index.php?abjad=<?php echo $char; ?>"><?php echo $char; ?></a>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Katalog tanaman herbal (Galeri) -->
        <section class="gallery-section">
            <h4>🌱 GALERI TANAMAN HERBAL</h4>
            <div class="plant-grid">
                <!-- Card 1 -->
                <div class="plant-card">
                    <div class="plant-img-placeholder">🌿</div>
                    <h5>Kunyit</h5>
                    <p class="latin">Curcuma longa</p>
                    <a href="detail.php?id=1" class="btn-detail-sm">Detail Edukasi</a>
                </div>
                <!-- Card 2 -->
                <div class="plant-card">
                    <div class="plant-img-placeholder">🌱</div>
                    <h5>Temulawak</h5>
                    <p class="latin">Curcuma zanthorrhiza</p>
                    <a href="detail.php?id=2" class="btn-detail-sm">Detail Edukasi</a>
                </div>
                <!-- Card 3 -->
                <div class="plant-card">
                    <div class="plant-img-placeholder">🍃</div>
                    <h5>Jahe Merah</h5>
                    <p class="latin">Zingiber officinale var. rubrum</p>
                    <a href="detail.php?id=3" class="btn-detail-sm">Detail Edukasi</a>
                </div>
            </div>
        </section>
    </main>

    <!-- KOLOM KANAN: Sidebar Informasi & Layanan -->
    <aside class="sidebar-column">
        <!-- Widget Layanan Konsultasi -->
        <div class="sidebar-widget bg-light-green">
            <h4>👨‍⚕️ Konsultasi Tenaga Medis</h4>
            <p>Punya pertanyaan tentang obat & herbal?</p>
            <a href="konsultasi.php" class="btn-sidebar">Tanya Apoteker & Dokter</a>
        </div>

        <!-- Widget Rekomendasi Belanja -->
        <div class="sidebar-widget">
            <h4>🛒 Rekomendasi Produk Affiliate</h4>
            <ul class="sidebar-menu">
                <li><a href="#">Sediaan Kapsul Herbal ></a></li>
                <li><a href="#">Minuman Rempah & Jamu ></a></li>
                <li><a href="#">Minyak Atsiri & Aromaterapi ></a></li>
            </ul>
        </div>

        <!-- Widget Kategori Khasiat -->
        <div class="sidebar-widget">
            <h4>📚 KATEGORI KHASIAT</h4>
            <ul class="sidebar-link-grid">
                <li><a href="#">- Imunitas</a></li>
                <li><a href="#">- Pencernaan</a></li>
                <li><a href="#">- Kebugaran</a></li>
                <li><a href="#">- Diabetes</a></li>
                <li><a href="#">- Hipertensi</a></li>
                <li><a href="#">- Kolesterol</a></li>
            </ul>
        </div>
    </aside>
</div>

<?php include 'footer.php'; ?>