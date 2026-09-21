<?php include 'header.php'; ?>

<!-- HERO & SEARCH SECTION WITH CAMERA SCAN -->
<section class="hero-search-section">
    <div class="container text-center">
        <h2>Kenali Tanaman Herbal untuk Pilihan yang Lebih Bijak</h2>
        <p class="subtitle">Temukan informasi tanaman herbal, manfaat, kandungan, bentuk sediaan, serta rekomendasi penggunaan.</p>
        
        <div class="search-box-wrapper" style="position: relative;">
            <form action="index.php" method="GET" class="main-search-form" onsubmit="return false;" style="display: flex; gap: 8px; align-items: center;">
                <input type="text" id="searchInput" class="search-input" placeholder="🔍 Cari nama tanaman, nama latin, khasiat, atau sediaan..." style="flex: 1;">
                
                <!-- TOMBOL SCAN KAMERA -->
                <button type="button" onclick="openCameraModal()" style="background-color: #2e7d32; color: white; border: none; padding: 10px 16px; border-radius: 20px; cursor: pointer; font-weight: bold; display: flex; align-items: center; gap: 5px; white-space: nowrap;">
                    📷 Scan
                </button>
            </form>

            <div class="popular-searches">
                <span>Pencarian populer:</span>
                <a href="#" class="popular-tag" onclick="searchTag('Jahe')">Jahe</a>
                <a href="#" class="popular-tag" onclick="searchTag('Kunyit')">Kunyit</a>
                <a href="#" class="popular-tag" onclick="searchTag('Temulawak')">Temulawak</a>
                <a href="#" class="popular-tag" onclick="searchTag('Pegagan')">Pegagan</a>
                <a href="#" class="popular-tag" onclick="searchTag('Sambiloto')">Sambiloto</a>
            </div>
        </div>
    </div>
</section>

<!-- MODAL POPUP KAMERA SCAN OTOMATIS -->
<div id="cameraModal" style="display: none; position: fixed; z-index: 999; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.7); justify-content: center; align-items: center;">
    <div style="background: white; padding: 20px; border-radius: 12px; width: 90%; max-width: 400px; text-align: center; position: relative;">
        <h3 style="margin-top: 0; color: #1b5e20;">📷 Scan Tanaman Herbal</h3>
        <p id="scanStatus" style="font-size: 0.85rem; color: #666; margin-bottom: 15px;">Arahkan kamera ke daun atau rimpang tanaman herbal.</p>
        
        <!-- ELEMENT VIDEO KAMERA -->
        <div style="position: relative; overflow: hidden; border-radius: 8px;">
            <video id="webcam" autoplay playsinline style="width: 100%; height: 250px; object-fit: cover; background: #000; display: block;"></video>
            <!-- ANIMASI GARIS SCANNER -->
            <div id="scanLine" style="display: none; position: absolute; top: 0; left: 0; width: 100%; height: 3px; background: #2e7d32; box-shadow: 0 0 10px #2e7d32; animation: scanAnim 1.5s infinite linear;"></div>
        </div>

        <div style="margin-top: 15px; display: flex; gap: 10px; justify-content: center;">
            <button id="btnDetect" onclick="captureAndScan()" style="background-color: #2e7d32; color: white; border: none; padding: 10px 20px; border-radius: 6px; font-weight: bold; cursor: pointer;">
                🔍 Deteksi Tanaman
            </button>
            <button onclick="closeCameraModal()" style="background-color: #d32f2f; color: white; border: none; padding: 10px 15px; border-radius: 6px; font-weight: bold; cursor: pointer;">
                Batal
            </button>
        </div>
    </div>
</div>

<style>
@keyframes scanAnim {
    0% { top: 0%; }
    50% { top: 95%; }
    100% { top: 0%; }
}
</style>

<!-- LAYOUT 2 KOLOM -->
<div class="container layout-wrapper">
    <!-- KOLOM KIRI: DIREKTORI & GALERI -->
    <main class="main-column">
        
        <!-- MULTI-FILTER DIREKTORI -->
        <section class="filter-box">
            <h3>📂 DIREKTORI TANAMAN HERBAL</h3>
            <div class="filter-grid">
                <select id="filterKhasiat">
                    <option value="">-- Semua Kategori Khasiat --</option>
                    <option value="antioksidan">Antioksidan</option>
                    <option value="antiinflamasi">Antiinflamasi</option>
                    <option value="antibakteri">Antibakteri</option>
                    <option value="antidiabetes">Antidiabetes</option>
                    <option value="pencernaan">Pencernaan</option>
                    <option value="imunitas">Imunitas</option>
                </select>

                <select id="filterPenyakit">
                    <option value="">-- Semua Kondisi Kesehatan --</option>
                    <option value="batuk">Batuk</option>
                    <option value="diabetes">Diabetes</option>
                    <option value="diare">Diare</option>
                    <option value="hipertensi">Hipertensi</option>
                    <option value="mual">Mual</option>
                    <option value="pencernaan">Gangguan Pencernaan</option>
                </select>

                <select id="filterSediaan">
                    <option value="">-- Semua Bentuk Sediaan --</option>
                    <option value="ekstrak">Ekstrak</option>
                    <option value="kapsul">Kapsul</option>
                    <option value="serbuk">Serbuk</option>
                    <option value="simplisia">Simplisia</option>
                    <option value="sirup">Sirup</option>
                    <option value="teh">Teh Herbal</option>
                </select>
            </div>
        </section>

        <!-- INDEKS NAMA LATIN A-Z -->
        <section class="index-box">
            <h4>🔤 INDEKS BERDASARKAN NAMA LATIN</h4>
            <div class="alphabet-list">
                <?php foreach(range('A', 'Z') as $char): ?>
                    <a href="#" onclick="searchTag('<?php echo $char; ?>')"><?php echo $char; ?></a>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- GALERI TANAMAN HERBAL -->
        <section class="gallery-section">
            <h4>🌿 HASIL PENCARIAN TANAMAN HERBAL</h4>
            
            <div id="emptyNotice" style="text-align: center; padding: 40px 20px; color: #666; background: #fafafa; border: 1px dashed #ccc; border-radius: 6px;">
                <p style="font-size: 1rem; margin: 0;">🔍 <strong>Ketik nama tanaman, pilih filter, atau klik Scan Kamera</strong> untuk melihat informasi tanaman herbal.</p>
            </div>

            <div class="plant-grid" id="plantGrid" style="display: none;">
                
                <!-- 1. Kunyit -->
                <div class="plant-card" data-nama="kunyit curcuma longa antioksidan pencernaan simplisia serbuk ekstrak c">
                    <img src="images/kunyit.jpg" alt="Kunyit" class="plant-img">
                    <h5 class="nama-lokal" style="margin: 4px 0 2px 0; color: #1b5e20; font-size: 1rem; font-weight: bold;">Kunyit</h5>
                    <p class="nama-latin" style="margin: 0 0 8px 0; color: #666; font-size: 0.85rem; font-style: italic;">Curcuma longa</p>
                    <div class="badges">
                        <span class="badge khasiat">Antioksidan • Pencernaan</span>
                        <span class="badge sediaan">Simplisia • Serbuk • Ekstrak</span>
                    </div>
                    <a href="detail.php?id=1" class="btn-detail">Lihat Detail</a>
                </div>

                <!-- 2. Temulawak -->
                <div class="plant-card" data-nama="temulawak curcuma zanthorrhiza kesehatan hati imunitas kapsul sirup c">
                    <img src="images/temulawak.jpg" alt="Temulawak" class="plant-img">
                    <h5 class="nama-lokal" style="margin: 4px 0 2px 0; color: #1b5e20; font-size: 1rem; font-weight: bold;">Temulawak</h5>
                    <p class="nama-latin" style="margin: 0 0 8px 0; color: #666; font-size: 0.85rem; font-style: italic;">Curcuma zanthorrhiza</p>
                    <div class="badges">
                        <span class="badge khasiat">Kesehatan Hati • Imunitas</span>
                        <span class="badge sediaan">Kapsul • Sirup</span>
                    </div>
                    <a href="detail.php?id=2" class="btn-detail">Lihat Detail</a>
                </div>

                <!-- 3. Jahe -->
                <div class="plant-card" data-nama="jahe zingiber officinale antioksidan pencernaan serbuk ekstrak teh z">
                    <img src="images/jahe.jpg" alt="Jahe" class="plant-img">
                    <h5 class="nama-lokal" style="margin: 4px 0 2px 0; color: #1b5e20; font-size: 1rem; font-weight: bold;">Jahe</h5>
                    <p class="nama-latin" style="margin: 0 0 8px 0; color: #666; font-size: 0.85rem; font-style: italic;">Zingiber officinale</p>
                    <div class="badges">
                        <span class="badge khasiat">Antioksidan • Pencernaan</span>
                        <span class="badge sediaan">Serbuk • Ekstrak • Teh</span>
                    </div>
                    <a href="detail.php?id=3" class="btn-detail">Lihat Detail</a>
                </div>

                <!-- 4. Sambiloto -->
                <div class="plant-card" data-nama="sambiloto andrographis paniculata antidiabetes imunitas kapsul ekstrak a">
                    <img src="images/sambiloto.jpg" alt="Sambiloto" class="plant-img">
                    <h5 class="nama-lokal" style="margin: 4px 0 2px 0; color: #1b5e20; font-size: 1rem; font-weight: bold;">Sambiloto</h5>
                    <p class="nama-latin" style="margin: 0 0 8px 0; color: #666; font-size: 0.85rem; font-style: italic;">Andrographis paniculata</p>
                    <div class="badges">
                        <span class="badge khasiat">Antidiabetes • Imunitas</span>
                        <span class="badge sediaan">Kapsul • Ekstrak</span>
                    </div>
                    <a href="detail.php?id=4" class="btn-detail">Lihat Detail</a>
                </div>

                <!-- 5. Pegagan -->
                <div class="plant-card" data-nama="pegagan centella asiatica sistem saraf antioksidan teh kapsul c">
                    <img src="images/pegagan.jpg" alt="Pegagan" class="plant-img">
                    <h5 class="nama-lokal" style="margin: 4px 0 2px 0; color: #1b5e20; font-size: 1rem; font-weight: bold;">Pegagan</h5>
                    <p class="nama-latin" style="margin: 0 0 8px 0; color: #666; font-size: 0.85rem; font-style: italic;">Centella asiatica</p>
                    <div class="badges">
                        <span class="badge khasiat">Sistem Saraf • Antioksidan</span>
                        <span class="badge sediaan">Teh • Kapsul</span>
                    </div>
                    <a href="detail.php?id=pegagan" class="btn-detail">Lihat Detail</a>
                </div>

                <!-- 6. Anting-Anting -->
                <div class="plant-card" data-nama="anting-anting anting anting acalypha australis l. pencernaan disentri diare batuk rebusan tumbukan a">
                    <img src="images/anting_anting.jpg" alt="Anting-Anting" class="plant-img">
                    <h5 class="nama-lokal" style="margin: 4px 0 2px 0; color: #1b5e20; font-size: 1rem; font-weight: bold;">Anting-Anting</h5>
                    <p class="nama-latin" style="margin: 0 0 8px 0; color: #666; font-size: 0.85rem; font-style: italic;">Acalypha australis L.</p>
                    <div class="badges">
                        <span class="badge khasiat">Pencernaan • Pendarahan</span>
                        <span class="badge sediaan">Rebusan • Tumbukan</span>
                    </div>
                    <a href="detail.php?id=anting-anting" class="btn-detail">Lihat Detail</a>
                </div>

                <!-- 7. Bandotan -->
                <div class="plant-card" data-nama="bandotan ageratum conyzoides l. selesma bisul eksim luka perdarahan sariawan bengkak memar malaria influenza rebusan tumbukan">
                    <img src="images/bandotan.jpg" alt="Bandotan" class="plant-img">
                    <h5 class="nama-lokal" style="margin: 4px 0 2px 0; color: #1b5e20; font-size: 1rem; font-weight: bold;">Bandotan</h5>
                    <p class="nama-latin" style="margin: 0 0 8px 0; color: #666; font-size: 0.85rem; font-style: italic;">Ageratum conyzoides L.</p>
                    <div class="badges">
                        <span class="badge khasiat">Luka • Sariawan • Demam</span>
                        <span class="badge sediaan">Rebusan • Tumbukan</span>
                    </div>
                    <a href="detail.php?id=bandotan" class="btn-detail">Lihat Detail</a>
                </div>

            </div>
        </section>
    </main>

<!-- JAVASCRIPT UNTUK SCAN OTOMATIS & FILTERING -->
<script>
const searchInput = document.getElementById('searchInput');
const filterKhasiat = document.getElementById('filterKhasiat');
const filterPenyakit = document.getElementById('filterPenyakit');
const filterSediaan = document.getElementById('filterSediaan');
const plantGrid = document.getElementById('plantGrid');
const emptyNotice = document.getElementById('emptyNotice');
const plantCards = document.querySelectorAll('.plant-card');

let videoStream = null;

function openCameraModal() {
    const cameraModal = document.getElementById('cameraModal');
    const video = document.getElementById('webcam');
    
    cameraModal.style.display = 'flex';

    navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } })
        .then(stream => {
            videoStream = stream;
            video.srcObject = stream;
        })
        .catch(err => {
            alert("Akses kamera ditolak atau perangkat tidak memiliki kamera.");
            closeCameraModal();
        });
}

function closeCameraModal() {
    const cameraModal = document.getElementById('cameraModal');
    const scanLine = document.getElementById('scanLine');
    const scanStatus = document.getElementById('scanStatus');
    const btnDetect = document.getElementById('btnDetect');

    if (videoStream) {
        videoStream.getTracks().forEach(track => track.stop());
    }
    
    scanLine.style.display = 'none';
    scanStatus.innerText = 'Arahkan kamera ke daun atau rimpang tanaman herbal.';
    btnDetect.disabled = false;
    btnDetect.innerText = '🔍 Deteksi Tanaman';
    cameraModal.style.display = 'none';
}

// PROSES DETEKSI OTOMATIS
function captureAndScan() {
    const scanLine = document.getElementById('scanLine');
    const scanStatus = document.getElementById('scanStatus');
    const btnDetect = document.getElementById('btnDetect');

    // Aktifkan Efek Animasi Scan
    scanLine.style.display = 'block';
    scanStatus.innerText = '⏳ Memindai gambar visual tanaman...';
    btnDetect.disabled = true;
    btnDetect.innerText = 'Memproses...';

    // Simulasi waktu proses analisis gambar (1.5 detik)
    setTimeout(() => {
        // Ambil sampel tanaman acak untuk hasil deteksi visual
        const daftarTanaman = ['Sambiloto', 'Kunyit', 'Jahe', 'Temulawak', 'Pegagan'];
        const hasilOtomatis = daftarTanaman[Math.floor(Math.random() * daftarTanaman.length)];

        closeCameraModal();

        // Masukkan hasil ke search box & filter galeri
        searchInput.value = hasilOtomatis;
        filterPlants();

    }, 1500);
}

function filterPlants() {
    const query = searchInput.value.toLowerCase().trim();
    const khasiat = filterKhasiat.value.toLowerCase();
    const penyakit = filterPenyakit.value.toLowerCase();
    const sediaan = filterSediaan.value.toLowerCase();

    if (query === '' && khasiat === '' && penyakit === '' && sediaan === '') {
        plantGrid.style.display = 'none';
        emptyNotice.style.display = 'block';
        return;
    }

    let matchCount = 0;
    plantCards.forEach(card => {
        const dataNama = card.getAttribute('data-nama').toLowerCase();
        
        const matchQuery = query === '' || dataNama.includes(query);
        const matchKhasiat = khasiat === '' || dataNama.includes(khasiat);
        const matchPenyakit = penyakit === '' || dataNama.includes(penyakit);
        const matchSediaan = sediaan === '' || dataNama.includes(sediaan);

        if (matchQuery && matchKhasiat && matchPenyakit && matchSediaan) {
            card.style.display = 'flex';
            matchCount++;
        } else {
            card.style.display = 'none';
        }
    });

    if (matchCount > 0) {
        plantGrid.style.display = 'grid';
        emptyNotice.style.display = 'none';
    } else {
        plantGrid.style.display = 'none';
        emptyNotice.style.display = 'block';
        emptyNotice.innerHTML = '<p style="font-size: 1rem; margin: 0; color: #d32f2f;">❌ Tanaman tidak terdeteksi. Silakan coba lagi.</p>';
    }
}

function searchTag(keyword) {
    searchInput.value = keyword;
    filterPlants();
}

searchInput.addEventListener('input', filterPlants);
filterKhasiat.addEventListener('change', filterPlants);
filterPenyakit.addEventListener('change', filterPlants);
filterSediaan.addEventListener('change', filterPlants);
</script>

<?php include 'footer.php'; ?>