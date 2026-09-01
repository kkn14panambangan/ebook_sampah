<?php include '../config/includes/header.php'; ?>
<?php include '../config/includes/navbar.php'; ?>

<div class="container" style="margin-top: 100px; min-height: 70vh;">
    <div class="content-wrapper shadow-sm">
        <div class="text-center mb-5">
            <h1 class="page-title border-0 mb-2">📍 Kebun Mini & Edukasi Sampah</h1>
            <p class="text-muted">Proyek percontohan nyata dari Mahasiswa KKM UMC 2026 yang berlokasi di sebelah Kantor Desa Panambangan.</p>
        </div>

        <!-- Bagian FOTO dan TOMBOL MAPS -->
        <div class="row mb-5 align-items-center bg-light p-4 rounded-4 border-success" style="border-left: 5px solid;">
            <div class="col-md-7 mb-4 mb-md-0">
                <!-- Memanggil foto kebun mini dari folder assets/img -->
                <img src="../assets/img/kebun_mini.jpg" alt="Foto Kebun Mini Desa Panambangan" class="img-fluid rounded-3 shadow-sm w-100" style="object-fit: cover; max-height: 400px;">
            </div>
            <div class="col-md-5 text-center text-md-start px-md-4">
                <h3 class="fw-bold text-success mb-3">Melihat Langsung Lebih Baik! 🚶‍♂️</h3>
                <p>Teori saja tidak cukup. Datang dan buktikan sendiri bagaimana lahan kosong di sebelah balai desa bisa disulap menjadi kebun produktif dengan pupuk dari sampah organik.</p>
                <p class="mb-4">Terdapat monumen kayu edukasi "Waktu Urai Sampah", unit komposter, dan deretan tanaman toga hasil karya kelompok KKM 14.</p>
                
                <!-- Link langsung ke Titik Koordinat Balai Desa Panambangan yang Akurat -->
                <a href="https://www.google.com/maps/place/Kantor+Balai+Desa%2FKuwu+Panambangan/@-6.8580225,108.5509618,87m/data=!3m1!1e3!4m12!1m5!3m4!2zNsKwNTEnMjcuMSJTIDEwOMKwMzMnMDIuNyJF!8m2!3d-6.8575334!4d108.5507554!3m5!1s0x2e6f1a4918fe74bf:0x59cd4137276e1137!8m2!3d-6.8578763!4d108.5508183!16s%2Fg%2F11cnbq2w0s?entry=ttu&g_ep=EgoyMDI2MDgyNi4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn btn-danger btn-lg shadow-sm rounded-pill fw-bold px-4 py-2">
                    🗺️ Buka di Google Maps
                </a>
            </div>
        </div>
        <hr class="mb-5">

        <div class="row g-4">
            <!-- Bagian Tanaman Toga -->
            <div class="col-md-6">
                <div class="card h-100 border-success" style="border-width: 2px;">
                    <div class="card-body">
                        <h3 class="text-success mb-3">🌿 Koleksi Tanaman Toga</h3>
                        <p>Kami menyulap lahan kosong menjadi kebun tanaman obat keluarga (Toga) dan sayuran yang dirawat menggunakan pupuk organik buatan sendiri. Tanaman yang ada di sini meliputi:</p>
                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item border-0">🌶️ Cabai</li>
                            <li class="list-group-item border-0">🌱 Sereh</li>
                            <li class="list-group-item border-0">🌾 Kunyit</li>
                            <li class="list-group-item border-0">🫚 Jahe</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Bagian Fasilitas Sampah -->
            <div class="col-md-6">
                <div class="card h-100 border-warning" style="border-width: 2px;">
                    <div class="card-body">
                        <h3 class="text-warning mb-3">♻️ Fasilitas Pengelolaan Sampah</h3>
                        <p>Sebagai bentuk nyata dari panduan E-Book ini, di area kebun mini juga telah dibangun fasilitas pengelolaan sampah mandiri yang bisa digunakan oleh warga:</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0">🪣 <strong>Unit Komposter:</strong> Mengolah sisa organik menjadi pupuk untuk kebun.</li>
                            <li class="list-group-item border-0">🗑️ <strong>Tong Sampah Terpilah:</strong> Pemisahan sampah organik dan anorganik.</li>
                            <li class="list-group-item border-0">⏳ <strong>Papan Edukasi Waktu Urai:</strong> Monumen kayu yang menunjukkan informasi berapa lama sampah plastik dan kaleng dapat terurai di alam.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="../index.php" class="btn btn-outline-secondary me-2">⬅️ Kembali ke Beranda</a>
        </div>
    </div>
</div>

<?php include '../config/includes/footer.php'; ?>