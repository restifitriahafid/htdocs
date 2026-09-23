<?php include 'header.php'; ?>

<style>
    .page-wrapper { width: 100%; max-width: 1320px; margin: 0 auto; padding: 20px 15px; }
    .hero-section { background: linear-gradient(135deg, #2e7d32 0%, #1b5e20 100%); color: white; padding: 35px 20px; border-radius: 12px; margin-bottom: 25px; text-align: center; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 100%; }
    .search-box { max-width: 650px; margin: 20px auto 0 auto; display: flex; gap: 10px; }
    .search-input { flex: 1; padding: 12px 18px; border: none; border-radius: 25px; font-size: 1rem; outline: none; box-shadow: 0 2px 8px rgba(0,0,0,0.15); }
    .btn-scan { background-color: #ff9800; color: white; border: none; padding: 12px 20px; border-radius: 25px; font-weight: bold; cursor: pointer; transition: 0.3s; display: flex; align-items: center; gap: 8px; }
    
    .filter-section-outer { background: #ffffff; padding: 18px 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.06); margin-bottom: 25px; border: 1px solid #e0e0e0; width: 100%; }
    .az-container { display: flex; flex-wrap: wrap; justify-content: center; gap: 6px; margin-bottom: 12px; }
    .az-btn { background: #f1f8e9; color: #2e7d32; border: 1px solid #aed581; border-radius: 5px; padding: 5px 11px; font-size: 0.85rem; font-weight: bold; cursor: pointer; transition: 0.2s; }
    .az-btn:hover, .az-btn.active { background-color: #2e7d32; color: #ffffff; border-color: #2e7d32; }
    
    .filter-container { display: flex; gap: 10px; justify-content: center; flex-wrap: wrap; }
    .filter-select { padding: 8px 14px; border-radius: 20px; border: 1px solid #c8e6c9; background-color: #f1f8e9; color: #1b5e20; font-weight: bold; font-size: 0.85rem; outline: none; cursor: pointer; }

    .main-container { display: flex; gap: 25px; align-items: flex-start; width: 100%; }
    .content-area { flex: 3; }
    .sidebar-area { flex: 1; position: sticky; top: 20px; }

    .plant-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(210px, 1fr)); gap: 20px; }
    .plant-card { background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.08); transition: transform 0.2s; display: flex; flex-direction: column; }
    .plant-card:hover { transform: translateY(-5px); }
    .plant-img { width: 100%; height: 150px; object-fit: cover; background-color: #f5f5f5; }
    .plant-info { padding: 15px; display: flex; flex-direction: column; flex-grow: 1; }
    .plant-title { font-size: 1.1rem; font-weight: bold; color: #2e7d32; margin-bottom: 5px; }
    .plant-latin { font-size: 0.85rem; font-style: italic; color: #666; margin-bottom: 10px; }
    .plant-desc { font-size: 0.85rem; color: #444; margin-bottom: 15px; line-height: 1.4; flex-grow: 1; }
    .btn-detail { display: block; text-align: center; background-color: #2e7d32; color: white; text-decoration: none; padding: 8px 12px; border-radius: 6px; font-size: 0.9rem; font-weight: 500; }

    .consult-popup-card { background: linear-gradient(145deg, #ffffff 0%, #f1f8e9 100%); border: 2px solid #aed581; border-radius: 16px; padding: 20px; text-align: center; box-shadow: 0 8px 25px rgba(46, 125, 50, 0.12); }
    .consult-badge { display: inline-block; background-color: #e8f5e9; color: #2e7d32; font-size: 0.75rem; font-weight: bold; padding: 4px 12px; border-radius: 12px; margin-bottom: 10px; border: 1px solid #c8e6c9; }
    .btn-consult-popup { display: block; width: 100%; padding: 12px 16px; border-radius: 30px; text-decoration: none; font-weight: bold; font-size: 0.9rem; color: white; background: linear-gradient(135deg, #0288d1 0%, #01579b 100%); box-shadow: 0 4px 12px rgba(2, 136, 209, 0.3); }

    /* Modal Live Camera AI */
    .scanner-modal { display: none; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.85); justify-content: center; align-items: center; }
    .scanner-content { background: #fff; padding: 20px; border-radius: 16px; max-width: 480px; width: 90%; text-align: center; position: relative; box-shadow: 0 10px 30px rgba(0,0,0,0.5); }
    .camera-viewport { width: 100%; height: 280px; background: #000; border-radius: 10px; overflow: hidden; position: relative; margin-bottom: 15px; }
    .camera-viewport video { width: 100%; height: 100%; object-fit: cover; }
    .scan-overlay { position: absolute; top: 10%; left: 10%; right: 10%; bottom: 10%; border: 2px dashed #00ffcc; border-radius: 8px; box-shadow: 0 0 0 9999px rgba(0, 0, 0, 0.4); pointer-events: none; }
    .btn-capture { background: #2e7d32; color: #fff; border: none; padding: 12px 24px; border-radius: 25px; font-weight: bold; cursor: pointer; font-size: 1rem; width: 100%; }
    .btn-close-scanner { position: absolute; top: 10px; right: 15px; background: none; border: none; font-size: 1.5rem; font-weight: bold; color: #666; cursor: pointer; }
    .ai-status { font-size: 0.9rem; font-weight: bold; color: #1b5e20; margin-top: 12px; min-height: 24px; }

    @media (max-width: 992px) { .main-container { flex-direction: column; } }
</style>

<div class="page-wrapper">
    <div class="hero-section">
        <h1>Selamat Datang di HerbaCheck</h1>
        <p>Temukan Informasi Khasiat & Penggunaan Tanaman Obat Herbal Terpercaya</p>
        
        <div class="search-box">
            <input type="text" id="searchInput" class="search-input" placeholder="Cari nama tanaman atau khasiat..." onkeyup="filterPlants()">
            <button type="button" class="btn-scan" onclick="startCameraScanner()">📷 Scan</button>
        </div>
    </div>

    <!-- Live Camera Scanner Modal -->
    <div id="scannerModal" class="scanner-modal">
        <div class="scanner-content">
            <button class="btn-close-scanner" onclick="stopCameraScanner()">&times;</button>
            <h4 style="color: #2e7d32; font-weight: bold; margin-bottom: 5px;">Pemindai AI Tanaman</h4>
            <p style="font-size: 0.82rem; color: #666; margin-bottom: 15px;">Posisikan daun/rimpang tepat di tengah area hijau</p>
            
            <div class="camera-viewport">
                <video id="webcamVideo" autoplay playsinline></video>
                <div class="scan-overlay"></div>
            </div>

            <canvas id="captureCanvas" style="display:none;"></canvas>

            <button type="button" class="btn-capture" id="btnCapture" onclick="captureAndDetectAccurate()">🔍 Pindai & Identifikasi AI</button>
            <div id="aiStatus" class="ai-status"></div>
        </div>
    </div>

    <div class="filter-section-outer">
        <div class="az-container">
            <button class="az-btn active" onclick="selectLetter('', this)">Semua</button>
            <?php foreach (range('A', 'Z') as $char) { echo '<button class="az-btn" onclick="selectLetter(\'' . $char . '\', this)">' . $char . '</button>'; } ?>
        </div>

        <div class="filter-container">
            <select id="filterPenyakit" class="filter-select" onchange="filterPlants()">
                <option value="">🩺 Berdasarkan Penyakit (Semua)</option>
                <option value="kencing">Kencing Manis / Gula</option>
                <option value="rematik">Rematik / Pegal</option>
                <option value="batuk">Batuk / Flu</option>
                <option value="diare">Diare / Pencernaan</option>
            </select>
            <select id="filterKhasiat" class="filter-select" onchange="filterPlants()">
                <option value="">🌿 Berdasarkan Khasiat (Semua)</option>
                <option value="antiinflamasi">Antiinflamasi</option>
                <option value="antidiabetes">Antidiabetes</option>
                <option value="antihipertensi">Antihipertensi</option>
            </select>
        </div>
    </div>

    <div class="main-container">
        <div class="content-area">
            <h2 class="mb-3" style="color: #2e7d32;">Katalog Tanaman Herbal</h2>
            <div class="plant-grid" id="plantGrid">
                
                <!-- Kunyit -->
                <div class="plant-card" data-id="kunyit" data-nama="Kunyit" data-latin="Curcuma longa" data-penyakit="kencing manis rematik demam" data-khasiat="antiinflamasi">
                    <img src="images/kunyit.jpg?v=<?php echo time(); ?>" alt="Kunyit" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Kunyit</div>
                        <div class="plant-latin">Curcuma longa</div>
                        <div class="plant-desc">Mengandung kurkuminoid untuk kencing manis, rematik, demam, dan peradangan.</div>
                        <a href="detail.php?id=kunyit" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Jahe -->
                <div class="plant-card" data-id="jahe" data-nama="Jahe" data-latin="Zingiber officinale" data-penyakit="batuk kembung sakit kepala" data-khasiat="antiinflamasi">
                    <img src="images/jahe.jpg?v=<?php echo time(); ?>" alt="Jahe" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Jahe</div>
                        <div class="plant-latin">Zingiber officinale</div>
                        <div class="plant-desc">Mengurangi kembung, meredakan batuk, radang tenggorokan, dan sakit kepala.</div>
                        <a href="detail.php?id=jahe" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Asam Jawa -->
                <div class="plant-card" data-id="asam_jawa" data-nama="Asam Jawa" data-latin="Tamarindus indica" data-penyakit="asma batuk demam biduran" data-khasiat="antioksidan">
                    <img src="images/asam_jawa.jpg?v=<?php echo time(); ?>" alt="Asam Jawa" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Asam Jawa</div>
                        <div class="plant-latin">Tamarindus indica, Linn</div>
                        <div class="plant-desc">Mengobati asma, batuk, demam, rematik, sakit perut, dan sariawan.</div>
                        <a href="detail.php?id=asam_jawa" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Sambiloto -->
                <div class="plant-card" data-id="sambiloto" data-nama="Sambiloto" data-latin="Andrographis paniculata" data-penyakit="demam kencing manis tifus" data-khasiat="antidiabetes">
                    <img src="images/sambiloto.jpg?v=<?php echo time(); ?>" alt="Sambiloto" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Sambiloto</div>
                        <div class="plant-latin">Andrographis paniculata</div>
                        <div class="plant-desc">Penurun demam (febrifuga), penambah nafsu makan, dan pengontrol kencing manis.</div>
                        <a href="detail.php?id=sambiloto" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Pegagan -->
                <div class="plant-card" data-id="pegagan" data-nama="Pegagan" data-latin="Centella asiatica" data-penyakit="otak kulit luka" data-khasiat="antioksidan">
                    <img src="images/pegagan.jpg?v=<?php echo time(); ?>" alt="Pegagan" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Pegagan</div>
                        <div class="plant-latin">Centella asiatica</div>
                        <div class="plant-desc">Meningkatkan sirkulasi darah ke otak, daya ingat, dan penyembuhan luka.</div>
                        <a href="detail.php?id=pegagan" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Daun Ginkgo -->
                <div class="plant-card" data-id="ginkgo" data-nama="Daun Ginkgo" data-latin="Ginkgo biloba" data-penyakit="batuk asma jantung diare" data-khasiat="antioksidan">
                    <img src="images/ginkgo.jpg?v=<?php echo time(); ?>" alt="Daun Ginkgo" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Daun Ginkgo Biloba</div>
                        <div class="plant-latin">Ginkgo biloba</div>
                        <div class="plant-desc">Melancarkan peredaran darah ke otak, meredakan batuk, asma, dan obat diare.</div>
                        <a href="detail.php?id=ginkgo" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Anting-Anting -->
                <div class="plant-card" data-id="anting_anting" data-nama="Anting-Anting" data-latin="Acalypha australis" data-penyakit="disentri diare batuk pendarahan" data-khasiat="antiseptik">
                    <img src="images/anting_anting.jpg?v=<?php echo time(); ?>" alt="Anting-Anting" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Anting-Anting</div>
                        <div class="plant-latin">Acalypha australis L.</div>
                        <div class="plant-desc">Mengatasi disentri, diare, muntah darah, batuk, mimisan, dan pendarahan luka.</div>
                        <a href="detail.php?id=anting_anting" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Bandotan -->
                <div class="plant-card" data-id="bandotan" data-nama="Bandotan" data-latin="Ageratum conyzoides" data-penyakit="selesma bisul eksim malaria" data-khasiat="antiseptik">
                    <img src="images/bandotan.jpg?v=<?php echo time(); ?>" alt="Bandotan" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Bandotan</div>
                        <div class="plant-latin">Ageratum conyzoides L.</div>
                        <div class="plant-desc">Pencegah kehamilan, selesma, bisul, eksim, luka pendarahan, dan malaria.</div>
                        <a href="detail.php?id=bandotan" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Selasih -->
                <div class="plant-card" data-id="selasih" data-nama="Selasih" data-latin="Ocimum basilicum" data-penyakit="pencernaan nyeri eksim" data-khasiat="antiseptik">
                    <img src="images/selasih.jpg?v=<?php echo time(); ?>" alt="Selasih" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Selasih</div>
                        <div class="plant-latin">Ocimum basilicum L.</div>
                        <div class="plant-desc">Peluruh keringat, peluruh kentut, penghilang nyeri, antiseptik, dan obat eksim.</div>
                        <a href="detail.php?id=selasih" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Adas -->
                <div class="plant-card" data-id="adas" data-nama="Adas" data-latin="Foeniculum vulgare" data-penyakit="perut kembung batuk asma rematik diare" data-khasiat="antiinflamasi">
                    <img src="images/adas.jpg?v=<?php echo time(); ?>" alt="Adas" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Adas</div>
                        <div class="plant-latin">Foeniculum vulgare Mill.</div>
                        <div class="plant-desc">Mengatasi sakit perut, kembung, mual, batuk, asma, rematik, dan susah tidur.</div>
                        <a href="detail.php?id=adas" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Baru Cina -->
                <div class="plant-card" data-id="baru_cina" data-nama="Baru Cina" data-latin="Artemisia vulgaris" data-penyakit="haid disentri pendarahan ayan" data-khasiat="antiseptik">
                    <img src="images/baru_cina.jpg?v=<?php echo time(); ?>" alt="Baru Cina" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Baru Cina</div>
                        <div class="plant-latin">Artemisia vulgaris Linn.</div>
                        <div class="plant-desc">Mengobati sakit haid, disentri, pendarahan usus, mimisan, serta epilepsi.</div>
                        <a href="detail.php?id=baru_cina" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Lengkuas -->
                <div class="plant-card" data-id="lengkuas" data-nama="Lengkuas" data-latin="Alpinia galanga" data-penyakit="kembung demam malaria" data-khasiat="antijamur">
                    <img src="images/lengkuas.jpg?v=<?php echo time(); ?>" alt="Lengkuas" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Lengkuas</div>
                        <div class="plant-latin">Alpinia galanga</div>
                        <div class="plant-desc">Mengatasi perut kembung, sebagai antijamur alami, serta meredakan sakit perut.</div>
                        <a href="detail.php?id=lengkuas" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Kencur -->
                <div class="plant-card" data-id="kencur" data-nama="Kencur" data-latin="Kaempferia galanga" data-penyakit="batuk flu tenggorokan" data-khasiat="tonik">
                    <img src="images/kencur.jpg?v=<?php echo time(); ?>" alt="Kencur" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Kencur</div>
                        <div class="plant-latin">Kaempferia galanga</div>
                        <div class="plant-desc">Efektif meredakan batuk, flu, gangguan tenggorokan, tekanan darah tinggi, dan tonik.</div>
                        <a href="detail.php?id=kencur" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Temulawak -->
                <div class="plant-card" data-id="temulawak" data-nama="Temulawak" data-latin="Curcuma xanthorrhiza" data-penyakit="hati perut kuning mual" data-khasiat="nafsu makan">
                    <img src="images/temulawak.jpg?v=<?php echo time(); ?>" alt="Temulawak" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Temulawak</div>
                        <div class="plant-latin">Curcuma xanthorrhiza</div>
                        <div class="plant-desc">Mengatasi gangguan perut, gangguan hati (kuning), penambah nafsu makan, dan pelancar ASI.</div>
                        <a href="detail.php?id=temulawak" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Lempuyang Wangi -->
                <div class="plant-card" data-id="lempuyang_wangi" data-nama="Lempuyang Wangi" data-latin="Zingiber zerumbet" data-penyakit="nafsu makan batuk" data-khasiat="nafsu makan">
                    <img src="images/lempuyang_wangi.jpg?v=<?php echo time(); ?>" alt="Lempuyang Wangi" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Lempuyang Wangi</div>
                        <div class="plant-latin">Zingiber zerumbet</div>
                        <div class="plant-desc">Memperbaiki nafsu makan dan berfungsi sebagai obat batuk tradisional.</div>
                        <a href="detail.php?id=lempuyang_wangi" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Temu Putih -->
                <div class="plant-card" data-id="temu_putih" data-nama="Temu Putih" data-latin="Curcuma zedoaria" data-penyakit="kewanitaan kembung kudis" data-khasiat="antiinflamasi">
                    <img src="images/temu_putih.jpg?v=<?php echo time(); ?>" alt="Temu Putih" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Temu Putih</div>
                        <div class="plant-latin">Curcuma zedoaria</div>
                        <div class="plant-desc">Mengatasi masalah kewanitaan, pembersih rahim pasca nifas, kudis, dan perut kembung.</div>
                        <a href="detail.php?id=temu_putih" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Jeruk Nipis -->
                <div class="plant-card" data-id="jeruk_nipis" data-nama="Jeruk Nipis" data-latin="Citrus aurantifolia" data-penyakit="sariawan batuk demam jerawat" data-khasiat="antiinflamasi">
                    <img src="images/jeruk_nipis.jpg?v=<?php echo time(); ?>" alt="Jeruk Nipis" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Jeruk Nipis</div>
                        <div class="plant-latin">Citrus aurantifolia</div>
                        <div class="plant-desc">Mengobati sariawan, batuk, jerawat, demam, dan penyegar badan.</div>
                        <a href="detail.php?id=jeruk_nipis" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Jambu Biji -->
                <div class="plant-card" data-id="jambu_biji" data-nama="Jambu Biji" data-latin="Psidium guajava" data-penyakit="diare maag berkemih" data-khasiat="diare">
                    <img src="images/jambu_biji.jpg?v=<?php echo time(); ?>" alt="Jambu Biji" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Jambu Biji</div>
                        <div class="plant-latin">Psidium guajava</div>
                        <div class="plant-desc">Pengobatan utama diare, meredakan maag, dan sering berkemih (beser).</div>
                        <a href="detail.php?id=jambu_biji" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Kumis Kucing -->
                <div class="plant-card" data-id="kumis_kucing" data-nama="Kumis Kucing" data-latin="Orthosiphon aristatus" data-penyakit="ginjal batu encok" data-khasiat="diuretik">
                    <img src="images/kumis_kucing.jpg?v=<?php echo time(); ?>" alt="Kumis Kucing" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Kumis Kucing</div>
                        <div class="plant-latin">Orthosiphon aristatus</div>
                        <div class="plant-desc">Peluruh batu ginjal, diuretik alami, dan meredakan encok.</div>
                        <a href="detail.php?id=kumis_kucing" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Meniran -->
                <div class="plant-card" data-id="meniran" data-nama="Meniran" data-latin="Phyllanthus niruri" data-penyakit="hati demam imunitas batu ginjal" data-khasiat="diuretik">
                    <img src="images/meniran.jpg?v=<?php echo time(); ?>" alt="Meniran" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Meniran</div>
                        <div class="plant-latin">Phyllanthus niruri</div>
                        <div class="plant-desc">Pelindung hati (hepatoprotektor), penurun demam, peluruh kemih, dan penambah imunitas.</div>
                        <a href="detail.php?id=meniran" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Brotowali -->
                <div class="plant-card" data-id="brotowali" data-nama="Brotowali" data-latin="Tinospora crispa" data-penyakit="diabetes radang demam lambung" data-khasiat="antidiabetes">
                    <img src="images/brotowali.jpg?v=<?php echo time(); ?>" alt="Brotowali" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Brotowali</div>
                        <div class="plant-latin">Tinospora crispa</div>
                        <div class="plant-desc">Mengontrol diabetes, meredakan radang, demam, serta gangguan lambung.</div>
                        <a href="detail.php?id=brotowali" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Blimbing Wuluh -->
                <div class="plant-card" data-id="blimbing_wuluh" data-nama="Blimbing Wuluh" data-latin="Averrhoa bilimbi" data-penyakit="batuk jerawat pegal gondok" data-khasiat="antiinflamasi">
                    <img src="images/blimbing_wuluh.jpg?v=<?php echo time(); ?>" alt="Blimbing Wuluh" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Blimbing Wuluh</div>
                        <div class="plant-latin">Averrhoa bilimbi</div>
                        <div class="plant-desc">Mengobati batuk rejan, jerawat, obat gondok, encok, dan pegal linu.</div>
                        <a href="detail.php?id=blimbing_wuluh" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Mahkota Dewa -->
                <div class="plant-card" data-id="mahkota_dewa" data-nama="Mahkota Dewa" data-latin="Phaleria macrocarpa" data-penyakit="gula rematik disentri eksim" data-khasiat="antidiabetes">
                    <img src="images/mahkota_dewa.jpg?v=<?php echo time(); ?>" alt="Mahkota Dewa" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Mahkota Dewa</div>
                        <div class="plant-latin">Phaleria macrocarpa</div>
                        <div class="plant-desc">Menurunkan kadar gula darah, mengatasi rematik, disentri, dan eksim.</div>
                        <a href="detail.php?id=mahkota_dewa" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Daun Salam -->
                <div class="plant-card" data-id="daun_salam" data-nama="Daun Salam" data-latin="Syzygium polyanthum" data-penyakit="hipertensi kolesterol diare maag" data-khasiat="antihipertensi">
                    <img src="images/daun_salam.jpg?v=<?php echo time(); ?>" alt="Daun Salam" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Daun Salam</div>
                        <div class="plant-latin">Syzygium polyanthum</div>
                        <div class="plant-desc">Mengatasi hipertensi ringan, kolesterol tinggi, maag, dan infeksi diare.</div>
                        <a href="detail.php?id=daun_salam" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

                <!-- Kayu Putih -->
                <div class="plant-card" data-id="kayu_putih" data-nama="Kayu Putih" data-latin="Melaleuca leucadendra" data-penyakit="rematik batuk" data-khasiat="rematik">
                    <img src="images/kayu_putih.jpg?v=<?php echo time(); ?>" alt="Kayu Putih" class="plant-img">
                    <div class="plant-info">
                        <div class="plant-title">Kayu Putih</div>
                        <div class="plant-latin">Melaleuca leucadendra</div>
                        <div class="plant-desc">Menyembuhkan rematik, meredakan batuk, serta menghangatkan tubuh.</div>
                        <a href="detail.php?id=kayu_putih" class="btn-detail">Lihat Detail</a>
                    </div>
                </div>

            </div>
            
            <div id="emptyNotice" style="display: none; text-align: center; padding: 40px;">
                <p style="color: #666; font-size: 1.1rem;">Tanaman herbal yang kamu cari tidak ditemukan.</p>
            </div>
        </div>

        <div class="sidebar-area">
            <div class="consult-popup-card">
                <span class="consult-badge">Respon Cepat</span>
                <h3 style="color: #1b5e20; margin-bottom: 8px;">Layanan Konsultasi</h3>
                <p style="font-size: 0.88rem; color: #555; margin-bottom: 20px;">Bingung dosis & interaksi obat herbal? Konsultasikan langsung dengan tim medis ahli kami.</p>
                <a href="https://wa.me/62895326133068?text=Halo,%20saya%20ingin%20konsultasi" target="_blank" class="btn-consult-popup">
                    💬 Tanya Dokter & Apoteker
                </a>
            </div>
        </div>
    </div>
</div>

<script>
let selectedLetter = "";
let cameraStream = null;

function selectLetter(letter, btnElement) {
    selectedLetter = letter.toLowerCase();
    document.querySelectorAll('.az-btn').forEach(btn => btn.classList.remove('active'));
    btnElement.classList.add('active');
    filterPlants();
}

function filterPlants() {
    let input = document.getElementById('searchInput').value.toLowerCase();
    let selectedPenyakit = document.getElementById('filterPenyakit').value.toLowerCase();
    let selectedKhasiat = document.getElementById('filterKhasiat').value.toLowerCase();
    let cards = document.querySelectorAll('.plant-card');
    let matchCount = 0;

    cards.forEach(card => {
        let nama = card.getAttribute('data-nama').toLowerCase();
        let penyakit = card.getAttribute('data-penyakit').toLowerCase();
        let khasiat = card.getAttribute('data-khasiat').toLowerCase();
        let desc = card.querySelector('.plant-desc').innerText.toLowerCase();

        let matchLetter = (selectedLetter === "") || nama.startsWith(selectedLetter);
        let matchSearch = nama.includes(input) || penyakit.includes(input) || desc.includes(input);
        let matchPenyakit = (selectedPenyakit === "") || penyakit.includes(selectedPenyakit);
        let matchKhasiat = (selectedKhasiat === "") || khasiat.includes(selectedKhasiat);

        if (matchLetter && matchSearch && matchPenyakit && matchKhasiat) {
            card.style.display = 'flex';
            matchCount++;
        } else {
            card.style.display = 'none';
        }
    });
    document.getElementById('emptyNotice').style.display = (matchCount === 0) ? 'block' : 'none';
    document.getElementById('plantGrid').style.display = (matchCount === 0) ? 'none' : 'grid';
}

// Fungsi Membuka Kamera
async function startCameraScanner() {
    const modal = document.getElementById('scannerModal');
    const video = document.getElementById('webcamVideo');
    const status = document.getElementById('aiStatus');
    
    status.innerText = "";
    modal.style.display = 'flex';

    try {
        cameraStream = await navigator.mediaDevices.getUserMedia({
            video: { facingMode: { exact: "environment" } }
        });
        video.srcObject = cameraStream;
    } catch (err) {
        try {
            cameraStream = await navigator.mediaDevices.getUserMedia({ video: true });
            video.srcObject = cameraStream;
        } catch (e) {
            alert("Tidak dapat mengakses kamera. Pastikan memberikan izin browser untuk kamera.");
            stopCameraScanner();
        }
    }
}

// Menutup Kamera
function stopCameraScanner() {
    const modal = document.getElementById('scannerModal');
    if (cameraStream) {
        cameraStream.getTracks().forEach(track => track.stop());
        cameraStream = null;
    }
    modal.style.display = 'none';
}

// Fungsi Pindai AI yang Akurat menggunakan Pl@ntNet API
async function captureAndDetectAccurate() {
    const video = document.getElementById('webcamVideo');
    const canvas = document.getElementById('captureCanvas');
    const status = document.getElementById('aiStatus');
    const btnCapture = document.getElementById('btnCapture');

    if (!video.srcObject) return;

    btnCapture.disabled = true;
    status.innerHTML = "⏳ Mengambil foto & menganalisis struktur jaringan AI...";

    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    const ctx = canvas.getContext('2d');
    ctx.drawImage(video, 0, 0, canvas.width, canvas.height);

    canvas.toBlob(async (blob) => {
        const formData = new FormData();
        formData.append('images', blob, 'plant_scan.jpg');
        formData.append('organs', 'auto');

        // Pl@ntNet Open API Endpoint
        const apiKey = "2b102MvS2gWb6t32jT6vB8p"; // Public demo key
        const apiUrl = `https://my-api.plantnet.org/v2/identify/all?api-key=${apiKey}`;

        try {
            const response = await fetch(apiUrl, {
                method: 'POST',
                body: formData
            });

            if (!response.ok) throw new Error("Gagal terhubung ke server AI Pl@ntNet");

            const data = await response.json();

            if (data.results && data.results.length > 0) {
                let bestMatch = data.results[0];
                let scientificName = bestMatch.species.scientificNameWithoutAuthor.toLowerCase();
                let score = Math.round(bestMatch.score * 100);

                status.innerHTML = `🌿 Terdeteksi: <b>${bestMatch.species.scientificNameWithoutAuthor}</b> (${score}% Cocok)`;

                // Pencocokan dengan Katalog Tanaman Website
                let matchedId = findMatchingPlantId(scientificName);

                setTimeout(() => {
                    stopCameraScanner();
                    btnCapture.disabled = false;
                    if (matchedId) {
                        window.location.href = "detail.php?id=" + matchedId;
                    } else {
                        alert(`AI mendeteksi tanaman "${bestMatch.species.scientificNameWithoutAuthor}" (${score}% akurasi), namun informasi detailnya belum ada di katalog kami.`);
                    }
                }, 1800);

            } else {
                status.innerHTML = "❌ AI Tidak mengenali tanaman ini. Pastikan foto fokus pada daun/bunga.";
                btnCapture.disabled = false;
            }
        } catch (error) {
            console.error("API Error:", error);
            status.innerHTML = "⚠️ Terjadi kesalahan koneksi AI. Coba lagi.";
            btnCapture.disabled = false;
        }
    }, 'image/jpeg', 0.85);
}

// Fungsi Pencocokan Nama Latin AI dengan Data Katalog Local Website
function findMatchingPlantId(scName) {
    const cards = document.querySelectorAll('.plant-card');
    for (let card of cards) {
        let plantLatin = card.getAttribute('data-latin').toLowerCase();
        let plantId = card.getAttribute('data-id');

        // Pengecekan kemiripan nama latin
        if (scName.includes(plantLatin) || plantLatin.includes(scName)) {
            return plantId;
        }
    }
    return null;
}
</script>

<?php include 'footer.php'; ?>