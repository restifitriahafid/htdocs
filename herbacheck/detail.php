<?php 
include 'header.php'; 

// Data Detail Tanaman (IDs 1 s.d 10)
$plants = [
    1 => [
        'nama_lokal'     => 'Kunyit',
        'nama_latin'     => 'Curcuma longa',
        'gambar'         => 'images/kunyit.jpg',
        'deskripsi'      => 'Kunyit adalah tanaman rempah dan obat asli kawasan Asia Tenggara. Memiliki kandungan kurkuminoid yang memberikan warna kuning khas dan kaya akan manfaat kesehatan.',
        'kandungan'      => 'Kurkuminoid, Kurkumin, Desmetoksikurkumin, Bisdesmetoksikurkumin, Minyak Atsiri.',
        'khasiat'        => 'Antioksidan, Antiinflamasi, Membantu Gangguan Pencernaan, Menjaga Kesehatan Lambung.',
        'bagian_dipakai' => 'Rimpang',
        'sediaan'        => 'Simplisia, Serbuk, Ekstrak Kapsul, Jamu Cendol/Seduh.',
        'aturan_pakai'   => 'Secara umum dapat dikonsumsi 1–2 kali sehari dalam bentuk seduhan serbuk (1 sendok teh) atau sesuai dosis kapsul ekstrak terstandar.',
        'keamanan'       => 'Aman digunakan sesuai dosis. Hindari dosis berlebihan pada wanita hamil.',
        'referensi'      => 'Pratama, A. B. (2021). Khasiat tanaman obat herbal. Pustaka Media.',
        'link_referensi' => 'https://www.google.com/search?q=Pratama+A+B+2021+Khasiat+tanaman+obat+herbal+Pustaka+Media',
        'nama_produk'    => 'Kunyit Bubuk Murni / Serbuk Kunyit Asli',
        'link_affiliate' => 'https://s.shopee.co.id/3qN8EDf4RV'
    ],
    2 => [
        'nama_lokal'     => 'Temulawak',
        'nama_latin'     => 'Curcuma zanthorrhiza',
        'gambar'         => 'images/temulawak.jpg',
        'deskripsi'      => 'Temulawak merupakan tanaman obat asli Indonesia yang sering digunakan untuk menjaga fungsi hati (hepatoprotektor) dan meningkatkan nafsu makan.',
        'kandungan'      => 'Kurkumin, Xanthorrhizol, Minyak Atsiri, Pati, Protein.',
        'khasiat'        => 'Hepatoprotektor (Kesehatan Hati), Menambah Nafsu Makan, Imunitas, Antiinflamasi.',
        'bagian_dipakai' => 'Rimpang',
        'sediaan'        => 'Kapsul Ekstrak, Sirup, Serbuk Seduh.',
        'aturan_pakai'   => 'Diminum 1–2 kali sehari setelah makan.',
        'keamanan'       => 'Relatif aman. Hati-hati penggunaan jangka panjang pada penderita batu empedu.',
        'referensi'      => 'Pratama, A. B. (2021). Khasiat tanaman obat herbal. Pustaka Media.',
        'link_referensi' => 'https://www.google.com/search?q=Pratama+A+B+2021+Khasiat+tanaman+obat+herbal+Pustaka+Media',
        'nama_produk'    => 'Temulawak Bubuk / Serbuk Temulawak Murni',
        'link_affiliate' => 'https://s.shopee.co.id/AUu2AO4J0P'
    ],
    3 => [
        'nama_lokal'     => 'Jahe',
        'nama_latin'     => 'Zingiber officinale',
        'gambar'         => 'images/jahe.jpg',
        'deskripsi'      => 'Jahe terkenal dengan rasa pedas hangat yang berasal dari senyawa gingerol. Sangat efektif untuk mengatasi mual dan menghangatkan tubuh.',
        'kandungan'      => 'Gingerol, Shogaol, Zingeron, Minyak Atsiri (Zingiberena, Kurkumena).',
        'khasiat'        => 'Meredakan Mual & Masuk Angin, Antioksidan, Meringankan Batuk & Penghangat Badan.',
        'bagian_dipakai' => 'Rimpang',
        'sediaan'        => 'Teh Herbal, Serbuk, Ekstrak Kapsul, Simplisia Dry.',
        'aturan_pakai'   => 'Seduh 1 potong rimpang memar atau 1 sdt serbuk dengan air hangat 2–3 kali sehari.',
        'keamanan'       => 'Dapat menyebabkan efek perih lambung jika dikonsumsi berlebihan saat perut kosong.',
        'referensi'      => 'Pratama, A. B. (2021). Khasiat tanaman obat herbal. Pustaka Media.',
        'link_referensi' => 'https://www.google.com/search?q=Pratama+A+B+2021+Khasiat+tanaman+obat+herbal+Pustaka+Media',
        'nama_produk'    => 'Bubuk Jahe Merah / Jahe Bubuk Murni',
        'link_affiliate' => 'https://s.shopee.co.id/AKabxvnXVJ'
    ],
    4 => [
        'nama_lokal'     => 'Sambiloto',
        'nama_latin'     => 'Andrographis paniculata',
        'gambar'         => 'images/sambiloto.jpg',
        'deskripsi'      => 'Sambiloto dikenal sebagai "Raja Pahit". Tanaman ini kaya akan androgratolida yang ampuh menstimulasi kekebalan tubuh dan membantu mengontrol gula darah.',
        'kandungan'      => 'Andrografolida, Neoandrografolida, Flavonoid, Alkana, Ketone.',
        'khasiat'        => 'Antidiabetes, Antibakteri, Menjaga Imunitas, Meredakan Demam & Flu.',
        'bagian_dipakai' => 'Daun dan Herba (bagian di atas tanah)',
        'sediaan'        => 'Kapsul Ekstrak, Jamu Pahit, Simplisia.',
        'aturan_pakai'   => 'Dikonsumsi dalam bentuk kapsul ekstrak 2 kali sehari sesudah makan.',
        'keamanan'       => 'Tidak disarankan untuk wanita hamil dan menyusui serta pasien hipotensi.',
        'referensi'      => 'Pratama, A. B. (2021). Khasiat tanaman obat herbal. Pustaka Media.',
        'link_referensi' => 'https://www.google.com/search?q=Pratama+A+B+2021+Khasiat+tanaman+obat+herbal+Pustaka+Media',
        'nama_produk'    => 'Daun Sambiloto Bubuk / Kapsul Sambiloto Murni',
        'link_affiliate' => 'https://s.shopee.co.id/8AW7O9qXKc'
    ],
    5 => [
        'nama_lokal'     => 'Pegagan',
        'nama_latin'     => 'Centella asiatica',
        'gambar'         => 'images/pegagan.jpg',
        'deskripsi'      => 'Pegagan atau Gotu Kola populer sebagai herbal penambah daya ingat dan kesehatan saraf. Mengandung asiaticoside yang bagus untuk regenerasi sel.',
        'kandungan'      => 'Asiaticoside, Madecassoside, Asiatic Acid, Madecassic Acid, Vellarine.',
        'khasiat'        => 'Meningkatkan Daya Ingat (Fungsi Kognitif), Menyembuhkan Luka, Antioksidan.',
        'bagian_dipakai' => 'Daun dan Batang',
        'sediaan'        => 'Teh Herbal, Kapsul Ekstrak, Salep/Krim.',
        'aturan_pakai'   => 'Diminum 1–2 kali sehari sebagai teh herbal atau kapsul.',
        'keamanan'       => 'Penggunaan berlebihan dapat menyebabkan kantuk atau mual.',
        'referensi'      => 'Pratama, A. B. (2021). Khasiat tanaman obat herbal. Pustaka Media.',
        'link_referensi' => 'https://www.google.com/search?q=Pratama+A+B+2021+Khasiat+tanaman+obat+herbal+Pustaka+Media',
        'nama_produk'    => 'Pegagan Bubuk / Centella Asiatica Powder Murni',
        'link_affiliate' => 'https://s.shopee.co.id/112wqxN1k7'
    ],
    6 => [
        'nama_lokal'     => 'Asam Jawa',
        'nama_latin'     => 'Tamarindus indica, Linn',
        'gambar'         => 'images/asam_jawa.jpg',
        'deskripsi'      => 'Asam Jawa merupakan tanaman herbal yang kaya akan asam organik serta vitamin. Digunakan secara luas dalam pengobatan tradisional untuk berbagai keluhan kesehatan.',
        'kandungan'      => 'Mengandung asam sitrat, asam tartrat, asam suksinat, pectin gula invert, zat besi, vitamin A, vitamin B1, vitamin C, phlobatannin, albuminoid serta pati.',
        'khasiat'        => 'Dapat mengobati asma, batuk, demam, sakit panas, reumatik, sakit perut, morbili, alergi/biduren, sariawan, luka baru, luka borok, eksim, bisul, bengkak disengat lipan/lebah, gigitan ular berbisa, rambut rontok.',
        'bagian_dipakai' => 'Buah, daun, dan biji.',
        'sediaan'        => 'Seduhan, rebusan, penggunaan langsung.',
        'aturan_pakai'   => '<b>Asma:</b> Rebus 2 potong kulit pohon asam jawa + adas pulowaras secukupnya dalam 1 liter air hingga mendidih, lalu saring (Minum 2x sehari).<br><br><b>Batuk Kering:</b> Rebus 3 polong buah asam jawa + 1/2 genggam daun saga dengan 4 gelas air hingga tersisa 1 gelas.',
        'keamanan'       => 'Penggunaan asam jawa dalam jumlah berlebihan dapat menyebabkan gangguan pencernaan.',
        'referensi'      => 'Pratama, A. B. (2021). Khasiat tanaman obat herbal. Pustaka Media.',
        'link_referensi' => 'https://www.google.com/search?q=Pratama+A+B+2021+Khasiat+tanaman+obat+herbal+Pustaka+Media',
        'nama_produk'    => 'Asam Jawa Daging Murni / Ekstrak Asam Jawa',
        'link_affiliate' => 'https://s.shopee.co.id/W6pEFN9fY'
    ],
    7 => [
        'nama_lokal'     => 'Selasih',
        'nama_latin'     => 'Ocimum basilicum L.',
        'gambar'         => 'images/selasih.jpg',
        'deskripsi'      => 'Selasih merupakan tanaman herba aromatik dengan rasa pedas hangat dan biji yang bersifat sejuk. Digunakan secara luas untuk pengobatan tradisional dan campuran minuman herbal.',
        'kandungan'      => 'Linalool, methylchavicol, ocimene, eugenole, vitamin (A dan C), asam lemak.',
        'khasiat'        => 'Peluruh keringat (diaforetik), peluruh urine (diuretik), analgesik, penenang ringan, antiseptik, antibakteri.',
        'bagian_dipakai' => 'Herba, biji.',
        'sediaan'        => 'Seduhan, rebusan, bubuk.',
        'aturan_pakai'   => 'Rebus 10–15 g herba atau rendam biji secukupnya dalam air hangat sebelum diminum.',
        'keamanan'       => 'Umumnya aman. Hati-hati bagi ibu hamil dan yang mengonsumsi obat pengencer darah.',
        'referensi'      => 'Dalimartha S. Atlas tumbuhan obat Indonesia jilid 1. Jakarta: Trubus Agriwidya; 1999.',
        'link_referensi' => 'https://www.google.com/search?q=Dalimartha+S+Atlas+tumbuhan+obat+Indonesia+jilid+1',
        'nama_produk'    => 'Biji Selasih Murni / Ekstrak Selasih',
        'link_affiliate' => 'https://shopee.co.id/'
    ],
    8 => [
        'nama_lokal'     => 'Ginkgo Biloba',
        'nama_latin'     => 'Ginkgo biloba L.',
        'gambar'         => 'images/ginkgo.jpg',
        'deskripsi'      => 'Ginkgo biloba merupakan salah satu spesies pohon tertua di dunia yang kaya akan flavonoid dan terpenoid untuk melancarkan sirkulasi darah ke otak.',
        'kandungan'      => 'Flavonoid, terpenoid, ginkgolide A, kaempferol.',
        'khasiat'        => 'Melancarkan peredaran darah ke otak dan mata, membantu fungsi kognitif, mengatasi pikun/Alzheimer.',
        'bagian_dipakai' => 'Daun dan biji tua.',
        'sediaan'        => 'Kapsul ekstrak terstandar, seduhan teh.',
        'aturan_pakai'   => 'Gunakan kapsul ekstrak herbal terstandar sesuai anjuran kemasan (umumnya 3 x 40 mg sehari).',
        'keamanan'       => 'Dapat memicu mual atau sakit kepala ringan pada sebagian orang.',
        'referensi'      => 'Ulbricht, C., et al. (2009). An evidence-based systematic review of ginkgo. Journal of Dietary Supplements.',
        'link_referensi' => 'https://www.google.com/search?q=An+evidence-based+systematic+review+of+ginkgo+Ulbricht',
        'nama_produk'    => 'Ekstrak Ginkgo Biloba Kapsul Murni',
        'link_affiliate' => 'https://shopee.co.id/'
    ],
    9 => [
        'nama_lokal'     => 'Anting-Anting',
        'nama_latin'     => 'Acalypha australis L.',
        'gambar'         => 'images/anting_anting.jpg',
        'deskripsi'      => 'Anting-anting adalah tanaman terna liar yang sering ditemukan di kebun atau pinggir jalan. Sangat disukai oleh kucing dan memiliki khasiat tradisional untuk mengatasi gangguan pencernaan.',
        'kandungan'      => 'Flavonoid, tanin, fenol dan steroid.',
        'khasiat'        => 'Disentri basiler, disentri amuba, diare, muntah darah, batuk, mimisan, gangguan kulit, luka bakar dan pendarahan.',
        'bagian_dipakai' => 'Herba atau seluruh tanaman, termasuk akar.',
        'sediaan'        => 'Air Rebusan, Tumbukan luar.',
        'aturan_pakai'   => '<b>Disentri amuba:</b> Rebus 30–60 g tanaman kering, air rebusannya diminum 2 kali sehari selama 5–10 hari.<br><br><b>Pendarahan & luka bakar:</b> Herba segar ditambah gula pasir secukupnya, dilumatkan, lalu ditempelkan.',
        'keamanan'       => 'Data keamanan khusus terbatas. Jangan berlebihan. Hati-hati interaksi dengan obat pengencer darah seperti warfarin dan aspirin.',
        'referensi'      => 'Pratama, A. B. (2021). Khasiat tanaman obat herbal. Pustaka Media; Sebaluck et al. (2015).',
        'link_referensi' => 'https://www.google.com/search?q=Pratama+A+B+2021+Khasiat+tanaman+obat+herbal+Pustaka+Media',
        'nama_produk'    => 'Herba Anting-Anting Kering / Simplisia',
        'link_affiliate' => 'https://shopee.co.id/'
    ],
    10 => [
        'nama_lokal'     => 'Bandotan (Bendotan)',
        'nama_latin'     => 'Ageratum conyzoides L.',
        'gambar'         => 'images/bandotan.jpg',
        'deskripsi'      => 'Bandotan adalah tumbuhan gulma berkhasiat obat yang sering digunakan masyarakat untuk pertolongan pertama pada luka luar, sariawan, dan demam.',
        'kandungan'      => 'Flavonoid, alkaloid, tanin, fenol, terpenoid, steroid, kumarin, kromena dan minyak atsiri.',
        'khasiat'        => 'Pencegah kehamilan, selesma, bisul, eksim, luka, pendarahan, sariawan, bengkak karena memar, malaria dan influenza.',
        'bagian_dipakai' => 'Herba atau bagian tanaman di atas tanah, daun, batang muda, dan akar.',
        'sediaan'        => 'Air Rebusan, Tumbukan halus.',
        'aturan_pakai'   => '<b>Obat Minum:</b> Rebus 15–30 g herba kering atau 30–60 g herba segar lalu diminum.<br><br><b>Luka Berdarah & Eksim:</b> Tumbuk halus herba segar, tempelkan pada bagian yang sakit.',
        'keamanan'       => 'Uji toksisitas akut aman hingga dosis 2.000 mg/kg BB pada hewan uji. Berhati-hati bila digunakan bersama obat pengencer darah (heparin, warfarin, aspirin).',
        'referensi'      => 'Pratama, A. B. (2021). Khasiat tanaman obat herbal. Pustaka Media.',
        'link_referensi' => 'https://www.google.com/search?q=Pratama+A+B+2021+Khasiat+tanaman+obat+herbal+Pustaka+Media',
        'nama_produk'    => 'Daun Bandotan Kering / Simplisia',
        'link_affiliate' => 'https://shopee.co.id/'
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

            <div style="margin-top: 20px; display: flex; flex-direction: column; gap: 12px;">
                <p style="margin: 0;"><strong>🧪 Kandungan Chemical/Nutrisi:</strong><br> <?php echo $plant['kandungan']; ?></p>
                <p style="margin: 0;"><strong>🌿 Manfaat & Khasiat:</strong><br> <?php echo $plant['khasiat']; ?></p>
                <p style="margin: 0;"><strong>🌱 Bagian yang Digunakan:</strong><br> <?php echo $plant['bagian_dipakai']; ?></p>
                <p style="margin: 0;"><strong>💊 Cara Pemanfaatan / Sediaan:</strong><br> <?php echo $plant['sediaan']; ?></p>
                <p style="margin: 0;"><strong>📝 Aturan Pakai / Cara Pemakaian:</strong><br> <?php echo $plant['aturan_pakai']; ?></p>
                <p style="margin: 0;"><strong>⚠️ Keamanan & Efek Samping:</strong><br> <?php echo $plant['keamanan']; ?></p>
                
                <!-- REFERENSI PUSTAKA -->
                <p style="margin: 0; padding-top: 8px; border-top: 1px dashed #ccc;">
                    <strong>📚 Referensi Pustaka:</strong><br>
                    <a href="<?php echo $plant['link_referensi']; ?>" target="_blank" style="color: #1b5e20; text-decoration: underline; font-weight: 500;">
                        📖 <?php echo $plant['referensi']; ?> (Klik untuk buka literatur)
                    </a>
                </p>
            </div>

            <!-- REKOMENDASI PRODUK (AFFILIATE) -->
            <div style="margin-top: 25px; padding: 15px; background-color: #f4fbf7; border-radius: 8px; border: 1px solid #c8e6c9;">
                <span style="font-size: 0.75rem; background: #2e7d32; color: white; padding: 3px 8px; border-radius: 4px; font-weight: bold;">⭐ REKOMENDASI PRODUK</span>
                <h3 style="margin: 10px 0 15px 0; color: #1b5e20; font-size: 1.1rem;"><?php echo $plant['nama_produk']; ?></h3>
                <a href="<?php echo $plant['link_affiliate']; ?>" target="_blank" rel="nofollow" style="background-color: #ee4d2d; color: white; padding: 10px 18px; text-decoration: none; border-radius: 6px; font-weight: bold; font-size: 0.9rem; display: inline-block;">
                    🛒 Beli Produk Resmi Sekarang
                </a>
            </div>

            <!-- KONSULTASI APOTEKER & DOKTER VIA WHATSAPP -->
            <div style="margin-top: 20px; background: #e8f5e9; padding: 15px; border-radius: 6px; border-left: 4px solid #2e7d32; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
                <div>
                    <strong style="color: #1b5e20;">💊 Butuh penyesuaian dosis <?php echo $plant['nama_lokal']; ?>?</strong>
                    <p style="margin: 3px 0 0 0; font-size: 0.85rem; color: #555;">Konsultasikan langsung dengan Dokter atau Apoteker kami.</p>
                </div>
                <div style="display: flex; gap: 8px;">
                    <a href="https://wa.me/62895326133068?text=Halo%20Apoteker,%20saya%20mau%20tanya%20dosis%20penggunaan%20<?php echo urlencode($plant['nama_lokal']); ?>" target="_blank" style="background-color: #25d366; color: white; padding: 8px 12px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.8rem;">
                        💬 Tanya Apoteker
                    </a>
                    <a href="https://wa.me/62895326133068?text=Halo%20Dokter,%20saya%20mau%20tanya%20terkait%20terapi%20<?php echo urlencode($plant['nama_lokal']); ?>" target="_blank" style="background-color: #0288d1; color: white; padding: 8px 12px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.8rem;">
                        🩺 Tanya Dokter
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>

<?php include 'footer.php'; ?>