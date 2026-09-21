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
                <a href="#" class="popular-tag" onclick="searchTag('Anting-Anting')">Anting-Anting</a>
                <a href="#" class="popular-tag" onclick="searchTag('Bandotan')">Bandotan</a>
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
<div class="container layout-wrapper" style="margin-top: 30px; margin-bottom: 40px;">

    <!-- BANNER KONSULTASI BERBAYAR -->
    <div style="background-color: #e8f5e9; border-left: 5px solid #2e7d32; padding: 20px; border-radius: 8px; margin-bottom: 30px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
        <div>
            <h3 style="margin: 0; color: #1b5e20;">💬 Butuh Konsultasi Herbal Khusus?</h3>
            <p style="margin: 5px 0 0 0; color: #444;">Konsultasikan kondisi kesehatan dan dosis ramuan herbal kamu langsung bersama Apoteker profesional kami.</p>
        </div>
        <a href="konsultasi.php" style="background-color: #2e7d32; color: white; padding: 10px 20px; text-decoration: none; border-radius: 6px; font-weight: bold;">Konsultasi Berbayar</a>
    </div>

    <!-- KOLOM KIRI: DIREKTORI & GALERI -->
    <main class="main-column">
        
        <!-- MULTI-FILTER DIREKTORI -->
        <section class="filter-box" style="background: #f9f9f9; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
            <h3 style="margin-top: 0; color: #1b5e20; font-size: 1.1rem;">📂 DIREKTORI TANAMAN HERBAL</h3>
            <div class="filter-grid" style="display: flex; gap: 10px; flex-wrap: wrap;">
                <select id="filterKhasiat" style="padding: 8px; border-radius: 4px; border: 1px solid #ccc; flex: 1; min-width: 150px;">
                    <option value="">-- Semua Kategori Khasiat --</option>
                    <option value="antioksidan">Antioksidan</option>
                    <option value="antiinflamasi">Antiinflamasi</option>
                    <option value="antibakteri">Antibakteri</option>
                    <option value="antidiabetes">Antidiabetes</option>
                    <option value="pencernaan">Pencernaan</option>
                    <option value="imunitas">Imunitas</option>
                    <option value="pendarahan">Pendarahan & Luka</option>
                </select>

                <select id="filterPenyakit" style="padding: 8px; border-radius: 4px; border: 1px solid #ccc; flex: 1; min-width: 150px;">
                    <option value="">-- Semua Kondisi Kesehatan --</option>
                    <option value="batuk">Batuk / Asma</option>
                    <option value="demam">Demam / Flu</option>
                    <option value="diabetes">Diabetes</option>
                    <option value="diare">Diare / Disentri</option>
                    <option value="mual">Mual & Lambung</option>
                </select>

                <select id="filterSediaan" style="padding: 8px; border-radius: 4px; border: 1px solid #ccc; flex: 1; min-width: 150px;">
                    <option value="">-- Semua Bentuk Sediaan --</option>
                    <option value="ekstrak">Ekstrak</option>
                    <option value="kapsul">Kapsul</option>
                    <option value="serbuk">Serbuk / Bubuk</option>
                    <option value="simplisia">Simplisia</option>
                    <option value="rebusan">Rebusan / Seduhan</option>
                </select>
            </div>
        </section>

        <!-- INDEKS NAMA LATIN A-Z -->
        <section class="index-box" style="margin-bottom: 25px;">
            <h4 style="margin-bottom: 10px; color: #1b5e20;">🔤 INDEKS BERDASARKAN NAMA LATIN</h4>
            <div class="alphabet-list" style="display: flex; gap: 6px; flex-wrap: wrap;">
                <?php foreach(range('A', 'Z') as $char): ?>
                    <a href="#" onclick="searchTag('<?php echo $char; ?>')" style="padding: 4px 8px; background: #eee; text-decoration: none; border-radius: 4px; color: #333; font-weight: bold; font-size: 0.85rem;"><?php echo $char; ?></a>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- GALERI TANAMAN HERBAL -->
        <section class="gallery-section">
            <h4 style="color: #1b5e20; margin-bottom: 15px;">🌿 HASIL PENCARIAN TANAMAN HERBAL</h4>
            
            <div id="emptyNotice" style="text-align: center; padding: 40px 20px; color: #666; background: #fafafa; border: 1px dashed #ccc; border-radius: 6px;">
                <p style="font-size: 1rem; margin: 0;">🔍 <strong>Ketik nama tanaman, pilih filter, atau klik Scan Kamera</strong> untuk melihat informasi tanaman herbal.</p>
            </div>

            <div class="plant-grid" id="plantGrid" style="display: none; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px;">
                
                <!-- ID 1: Kunyit -->
                <div class="plant-card" data-nama="kunyit curcuma longa antioksidan antiinflamasi pencernaan lambung simplisia serbuk ekstrak c" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/kunyit.jpg" alt="Kunyit" class="plant-img" style="width: 100%; height: 180px; object-fit: cover;">
                    <div style="padding: 15px; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                        <div>
                            <h5 style="margin: 0 0 2px 0; color: #1b5e20; font-size: 1.1rem; font-weight: bold;">Kunyit</h5>
                            <p style="margin: 0 0 8px 0; color: #666; font-size: 0.85rem; font-style: italic;">Curcuma longa</p>
                            <span style="font-size: 0.75rem; background: #e8f5e9; color: #1b5e20; padding: 2px 6px; border-radius: 4px;">Antioksidan • Pencernaan</span>
                        </div>
                        <a href="detail.php?id=1" style="background-color: #2e7d32; color: white; text-align: center; padding: 8px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.85rem; margin-top: 10px;">Lihat Detail</a>
                    </div>
                </div>

                <!-- ID 2: Temulawak -->
                <div class="plant-card" data-nama="temulawak curcuma zanthorrhiza kesehatan hati hepatoprotektor nafsu makan imunitas kapsul sirup serbuk c" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/temulawak.jpg" alt="Temulawak" class="plant-img" style="width: 100%; height: 180px; object-fit: cover;">
                    <div style="padding: 15px; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                        <div>
                            <h5 style="margin: 0 0 2px 0; color: #1b5e20; font-size: 1.1rem; font-weight: bold;">Temulawak</h5>
                            <p style="margin: 0 0 8px 0; color: #666; font-size: 0.85rem; font-style: italic;">Curcuma zanthorrhiza</p>
                            <span style="font-size: 0.75rem; background: #e8f5e9; color: #1b5e20; padding: 2px 6px; border-radius: 4px;">Kesehatan Hati • Imunitas</span>
                        </div>
                        <a href="detail.php?id=2" style="background-color: #2e7d32; color: white; text-align: center; padding: 8px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.85rem; margin-top: 10px;">Lihat Detail</a>
                    </div>
                </div>

                <!-- ID 3: Jahe -->
                <div class="plant-card" data-nama="jahe zingiber officinale mual masuk angin batuk hangat serbuk ekstrak teh z" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/jahe.jpg" alt="Jahe" class="plant-img" style="width: 100%; height: 180px; object-fit: cover;">
                    <div style="padding: 15px; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                        <div>
                            <h5 style="margin: 0 0 2px 0; color: #1b5e20; font-size: 1.1rem; font-weight: bold;">Jahe</h5>
                            <p style="margin: 0 0 8px 0; color: #666; font-size: 0.85rem; font-style: italic;">Zingiber officinale</p>
                            <span style="font-size: 0.75rem; background: #e8f5e9; color: #1b5e20; padding: 2px 6px; border-radius: 4px;">Mual • Penghangat Badan</span>
                        </div>
                        <a href="detail.php?id=3" style="background-color: #2e7d32; color: white; text-align: center; padding: 8px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.85rem; margin-top: 10px;">Lihat Detail</a>
                    </div>
                </div>

                <!-- ID 4: Sambiloto -->
                <div class="plant-card" data-nama="sambiloto andrographis paniculata antidiabetes gula darah imunitas demam flu kapsul ekstrak a" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/sambiloto.jpg" alt="Sambiloto" class="plant-img" style="width: 100%; height: 180px; object-fit: cover;">
                    <div style="padding: 15px; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                        <div>
                            <h5 style="margin: 0 0 2px 0; color: #1b5e20; font-size: 1.1rem; font-weight: bold;">Sambiloto</h5>
                            <p style="margin: 0 0 8px 0; color: #666; font-size: 0.85rem; font-style: italic;">Andrographis paniculata</p>
                            <span style="font-size: 0.75rem; background: #e8f5e9; color: #1b5e20; padding: 2px 6px; border-radius: 4px;">Antidiabetes • Imunitas</span>
                        </div>
                        <a href="detail.php?id=4" style="background-color: #2e7d32; color: white; text-align: center; padding: 8px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.85rem; margin-top: 10px;">Lihat Detail</a>
                    </div>
                </div>

                <!-- ID 5: Pegagan -->
                <div class="plant-card" data-nama="pegagan centella asiatica daya ingat saraf kognitif luka antioksidan teh kapsul c" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/pegagan.jpg" alt="Pegagan" class="plant-img" style="width: 100%; height: 180px; object-fit: cover;">
                    <div style="padding: 15px; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                        <div>
                            <h5 style="margin: 0 0 2px 0; color: #1b5e20; font-size: 1.1rem; font-weight: bold;">Pegagan</h5>
                            <p style="margin: 0 0 8px 0; color: #666; font-size: 0.85rem; font-style: italic;">Centella asiatica</p>
                            <span style="font-size: 0.75rem; background: #e8f5e9; color: #1b5e20; padding: 2px 6px; border-radius: 4px;">Saraf & Kognitif • Daya Ingat</span>
                        </div>
                        <a href="detail.php?id=5" style="background-color: #2e7d32; color: white; text-align: center; padding: 8px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.85rem; margin-top: 10px;">Lihat Detail</a>
                    </div>
                </div>

                <!-- ID 6: Asam Jawa -->
                <div class="plant-card" data-nama="asam jawa tamarindus indica asma batuk demam reumatik sariawan g" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/asam_jawa.jpg" alt="Asam Jawa" class="plant-img" style="width: 100%; height: 180px; object-fit: cover;">
                    <div style="padding: 15px; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                        <div>
                            <h5 style="margin: 0 0 2px 0; color: #1b5e20; font-size: 1.1rem; font-weight: bold;">Asam Jawa</h5>
                            <p style="margin: 0 0 8px 0; color: #666; font-size: 0.85rem; font-style: italic;">Tamarindus indica, Linn</p>
                            <span style="font-size: 0.75rem; background: #e8f5e9; color: #1b5e20; padding: 2px 6px; border-radius: 4px;">Asma • Batuk • Demam</span>
                        </div>
                        <a href="detail.php?id=6" style="background-color: #2e7d32; color: white; text-align: center; padding: 8px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.85rem; margin-top: 10px;">Lihat Detail</a>
                    </div>
                </div>

                <!-- ID 7: Selasih -->
                <div class="plant-card" data-nama="selasih ocimum basilicum l. diuretik antiseptik antibakteri penenang teh o" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/selasih.jpg" alt="Selasih" class="plant-img" style="width: 100%; height: 180px; object-fit: cover;">
                    <div style="padding: 15px; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                        <div>
                            <h5 style="margin: 0 0 2px 0; color: #1b5e20; font-size: 1.1rem; font-weight: bold;">Selasih</h5>
                            <p style="margin: 0 0 8px 0; color: #666; font-size: 0.85rem; font-style: italic;">Ocimum basilicum L.</p>
                            <span style="font-size: 0.75rem; background: #e8f5e9; color: #1b5e20; padding: 2px 6px; border-radius: 4px;">Antiseptik • Diuretik</span>
                        </div>
                        <a href="detail.php?id=7" style="background-color: #2e7d32; color: white; text-align: center; padding: 8px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.85rem; margin-top: 10px;">Lihat Detail</a>
                    </div>
                </div>

                <!-- ID 8: Ginkgo Biloba -->
                <div class="plant-card" data-nama="ginkgo biloba daun ginkgo peredaran darah otak pikun alzheimer kognitif kapsul g" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/ginkgo.jpg" alt="Ginkgo Biloba" class="plant-img" style="width: 100%; height: 180px; object-fit: cover;">
                    <div style="padding: 15px; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                        <div>
                            <h5 style="margin: 0 0 2px 0; color: #1b5e20; font-size: 1.1rem; font-weight: bold;">Ginkgo Biloba</h5>
                            <p style="margin: 0 0 8px 0; color: #666; font-size: 0.85rem; font-style: italic;">Ginkgo biloba L.</p>
                            <span style="font-size: 0.75rem; background: #e8f5e9; color: #1b5e20; padding: 2px 6px; border-radius: 4px;">Sirkulasi Otak • Pikun</span>
                        </div>
                        <a href="detail.php?id=8" style="background-color: #2e7d32; color: white; text-align: center; padding: 8px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.85rem; margin-top: 10px;">Lihat Detail</a>
                    </div>
                </div>

                <!-- ID 9: Anting-Anting -->
                <div class="plant-card" data-nama="anting-anting anting anting acalypha australis l. disentri diare batuk pendarahan luka rebusan" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/anting_anting.jpg" alt="Anting-Anting" class="plant-img" style="width: 100%; height: 180px; object-fit: cover;">
                    <div style="padding: 15px; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                        <div>
                            <h5 style="margin: 0 0 2px 0; color: #1b5e20; font-size: 1.1rem; font-weight: bold;">Anting-Anting</h5>
                            <p style="margin: 0 0 8px 0; color: #666; font-size: 0.85rem; font-style: italic;">Acalypha australis L.</p>
                            <span style="font-size: 0.75rem; background: #e8f5e9; color: #1b5e20; padding: 2px 6px; border-radius: 4px;">Disentri • Pendarahan • Luka</span>
                        </div>
                        <a href="detail.php?id=9" style="background-color: #2e7d32; color: white; text-align: center; padding: 8px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.85rem; margin-top: 10px;">Lihat Detail</a>
                    </div>
                </div>

                <!-- ID 10: Bandotan / Bendotan -->
                <div class="plant-card" data-nama="bandotan bendotan ageratum conyzoides l. luka sariawan demam bisul eksim rebusan" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/bandotan.jpg" alt="Bandotan" class="plant-img" style="width: 100%; height: 180px; object-fit: cover;">
                    <div style="padding: 15px; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                        <div>
                            <h5 style="margin: 0 0 2px 0; color: #1b5e20; font-size: 1.1rem; font-weight: bold;">Bandotan (Bendotan)</h5>
                            <p style="margin: 0 0 8px 0; color: #666; font-size: 0.85rem; font-style: italic;">Ageratum conyzoides L.</p>
                            <span style="font-size: 0.75rem; background: #e8f5e9; color: #1b5e20; padding: 2px 6px; border-radius: 4px;">Luka • Sariawan • Demam</span>
                        </div>
                        <a href="detail.php?id=10" style="background-color: #2e7d32; color: white; text-align: center; padding: 8px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.85rem; margin-top: 10px;">Lihat Detail</a>
                    </div>
                </div>

                <!-- ID 11: Sambiloto (Alternatif / Varian Tambahan) -->
                <div class="plant-card" data-nama="sambiloto andrographis paniculata raja pahit antidiabetes imunitas demam flu a" style="background: white; border: 1px solid #e0e0e0; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; justify-content: space-between;">
                    <img src="images/sambiloto.jpg" alt="Sambiloto" class="plant-img" style="width: 100%; height: 180px; object-fit: cover;">
                    <div style="padding: 15px; display: flex; flex-direction: column; flex-grow: 1; justify-content: space-between;">
                        <div>
                            <h5 style="margin: 0 0 2px 0; color: #1b5e20; font-size: 1.1rem; font-weight: bold;">Sambiloto (Varian 2)</h5>
                            <p style="margin: 0 0 8px 0; color: #666; font-size: 0.85rem; font-style: italic;">Andrographis paniculata</p>
                            <span style="font-size: 0.75rem; background: #e8f5e9; color: #1b5e20; padding: 2px 6px; border-radius: 4px;">Demam • Flu • Infeksi</span>
                        </div>
                        <a href="detail.php?id=11" style="background-color: #2e7d32; color: white; text-align: center; padding: 8px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 0.85rem; margin-top: 10px;">Lihat Detail</a>
                    </div>
                </div>

            </div>
        </section>
    </main>
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