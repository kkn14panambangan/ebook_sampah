<?php include 'config/includes/header.php'; ?>
<?php include 'config/includes/navbar.php'; ?>

<header class="hero-section">
    <div class="container">
        <h1 class="hero-title">Ubah Sampah Jadi Berkah! 🌍✨</h1>
        <p class="lead mt-3 mb-4">Panduan asik dan praktis mengelola sampah di rumah tangga khusus untuk warga hebat Desa Panambangan.</p>
        <a href="pages/bab1.php" class="btn btn-custom btn-lg shadow-sm">Mulai Membaca 🚀</a>
    </div>
</header>

<div class="container mt-5 pt-3">
    <div class="text-center mb-5">
        <h2 style="color: #28a745; font-weight: bold;">Kenapa Harus Baca E-Book Ini? 🤔</h2>
        <p class="text-muted">Desa kita memproduksi banyak sampah setiap hari. Daripada dibuang dan jadi penyakit, yuk kita olah jadi sesuatu yang bermanfaat dan menghasilkan cuan!</p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card p-4 card-bab text-center">
                <div class="card-icon">🗑️</div>
                <h4 class="fw-bold">Bab 1: Sampah di Sekitar Kita</h4>
                <p class="text-muted">Kenali jenis-jenis musuh kita sehari-hari dan bahayanya jika dibakar.</p>
                <a href="pages/bab1.php" class="btn btn-outline-success mt-auto">Baca Bab 1</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 card-bab text-center">
                <div class="card-icon">♻️</div>
                <h4 class="fw-bold">Bab 2: Prinsip 3R</h4>
                <p class="text-muted">Jurus jitu Reduce, Reuse, Recycle yang gampang dipraktikkan di rumah.</p>
                <a href="pages/bab2.php" class="btn btn-outline-success mt-auto">Baca Bab 2</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 card-bab text-center">
                <div class="card-icon">🚮</div>
                <h4 class="fw-bold">Bab 3: Panduan Memilah</h4>
                <p class="text-muted">Pisahkan sampahmu layaknya memisahkan yang baik dan buruk!</p>
                <a href="pages/bab3.php" class="btn btn-outline-success mt-auto">Baca Bab 3</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 card-bab text-center">
                <div class="card-icon">🌱</div>
                <h4 class="fw-bold">Bab 4: Olah Organik</h4>
                <p class="text-muted">Bikin pupuk kompos dan ternak maggot yang super menguntungkan.</p>
                <a href="pages/bab4.php" class="btn btn-outline-success mt-auto">Baca Bab 4</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 card-bab text-center">
                <div class="card-icon">💰</div>
                <h4 class="fw-bold">Bab 5: Olah Anorganik</h4>
                <p class="text-muted">Tukar botol plastikmu di Bank Sampah dan jadikan pundi-pundi rupiah.</p>
                <a href="pages/bab5.php" class="btn btn-outline-success mt-auto">Baca Bab 5</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 card-bab text-center">
                <div class="card-icon">🚀</div>
                <h4 class="fw-bold">Bab 6: Aksi Nyata</h4>
                <p class="text-muted">Tantangan 30 hari tanpa nyampah sembarangan untuk keluarga tercinta.</p>
                <a href="pages/bab6.php" class="btn btn-outline-success mt-auto">Baca Bab 6</a>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5 pt-3 text-center">
    <h3 style="color: #28a745; font-weight: bold;">Tim Penyusun KKM 14 Panambangan 🎓</h3>
    <p class="text-muted mb-4">Terima kasih kepada seluruh warga dan perangkat Desa Panambangan atas dukungan luar biasa untuk program ini.</p>
    <img src="<?php echo $base_url; ?>/assets/img/tim_kkn.jpg" alt="Tim KKM 14 Panambangan" class="img-fluid rounded shadow-lg" style="max-width: 800px; width: 100%; border: 4px solid white;">
</div>

<?php include 'config/includes/footer.php'; ?>