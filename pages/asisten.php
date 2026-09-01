<?php include '../config/includes/header.php'; ?>
<?php include '../config/includes/navbar.php'; ?>

<div class="container" style="margin-top: 100px; min-height: 70vh;">
    <div class="content-wrapper shadow-sm" style="max-width: 650px; margin: 0 auto; padding: 30px;">
        <div class="text-center mb-4">
            <div class="card-icon" style="font-size: 4rem;">🤖</div>
            <h2 class="page-title border-0 mb-0">Asisten Cerdas Desa</h2>
            <p class="text-muted">Ketik pertanyaan seputar sampah, saya bantu carikan jawabannya!</p>
        </div>

        <!-- Area Obrolan -->
        <div class="chat-box bg-light p-3 rounded mb-4" id="chatHistory" style="height: 350px; overflow-y: auto; border: 1px solid #dee2e6;">
            <div class="d-flex mb-3">
                <div class="bg-success text-white p-3 rounded-3 shadow-sm" style="max-width: 85%; border-radius: 0px 20px 20px 20px !important;">
                    Halo warga Panambangan! 👋 Saya asisten virtual E-Book ini. <br><br>Coba tanyakan sesuatu, misalnya:<br><em>"Pampers dibuang ke mana?"</em> atau <em>"Cara bikin kompos"</em>.
                </div>
            </div>
        </div>

        <!-- Form Input Pertanyaan -->
        <form id="formAsisten" class="d-flex gap-2">
            <input type="text" id="inputTanya" class="form-control form-control-lg" placeholder="Ketik pertanyaan di sini..." autocomplete="off" required>
            <button type="submit" class="btn btn-success fw-bold px-4" style="border-radius: 10px;">Tanya 🚀</button>
        </form>
    </div>
</div>

<script>
// "Otak" Asisten Cerdas (Database Pengetahuan)
const knowledgeBase = [
    { 
        keywords: ["pampers", "pembalut", "tisu", "styrofoam", "residu", "popok"], 
        answer: "Pampers dan pembalut termasuk <strong>Sampah Residu</strong>. Bungkus dengan rapat dan buang ke wadah abu-abu agar diangkut petugas ke TPA. Jangan dibakar ya! 🚫<br><br>👉 <a href='bab3.php' class='text-white fw-bold'>Baca panduannya di Bab 3</a>" 
    },
    { 
        keywords: ["plastik", "botol", "kardus", "kertas", "kaca", "kaleng", "uang", "jual", "bank sampah"], 
        answer: "Wah, itu <strong>Sampah Anorganik</strong> bernilai ekonomis! Bersihkan, remas/lipat, lalu setor ke Bank Sampah untuk ditukar jadi Rupiah. 💰<br><br>👉 <a href='bab5.php' class='text-white fw-bold'>Pelajari caranya di Bab 5</a>" 
    },
    { 
        keywords: ["makanan", "sayur", "daun", "kompos", "organik", "pupuk", "busuk"], 
        answer: "Sisa makanan dan daun kering adalah <strong>Sampah Organik</strong>. Sangat bagus diolah menjadi pupuk kompos atau pupuk cair (POC) untuk tanaman di rumah. 🌱<br><br>👉 <a href='bab4.php' class='text-white fw-bold'>Lihat tutorial kompos di Bab 4</a>" 
    },
    { 
        keywords: ["bakar", "api", "asap", "dibakar"], 
        answer: "<strong>Tolong jangan membakar sampah!</strong> 🔥 Asapnya mengandung racun dioksin yang memicu sesak napas dan kanker. Lebih baik dipilah sesuai jenisnya. 🛑<br><br>👉 <a href='bab1.php' class='text-white fw-bold'>Baca bahayanya di Bab 1</a>" 
    },
    { 
        keywords: ["maggot", "lalat", "bsf", "pakan", "ayam", "lele"], 
        answer: "Maggot BSF itu pahlawan pemakan sampah organik! Panen maggot bisa dijual untuk pakan ternak (ayam/lele) berprotein tinggi. Peluang bisnis yang mantap! 🐛<br><br>👉 <a href='bab4.php' class='text-white fw-bold'>Cek cara budidayanya di Bab 4</a>" 
    },
    { 
        keywords: ["3r", "reduce", "reuse", "recycle"], 
        answer: "Jurus 3R: <strong>Reduce</strong> (Kurangi pemakaian), <strong>Reuse</strong> (Gunakan kembali barang bekas), dan <strong>Recycle</strong> (Daur ulang sampah jadi barang baru). ♻️<br><br>👉 <a href='bab2.php' class='text-white fw-bold'>Cek contoh praktiknya di Bab 2</a>" 
    }
];

// Logika Pemrosesan Pesan
document.getElementById('formAsisten').addEventListener('submit', function(e) {
    e.preventDefault();
    const inputField = document.getElementById('inputTanya');
    const question = inputField.value.trim().toLowerCase();
    if(!question) return;

    const chatHistory = document.getElementById('chatHistory');
    
    // 1. Munculkan pesan yang diketik User (Bubble kanan)
    chatHistory.innerHTML += `
        <div class="d-flex justify-content-end mb-3">
            <div class="bg-white border p-3 rounded-3 shadow-sm" style="max-width: 85%; border-radius: 20px 20px 0px 20px !important;">
                ${inputField.value}
            </div>
        </div>
    `;

    inputField.value = ''; // Kosongkan kolom input
    chatHistory.scrollTop = chatHistory.scrollHeight; // Auto scroll ke bawah

    // 2. Mesin Pencari Jawaban
    let foundAnswer = "Maaf, saya belum menemukan jawaban yang pas. 🤔 Coba gunakan kata kunci lain seperti <strong>'botol'</strong>, <strong>'pampers'</strong>, <strong>'kompos'</strong>, atau <strong>'bakar'</strong>.";
    
    for (let item of knowledgeBase) {
        // Cek apakah ada kata kunci yang cocok dengan ketikan warga
        const isMatch = item.keywords.some(kw => question.includes(kw));
        if (isMatch) {
            foundAnswer = item.answer;
            break; // Berhenti mencari jika sudah ketemu
        }
    }

    // 3. Munculkan balasan Asisten (Bubble kiri) dengan jeda 0.6 detik agar terasa natural
    setTimeout(() => {
        chatHistory.innerHTML += `
            <div class="d-flex mb-3">
                <div class="bg-success text-white p-3 rounded-3 shadow-sm" style="max-width: 85%; border-radius: 0px 20px 20px 20px !important;">
                    ${foundAnswer}
                </div>
            </div>
        `;
        chatHistory.scrollTop = chatHistory.scrollHeight;
    }, 600);
});
</script>

<?php include '../config/includes/footer.php'; ?>