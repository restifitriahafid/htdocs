<?php 
include 'header.php'; 

$plants = [
    'kunyit' => [
        'nama_lokal' => 'Kunyit',
        'nama_latin' => 'Curcuma longa',
        'gambar' => 'images/kunyit.jpg',
        'kandungan' => 'Kurkuminoid termasuk kurkumin, desmetoksikurkumin, bisdemetoksikurkumin, resin, minyak atsiri termasuk α dan β tumern, artumeron, α dan γ atlanton, kurlon, zingiberene dan kurkumol.',
        'manfaat' => 'Digunakan untuk penderita kencing manis, rematik, penyakit kulit, demam, sembelit, kurang darah, kolagogum, mengurangi kejang, melancarkan lendir pilek, radang usus buntu, radang rahim, amandel, asma, gatal, gusi bengkak, koreng, encok, perut nyeri, darah tinggi, demam-nifas, mencret, gabag, keputihan, kudis, disentri, dan influenza.',
        'bagian' => 'Rimpang',
        'cara_pemanfaatan' => 'Hepatoprotektor: Kunyit 3g, Temulawak 5g, Sangketan 2g, Sambung nyawa 2g, Air 400ml (rebus 15 menit, minum 3x sehari setelah makan).',
        'keamanan' => 'Penggunaan pada kehamilan dan menyusui harus dengan pengawasan dokter.',
        'interaksi' => 'Gunakan sesuai anjuran dan konsultasikan dengan tenaga medis terkait obat pendamping.',
        'referensi_url' => 'https://www.google.com/search?q=Mengenal+lebih+dekat+TOGA+di+sekitar+kita+jilid+2+Surabaya',
        'referensi_teks' => 'Jayani, N.I.E., dkk. (2023) Mengenal lebih dekat TOGA di sekitar kita jilid 2. Surabaya: Universitas Surabaya.',
        'affiliate_products' => [
            ['nama' => 'Ekstrak Kunyit Kapsul', 'harga' => 'Rp 45.000', 'gambar' => 'images/kunyit.jpg', 'link' => 'https://shopee.co.id/search?keyword=kapsul%20kunyit']
        ]
    ],
    'jahe' => [
        'nama_lokal' => 'Jahe',
        'nama_latin' => 'Zingiber officinale',
        'gambar' => 'images/jahe.jpg',
        'kandungan' => 'Rimpang jahe mengandung minyak atsiri dan oleoresin dengan senyawa marker gingerol dan shogaol.',
        'manfaat' => 'Mengurangi perut kembung, meredakan batuk, radang tenggorokan, masuk angin (penghangat badan), meringankan nyeri, sakit kepala, memperbaiki nafsu makan, dan obat luar untuk kesleo, bengkak serta memar.',
        'bagian' => 'Rimpang',
        'cara_pemanfaatan' => 'Radang tenggorokan: Kapulaga 1g, rimpang jahe 1g, kulit kayu manis 1g dicampur menjadi 3 bungkus (minum 3x sehari).',
        'keamanan' => 'Sedikit terjadi nyeri gastrointestinal dan rasa tidak enak pada ulu hati.',
        'interaksi' => 'Jahe dapat berinteraksi dengan obat antikoagulan, antiplatelet, heparin, dan trombolitik (meningkatkan risiko pendarahan).',
        'referensi_url' => 'https://www.google.com/search?q=Formularium+Obat+Herbal+Asli+Indonesia+Kemenkes',
        'referensi_teks' => 'Kementerian Kesehatan Republik Indonesia. (2016) Formularium Obat Herbal Asli Indonesia. Jakarta: Kemenkes RI.',
        'affiliate_products' => [
            ['nama' => 'Sari Jahe Merah Bubuk', 'harga' => 'Rp 35.000', 'gambar' => 'images/jahe.jpg', 'link' => 'https://shopee.co.id/search?keyword=jahe%20merah']
        ]
    ],
    'asam_jawa' => [
        'nama_lokal' => 'Asam Jawa',
        'nama_latin' => 'Tamarindus indica, Linn',
        'gambar' => 'images/asam_jawa.jpg',
        'kandungan' => 'Mengandung asam sitrat, asam tartart, asam suksinat, pectin gula invert, zat besi, vitamin A, B1, C, phlobatannin, albuminoid serta pati.',
        'manfaat' => 'Mengobati asma, batuk, demam, rematik, sakit perut, sariawan, luka borok, eksim, bisul, gigitan ular, dan rambut rontok.',
        'bagian' => 'Buah, daun, dan biji',
        'cara_pemanfaatan' => 'Asma: 2 potong kulit pohon asam jawa + adas pulowaras direbus dalam 1 liter air.',
        'keamanan' => 'Penggunaan berlebihan dapat menyebabkan mual, sakit perut, atau diare.',
        'interaksi' => 'Gunakan sesuai anjuran medis.',
        'referensi_url' => 'https://www.google.com/search?q=Mengenal+lebih+dekat+TOGA+di+sekitar+kita+jilid+2+Surabaya',
        'referensi_teks' => 'Jayani, N.I.E., dkk. (2023) Mengenal lebih dekat TOGA di sekitar kita jilid 2. Surabaya: Universitas Surabaya.',
        'affiliate_products' => [
            ['nama' => 'Asam Jawa Tanpa Biji', 'harga' => 'Rp 18.000', 'gambar' => 'images/asam_jawa.jpg', 'link' => 'https://shopee.co.id/search?keyword=asam%20jawa']
        ]
    ],
    'sambiloto' => [
        'nama_lokal' => 'Sambiloto',
        'nama_latin' => 'Andrographis paniculata',
        'gambar' => 'images/sambiloto.jpg',
        'kandungan' => 'Andrografolid sebagai senyawa utama, flavonoid, diterpenoid, steroid dan fenolik.',
        'manfaat' => 'Febrifuga (penurun demam), penambah nafsu makan, obat cacing, gatal, kudis, kencing manis, radang usus, dan tifus.',
        'bagian' => 'Herba, terutama daun',
        'cara_pemanfaatan' => 'Kencing manis: Daun sambiloto 25 helai + kumis kucing 25 helai direbus dengan 110 mL air.',
        'keamanan' => 'Dapat menyebabkan gangguan saluran cerna atau reaksi kulit pada sebagian orang.',
        'interaksi' => 'Gunakan hati-hati bersama warfarin dan aspirin.',
        'referensi_url' => 'https://www.google.com/search?q=Pratama+AB+Khasiat+tanaman+obat+herbal+Pustaka+Media',
        'referensi_teks' => 'Pratama, A. B. (2021). Khasiat tanaman obat herbal. Pustaka Media.',
        'affiliate_products' => [
            ['nama' => 'Kapsul Sambiloto Herbal', 'harga' => 'Rp 40.000', 'gambar' => 'images/sambiloto.jpg', 'link' => 'https://shopee.co.id/search?keyword=kapsul%20sambiloto']
        ]
    ],
    'pegagan' => [
        'nama_lokal' => 'Pegagan',
        'nama_latin' => 'Centella asiatica',
        'gambar' => 'images/pegagan.jpg',
        'kandungan' => 'Asiaticoside, madecassoside, centelloside, dan antioksidan.',
        'manfaat' => 'Meningkatkan fungsi otak, daya ingat, penyembuhan luka, dan sirkulasi darah.',
        'bagian' => 'Herba / Seluruh tanaman',
        'cara_pemanfaatan' => 'Seduh 1 sendok teh daun pegagan kering dengan air mendidih.',
        'keamanan' => 'Penggunaan berlebihan dapat menyebabkan pusing.',
        'interaksi' => 'Dapat memperkuat efek obat penenang.',
        'referensi_url' => 'https://www.google.com/search?q=Pratama+AB+Khasiat+tanaman+obat+herbal+Pustaka+Media',
        'referensi_teks' => 'Pratama, A. B. (2021). Khasiat tanaman obat herbal. Pustaka Media.',
        'affiliate_products' => [
            ['nama' => 'Kapsul Ekstrak Pegagan', 'harga' => 'Rp 50.000', 'gambar' => 'images/pegagan.jpg', 'link' => 'https://shopee.co.id/search?keyword=kapsul%20pegagan']
        ]
    ],
    'ginkgo' => [
        'nama_lokal' => 'Daun Ginkgo Biloba',
        'nama_latin' => 'Ginkgo biloba',
        'gambar' => 'images/ginkgo.jpg',
        'kandungan' => 'Flavonoid, terpenoid, ginkgolide A, kaempterol, dan ginkgolic acid.',
        'manfaat' => 'Melancarkan peredaran darah ke otak, meredakan batuk, asma, jantung, Alzheimer, dan obat diare.',
        'bagian' => 'Daun dan Biji',
        'cara_pemanfaatan' => 'Kapsul ekstrak (3 x 40 mg sehari) atau biji diseduh air panas.',
        'keamanan' => 'Bisa memicu mual, sakit kepala, atau reaksi alergi kulit.',
        'interaksi' => 'Hindari bersamaan obat pengencer darah.',
        'referensi_url' => 'https://www.google.com/search?q=Pratama+AB+Khasiat+tanaman+obat+herbal+Pustaka+Media',
        'referensi_teks' => 'Pratama, A. B. (2021). Khasiat tanaman obat herbal. Pustaka Media.',
        'affiliate_products' => [
            ['nama' => 'Ginkgo Biloba Extract', 'harga' => 'Rp 120.000', 'gambar' => 'images/ginkgo.jpg', 'link' => 'https://shopee.co.id/search?keyword=ginkgo%20biloba']
        ]
    ],
    'anting_anting' => [
        'nama_lokal' => 'Anting-Anting',
        'nama_latin' => 'Acalypha australis L.',
        'gambar' => 'images/anting_anting.jpg',
        'kandungan' => 'Flavonoid, tanin, fenol dan steroid.',
        'manfaat' => 'Disentri, diare, muntah darah, batuk, mimisan, eksim, koreng, dan luka bakar.',
        'bagian' => 'Herba atau seluruh tanaman termasuk akar',
        'cara_pemanfaatan' => 'Tanaman kering 30-60 g direbus lalu diminum 2 kali sehari.',
        'keamanan' => 'Sebaiknya tidak digunakan berlebihan dalam jangka panjang.',
        'interaksi' => 'Hati-hati dengan obat pengencer darah.',
        'referensi_url' => 'https://www.google.com/search?q=Medicinal+plants+from+the+genus+Acalypha+Seebaluck',
        'referensi_teks' => 'Seebaluck, R., dkk. (2015) Medicinal plants from the genus Acalypha. Journal of Ethnopharmacology.',
        'affiliate_products' => [
            ['nama' => 'Herbal Kering Anting-Anting', 'harga' => 'Rp 15.000', 'gambar' => 'images/anting_anting.jpg', 'link' => 'https://shopee.co.id/search?keyword=anting%20anting']
        ]
    ],
    'bandotan' => [
        'nama_lokal' => 'Bandotan',
        'nama_latin' => 'Ageratum conyzoides L.',
        'gambar' => 'images/bandotan.jpg',
        'kandungan' => 'Flavonoid, alkaloid, tanin, fenol, terpenoid, steroid, dan minyak atsiri.',
        'manfaat' => 'Selesma, bisul, eksim, luka pendarahan, bengkak memar, dan malaria.',
        'bagian' => 'Herba di atas tanah, daun, batang muda dan akar',
        'cara_pemanfaatan' => 'Herba kering 15-30 g direbus lalu diminum.',
        'keamanan' => 'Dapat memicu mual, muntah, atau efek toksik hati jika berlebihan.',
        'interaksi' => 'Dapat berinteraksi dengan obat pengencer darah.',
        'referensi_url' => 'https://www.google.com/search?q=Pratama+AB+Khasiat+tanaman+obat+herbal+Pustaka+Media',
        'referensi_teks' => 'Pratama, A. B. (2021). Khasiat tanaman obat herbal. Pustaka Media.',
        'affiliate_products' => [
            ['nama' => 'Salep Ekstrak Bandotan', 'harga' => 'Rp 35.000', 'gambar' => 'images/bandotan.jpg', 'link' => 'https://shopee.co.id/search?keyword=ekstrak%20bandotan']
        ]
    ],
    'selasih' => [
        'nama_lokal' => 'Selasih',
        'nama_latin' => 'Ocimum basilicum L.',
        'gambar' => 'images/selasih.jpg',
        'kandungan' => 'Linalool, methylchavicol, ocimene, eugenol, anethole, vitamin A, C.',
        'manfaat' => 'Peluruh keringat, peluruh urine, peluruh kentut, penghilang nyeri, antiseptik, dan eksim.',
        'bagian' => 'Herba dan biji',
        'cara_pemanfaatan' => 'Rebus 10-15 g herba atau tumbuk dan peras airnya.',
        'keamanan' => 'Hati-hati dosis tinggi karena kandungan estragole.',
        'interaksi' => 'Dapat memperkuat efek penurun tekanan darah dan pengencer darah.',
        'referensi_url' => 'https://www.google.com/search?q=Ulbricht+systematic+review+of+basil+Ocimum+basilicum',
        'referensi_teks' => 'Ulbricht, C., dkk. (2009) An evidence-based systematic review of basil. Journal of Dietary Supplements.',
        'affiliate_products' => [
            ['nama' => 'Biji Selasih Murni 250gr', 'harga' => 'Rp 20.000', 'gambar' => 'images/selasih.jpg', 'link' => 'https://shopee.co.id/search?keyword=biji%20selasih']
        ]
    ],
    'adas' => [
        'nama_lokal' => 'Adas',
        'nama_latin' => 'Foeniculum vulgare Mill.',
        'gambar' => 'images/adas.jpg',
        'kandungan' => 'Minyak atsiri, fenkon, pinen, limonen, dipanten, felandren, anisaldehid, dan asam anisat.',
        'manfaat' => 'Sakit perut (mulas), perut kembung, mual, muntah, ASI sedikit, diare, sakit kuning (jaundice), kurang nafsu makan, batuk, sesak napas (asma), nyeri haid, haid tidak teratur, rematik gout, dan susah tidur (insomnia).',
        'bagian' => 'Daun dan buah',
        'cara_pemanfaatan' => 'Batuk: Seduh 5 g serbuk adas dengan ½ cangkir air mendidih, saring, lalu tambah 1 sdt madu (Minum 2 kali sehari). Batu Empedu: Seduh 5 g serbuk adas dengan 1 cangkir air panas.',
        'keamanan' => 'Ibu hamil sebaiknya menghindari adas dalam dosis obat atau minyak pekat karena efek menyerupai estrogen dapat merangsang kontraksi rahim.',
        'interaksi' => 'Adas dapat berinteraksi dengan pil KB/terapi hormon, obat antihipertensi (memicu hipotensi), dan obat antidiabetes.',
        'referensi_url' => 'https://www.google.com/search?q=Fennel+and+anise+as+estrogenic+agents+Albert-Puleo',
        'referensi_teks' => 'Albert-Puleo, M. (1980). Fennel and anise as estrogenic agents. Journal of Ethnopharmacology, 2(4), 337-344.',
        'affiliate_products' => [
            ['nama' => 'Biji Adas Kering Murni', 'harga' => 'Rp 15.000', 'gambar' => 'images/adas.jpg', 'link' => 'https://shopee.co.id/search?keyword=biji%20adas']
        ]
    ],
    'baru_cina' => [
        'nama_lokal' => 'Baru Cina',
        'nama_latin' => 'Artemisia vulgaris Linn.',
        'gambar' => 'images/baru_cina.jpg',
        'kandungan' => 'Minyak menguap, Inulin, oxytocin, dan yomogi alkohol.',
        'manfaat' => 'Sakit haid, disentri, keputihan, muntah darah, mimisan, dan pendarahan usus.',
        'bagian' => 'Daun dan seluruh tanaman',
        'cara_pemanfaatan' => 'Akar artemisia + jahe + gula enau direbus sampai tersisa 2 gelas.',
        'keamanan' => 'Berpotensi toksik terhadap hepar dan ginjal jika berlebihan.',
        'interaksi' => 'Berinteraksi dengan obat antikonvulsan dan pengencer darah.',
        'referensi_url' => 'https://doi.org/10.1016/j.foodres.2018.04.058',
        'referensi_teks' => 'Abiri, R., dkk. (2018) Towards a better understanding of Artemisia vulgaris. Food Research International.',
        'affiliate_products' => [
            ['nama' => 'Teh Herbal Daun Baru Cina', 'harga' => 'Rp 28.000', 'gambar' => 'images/baru_cina.jpg', 'link' => 'https://shopee.co.id/search?keyword=daun%20baru%20cina']
        ]
    ],
    'lengkuas' => [
        'nama_lokal' => 'Lengkuas',
        'nama_latin' => 'Alpinia galanga',
        'gambar' => 'images/lengkuas.jpg',
        'kandungan' => 'Kamfer, sineol, asam metil sinamat, eugenol, dan antijamur 1\'-asetoksikavikol asetat.',
        'manfaat' => 'Mengatasi perut kembung, antijamur alami, meredakan sakit perut, dan demam.',
        'bagian' => 'Rimpang',
        'cara_pemanfaatan' => 'Rimpang lengkuas merah 20g diparut, ditambah air hangat dan madu lalu diminum.',
        'keamanan' => 'Umumnya aman sesuai takaran tradisional.',
        'interaksi' => 'Belum ada catatan interaksi signifikan.',
        'referensi_url' => 'https://www.google.com/search?q=Mengenal+lebih+dekat+TOGA+di+sekitar+kita+jilid+2+Surabaya',
        'referensi_teks' => 'Jayani, N.I.E., dkk. (2023) Mengenal lebih dekat TOGA di sekitar kita jilid 2. Surabaya: Universitas Surabaya.',
        'affiliate_products' => [
            ['nama' => 'Rimpang Lengkuas Segar', 'harga' => 'Rp 10.000', 'gambar' => 'images/lengkuas.jpg', 'link' => 'https://shopee.co.id/search?keyword=lengkuas']
        ]
    ],
    'kencur' => [
        'nama_lokal' => 'Kencur',
        'nama_latin' => 'Kaempferia galanga',
        'gambar' => 'images/kencur.jpg',
        'kandungan' => 'Minyak atsiri, etil trans-p-metoksi sinamat, pentadekan, 1,8-sineol, dan borneol.',
        'manfaat' => 'Batuk, flu, gangguan tenggorokan, tekanan darah tinggi, sakit kepala, dan tonik.',
        'bagian' => 'Rimpang',
        'cara_pemanfaatan' => 'Rimpang kencur 15g segar diparut, diperas dengan air 50ml lalu diminum.',
        'keamanan' => 'Dapat menyebabkan alergi atau heartburn pada sebagian orang.',
        'interaksi' => 'Gunakan sesuai anjuran takaran.',
        'referensi_url' => 'https://www.google.com/search?q=Mengenal+lebih+dekat+TOGA+di+sekitar+kita+jilid+2+Surabaya',
        'referensi_teks' => 'Jayani, N.I.E., dkk. (2023) Mengenal lebih dekat TOGA di sekitar kita jilid 2. Surabaya: Universitas Surabaya.',
        'affiliate_products' => [
            ['nama' => 'Kapsul Ekstrak Kencur', 'harga' => 'Rp 35.000', 'gambar' => 'images/kencur.jpg', 'link' => 'https://shopee.co.id/search?keyword=kapsul%20kencur']
        ]
    ],
    'temulawak' => [
        'nama_lokal' => 'Temulawak',
        'nama_latin' => 'Curcuma xanthorrhiza',
        'gambar' => 'images/temulawak.jpg',
        'kandungan' => 'Rimpang temulawak mengandung kurkumin, xhantorizol, kurkuminoid, minyak atsiri.',
        'manfaat' => 'Digunakan untuk penderita gangguan perut, gangguan hati (penyakit kuning), meningkatkan sekresi empedu, memperlancar ASI, dan penambah nafsu makan.',
        'bagian' => 'Rimpang',
        'cara_pemanfaatan' => 'Rimpang temulawak segar 20 g, Asam jawa 1 g, Gula 30 g, Air 250 ml dibuat infusa dan diminum sekaligus, sehari 2 kali.',
        'keamanan' => 'Dosis yang besar atau pemakaian berkepanjangan dapat mengakibatkan iritasi membran mukosa lambung.',
        'interaksi' => 'Dapat meningkatkan potensi obat pengencer darah.',
        'referensi_url' => 'https://www.google.com/search?q=Mengenal+lebih+dekat+TOGA+di+sekitar+kita+jilid+2+Surabaya',
        'referensi_teks' => 'Jayani, N.I.E., dkk. (2023) Mengenal lebih dekat TOGA di sekitar kita jilid 2. Surabaya: Universitas Surabaya.',
        'affiliate_products' => [
            ['nama' => 'Temulawak Instan Gula Jawa', 'harga' => 'Rp 30.000', 'gambar' => 'images/temulawak.jpg', 'link' => 'https://shopee.co.id/search?keyword=temulawak%20instan']
        ]
    ],
    'lempuyang_wangi' => [
        'nama_lokal' => 'Lempuyang Wangi',
        'nama_latin' => 'Zingiber zerumbet',
        'gambar' => 'images/lempuyang_wangi.jpg',
        'kandungan' => 'Rimpang lempuyang wangi mengandung minyak atsiri tidak kurang dari 0.75%.',
        'manfaat' => 'Memperbaiki nafsu makan dan berfungsi sebagai obat batuk tradisional.',
        'bagian' => 'Rimpang',
        'cara_pemanfaatan' => 'Rimpang lempuyang wangi direbus dengan 2 gelas air hingga tersisa 1 gelas, dibagi menjadi 2 bagian.',
        'keamanan' => 'Aman digunakan sesuai dosis tradisional.',
        'interaksi' => 'Perhatikan penggunaannya bersamaan dengan terapi obat dokter.',
        'referensi_url' => 'https://www.google.com/search?q=Mengenal+lebih+dekat+TOGA+di+sekitar+kita+jilid+2+Surabaya',
        'referensi_teks' => 'Jayani, N.I.E., dkk. (2023) Mengenal lebih dekat TOGA di sekitar kita jilid 2. Surabaya: Universitas Surabaya.',
        'affiliate_products' => [
            ['nama' => 'Rimpang Lempuyang Wangi', 'harga' => 'Rp 15.000', 'gambar' => 'images/lempuyang_wangi.jpg', 'link' => 'https://shopee.co.id/search?keyword=lempuyang%20wangi']
        ]
    ],
    'temu_putih' => [
        'nama_lokal' => 'Temu Putih',
        'nama_latin' => 'Curcuma zedoaria',
        'gambar' => 'images/temu_putih.jpg',
        'kandungan' => 'Rimpang mengandung zat warna kuning kurkumin, minyak atsiri, metip-pmetoksi-sinamat, dan seskuiterpenoid.',
        'manfaat' => 'Mengatasi masalah kewanitaan, pembersih rahim pasca nifas, kudis, dan perut kembung.',
        'bagian' => 'Rimpang',
        'cara_pemanfaatan' => 'Rimpang temu putih 5 g, Kunir putih 5 g, Herba rumput mutiara 3 g, Air 600 ml dibuat infusa dan diminum 3x sehari.',
        'keamanan' => 'Gunakan sesuai anjuran sediaan herbal.',
        'interaksi' => 'Perhatikan interaksi obat khusus yang merujuk pada temu putih.',
        'referensi_url' => 'https://www.google.com/search?q=Mengenal+lebih+dekat+TOGA+di+sekitar+kita+jilid+2+Surabaya',
        'referensi_teks' => 'Jayani, N.I.E., dkk. (2023) Mengenal lebih dekat TOGA di sekitar kita jilid 2. Surabaya: Universitas Surabaya.',
        'affiliate_products' => [
            ['nama' => 'Kapsul Temu Putih', 'harga' => 'Rp 40.000', 'gambar' => 'images/temu_putih.jpg', 'link' => 'https://shopee.co.id/search?keyword=kapsul%20temu%20putih']
        ]
    ],
    'jeruk_nipis' => [
        'nama_lokal' => 'Jeruk Nipis',
        'nama_latin' => 'Citrus aurantifolia',
        'gambar' => 'images/jeruk_nipis.jpg',
        'kandungan' => 'Buah: asam askorbat, fruktosa, pektin. Daun: bergapten, sitropten, eriositrin.',
        'manfaat' => 'Mengobati sariawan, batuk, jerawat, demam, dan penyegar badan.',
        'bagian' => 'Buah dan daun',
        'cara_pemanfaatan' => 'Buah jeruk nipis 2 buah, Madu 5 ml, Asam jawa 3 g, Garam 0,5 g, Air 200 ml (diseduh air hangat).',
        'keamanan' => 'Dapat menyebabkan phytophotodermatitis jika getah terkena kulit lalu terpapar sinar matahari.',
        'interaksi' => 'Belum diketahui secara spesifik.',
        'referensi_url' => 'https://www.google.com/search?q=Mengenal+lebih+dekat+TOGA+di+sekitar+kita+jilid+1+Surabaya',
        'referensi_teks' => 'Jayani, N.I.E., dkk. (2022) Mengenal lebih dekat TOGA di sekitar kita jilid 1. Surabaya: Universitas Surabaya.',
        'affiliate_products' => [
            ['nama' => 'Perasan Jeruk Nipis Murni', 'harga' => 'Rp 25.000', 'gambar' => 'images/jeruk_nipis.jpg', 'link' => 'https://shopee.co.id/search?keyword=jeruk%20nipis']
        ]
    ],
    'jambu_biji' => [
        'nama_lokal' => 'Jambu Biji',
        'nama_latin' => 'Psidium guajava',
        'gambar' => 'images/jambu_biji.jpg',
        'kandungan' => 'α-pinen, β-pinen, limonen, mentol, kariofilen, dan kurkumen.',
        'manfaat' => 'Pengobatan utama diare, meredakan maag, dan sering berkemih (beser).',
        'bagian' => 'Daun',
        'cara_pemanfaatan' => 'Daun jambu biji 7 g, Kayu secang 5 g, Air 500 ml direbus selama 15 menit.',
        'keamanan' => 'Penggunaan berlebihan dapat menyebabkan sembelit.',
        'interaksi' => 'Dapat berpotensi memengaruhi obat diabetes dan pengencer darah.',
        'referensi_url' => 'https://www.google.com/search?q=Pedoman+Penggunaan+Herbal+Badan+POM',
        'referensi_teks' => 'Badan Pengawas Obat dan Makanan Republik Indonesia. (2020) Pedoman Penggunaan Herbal. Jakarta: Badan POM RI.',
        'affiliate_products' => [
            ['nama' => 'Teh Daun Jambu Biji', 'harga' => 'Rp 22.000', 'gambar' => 'images/jambu_biji.jpg', 'link' => 'https://shopee.co.id/search?keyword=teh%20daun%20jambu%20biji']
        ]
    ],
    'kumis_kucing' => [
        'nama_lokal' => 'Kumis Kucing',
        'nama_latin' => 'Orthosiphon aristatus',
        'gambar' => 'images/kumis_kucing.jpg',
        'kandungan' => 'Diterpen tipe-isopimarana, staminol A & B, flavonoid (sinensetin, eupatorin), dan asam rosmarinat.',
        'manfaat' => 'Peluruh batu ginjal, diuretik alami, dan meredakan encok.',
        'bagian' => 'Daun',
        'cara_pemanfaatan' => 'Daun kumis kucing 15 g, Air 200 ml diseduh air mendidih seperti teh.',
        'keamanan' => 'Tidak diperbolehkan untuk terapi edema akibat gagal ginjal dan jantung.',
        'interaksi' => 'Perhatikan penggunaan bersama obat diuretik.',
        'referensi_url' => 'https://www.google.com/search?q=Formularium+Obat+Herbal+Asli+Indonesia+Kemenkes',
        'referensi_teks' => 'Kementerian Kesehatan Republik Indonesia. (2016) Formularium Obat Herbal Asli Indonesia. Jakarta: Kemenkes RI.',
        'affiliate_products' => [
            ['nama' => 'Teh Celup Kumis Kucing', 'harga' => 'Rp 20.000', 'gambar' => 'images/kumis_kucing.jpg', 'link' => 'https://shopee.co.id/search?keyword=kumis%20kucing']
        ]
    ],
    'meniran' => [
        'nama_lokal' => 'Meniran',
        'nama_latin' => 'Phyllanthus niruri',
        'gambar' => 'images/meniran.jpg',
        'kandungan' => 'Filantin dan kuersetin.',
        'manfaat' => 'Pelindung hati (hepatoprotektor), penurun demam, peluruh kemih, dan penambah imunitas.',
        'bagian' => 'Daun / Herba',
        'cara_pemanfaatan' => 'Herba meniran 1 g, Kumis kucing 2 g, Air 110 ml direbus 15 menit.',
        'keamanan' => 'Tidak dianjurkan untuk ibu hamil karena bersifat menggugurkan kandungan.',
        'interaksi' => 'Dapat memperkuat efek insulin, obat antidiabetik, dan obat antihipertensi.',
        'referensi_url' => 'https://www.google.com/search?q=The+Healing+Power+of+Rainforest+Herbs+Taylor',
        'referensi_teks' => 'Taylor, L. (2003) The Healing Power of Rainforest Herbs. Square One Publishers.',
        'affiliate_products' => [
            ['nama' => 'Kapsul Meniran Ekstrak', 'harga' => 'Rp 35.000', 'gambar' => 'images/meniran.jpg', 'link' => 'https://shopee.co.id/search?keyword=kapsul%20meniran']
        ]
    ],
    'brotowali' => [
        'nama_lokal' => 'Brotowali',
        'nama_latin' => 'Tinospora crispa',
        'gambar' => 'images/brotowali.jpg',
        'kandungan' => 'Alkaloid berberin dan tinokrisposida.',
        'manfaat' => 'Mengontrol diabetes, meredakan radang, demam, serta gangguan lambung.',
        'bagian' => 'Batang',
        'cara_pemanfaatan' => 'Batang brotowali 5 g, Sambiloto 3 g, Air 110 ml direbus selama 15 menit.',
        'keamanan' => 'Hindari pada pasien dengan gangguan fungsi hati dan ginjal.',
        'interaksi' => 'Berpotensi meningkatkan risiko hipoglikemia bersama obat antidiabetes.',
        'referensi_url' => 'https://www.google.com/search?q=Formularium+Ramuan+Obat+Tradisional+Indonesia+Kemenkes',
        'referensi_teks' => 'Kementerian Kesehatan Republik Indonesia. (2017) Formularium Ramuan Obat Tradisional Indonesia. Jakarta: Kemenkes RI.',
        'affiliate_products' => [
            ['nama' => 'Herbal Batang Brotowali Kering', 'harga' => 'Rp 18.000', 'gambar' => 'images/brotowali.jpg', 'link' => 'https://shopee.co.id/search?keyword=brotowali']
        ]
    ],
    'blimbing_wuluh' => [
        'nama_lokal' => 'Blimbing Wuluh',
        'nama_latin' => 'Averrhoa bilimbi',
        'gambar' => 'images/blimbing_wuluh.jpg',
        'kandungan' => 'Saponin, tannin, glukosida, kalsium oksalat, sulfur, dan asam oksalat.',
        'manfaat' => 'Mengobati batuk rejan, jerawat, obat gondok, encok, dan pegal linu.',
        'bagian' => 'Daun, bunga, dan buah',
        'cara_pemanfaatan' => 'Bunga blimbing wuluh 25 kuntum dan bahan lainnya direbus dalam 5 gelas air.',
        'keamanan' => 'Konsumsi berlebih dapat berisiko pada fungsi hepar (hati).',
        'interaksi' => 'Dapat menghambat aktivitas enzim CYP3A4.',
        'referensi_url' => 'https://www.google.com/search?q=Mengenal+lebih+dekat+TOGA+di+sekitar+kita+jilid+1+Surabaya',
        'referensi_teks' => 'Jayani, N.I.E., dkk. (2022) Mengenal lebih dekat TOGA di sekitar kita jilid 1. Surabaya: Universitas Surabaya.',
        'affiliate_products' => [
            ['nama' => 'Ekstrak Blimbing Wuluh', 'harga' => 'Rp 30.000', 'gambar' => 'images/blimbing_wuluh.jpg', 'link' => 'https://shopee.co.id/search?keyword=blimbing%20wuluh']
        ]
    ],
    'mahkota_dewa' => [
        'nama_lokal' => 'Mahkota Dewa',
        'nama_latin' => 'Phaleria macrocarpa',
        'gambar' => 'images/mahkota_dewa.jpg',
        'kandungan' => 'Daun: antihistamin, alkaloid, saponin, polifenol. Buah/kulit buah: alkaloid, saponin, flavonoid.',
        'manfaat' => 'Menurunkan kadar gula darah, mengatasi rematik, disentri, dan eksim.',
        'bagian' => 'Kulit buah, daun, dan batang',
        'cara_pemanfaatan' => 'Kulit buah mahkota dewa kering 15 g direbus dengan 2 gelas air selama 15 menit.',
        'keamanan' => 'Dapat beracun jika salah pengolahan; hindari pada wanita haid dan ibu hamil.',
        'interaksi' => 'Berpotensi meningkatkan risiko hipoglikemia bersama obat antidiabetes.',
        'referensi_url' => 'https://www.google.com/search?q=Pedoman+Penggunaan+Herbal+Badan+POM',
        'referensi_teks' => 'Badan Pengawas Obat dan Makanan Republik Indonesia. (2020) Pedoman Penggunaan Herbal. Jakarta: Badan POM RI.',
        'affiliate_products' => [
            ['nama' => 'Teh Kulit Mahkota Dewa', 'harga' => 'Rp 25.000', 'gambar' => 'images/mahkota_dewa.jpg', 'link' => 'https://shopee.co.id/search?keyword=mahkota%20dewa']
        ]
    ],
    'daun_salam' => [
        'nama_lokal' => 'Daun Salam',
        'nama_latin' => 'Syzygium polyanthum',
        'gambar' => 'images/daun_salam.jpg',
        'kandungan' => 'Sitral, eugenol, tanin, flavonoid (kuersetin), saponin, polifenol, dan alkaloid.',
        'manfaat' => 'Antihipertensi ringan, antihiperkolesterol, dan antibakteri penyebab diare.',
        'bagian' => 'Daun',
        'cara_pemanfaatan' => 'Daun salam 3 g, Kulit kayu manis 5 g, Buah kapulaga 2 g direbus selama 15 menit.',
        'keamanan' => 'Dapat memicu gangguan saluran pencernaan atau reaksi alergi pada sebagian orang.',
        'interaksi' => 'Berpotensi meningkatkan risiko hipoglikemia jika dikonsumsi bersamaan obat antidiabetes.',
        'referensi_url' => 'https://www.google.com/search?q=Mengenal+lebih+dekat+TOGA+di+sekitar+kita+jilid+1+Surabaya',
        'referensi_teks' => 'Jayani, N.I.E., dkk. (2022) Mengenal lebih dekat TOGA di sekitar kita jilid 1. Surabaya: Universitas Surabaya.',
        'affiliate_products' => [
            ['nama' => 'Teh Daun Salam Kering', 'harga' => 'Rp 15.000', 'gambar' => 'images/daun_salam.jpg', 'link' => 'https://shopee.co.id/search?keyword=daun%20salam']
        ]
    ],
    'kayu_putih' => [
        'nama_lokal' => 'Kayu Putih',
        'nama_latin' => 'Melaleuca leucadendra',
        'gambar' => 'images/kayu_putih.jpg',
        'kandungan' => 'Minyak atsiri sineol, terpineol, varelaldehida, dan benzaldehida.',
        'manfaat' => 'Menyembuhkan rematik, meredakan batuk, serta menghangatkan tubuh.',
        'bagian' => 'Daun',
        'cara_pemanfaatan' => 'Daun kayu putih 13 g direbus dengan 2 gelas air hingga tersisa setengahnya.',
        'keamanan' => 'Dapat menyebabkan rasa terbakar di ulu hati, mual, muntah, atau pusing.',
        'interaksi' => 'Minyak kayu putih berpotensi meningkatkan risiko hipoglikemia bersama obat antidiabetes dan menghambat enzim CYP2D6.',
        'referensi_url' => 'https://www.google.com/search?q=Mengenal+lebih+dekat+TOGA+di+sekitar+kita+jilid+1+Surabaya',
        'referensi_teks' => 'Jayani, N.I.E., dkk. (2022) Mengenal lebih dekat TOGA di sekitar kita jilid 1. Surabaya: Universitas Surabaya.',
        'affiliate_products' => [
            ['nama' => 'Minyak Kayu Putih Asli', 'harga' => 'Rp 35.000', 'gambar' => 'images/kayu_putih.jpg', 'link' => 'https://shopee.co.id/search?keyword=minyak%20kayu%20putih']
        ]
    ],
    'tapak_dara' => [
        'nama_lokal' => 'Tapak Dara',
        'nama_latin' => 'Catharanthus roseus (L.) G. Don',
        'gambar' => 'images/tapak_dara.jpg',
        'kandungan' => 'Mengandung senyawa alkaloid seperti vinblastin, vinkristin, vindolin, dan katarantin.',
        'manfaat' => 'Membantu mempercepat proses penyembuhan luka, seperti luka lecet dan luka bakar ringan.',
        'bagian' => 'Daun',
        'cara_pemanfaatan' => 'Luka baru: 2–5 lembar daun tapak dara dihaluskan, kemudian ditempelkan pada luka baru. <br>Penggunaan oral (Obat tradisional): 4–8 gram daun tapak dara direbus dalam air selama sekitar 30 menit pada suhu 90–96°C.',
        'keamanan' => 'Penggunaan daun tapak dara harus hati-hati, terutama jika diminum. Penggunaan yang tidak tepat dapat menimbulkan efek yang tidak diinginkan. Tanaman ini juga tidak dianjurkan untuk ibu hamil dan menyusui.',
        'interaksi' => 'Daun tapak dara dapat memengaruhi kerja enzim tubuh yang membantu memproses beberapa obat. Karena itu, penggunaannya perlu diperhatikan jika sedang mengonsumsi obat seperti amitriptilin, imipramin, haloperidol, propranolol, atau dekstrometorfan.',
        'referensi_url' => 'https://www.google.com/search?q=Acuan+Sediaan+Herbal+Vol+7+edisi+1+Direktorat+Obat+Asli+Indonesia+BPOM+RI+2012',
        'referensi_teks' => 'Badan Pengawas Obat dan Makanan Republik Indonesia. (2012) Acuan Sediaan Herbal. Vol. 7, edisi 1. Jakarta: BPOM RI.',
        'affiliate_products' => [
            ['nama' => 'Ekstrak Tapak Dara Kapsul', 'harga' => 'Rp 45.000', 'gambar' => 'images/tapak_dara.jpg', 'link' => 'https://shopee.co.id/search?keyword=tapak%20dara']
        ]
    ]
];

$id = isset($_GET['id']) ? $_GET['id'] : 'kunyit';
$plant = isset($plants[$id]) ? $plants[$id] : $plants['kunyit'];

$google_image_url = "https://www.google.com/search?tbm=isch&q=" . urlencode($plant['nama_latin']);
$bing_image_url = "https://www.bing.com/images/search?q=" . urlencode($plant['nama_latin']);
?>

<style>
    .detail-container { display: flex; gap: 30px; align-items: flex-start; margin-top: 20px; }
    .detail-main { flex: 3; background: #ffffff; padding: 30px; border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,0.08); }
    .detail-sidebar { flex: 1; position: sticky; top: 20px; display: flex; flex-direction: column; gap: 20px; }
    
    .plant-image-box { width: 100%; max-width: 320px; height: 240px; margin: 0 auto 10px auto; background-color: #f9f9f9; border-radius: 10px; overflow: hidden; display: flex; align-items: center; justify-content: center; border: 1px solid #eee; }
    .plant-image-box img { max-width: 100%; max-height: 100%; object-fit: contain; }

    .external-search-box { text-align: center; margin-bottom: 25px; padding: 12px; background: #fdfdfd; border-radius: 8px; border: 1px dashed #cccccc; width: 100%; max-width: 320px; margin-left: auto; margin-right: auto; }
    .external-search-title { font-size: 0.88rem; color: #333; font-weight: 600; margin-bottom: 8px; }
    .external-links-group { display: flex; justify-content: center; gap: 15px; font-size: 0.88rem; }
    .ext-link { color: #2e7d32; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 4px; }
    .ext-link:hover { text-decoration: underline; color: #1b5e20; }

    .detail-title { color: #2e7d32; font-weight: bold; font-size: 2rem; margin-bottom: 2px; }
    .detail-latin { font-style: italic; color: #666; font-size: 1rem; margin-bottom: 20px; }
    
    .section-head { 
        color: #1b5e20; 
        font-weight: 900 !important; 
        font-size: 1.15rem; 
        margin-top: 25px; 
        margin-bottom: 10px; 
        border-bottom: 2px solid #e8f5e9; 
        padding-bottom: 5px; 
    }

    .consult-popup-card { background: #ffffff; border: 1px solid #ddd; border-radius: 12px; padding: 20px; text-align: center; box-shadow: 0 2px 8px rgba(0,0,0,0.05); }
    .btn-consult-popup { display: block; width: 100%; padding: 10px; border-radius: 25px; text-decoration: none; font-weight: bold; color: white; background: #0d6efd; margin-top: 10px; }

    .affiliate-card { background: #ffffff; border: 2px solid #ffcc80; border-radius: 12px; padding: 15px; text-align: center; box-shadow: 0 4px 12px rgba(255, 152, 0, 0.1); }
    .affiliate-badge { background-color: #fff3e0; color: #e65100; font-size: 0.75rem; font-weight: bold; padding: 3px 8px; border-radius: 10px; display: inline-block; margin-bottom: 8px; }
    
    .product-item { display: flex; align-items: center; gap: 10px; background: #fff8f0; border: 1px solid #ffe0b2; border-radius: 8px; padding: 8px; margin-bottom: 8px; text-align: left; text-decoration: none; transition: 0.2s; }
    .product-item:hover { background: #ffe0b2; }
    .product-img { width: 50px; height: 50px; object-fit: cover; border-radius: 6px; border: 1px solid #ddd; }
    .product-name { font-size: 0.82rem; font-weight: bold; color: #333; margin: 0; line-height: 1.2; }
    .product-price { font-size: 0.78rem; color: #e65100; font-weight: bold; margin: 0; }

    @media (max-width: 768px) { .detail-container { flex-direction: column; } .detail-sidebar { width: 100%; } }
</style>

<div class="container my-4">
    <a href="index.php" class="btn btn-outline-success btn-sm mb-3">← Kembali ke Katalog</a>

    <div class="detail-container">
        <div class="detail-main">
            <h1 class="detail-title"><?php echo $plant['nama_lokal']; ?></h1>
            <div class="detail-latin"><?php echo $plant['nama_latin']; ?></div>

            <div class="plant-image-box">
                <img src="<?php echo $plant['gambar']; ?>?v=<?php echo time(); ?>" alt="<?php echo $plant['nama_lokal']; ?>">
            </div>

            <!-- Tanda / Link Cari Foto di Internet -->
            <div class="external-search-box">
                <div class="external-search-title">🖼️ Foto-foto <i><?php echo $plant['nama_latin']; ?></i> di internet:</div>
                <div class="external-links-group">
                    <a href="<?php echo $bing_image_url; ?>" target="_blank" class="ext-link">
                        🔍 Bing Images ↗️
                    </a>
                    <a href="<?php echo $google_image_url; ?>" target="_blank" class="ext-link">
                        🔍 Google Images ↗️
                    </a>
                </div>
            </div>

            <div class="section-head">Kandungan</div>
            <p><?php echo $plant['kandungan']; ?></p>

            <div class="section-head">Manfaat</div>
            <p><?php echo $plant['manfaat']; ?></p>

            <div class="section-head">Bagian yang Digunakan</div>
            <p><?php echo $plant['bagian']; ?></p>

            <div class="section-head">Cara Pemanfaatan / Pemakaian</div>
            <p><?php echo $plant['cara_pemanfaatan']; ?></p>

            <div class="section-head">Keamanan</div>
            <p><?php echo $plant['keamanan']; ?></p>

            <div class="section-head">Interaksi dengan Obat</div>
            <p><?php echo $plant['interaksi']; ?></p>

            <div class="section-head">Referensi</div>
            <p style="font-size: 0.85rem; color: #555;">
                <a href="<?php echo $plant['referensi_url']; ?>" target="_blank" style="color: #2e7d32; text-decoration: none; font-weight: 600;">
                    🔗 <?php echo $plant['referensi_teks']; ?>
                </a>
            </p>
        </div>

        <div class="detail-sidebar">
            <div class="consult-popup-card">
                <h4 style="color: #2e7d32; font-weight: bold; margin-bottom: 8px;">Tanya Dokter & Apoteker</h4>
                <p style="font-size: 0.85rem; color: #555;">Konsultasikan dosis dan keamanan produk herbal ini dengan ahli medis.</p>
                <a href="https://wa.me/62895326133068?text=Halo,%20saya%20ingin%20konsultasi%20mengenai%20tanaman%20<?php echo urlencode($plant['nama_lokal']); ?>" target="_blank" class="btn-consult-popup">
                    💬 Mulai Konsultasi
                </a>
            </div>

            <div class="affiliate-card">
                <span class="affiliate-badge">🛒 Rekomendasi Produk Olahan</span>
                <h6 style="color: #e65100; font-weight: bold; font-size: 0.95rem; margin-bottom: 10px;">Pilihan Produk <?php echo $plant['nama_lokal']; ?></h6>
                
                <?php if (!empty($plant['affiliate_products'])): ?>
                    <?php foreach ($plant['affiliate_products'] as $prod): ?>
                        <a href="<?php echo $prod['link']; ?>" target="_blank" class="product-item">
                            <img src="<?php echo $prod['gambar']; ?>?v=<?php echo time(); ?>" alt="<?php echo $prod['nama']; ?>" class="product-img">
                            <div>
                                <p class="product-name"><?php echo $prod['nama']; ?></p>
                                <p class="product-price"><?php echo $prod['harga']; ?></p>
                            </div>
                        </a>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="small text-muted">Belum ada produk afiliasi untuk tanaman ini.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>