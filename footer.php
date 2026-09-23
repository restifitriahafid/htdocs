<footer class="bg-white border-top py-3 mt-5">
        <div class="container text-center text-muted small">
            © 2026 HerbaCheck. Jembatan Edukasi & Informasi Kesehatan Herbal.
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

    <!-- Floating AI Chat Widget dengan Teks Label -->
<div id="aiChatWidget" style="position: fixed; bottom: 25px; right: 25px; z-index: 1000; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <!-- Tombol Ikon Chat + Teks Label -->
    <button id="chatToggleBtn" onclick="toggleChat()" style="background: linear-gradient(135deg, #2e7d32 0%, #1b5e20 100%); color: white; border: none; padding: 10px 18px; border-radius: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.25); cursor: pointer; font-size: 0.95rem; font-weight: bold; display: flex; align-items: center; gap: 10px; transition: 0.3s;">
        <span style="font-size: 22px;"></span> 
        <span>Tanya HerbaAI 💬 </span>
    </button>

    <!-- Kotak Jendela Chat -->
    <div id="chatBox" style="display: none; position: absolute; bottom: 70px; right: 0; width: 340px; height: 480px; background: white; border-radius: 14px; box-shadow: 0 8px 30px rgba(0,0,0,0.15); border: 1px solid #c8e6c9; flex-direction: column; overflow: hidden;">
        <!-- Header Chat -->
        <div style="background: linear-gradient(135deg, #2e7d32 0%, #1b5e20 100%); color: white; padding: 12px 15px; display: flex; justify-content: space-between; align-items: center;">
            <span style="font-weight: bold; font-size: 0.95rem;">🌿 Asisten HerbaCheck (Gemini)</span>
            <button onclick="toggleChat()" style="background: none; border: none; color: white; font-size: 18px; cursor: pointer;">✕</button>
        </div>
        
        <!-- Area Pesan -->
        <div id="chatMessages" style="flex: 1; padding: 12px; overflow-y: auto; font-size: 0.85rem; background: #f9fbe7; display: flex; flex-direction: column; gap: 8px;">
            <div style="background: #e8f5e9; padding: 8px 12px; border-radius: 10px; max-width: 85%; align-self: flex-start; color: #1b5e20; border: 1px solid #c8e6c9;">
                Halo! Silakan ketik pertanyaan seputar tanaman herbal atau khasiatnya di bawah ya!
            </div>
        </div>

        <!-- Tombol Template Chat Cepat (Quick Replies) -->
        <div style="padding: 6px 10px; background: #f1f8e9; border-top: 1px solid #dcedc8; display: flex; flex-direction: column; gap: 4px;">
            <span style="font-size: 0.7rem; color: #558b2f; font-weight: bold;">Pertanyaan Cepat:</span>
            <div style="display: flex; flex-wrap: wrap; gap: 4px;">
                <button onclick="selectTemplate('Halo, saya mau cari tanaman untuk meredakan nyeri haid!')" style="background: white; color: #2e7d32; border: 1px solid #aed581; border-radius: 10px; padding: 3px 8px; font-size: 0.72rem; cursor: pointer; font-weight: 500;">🌿 Nyeri Haid</button>
                <button onclick="selectTemplate('Halo, apa tanaman yang bagus untuk penurun gula darah?')" style="background: white; color: #2e7d32; border: 1px solid #aed581; border-radius: 10px; padding: 3px 8px; font-size: 0.72rem; cursor: pointer; font-weight: 500;">🩸 Gula Darah</button>
                <button onclick="selectTemplate('Halo, tanaman apa untuk meredakan batuk dan flu?')" style="background: white; color: #2e7d32; border: 1px solid #aed581; border-radius: 10px; padding: 3px 8px; font-size: 0.72rem; cursor: pointer; font-weight: 500;">🤧 Batuk & Flu</button>
            </div>
        </div>

        <!-- Input Pesan -->
        <div style="padding: 10px; background: white; border-top: 1px solid #eee; display: flex; gap: 8px;">
            <input type="text" id="chatInput" placeholder="Ketik pertanyaan herbal..." onkeypress="checkEnter(event)" style="flex: 1; padding: 8px 12px; border: 1px solid #ddd; border-radius: 20px; outline: none; font-size: 0.85rem;">
            <button onclick="sendMessage()" style="background: #2e7d32; color: white; border: none; padding: 8px 14px; border-radius: 20px; font-weight: bold; cursor: pointer; font-size: 0.85rem;">Kirim</button>
        </div>
    </div>
</div>

<script>
function toggleChat() {
    let box = document.getElementById('chatBox');
    box.style.display = box.style.display === 'flex' ? 'none' : 'flex';
}

function selectTemplate(text) {
    let input = document.getElementById('chatInput');
    if (input) {
        input.value = text;
        input.focus();
    }
}

function checkEnter(e) {
    if (e.key === 'Enter') {
        sendMessage();
    }
}

function sendMessage() {
    let input = document.getElementById('chatInput');
    let message = input.value.trim();
    if (!message) return;

    let chatMessages = document.getElementById('chatMessages');

    // Tampilkan pesan user
    let userMsgDiv = document.createElement('div');
    userMsgDiv.style.cssText = "background: #2e7d32; color: white; padding: 8px 12px; border-radius: 10px; max-width: 85%; align-self: flex-end;";
    userMsgDiv.innerText = message;
    chatMessages.appendChild(userMsgDiv);

    input.value = "";
    chatMessages.scrollTop = chatMessages.scrollHeight;

    // Sistem AI Pemindai Katalog Web
    setTimeout(() => {
        let aiMsgDiv = document.createElement('div');
        aiMsgDiv.style.cssText = "background: #e8f5e9; padding: 8px 12px; border-radius: 10px; max-width: 85%; align-self: flex-start; color: #1b5e20; border: 1px solid #c8e6c9;";
        
        let lower = message.toLowerCase();
        let consultNote = "<br><br><em>Silahkan berkonsultasi dengan tim medis ahli melalui tombol 'Tanya Dokter & Apoteker' di sebelah kanan untuk informasi dosis yang tepat.</em>";
        
        let cards = document.querySelectorAll('.plant-card');
        let matchedPlants = [];

        cards.forEach(card => {
            let nama = card.getAttribute('data-nama');
            let penyakit = card.getAttribute('data-penyakit').toLowerCase();
            let khasiat = card.getAttribute('data-khasiat').toLowerCase();
            let desc = card.querySelector('.plant-desc').innerText.toLowerCase();

            let keywords = lower.replace(/[^\w\s]/gi, '').split(/\s+/);
            let isMatch = keywords.some(keyword => {
                if (keyword.length > 2) {
                    return penyakit.includes(keyword) || khasiat.includes(keyword) || desc.includes(keyword) || nama.toLowerCase().includes(keyword);
                }
                return false;
            });

            // Pencocokan manual untuk kata kunci penting termasuk Adas
            if (
                (lower.includes('eksim') && (nama === 'Bandotan' || nama === 'Mahkota Dewa' || nama === 'Selasih' || nama === 'Pegagan')) ||
                (lower.includes('diuretik') && (nama === 'Kumis Kucing' || nama === 'Meniran')) ||
                (lower.includes('haid') && (nama === 'Baru Cina' || nama === 'Temulawak' || nama === 'Adas')) ||
                (lower.includes('gula') && (nama === 'Sambiloto' || nama === 'Brotowali' || nama === 'Mahkota Dewa')) ||
                (lower.includes('batuk') && (nama === 'Jahe' || nama === 'Kencur' || nama === 'Jeruk Nipis' || nama === 'Kayu Putih' || nama === 'Blimbing Wuluh' || nama === 'Adas')) ||
                (lower.includes('maag') && (nama === 'Jambu Biji' || nama === 'Daun Salam' || nama === 'Kunyit')) ||
                (lower.includes('kembung') && (nama === 'Adas' || nama === 'Jahe' || nama === 'Lengkuas')) ||
                (lower.includes('hipertensi') && (nama === 'Daun Salam'))
            ) {
                if (!matchedPlants.includes(nama)) matchedPlants.push(nama);
            } else if (isMatch) {
                if (!matchedPlants.includes(nama)) {
                    matchedPlants.push(nama);
                }
            }
        });

        let reply = "";
        if (matchedPlants.length > 0) {
            let links = matchedPlants.map(p => {
                let idSlug = p.toLowerCase().replace(/\s+/g, '_');
                return `<a href="detail.php?id=${idSlug}" target="_blank" style="color: #1b5e20; font-weight: bold; text-decoration: underline;">${p}</a>`;
            }).join(', ');
            
            reply = `Berdasarkan katalog web, tanaman yang sesuai untuk pencarian tersebut adalah: ${links}.`;
        } else if (lower.includes('halo') || lower.includes('hai')) {
            reply = "Halo juga! Silakan ketik nama penyakit atau khasiat yang ingin dicari (misal: *eksim*, *diuretik*, *maag*, *batuk*, *adas*).";
        } else {
            reply = `Maaf, tanaman untuk keluhan "${message}" belum ditemukan di katalog. Silakan cek daftar lengkapnya di halaman utama web.`;
        }

        aiMsgDiv.innerHTML = reply + consultNote;
        chatMessages.appendChild(aiMsgDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }, 600);
}
</script>
</body>
</html>