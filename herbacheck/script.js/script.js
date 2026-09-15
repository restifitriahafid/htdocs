document.addEventListener("DOMContentLoaded", function () {
    // 1. Inisialisasi Elemen HTML
    const searchInput = document.querySelector(".search-input");
    const popularTags = document.querySelectorAll(".popular-tag");
    const filterCategory = document.querySelector("select[name='kategori']");
    const filterPenyakit = document.querySelector("select[name='penyakit']");
    const filterSediaan = document.querySelector("select[name='sediaan']");
    const alphabetLinks = document.querySelectorAll(".alphabet-list a");
    const plantCards = document.querySelectorAll(".plant-card");
    const indexRows = document.querySelectorAll(".latin-index-row");

    // 2. Fungsi Filter Utama (Multi-Filter: Teks, Khasiat, Penyakit, & Sediaan)
    function filterPlants() {
        const searchTerm = searchInput ? searchInput.value.toLowerCase().trim() : "";
        const selectedCategory = filterCategory ? filterCategory.value.toLowerCase() : "";
        const selectedPenyakit = filterPenyakit ? filterPenyakit.value.toLowerCase() : "";
        const selectedSediaan = filterSediaan ? filterSediaan.value.toLowerCase() : "";

        plantCards.forEach(card => {
            // Ambil data dari atribut HTML dan teks kartu
            const namaLokal = card.querySelector(".nama-lokal") ? card.querySelector(".nama-lokal").textContent.toLowerCase() : "";
            const namaLatin = card.querySelector(".nama-latin") ? card.querySelector(".nama-latin").textContent.toLowerCase() : "";
            const khasiat = card.getAttribute("data-khasiat") ? card.getAttribute("data-khasiat").toLowerCase() : "";
            const penyakit = card.getAttribute("data-penyakit") ? card.getAttribute("data-penyakit").toLowerCase() : "";
            const sediaan = card.getAttribute("data-sediaan") ? card.getAttribute("data-sediaan").toLowerCase() : "";

            // Logika Pencocokan Data
            const matchesSearch = namaLokal.includes(searchTerm) || 
                                  namaLatin.includes(searchTerm) || 
                                  khasiat.includes(searchTerm) || 
                                  penyakit.includes(searchTerm) || 
                                  sediaan.includes(searchTerm);

            const matchesCategory = selectedCategory === "" || khasiat.includes(selectedCategory);
            const matchesPenyakit = selectedPenyakit === "" || penyakit.includes(selectedPenyakit);
            const matchesSediaan = selectedSediaan === "" || sediaan.includes(selectedSediaan);

            // Tampilkan atau Sembunyikan Kartu Tanaman
            if (matchesSearch && matchesCategory && matchesPenyakit && matchesSediaan) {
                card.style.display = "block";
                card.style.animation = "fadeIn 0.3s ease-in-out";
            } else {
                card.style.display = "none";
            }
        });
    }

    // 3. Event Listener: Live Search saat mengetik
    if (searchInput) {
        searchInput.addEventListener("keyup", filterPlants);
    }

    // 4. Event Listener: Pencarian Populer (Tag Jahe, Kunyit, dll)
    popularTags.forEach(tag => {
        tag.addEventListener("click", function (e) {
            e.preventDefault();
            const tagText = this.textContent.trim();
            if (searchInput) {
                searchInput.value = tagText;
                filterPlants();
            }
        });
    });

    // 5. Event Listener: Dropdown Filter Khasiat, Penyakit, & Sediaan
    if (filterCategory) filterCategory.addEventListener("change", filterPlants);
    if (filterPenyakit) filterPenyakit.addEventListener("change", filterPlants);
    if (filterSediaan) filterSediaan.addEventListener("change", filterPlants);

    // 6. Indeks Huruf Berdasarkan NAMA LATIN (A-Z)
    alphabetLinks.forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            const selectedLetter = this.textContent.trim().toUpperCase();

            // A. Saring Galeri Kartu Tanaman
            plantCards.forEach(card => {
                const latinText = card.querySelector(".nama-latin") ? card.querySelector(".nama-latin").textContent.trim() : "";
                if (latinText.toUpperCase().startsWith(selectedLetter)) {
                    card.style.display = "block";
                } else {
                    card.style.display = "none";
                }
            });

            // B. Saring Tabel/Daftar Indeks Latin Nama
            if (indexRows.length > 0) {
                indexRows.forEach(row => {
                    const latinName = row.getAttribute("data-latin") || "";
                    if (latinName.toUpperCase().startsWith(selectedLetter)) {
                        row.style.display = "flex";
                    } else {
                        row.style.display = "none";
                    }
                });
            }
        });
    });
});