<?php 
include 'header.php'; 

// Data detail tanaman + Link Affiliate & Nama Produk Sesuai Shopee
$plants = [
    1 => [
        'nama_lokal'     => 'Kunyit',
        'nama_latin'     => 'Curcuma longa',
        'gambar'         => 'images/kunyit.jpg',
        'deskripsi'      => 'Kunyit adalah tanaman rempah dan obat asli kawasan Asia Tenggara. Memiliki kandungan kurkuminoid yang memberikan warna kuning khas dan kaya akan manfaat kesehatan.',
        'khasiat'        => 'Antioksidan, Antiinflamasi, Membantu Gangguan Pencernaan, Menjaga Kesehatan Lambung.',
        'sediaan'        => 'Simplisia, Serbuk, Ekstrak Kapsul, Jamu Cendol/Seduh.',
        'aturan_pakai'   => 'Secara umum dapat dikonsumsi 1–2 kali sehari dalam bentuk seduhan serbuk (1 sendok teh) atau sesuai dosis kapsul ekstrak terstandar.',
        'nama_produk'    => 'Kunyit Bubuk Murni / Serbuk Kunyit Asli',
        'link_affiliate' => 'https://s.shopee.co.id/3qN8EDf4RV'
    ],
    2 => [
        'nama_lokal'     => 'Temulawak',
        'nama_latin'     => 'Curcuma zanthorrhiza',
        'gambar'         => 'images/temulawak.jpg',
        'deskripsi'      => 'Temulawak merupakan tanaman obat asli Indonesia yang sering digunakan untuk menjaga fungsi hati (hepatoprotektor) dan meningkatkan nafsu makan.',
        'khasiat'        => 'Hepatoprotektor (Kesehatan Hati), Menambah Nafsu Makan, Imunitas, Antiinflamasi.',
        'sediaan'        => 'Kapsul Ekstrak, Sirup, Serbuk Seduh.',
        'aturan_pakai'   => 'Diminum 1–2 kali sehari setelah makan.',
        'nama_produk'    => 'Temulawak Bubuk / Serbuk Temulawak Murni',
        'link_affiliate' => 'https://s.shopee.co.id/AUu2AO4J0P'
    ],
    3 => [
        'nama_lokal'     => 'Jahe',
        'nama_latin'     => 'Zingiber officinale',
        'gambar'         => 'images/jahe.jpg',
        'deskripsi'      => 'Jahe terkenal dengan rasa pedas hangat yang berasal dari senyawa gingerol. Sangat efektif untuk mengatasi mual dan menghangatkan tubuh.',
        'khasiat'        => 'Meredakan Mual & Masuk Angin, Antioksidan, Meringankan Batuk & Penghangat Badan.',
        'sediaan'        => 'Teh Herbal, Serbuk, Ekstrak Kapsul, Simplisia Dry.',
        'aturan_pakai'   => 'Seduh 1 potong rimpang memar atau 1 sdt serbuk dengan air hangat 2–3 kali sehari.',
        'nama_produk'    => 'Bubuk Jahe Merah / Jahe Bubuk Murni',
        'link_affiliate' => 'https://s.shopee.co.id/AKabxvnXVJ'
    ],
    4 => [
        'nama_lokal'     => 'Sambiloto',
        'nama_latin'     => 'Andrographis paniculata',
        'gambar'         => 'images/sambiloto.jpg',
        'deskripsi'      => 'Sambiloto dikenal sebagai "Raja Pahit". Tanaman ini kaya akan androgratolida yang ampuh menstimulasi kekebalan tubuh dan membantu mengontrol gula darah.',
        'khasiat'        => 'Antidiabetes, Antibakteri, Menjaga Imunitas, Meredakan Demam & Flu.',
        'sediaan'        => 'Kapsul Ekstrak, Jamu Pahit, Simplisia.',
        'aturan_pakai'   => 'Dikonsumsi dalam bentuk kapsul ekstrak 2 kali sehari sesudah makan.',
        'nama_produk'    => 'Daun Sambiloto Bubuk / Kapsul Sambiloto Murni',
        'link_affiliate' => 'https://s.shopee.co.id/8AW7O9qXKc'
    ],
    5 => [
        'nama_lokal'     => 'Pegagan',
        'nama_latin'     => 'Centella asiatica',
        'gambar'         => 'images/pegagan.jpg',
        'deskripsi'      => 'Pegagan atau Gotu Kola populer sebagai herbal penambah daya ingat dan kesehatan saraf. Mengandung asiaticoside yang bagus untuk regenerasi sel.',
        'khasiat'        => 'Meningkatkan Daya Ingat (Fungsi Kognitif), Menyembuhkan Luka, Antioksidan.',
        'sediaan'        => 'Teh Herbal, Kapsul Ekstrak, Salep/Krim.',
        'aturan_pakai'   => 'Diminum 1–2 kali sehari sebagai teh herbal atau kapsul.',
        'nama_produk'    => 'Pegagan Bubuk / Centella Asiatica Powder Murni',
        'link_affiliate' => 'https://s.shopee.co.id/112wqxN1k7'
    ]
];

$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
$plant = isset($plants[$id]) ? $plants[$id] : $plants[1];
?>

<div class="container" style="margin-top: 30px; margin-bottom: 40px;">
    <a href="index.php" style="text-decoration: none; color: #2e7d32; font-weight: bold;">← Kembali ke Galeri</a>

    <div class="detail-card" style="background: white; padding: 25px; border-radius: 8px; border: 1px solid #e0e0e0; margin-top: 15px; display: flex; gap: 25px; flex-wrap: wrap;">
        
        <!-- Foto Tanaman -->
        <div style="flex: 1; min-width: 250px; max-width: 350px;">
            <img src="<?php echo $plant['gambar']; ?>" alt="<?php echo $plant['nama_lokal']; ?>" style="width: 100%; aspect-ratio: 1/1; object-fit: contain; background: #fff; border-radius: 8px; border: 1px solid #eee;">
        </div>

        <!-- Informasi Tanaman -->
        <div style="flex: 2; min-width: 300px;">
            <h2 style="margin-top: 0; color: #1b5e20; margin-bottom: 5px;"><?php echo $plant['nama_lokal']; ?></h2>
            <h4 style="margin-top: 0; color: #555; font-style: italic; font-weight: normal; margin-bottom: 15px;"><?php echo $plant['nama_latin']; ?></h4>
            
            <hr style="border: 0; border-top: 1px solid #eee; margin-bottom: 15px;">

            <p style="line-height: 1.6; color: #444;"><?php echo $plant['deskripsi']; ?></p>

            <div style="margin-top: 20px;">
                <p><strong>🌿 Khasiat Utama:</strong><br> <?php echo $plant['khasiat']; ?></p>
                <p><strong>💊 Bentuk Sediaan:</strong><br> <?php echo $plant['sediaan']; ?></p>
                <p><strong>📝 Anjuran/Aturan Pakai:</strong><br> <?php echo $plant['aturan_pakai']; ?></p>
            </div>

            <!-- REKOMENDASI PRODUK (LINK AFFILIATE USER) -->
            <div style="margin-top: 25px; padding: 15px; background-color: #f4fbf7; border-radius: 8px; border: 1px solid #c8e6c9;">
                <span style="font-size: 0.75rem; background: #2e7d32; color: white; padding: 3px 8px; border-radius: 4px; font-weight: bold;">⭐ REKOMENDASI PRODUK</span>
                
                <h3 style="margin: 10px 0 15px 0; color: #1b5e20; font-size: 1.1rem;"><?php echo $plant['nama_produk']; ?></h3>

                <a href="<?php echo $plant['link_affiliate']; ?>" target="_blank" rel="nofollow" style="background-color: #ee4d2d; color: white; padding: 10px 18px; text-decoration: none; border-radius: 6px; font-weight: bold; font-size: 0.9rem; display: inline-block;">
                    🛒 Beli Produk Resmi Sekarang
                </a>
            </div>

            <!-- KONSULTASI APOTEKER VIA WHATSAPP -->
            <div style="margin-top: 20px; background: #e8f5e9; padding: 15px; border-radius: 6px; border-left: 4px solid #2e7d32; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
                <div>
                    <strong style="color: #1b5e20;">💊 Butuh penyesuaian dosis <?php echo $plant['nama_lokal']; ?>?</strong>
                    <p style="margin: 3px 0 0 0; font-size: 0.85rem; color: #555;">Konsultasikan penggunaan herbal ini dengan Apoteker kami secara gratis.</p>
                </div>
                <a href="https://wa.me/62895326133068?text=Halo%20Apoteker,%20saya%20mau%20tanya%20dosis%20penggunaan%20<?php echo urlencode($plant['nama_lokal']); ?>" target="_blank" style="background-color: #25d366; color: white; padding: 8px 14px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.85rem;">
                    💬 Hubungi Apoteker (WA)
                </a>
            </div>

        </div>

    </div>
</div>

<?php include 'footer.php'; ?>