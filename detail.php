 <?php 
include 'header.php'; 

// Data Detail Tanaman (IDs 1 s.d 8)
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
        'aturan_pakai'   => '<b>Asma:</b> Rebus 2 potong kulit pohon asam jawa + adas pulowaras secukupnya dalam 1 liter air hingga mendidih, lalu saring (Minum 2x sehari).<br><br>' .
                            '<b>Batuk Kering:</b> Rebus 3 polong buah asam jawa + 1/2 genggam daun saga dengan 4 gelas air hingga tersisa 1 gelas, lalu saring (Minum pagi dan sore).<br><br>' .
                            '<b>Bengkak Disengat Lipan/Lebah:</b> Bersihkan bengkak dengan kain yang dibasahi minyak kayu putih, lalu taburi/tempeli dengan 3-5 biji asam jawa yang ditumbuk halus.<br><br>' .
                            '<b>Biduren:</b> Rebus 2-3 polong buah asam jawa tua + 1/4 sendok kapur sirih + garam secukupnya dalam 3 gelas air hingga tersisa 2 gelas, lalu saring (Minum 2x sehari).<br><br>' .
                            '<b>Demam (Ramuan Daun):</b> Rebus 1 genggam daun asam jawa + adas pulowaras secukupnya dalam 1/2 liter air hingga mendidih, lalu saring (Minum 2x sehari).<br><br>' .
                            '<b>Demam (Ramuan Buah):</b> Seduh 2 polong buah asam jawa masak + garam secukupnya dengan 1 gelas air panas, lalu saring dan minum. <i>(Tidak boleh dikonsumsi oleh ibu hamil)</i>.<br><br>' .
                            '<b>Gigitan Ular Berbisa:</b> Belah biji asam jawa secukupnya menjadi dua, lalu tempelkan bagian dalamnya pada luka bekas gigitan.',
        'keamanan'       => 'Penggunaan asam jawa dalam jumlah berlebihan dapat menyebabkan gangguan pencernaan seperti mual, sakit perut, atau diare, reaksi alergi dapat terjadi pada individu yang sensitif terhadap bahan herbal tertentu.',
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
        'kandungan'      => 'Linalool, methylchavicol, ocimene, alpha-pinene, 1,8-cineole, eucalyptol, geraniol, limonene, Δ carene, eugenole, eugenol methyl ether, anethole, methyl cinnamate, 3-hexen-1-ol, 3-octanone, furfural, vitamin (A dan C), planteose, asam lemak (fatty acids) yaitu asam palmitat, asam oleat, asam stearat, dan asam linoleat.',
        'khasiat'        => 'Meningkatkan penyerapan (absorpsi), peluruh keringat (diaforetik), peluruh urine (diuretik), peluruh kentut, peluruh hati, peluruh aliran darah, penghilang nyeri (analgesik), penenang ringan (sedatif ringan), antiseptik, antibakteri, pembasmi darah, dan menerangkan penglihatan.',
        'bagian_dipakai' => 'Herba, biji. Biji dijemur dengan pelindung.',
        'sediaan'        => 'Seduhan, rebusan, bubuk, obat tetes, penggunaan topikal/luar.',
        'aturan_pakai'   => '<b>Diminum:</b> Rebus 10–15 g herba atau tumbuk dan peras airnya.<br><br>' .
                            '<b>Rendaman Biji:</b> Rebus sebanyak 2,5–5 g atau rendam dalam air dan minum setelah mengembang.<br><br>' .
                            '<b>Pemakaian Luar:</b> Giling atau bakar herba kering hingga menjadi bubuk. Bubuhkan pada tempat yang sakit (eksim, koreng, jerawat, bengkak terbentur, gigitan ular & serangga).<br><br>' .
                            '<b>Mencuci Luka:</b> Rebus herba segar dan gunakan airnya untuk mencuci anggota tubuh yang sakit.<br><br>' .
                            '<b>Obat Tetes/Bubuk Biji:</b> Giling biji sampai menjadi bubuk atau jadikan obat tetes.',
        'keamanan'       => 'Umumnya aman dalam jumlah sebagai bahan pangan. Penggunaan dalam dosis tinggi, ekstrak pekat, atau minyak atsiri perlu hati-hati karena kandungan estragole. Ibu hamil dan menyusui sebaiknya menghindari penggunaan dalam dosis pengobatan karena data keamanannya masih terbatas. Reaksi alergi dapat terjadi pada individu yang sensitif.<br><br>' .
                            '<b>Interaksi Obat:</b><br>' .
                            '• Warfarin, aspirin, clopidogrel, heparin → berpotensi meningkatkan risiko perdarahan.<br>' .
                            '• Obat antihipertensi → berpotensi memperkuat efek penurunan tekanan darah.',
        'referensi'      => 'Dalimartha S. Atlas tumbuhan obat Indonesia jilid 1. Jakarta: Trubus Agriwidya; 1999.',
        'link_referensi' => 'https://www.google.com/search?q=Dalimartha+S+Atlas+tumbuhan+obat+Indonesia+jilid+1',
        'nama_produk'    => 'Biji Selasih Murni / Ekstrak Selasih',
        'link_affiliate' => 'https://shopee.co.id/'
    ],
    8 => [
        'nama_lokal'     => 'Ginkgo Biloba (Daun Ginkgo)',
        'nama_latin'     => 'Ginkgo biloba L.',
        'gambar'         => 'images/ginkgo.jpg',
        'deskripsi'      => 'Ginkgo biloba merupakan salah satu spesies pohon tertua di dunia. Daun dan bijinya kaya akan flavonoid dan terpenoid yang sangat baik untuk melancarkan sirkulasi darah serta menjaga fungsi kognitif otak.',
        'kandungan'      => 'Flavonoid, terpenoid, ginkgolide A, kaempferol, isorhamnetin, shikimic acid, ginkgolic acid, bilobol, dan ginkgotoxin (pada biji).',
        'khasiat'        => 'Melancarkan peredaran darah ke otak, mata, dan telinga; membantu fungsi pernapasan; mengatasi batuk, asma, pikun/Alzheimer, kolesterol tinggi, tinnitus (telinga berdenging), serta membantu masalah diare dan rambut rontok.',
        'bagian_dipakai' => 'Daun dan biji tua. Daun dipetik saat musim gugur, dicuci bersih, dan dijemur kering. Biji dikupas kulit luarnya, dicuci, dan dijemur kering.',
        'sediaan'        => 'Kapsul ekstrak terstandar, seduhan teh biji, dan baluran topikal daun segar.',
        'aturan_pakai'   => '<b>Diminum (Olahan Daun):</b> Gunakan kapsul ekstrak herbal terstandar (dosis 3 x 40 mg sehari).<br><br>' .
                            '<b>Diminum (Seduhan Biji):</b> Seduh biji ginkgo dengan air panas seperti menyeduh teh untuk meredakan batuk, asma, atau alergi.<br><br>' .
                            '<b>Obat Luar (Kulit Kepala):</b> Tumbuk halus daun ginkgo segar, lalu balurkan dan gosok secara rutin ke kulit kepala untuk menyuburkan rambut.',
        'keamanan'       => 'Konsumsi daun ginkgo dapat memicu mual, muntah, produksi air liur berlebih, nafsu makan berkurang, pusing, atau sakit kepala. Biji ginkgo mengandung sedikit racun (ginkgotoxin) dan ginkgolic acid yang dapat memicu reaksi alergi cukup kuat pada kulit jika terkena secara langsung.',
        'referensi'      => 'Ulbricht, C., et al. (2009). An evidence-based systematic review of ginkgo. Journal of Dietary Supplements.',
        'link_referensi' => 'https://www.google.com/search?q=An+evidence-based+systematic+review+of+ginkgo+Ulbricht',
        'nama_produk'    => 'Ekstrak Ginkgo Biloba Kapsul Murni',
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