<?php include 'header.php'; ?>

<!-- HERO SECTION -->
<section class="hero-search-section" style="padding: 25px 0; background: #f4fbf7; border-bottom: 1px solid #e0e0e0;">
    <div class="container text-center">
        <h2 style="color: #1b5e20; margin-bottom: 5px; font-size: 1.8rem;">Kenali Tanaman Herbal untuk Pilihan yang Lebih Bijak</h2>
        <p class="subtitle" style="color: #555; margin: 0;">Temukan informasi tanaman herbal, manfaat, kandungan, bentuk sediaan, serta rekomendasi penggunaan.</p>
    </div>
</section>

<!-- MODAL POPUP KAMERA SCAN OTOMATIS -->
<div id="cameraModal" style="display: none; position: fixed; z-index: 999; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.7); justify-content: center; align-items: center;">
    <div style="background: white; padding: 20px; border-radius: 12px; width: 90%; max-width: 400px; text-align: center; position: relative;">
        <h3 style="margin-top: 0; color: #1b5e20;">📷 Scan Tanaman Herbal</h3>
        <p id="scanStatus" style="font-size: 0.85rem; color: #666; margin-bottom: 15px;">Arahkan kamera ke daun atau rimpang tanaman herbal.</p>
        
        <div style="position: relative; overflow: hidden; border-radius: 8px;">
            <video id="webcam" autoplay playsinline style="width: 100%; height: 250px; object-fit: cover; background: #000; display: block;"></video>
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
/* Layout Utama: Kiri 75%, Kanan 25% */
.main-layout-container {
    max-width: 1200px;
    margin: 30px auto;
    padding: 0 15px;
    display: flex;
    gap: 25px;
    align-items: flex-start;
}
.left-content-75 {
    flex: 3;
    min-width: 0;
}
.right-sidebar-25 {
    flex: 1;
    min-width: 260px;
    position: sticky;
    top: 20px;
}
@media (max-width: 900px) {
    .main-layout-container {
        flex-direction: column;
    }
    .right-sidebar-25 {
        position: static;
        width: 100%;
    }
}
</style>

<!-- MAIN LAYOUT (75% KIRI & 25% KANAN) -->
<div class="main-layout-container">

    <!-- KOLOM KIRI (75%): SEARCH, FILTER, & GALERI TANAMAN -->
    <div class="left-content-75">
        
        <!-- SEARCH BAR BESAR -->
        <div class="search-box-wrapper" style="margin-bottom: 20px;">
            <form action="index.php" method="GET" class="main-search-form" onsubmit="return false;" style="display: flex; gap: 10px; align-items: center;">
                <input type="text" id="searchInput" class="search-input" placeholder="🔍 Cari nama tanaman, nama latin, khasiat, atau sediaan..." style="flex: 1; padding: 12px 18px; font-size: 1rem; border: 2px solid #c8e6c9; border-radius: 30px; outline: none;">
                
                <button type="button" onclick="openCameraModal()" style="background-color: #2e7d32; color: white; border: none; padding: 12px 20px; border-radius: 30px; cursor: pointer; font-weight: bold; display: flex; align-items: center; gap: 6px; white-space: nowrap;">
                    📷 Scan
                </button>
            </form>

            <div class="popular-searches" style="margin-top: 8px; font-size: 0.85rem; color: #666;">
                <span>Pencarian populer:</span>
                <a href="#" class="popular-tag" onclick="searchTag('Jahe')" style="color: #2e7d32; text-decoration: none; margin-left: 5px; font-weight: 500;">Jahe</a> •
                <a href="#" class="popular-tag" onclick="searchTag('Kunyit')" style="color: #2e7d32; text-decoration: none; margin-left: 3px; font-weight: 500;">Kunyit</a> •
                <a href="#" class="popular-tag" onclick="searchTag('Temulawak')" style="color: #2e7d32; text-decoration: none; margin-left: 3px; font-weight: 500;">Temulawak</a> •
                <a href="#" class="popular-tag" onclick="searchTag('Sambiloto')" style="color: #2e7d32; text-decoration: none; margin-left: 3px; font-weight: 500;">Sambiloto</a> •
                <a href="#" class="popular-tag" onclick="searchTag('Anting-Anting')" style="color: #2e7d32; text-decoration: none; margin-left: 3px; font-weight: 500;">Anting-Anting</a>
            </div>
        </div>

        <!-- MULTI-FILTER DIREKTORI -->
        <section class="filter-box" style="background: #f9f9f9; padding: 15px; border-radius: 8px; border: 1px solid #e0e0e0; margin-bottom: 20px;">
            <h4 style="margin-top: 0; color: #1b5e20; font-size: 1rem; margin-bottom: 10px;">📂 DIREKTORI TANAMAN HERBAL</h4>
            <div class="filter-grid" style="display: flex; gap: 10px; flex-wrap: wrap;">
                <select id="filterKhasiat" style="padding: 8px; border-radius: 4px; border: 1px solid #ccc; flex: 1; min-width: 140px;">
                    <option value="">-- Semua Khasiat --</option>
                    <option value="antioksidan">Antioksidan</option>
                    <option value="antiinflamasi">Antiinflamasi</option>
                    <option value="antibakteri">Antibakteri</option>
                    <option value="antidiabetes">Antidiabetes</option>
                    <option value="pencernaan">Pencernaan</option>
                    <option value="imunitas">Imunitas</option>
                </select>

                <select id="filterPenyakit" style="padding: 8px; border-radius: 4px; border: 1px solid #ccc; flex: 1; min-width: 140px;">
                    <option value="">-- Semua Kondisi --</option>
                    <option value="batuk">Batuk / Asma</option>
                    <option value="demam">Demam / Flu</option>
                    <option value="diabetes">Diabetes</option>
                    <option value="diare">Diare / Disentri</option>
                    <option value="mual">Mual & Lambung</option>
                </select>

                <select id="filterSediaan" style="padding: 8px; border-radius: 4px; border: 1px solid #ccc; flex: 1; min-width: 140px;">
                    <option value="">-- Semua Sediaan --</option>
                    <option value="ekstrak">Ekstrak</option>
                    <option value="kapsul">Kapsul</option>
                    <option value="serbuk">Serbuk</option>
                    <option value="simplisia">Simplisia</option>
                    <option value="rebusan">Rebusan</option>
                </select>
            </div>
        </section>

        <!-- INDEKS A-Z -->
        <section class="index-box" style="margin-bottom: 25px;">
            <h5 style="margin-bottom: 8px; color: #1b5e20; font-size: 0.9rem;">🔤 INDEKS NAMA LATIN A-Z</h5>
            <div class="alphabet-list" style="display: flex; gap: 4px; flex-wrap: wrap;">
                <?php foreach(range('A', 'Z') as $char): ?>
                    <a href="#" onclick="searchTag('<?php echo $char; ?>')" style="padding: 3px 7px; background: #eee; text-decoration: none; border-radius: 3px; color: #333; font-weight: bold; font-size: 0.8rem;"><?php echo $char; ?></a>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- GALERI TANAMAN HERBAL -->
        <section class="gallery-section">
            <h4 style="color: #1b5e20; margin-bottom: 15px; font-size: 1.1rem;">🌿 HASIL PENCARIAN & KATALOG TANAMAN</h4>
            
            <div id="emptyNotice" style="text-align: center; padding: 40px 20px; color: #666; background: #fafafa; border: 1px dashed #ccc; border-radius: 6px;">
                <p style="font-size: 0.95rem; margin: 0;">🔍 <strong>Ketik nama tanaman di atas, gunakan filter, atau klik Scan Kamera</strong> untuk menampilkan daftar tanaman.</p>
            </div>

            <div class="plant-grid" id="plantGrid" style="display: none; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 15px;">
                
                <!-- ID 1: Kunyit -->
                <div class="plant-card" data-nama="kunyit curcuma longa antioksidan antiinflamasi pencernaan lambung simplisia serbuk ekstrak c" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/kunyit.jpg" alt="Kunyit" style="width: 100%; height: 160px; object-fit: cover;">
                    <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                        <div>
                            <h5 style="margin: 0 0 2px 0; color: #1b5e20; font-size: 1rem; font-weight: bold;">Kunyit</h5>
                            <p style="margin: 0 0 6px 0; color: #666; font-size: 0.8rem; font-style: italic;">Curcuma longa</p>
                            <span style="font-size: 0.7rem; background: #e8f5e9; color: #1b5e20; padding: 2px 5px; border-radius: 3px;">Antioksidan • Pencernaan</span>
                        </div>
                        <a href="detail.php?id=1" style="background-color: #2e7d32; color: white; text-align: center; padding: 7px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.8rem; margin-top: 8px;">Lihat Detail</a>
                    </div>
                </div>

                <!-- ID 2: Temulawak -->
                <div class="plant-card" data-nama="temulawak curcuma zanthorrhiza kesehatan hati hepatoprotektor nafsu makan imunitas kapsul sirup serbuk c" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/temulawak.jpg" alt="Temulawak" style="width: 100%; height: 160px; object-fit: cover;">
                    <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                        <div>
                            <h5 style="margin: 0 0 2px 0; color: #1b5e20; font-size: 1rem; font-weight: bold;">Temulawak</h5>
                            <p style="margin: 0 0 6px 0; color: #666; font-size: 0.8rem; font-style: italic;">Curcuma zanthorrhiza</p>
                            <span style="font-size: 0.7rem; background: #e8f5e9; color: #1b5e20; padding: 2px 5px; border-radius: 3px;">Kesehatan Hati • Imunitas</span>
                        </div>
                        <a href="detail.php?id=2" style="background-color: #2e7d32; color: white; text-align: center; padding: 7px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.8rem; margin-top: 8px;">Lihat Detail</a>
                    </div>
                </div>

                <!-- ID 3: Jahe -->
                <div class="plant-card" data-nama="jahe zingiber officinale mual masuk angin batuk hangat serbuk ekstrak teh z" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/jahe.jpg" alt="Jahe" style="width: 100%; height: 160px; object-fit: cover;">
                    <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                        <div>
                            <h5 style="margin: 0 0 2px 0; color: #1b5e20; font-size: 1rem; font-weight: bold;">Jahe</h5>
                            <p style="margin: 0 0 6px 0; color: #666; font-size: 0.8rem; font-style: italic;">Zingiber officinale</p>
                            <span style="font-size: 0.7rem; background: #e8f5e9; color: #1b5e20; padding: 2px 5px; border-radius: 3px;">Mual • Penghangat Badan</span>
                        </div>
                        <a href="detail.php?id=3" style="background-color: #2e7d32; color: white; text-align: center; padding: 7px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.8rem; margin-top: 8px;">Lihat Detail</a>
                    </div>
                </div>

                <!-- ID 4: Sambiloto -->
                <div class="plant-card" data-nama="sambiloto andrographis paniculata antidiabetes gula darah imunitas demam flu kapsul ekstrak a" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/sambiloto.jpg" alt="Sambiloto" style="width: 100%; height: 160px; object-fit: cover;">
                    <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                        <div>
                            <h5 style="margin: 0 0 2px 0; color: #1b5e20; font-size: 1rem; font-weight: bold;">Sambiloto</h5>
                            <p style="margin: 0 0 6px 0; color: #666; font-size: 0.8rem; font-style: italic;">Andrographis paniculata</p>
                            <span style="font-size: 0.7rem; background: #e8f5e9; color: #1b5e20; padding: 2px 5px; border-radius: 3px;">Antidiabetes • Imunitas</span>
                        </div>
                        <a href="detail.php?id=4" style="background-color: #2e7d32; color: white; text-align: center; padding: 7px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.8rem; margin-top: 8px;">Lihat Detail</a>
                    </div>
                </div>

                <!-- ID 5: Pegagan -->
                <div class="plant-card" data-nama="pegagan centella asiatica daya ingat saraf kognitif luka antioksidan teh kapsul c" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/pegagan.jpg" alt="Pegagan" style="width: 100%; height: 160px; object-fit: cover;">
                    <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                        <div>
                            <h5 style="margin: 0 0 2px 0; color: #1b5e20; font-size: 1rem; font-weight: bold;">Pegagan</h5>
                            <p style="margin: 0 0 6px 0; color: #666; font-size: 0.8rem; font-style: italic;">Centella asiatica</p>
                            <span style="font-size: 0.7rem; background: #e8f5e9; color: #1b5e20; padding: 2px 5px; border-radius: 3px;">Saraf & Kognitif</span>
                        </div>
                        <a href="detail.php?id=5" style="background-color: #2e7d32; color: white; text-align: center; padding: 7px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.8rem; margin-top: 8px;">Lihat Detail</a>
                    </div>
                </div>

                <!-- ID 6: Asam Jawa -->
                <div class="plant-card" data-nama="asam jawa tamarindus indica asma batuk demam reumatik sariawan g" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/asam_jawa.jpg" alt="Asam Jawa" style="width: 100%; height: 160px; object-fit: cover;">
                    <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                        <div>
                            <h5 style="margin: 0 0 2px 0; color: #1b5e20; font-size: 1rem; font-weight: bold;">Asam Jawa</h5>
                            <p style="margin: 0 0 6px 0; color: #666; font-size: 0.8rem; font-style: italic;">Tamarindus indica, Linn</p>
                            <span style="font-size: 0.7rem; background: #e8f5e9; color: #1b5e20; padding: 2px 5px; border-radius: 3px;">Asma • Batuk • Demam</span>
                        </div>
                        <a href="detail.php?id=6" style="background-color: #2e7d32; color: white; text-align: center; padding: 7px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.8rem; margin-top: 8px;">Lihat Detail</a>
                    </div>
                </div>

                <!-- ID 7: Selasih -->
                <div class="plant-card" data-nama="selasih ocimum basilicum l. diuretik antiseptik antibakteri penenang teh o" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/selasih.jpg" alt="Selasih" style="width: 100%; height: 160px; object-fit: cover;">
                    <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                        <div>
                            <h5 style="margin: 0 0 2px 0; color: #1b5e20; font-size: 1rem; font-weight: bold;">Selasih</h5>
                            <p style="margin: 0 0 6px 0; color: #666; font-size: 0.8rem; font-style: italic;">Ocimum basilicum L.</p>
                            <span style="font-size: 0.7rem; background: #e8f5e9; color: #1b5e20; padding: 2px 5px; border-radius: 3px;">Antiseptik • Diuretik</span>
                        </div>
                        <a href="detail.php?id=7" style="background-color: #2e7d32; color: white; text-align: center; padding: 7px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.8rem; margin-top: 8px;">Lihat Detail</a>
                    </div>
                </div>

                <!-- ID 8: Ginkgo Biloba -->
                <div class="plant-card" data-nama="ginkgo biloba daun ginkgo peredaran darah otak pikun alzheimer kognitif kapsul g" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/ginkgo.jpg" alt="Ginkgo Biloba" style="width: 100%; height: 160px; object-fit: cover;">
                    <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                        <div>
                            <h5 style="margin: 0 0 2px 0; color: #1b5e20; font-size: 1rem; font-weight: bold;">Ginkgo Biloba</h5>
                            <p style="margin: 0 0 6px 0; color: #666; font-size: 0.8rem; font-style: italic;">Ginkgo biloba L.</p>
                            <span style="font-size: 0.7rem; background: #e8f5e9; color: #1b5e20; padding: 2px 5px; border-radius: 3px;">Sirkulasi Otak • Pikun</span>
                        </div>
                        <a href="detail.php?id=8" style="background-color: #2e7d32; color: white; text-align: center; padding: 7px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.8rem; margin-top: 8px;">Lihat Detail</a>
                    </div>
                </div>

                <!-- ID 9: Anting-Anting -->
                <div class="plant-card" data-nama="anting-anting anting anting acalypha australis l. disentri diare batuk pendarahan luka rebusan" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/anting_anting.jpg" alt="Anting-Anting" style="width: 100%; height: 160px; object-fit: cover;">
                    <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                        <div>
                            <h5 style="margin: 0 0 2px 0; color: #1b5e20; font-size: 1rem; font-weight: bold;">Anting-Anting</h5>
                            <p style="margin: 0 0 6px 0; color: #666; font-size: 0.8rem; font-style: italic;">Acalypha australis L.</p>
                            <span style="font-size: 0.7rem; background: #e8f5e9; color: #1b5e20; padding: 2px 5px; border-radius: 3px;">Disentri • Pendarahan</span>
                        </div>
                        <a href="detail.php?id=9" style="background-color: #2e7d32; color: white; text-align: center; padding: 7px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.8rem; margin-top: 8px;">Lihat Detail</a>
                    </div>
                </div>

                <!-- ID 10: Bandotan / Bendotan -->
                <div class="plant-card" data-nama="bandotan bendotan ageratum conyzoides l. luka sariawan demam bisul eksim rebusan" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/bandotan.jpg" alt="Bandotan" style="width: 100%; height: 160px; object-fit: cover;">
                    <div style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                        <div>
                            <h5 style="margin: 0 0 2px 0; color: #1b5e20; font-size: 1rem; font-weight: bold;">Bandotan</h5>
                            <p style="margin: 0 0 6px 0; color: #666; font-size: 0.8rem; font-style: italic;">Ageratum conyzoides L.</p>
                            <span style="font-size: 0.7rem; background: #e8f5e9; color: #1b5e20; padding: 2px 5px; border-radius: 3px;">Luka • Sariawan • Demam</span>
                        </div>
                        <a href="detail.php?id=10" style="background-color: #2e7d32; color: white; text-align: center; padding: 7px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.8rem; margin-top: 8px;">Lihat Detail</a>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <!-- KOLOM KANAN (25%): LAYANAN KONSULTASI VERSI KECIL -->
    <div class="right-sidebar-25">
        <div style="background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%); border: 1px solid #a5d6a7; border-top: 5px solid #2e7d32; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
            <div style="display: inline-block; background-color: #2e7d32; color: white; padding: 3px 8px; border-radius: 20px; font-size: 0.7rem; font-weight: bold; margin-bottom: 8px; text-transform: uppercase;">
                ⭐ Layanan Berbayar
            </div>
            <h4 style="margin: 0 0 8px 0; color: #1b5e20; font-size: 1.1rem; font-weight: bold;">Konsultasi Medis & Herbal</h4>
            <p style="margin: 0 0 15px 0; color: #444; font-size: 0.85rem; line-height: 1.4;">Bingung memilih produk herbal atau ingin tahu aturan pakai & interaksi obat? Konsultasikan langsung bersama ahli kami.</p>
            
            <div style="display: flex; flex-direction: column; gap: 8px;">
                <a href="https://wa.me/62895326133068?text=Halo%20Apoteker,%20saya%20ingin%20konsultasi%20mengenai%20aturan%20pakai%20dan%20pemilihan%20tanaman%20herbal." target="_blank" style="background-color: #25d366; color: white; padding: 10px; text-decoration: none; border-radius: 6px; font-weight: bold; font-size: 0.85rem; text-align: center; display: block; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                    💬 Tanya Apoteker
                </a>
                <a href="https://wa.me/62895326133068?text=Halo%20Dokter,%20saya%20ingin%20konsultasi%20terkait%20kondisi%20kesehatan%20dan%20terapi%20herbal." target="_blank" style="background-color: #0288d1; color: white; padding: 10px; text-decoration: none; border-radius: 6px; font-weight: bold; font-size: 0.85rem; text-align: center; display: block; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                    🩺 Tanya Dokter
                </a>
            </div>
        </div>
    </div>

</div>

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

function captureAndScan() {
    const scanLine = document.getElementById('scanLine');
    const scanStatus = document.getElementById('scanStatus');
    const btnDetect = document.getElementById('btnDetect');

    scanLine.style.display = 'block';
    scanStatus.innerText = '⏳ Memindai gambar visual tanaman...';
    btnDetect.disabled = true;
    btnDetect.innerText = 'Memproses...';

    setTimeout(() => {
        const daftarTanaman = ['Sambiloto', 'Kunyit', 'Jahe', 'Temulawak', 'Pegagan', 'Anting-Anting', 'Bandotan'];
        const hasilOtomatis = daftarTanaman[Math.floor(Math.random() * daftarTanaman.length)];

        closeCameraModal();
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
        emptyNotice.innerHTML = '<p style="font-size: 0.95rem; margin: 0; color: #d32f2f;">❌ Tanaman tidak ditemukan.</p>';
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