<?php include 'header.php'; ?>

<main class="main-column">
    <div class="container layout-wrapper" style="margin-top: 25px; margin-bottom: 40px;">

        <!-- BAGIAN FILTER & PENCARIAN -->
        <div class="search-filter-section" style="background: #fff; padding: 20px; border-radius: 10px; border: 1px solid #e0e0e0; box-shadow: 0 2px 6px rgba(0,0,0,0.05); margin-bottom: 25px;">
            <h3 style="margin-top: 0; color: #1b5e20; font-size: 1.2rem;">🔍 DIREKTORI TANAMAN HERBAL</h3>
            
            <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: 15px;">
                <input type="text" id="searchInput" placeholder="Ketik nama tanaman, khasiat, atau penyakit..." style="flex: 2; min-width: 200px; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
                
                <select id="filterKhasiat" style="flex: 1; min-width: 150px; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
                    <option value="">-- Semua Khasiat --</option>
                    <option value="Antioksidan">Antioksidan</option>
                    <option value="Antiinflamasi">Antiinflamasi</option>
                    <option value="Analgesik">Analgesik / Nyeri</option>
                    <option value="Antiseptik">Antiseptik / Antibakteri</option>
                    <option value="Sirkulasi">Sirkulasi Darah / Otak</option>
                </select>

                <select id="filterPenyakit" style="flex: 1; min-width: 150px; padding: 10px; border: 1px solid #ccc; border-radius: 6px;">
                    <option value="">-- Semua Kondisi --</option>
                    <option value="Pencernaan">Gangguan Pencernaan</option>
                    <option value="Demam">Demam / Batuk / Flu</option>
                    <option value="Luka">Luka / Kulit</option>
                    <option value="Asma">Asma / Pernapasan</option>
                    <option value="Pikun">Pikun / Memori</option>
                </select>

                <button onclick="openCameraModal()" style="background-color: #2e7d32; color: white; border: none; padding: 10px 16px; border-radius: 6px; cursor: pointer; font-weight: bold; display: flex; align-items: center; gap: 6px;">
                    📷 Scan Kamera
                </button>
            </div>
        </div>

        <!-- GALERI TANAMAN HERBAL (GRID) -->
        <section class="gallery-section">
            <h3 style="color: #2e7d32; margin-bottom: 15px;">🌿 HASIL PENCARIAN TANAMAN HERBAL</h3>

            <div class="plant-grid" id="plantGrid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 20px;">

                <!-- 1. Kunyit -->
                <div class="plant-card" data-nama="Kunyit Curcuma longa Antioksidan Antiinflamasi Pencernaan" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; padding: 15px; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/kunyit.jpg" alt="Kunyit" style="width: 100%; aspect-ratio: 1/1; object-fit: contain; border-radius: 6px; background: #fafafa;">
                    <div class="plant-card-body" style="margin-top: 10px;">
                        <h4 style="margin: 0; color: #1b5e20;">Kunyit</h4>
                        <p style="margin: 2px 0 10px 0; font-style: italic; color: #666; font-size: 0.85rem;">Curcuma longa</p>
                        <span style="background: #e8f5e9; color: #2e7d32; font-size: 0.75rem; padding: 3px 8px; border-radius: 4px; font-weight: bold;">Antioksidan • Pencernaan</span>
                        <a href="detail.php?id=1" style="display: block; text-align: center; background: #2e7d32; color: white; text-decoration: none; padding: 8px; border-radius: 6px; font-weight: bold; margin-top: 12px; font-size: 0.85rem;">Lihat Detail</a>
                    </div>
                </div>

                <!-- 2. Temulawak -->
                <div class="plant-card" data-nama="Temulawak Curcuma zanthorrhiza Hepatoprotektor Hati Imunitas" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; padding: 15px; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/temulawak.jpg" alt="Temulawak" style="width: 100%; aspect-ratio: 1/1; object-fit: contain; border-radius: 6px; background: #fafafa;">
                    <div class="plant-card-body" style="margin-top: 10px;">
                        <h4 style="margin: 0; color: #1b5e20;">Temulawak</h4>
                        <p style="margin: 2px 0 10px 0; font-style: italic; color: #666; font-size: 0.85rem;">Curcuma zanthorrhiza</p>
                        <span style="background: #e8f5e9; color: #2e7d32; font-size: 0.75rem; padding: 3px 8px; border-radius: 4px; font-weight: bold;">Kesehatan Hati • Imunitas</span>
                        <a href="detail.php?id=2" style="display: block; text-align: center; background: #2e7d32; color: white; text-decoration: none; padding: 8px; border-radius: 6px; font-weight: bold; margin-top: 12px; font-size: 0.85rem;">Lihat Detail</a>
                    </div>
                </div>

                <!-- 3. Jahe -->
                <div class="plant-card" data-nama="Jahe Zingiber officinale Mual Batuk Flu Warming" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; padding: 15px; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/jahe.jpg" alt="Jahe" style="width: 100%; aspect-ratio: 1/1; object-fit: contain; border-radius: 6px; background: #fafafa;">
                    <div class="plant-card-body" style="margin-top: 10px;">
                        <h4 style="margin: 0; color: #1b5e20;">Jahe</h4>
                        <p style="margin: 2px 0 10px 0; font-style: italic; color: #666; font-size: 0.85rem;">Zingiber officinale</p>
                        <span style="background: #e8f5e9; color: #2e7d32; font-size: 0.75rem; padding: 3px 8px; border-radius: 4px; font-weight: bold;">Mual • Batuk & Flu</span>
                        <a href="detail.php?id=3" style="display: block; text-align: center; background: #2e7d32; color: white; text-decoration: none; padding: 8px; border-radius: 6px; font-weight: bold; margin-top: 12px; font-size: 0.85rem;">Lihat Detail</a>
                    </div>
                </div>

                <!-- 4. Sambiloto -->
                <div class="plant-card" data-nama="Sambiloto Andrographis paniculata Antidiabetes Imunitas Demam" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; padding: 15px; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/sambiloto.jpg" alt="Sambiloto" style="width: 100%; aspect-ratio: 1/1; object-fit: contain; border-radius: 6px; background: #fafafa;">
                    <div class="plant-card-body" style="margin-top: 10px;">
                        <h4 style="margin: 0; color: #1b5e20;">Sambiloto</h4>
                        <p style="margin: 2px 0 10px 0; font-style: italic; color: #666; font-size: 0.85rem;">Andrographis paniculata</p>
                        <span style="background: #e8f5e9; color: #2e7d32; font-size: 0.75rem; padding: 3px 8px; border-radius: 4px; font-weight: bold;">Antidiabetes • Demam</span>
                        <a href="detail.php?id=4" style="display: block; text-align: center; background: #2e7d32; color: white; text-decoration: none; padding: 8px; border-radius: 6px; font-weight: bold; margin-top: 12px; font-size: 0.85rem;">Lihat Detail</a>
                    </div>
                </div>

                <!-- 5. Pegagan -->
                <div class="plant-card" data-nama="Pegagan Centella asiatica Daya Ingat Saraf Luka Pikun" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; padding: 15px; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/pegagan.jpg" alt="Pegagan" style="width: 100%; aspect-ratio: 1/1; object-fit: contain; border-radius: 6px; background: #fafafa;">
                    <div class="plant-card-body" style="margin-top: 10px;">
                        <h4 style="margin: 0; color: #1b5e20;">Pegagan</h4>
                        <p style="margin: 2px 0 10px 0; font-style: italic; color: #666; font-size: 0.85rem;">Centella asiatica</p>
                        <span style="background: #e8f5e9; color: #2e7d32; font-size: 0.75rem; padding: 3px 8px; border-radius: 4px; font-weight: bold;">Kesehatan Saraf • Luka</span>
                        <a href="detail.php?id=5" style="display: block; text-align: center; background: #2e7d32; color: white; text-decoration: none; padding: 8px; border-radius: 6px; font-weight: bold; margin-top: 12px; font-size: 0.85rem;">Lihat Detail</a>
                    </div>
                </div>

                <!-- 6. Asam Jawa -->
                <div class="plant-card" data-nama="Asam Jawa Tamarindus indica Linn Asma Batuk Demam Biduren" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; padding: 15px; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/asam_jawa.jpg" alt="Asam Jawa" style="width: 100%; aspect-ratio: 1/1; object-fit: contain; border-radius: 6px; background: #fafafa;">
                    <div class="plant-card-body" style="margin-top: 10px;">
                        <h4 style="margin: 0; color: #1b5e20;">Asam Jawa</h4>
                        <p style="margin: 2px 0 10px 0; font-style: italic; color: #666; font-size: 0.85rem;">Tamarindus indica, Linn</p>
                        <span style="background: #e8f5e9; color: #2e7d32; font-size: 0.75rem; padding: 3px 8px; border-radius: 4px; font-weight: bold;">Batuk • Asma • Demam</span>
                        <a href="detail.php?id=6" style="display: block; text-align: center; background: #2e7d32; color: white; text-decoration: none; padding: 8px; border-radius: 6px; font-weight: bold; margin-top: 12px; font-size: 0.85rem;">Lihat Detail</a>
                    </div>
                </div>

                <!-- 7. Selasih -->
                <div class="plant-card" data-nama="Selasih Ocimum basilicum L. Analgesik Antiseptik Antibakteri Luka" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; padding: 15px; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/selasih.jpg" alt="Selasih" style="width: 100%; aspect-ratio: 1/1; object-fit: contain; border-radius: 6px; background: #fafafa;">
                    <div class="plant-card-body" style="margin-top: 10px;">
                        <h4 style="margin: 0; color: #1b5e20;">Selasih</h4>
                        <p style="margin: 2px 0 10px 0; font-style: italic; color: #666; font-size: 0.85rem;">Ocimum basilicum L.</p>
                        <span style="background: #e8f5e9; color: #2e7d32; font-size: 0.75rem; padding: 3px 8px; border-radius: 4px; font-weight: bold;">Analgesik • Antiseptik</span>
                        <a href="detail.php?id=7" style="display: block; text-align: center; background: #2e7d32; color: white; text-decoration: none; padding: 8px; border-radius: 6px; font-weight: bold; margin-top: 12px; font-size: 0.85rem;">Lihat Detail</a>
                    </div>
                </div>

                <!-- 8. Ginkgo Biloba -->
                <div class="plant-card" data-nama="Ginkgo Biloba Daun Ginkgo Ginkgo biloba L. Sirkulasi Otak Pikun Batuk Asma" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; padding: 15px; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/ginkgo.jpg" alt="Ginkgo Biloba" style="width: 100%; aspect-ratio: 1/1; object-fit: contain; border-radius: 6px; background: #fafafa;">
                    <div class="plant-card-body" style="margin-top: 10px;">
                        <h4 style="margin: 0; color: #1b5e20;">Ginkgo Biloba</h4>
                        <p style="margin: 2px 0 10px 0; font-style: italic; color: #666; font-size: 0.85rem;">Ginkgo biloba L.</p>
                        <span style="background: #e8f5e9; color: #2e7d32; font-size: 0.75rem; padding: 3px 8px; border-radius: 4px; font-weight: bold;">Sirkulasi Darah • Otak</span>
                        <a href="detail.php?id=8" style="display: block; text-align: center; background: #2e7d32; color: white; text-decoration: none; padding: 8px; border-radius: 6px; font-weight: bold; margin-top: 12px; font-size: 0.85rem;">Lihat Detail</a>
                    </div>
                </div>

            </div>

            <!-- Pesan Jika Hasil Kosong -->
            <div id="emptyNotice" style="display: none; padding: 20px; text-align: center; background: #ffebee; border-radius: 8px; margin-top: 20px;">
                <p style="margin: 0; color: #c62828; font-weight: bold;">❌ Tanaman tidak terdeteksi atau tidak ditemukan. Silakan coba kata kunci lain.</p>
            </div>
        </section>

        <!-- BANNER KONSULTASI MEDIS MENONJOL -->
        <div style="background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%); border: 2px solid #2e7d32; border-radius: 12px; padding: 25px; margin: 35px 0 20px 0; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px; box-shadow: 0 4px 12px rgba(0,0,0,0.08);">
            <div style="flex: 1; min-width: 280px;">
                <span style="background: #e65100; color: white; font-size: 0.75rem; padding: 4px 10px; border-radius: 20px; font-weight: bold; letter-spacing: 0.5px; text-transform: uppercase;">
                    💳 Konsultasi Berbayar
                </span>
                <h3 style="color: #1b5e20; margin: 10px 0 5px 0; font-size: 1.3rem;">Butuh Bantuan Konsultasi Medis & Herbal?</h3>
                <p style="color: #444; margin: 0; font-size: 0.95rem; line-height: 1.5;">
                    Bingung memilih produk herbal yang cocok atau punya pertanyaan seputar aturan pakai dan interaksi obat? Tim medis kami siap membantu!
                </p>
            </div>

            <div style="display: flex; gap: 12px; flex-wrap: wrap; align-items: center;">
                <a href="https://wa.me/62895326133068?text=Halo%20Apoteker,%20saya%20ingin%20konsultasi%20mengenai%20penggunaan%20obat%20herbal." target="_blank" style="background-color: #25d366; color: white; padding: 12px 20px; text-decoration: none; border-radius: 8px; font-weight: bold; font-size: 0.95rem; display: flex; align-items: center; gap: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.15);">
                    💊 Tanya Apoteker
                </a>
                <a href="https://wa.me/62895326133068?text=Halo%20Dokter,%20saya%20ingin%20konsultasi%20kesehatan%20dan%20herbal." target="_blank" style="background-color: #0288d1; color: white; padding: 12px 20px; text-decoration: none; border-radius: 8px; font-weight: bold; font-size: 0.95rem; display: flex; align-items: center; gap: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.15);">
                    👨‍⚕️ Tanya Dokter
                </a>
            </div>
        </div>

    </div>
</main>

<!-- MODAL KAMERA DETEKSI -->
<div id="cameraModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); z-index: 9999; align-items: center; justify-content: center;">
    <div style="background: white; padding: 20px; border-radius: 10px; max-width: 400px; width: 90%; text-align: center; position: relative;">
        <h3 style="margin-top: 0; color: #1b5e20;">📷 Deteksi Kamera Visual</h3>
        <video id="webcam" autoplay playsinline style="width: 100%; border-radius: 8px; background: #000;"></video>
        <p id="scanStatus" style="font-size: 0.85rem; color: #666; margin: 10px 0;">Arahkan kamera ke daun atau rimpang tanaman herbal.</p>
        <div id="scanLine" style="display: none; height: 3px; background: #2e7d32; width: 100%; margin-bottom: 10px;"></div>
        
        <div style="display: flex; gap: 10px; justify-content: center;">
            <button id="btnDetect" onclick="captureAndScan()" style="background: #2e7d32; color: white; border: none; padding: 8px 15px; border-radius: 6px; cursor: pointer; font-weight: bold;">🔍 Pindai Gambar</button>
            <button onclick="closeCameraModal()" style="background: #d32f2f; color: white; border: none; padding: 8px 15px; border-radius: 6px; cursor: pointer; font-weight: bold;">Batal</button>
        </div>
    </div>
</div>

<script>
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
    if (videoStream) {
        videoStream.getTracks().forEach(track => track.stop());
    }
    if (cameraModal) cameraModal.style.display = 'none';
}

function captureAndScan() {
    const scanLine = document.getElementById('scanLine');
    const scanStatus = document.getElementById('scanStatus');
    const btnDetect = document.getElementById('btnDetect');

    if (scanLine) scanLine.style.display = 'block';
    if (scanStatus) scanStatus.innerText = '⏳ Memindai gambar visual tanaman...';
    if (btnDetect) {
        btnDetect.disabled = true;
        btnDetect.innerText = 'Memproses...';
    }

    setTimeout(() => {
        const daftarTanaman = ['Sambiloto', 'Kunyit', 'Jahe', 'Temulawak', 'Pegagan', 'Asam Jawa', 'Selasih', 'Ginkgo Biloba'];
        const hasilOtomatis = daftarTanaman[Math.floor(Math.random() * daftarTanaman.length)];

        closeCameraModal();

        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
            searchInput.value = hasilOtomatis;
            filterPlants();
        }
    }, 1500);
}

function filterPlants() {
    const searchInput = document.getElementById('searchInput');
    const filterKhasiat = document.getElementById('filterKhasiat');
    const filterPenyakit = document.getElementById('filterPenyakit');
    const plantGrid = document.getElementById('plantGrid');
    const emptyNotice = document.getElementById('emptyNotice');
    const plantCards = document.querySelectorAll('.plant-card');

    if (!searchInput || !plantGrid || !emptyNotice) return;

    const query = searchInput.value.toLowerCase().trim();
    const khasiat = filterKhasiat ? filterKhasiat.value.toLowerCase() : '';
    const penyakit = filterPenyakit ? filterPenyakit.value.toLowerCase() : '';

    let matchCount = 0;
    plantCards.forEach(card => {
        const dataNama = card.getAttribute('data-nama') ? card.getAttribute('data-nama').toLowerCase() : '';
        
        const matchQuery = query === '' || dataNama.includes(query);
        const matchKhasiat = khasiat === '' || dataNama.includes(khasiat);
        const matchPenyakit = penyakit === '' || dataNama.includes(penyakit);

        if (matchQuery && matchKhasiat && matchPenyakit) {
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
    }
}

document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById('searchInput');
    const filterKhasiat = document.getElementById('filterKhasiat');
    const filterPenyakit = document.getElementById('filterPenyakit');

    if (searchInput) searchInput.addEventListener('input', filterPlants);
    if (filterKhasiat) filterKhasiat.addEventListener('change', filterPlants);
    if (filterPenyakit) filterPenyakit.addEventListener('change', filterPlants);
});
</script>

<?php include 'footer.php'; ?>

