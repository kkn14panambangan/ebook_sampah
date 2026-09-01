<?php 
include '../config/includes/header.php'; 
include '../config/database.php';

$pesan = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama_keluarga'] ?? '';
    $rtrw = $_POST['rt_rw'] ?? '';
    $komitmen = $_POST['komitmen'] ?? '';

    if (!empty($nama) && !empty($rtrw) && !empty($komitmen)) {
        if (isset($conn) && $conn != null) {
            try {
                $stmt = $conn->prepare("INSERT INTO komitmen_keluarga (nama_keluarga, rt_rw, komitmen) VALUES (?, ?, ?)");
                $stmt->execute([$nama, $rtrw, $komitmen]);
                $pesan = '<div class="alert alert-success">Terima kasih! Komitmen keluarga Anda telah tercatat. Mari wujudkan Desa Panambangan yang bersih! 🌍💚</div>';
            } catch (PDOException $e) {
                $pesan = '<div class="alert alert-danger">Terjadi kesalahan saat menyimpan data: ' . $e->getMessage() . '</div>';
            }
        } else {
            $pesan = '<div class="alert alert-success">Terima kasih! Komitmen keluarga Anda tercatat di hati kita bersama. Mari wujudkan Desa Panambangan yang bersih! 🌍💚</div>';
        }
    }
}
?>
<?php include '../config/includes/navbar.php'; ?>

<div class="container" style="margin-top: 100px;">
    <div class="content-wrapper ebook-reader">
        <h1 class="page-title" style="font-family: 'Poppins', sans-serif;">BAB 6: Aksi Nyata! 🚀</h1>
        
        <p>Pengetahuan saja tidak cukup, yang kita butuhkan adalah <strong>Tindakan</strong>. Mari berkolaborasi menciptakan Desa Panambangan yang bersih, sehat, dan indah.</p>

        <h3>6.1 Program Kampung Bersih & Gotong Royong</h3>
        <p>Setiap hari Jumat atau Minggu pagi, mari sempatkan 30 menit bersama tetangga untuk membersihkan selokan dan jalanan dari sampah liar. Gerakan kecil yang dilakukan serentak akan berdampak masif!</p>

        <h3>6.2 Patuhi Aturan Desa</h3>
        <p>Ingat, membuang sampah sembarangan (ke sungai atau kebun kosong) bukan hanya mencemari lingkungan, tetapi juga melanggar norma dan Perdes. Jadilah warga teladan yang memilah sampahnya sendiri.</p>

        <hr class="my-5">

        <div class="card bg-light border-success" style="border-width: 2px;">
            <div class="card-body p-4 text-center">
                <h3 class="text-success mb-3">Tantangan 30 Hari Tanpa Nyampah Sembarangan!</h3>
                <p>Siapkah keluarga Anda untuk berkomitmen mulai hari ini memilah sampah organik dan anorganik?</p>
                
                <?php echo $pesan; ?>

                <form method="POST" action="" class="mt-4 text-start" style="max-width: 500px; margin: auto;">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Kepala Keluarga / Perwakilan</label>
                        <input type="text" name="nama_keluarga" class="form-control" required placeholder="Contoh: Bpk. Suryatna">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">RT / RW</label>
                        <input type="text" name="rt_rw" class="form-control" required placeholder="Contoh: RT 02 / RW 01">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Apa Komitmen Anda?</label>
                        <select name="komitmen" class="form-select" required>
                            <option value="">-- Pilih Komitmen --</option>
                            <option value="Saya berjanji akan memilah sampah di rumah">Saya berjanji akan memilah sampah di rumah</option>
                            <option value="Saya berjanji tidak akan membakar sampah lagi">Saya berjanji tidak akan membakar sampah lagi</option>
                            <!-- Pilihan Bank Sampah sudah diganti ke Pengepul Rongsok di bawah ini -->
                            <option value="Saya akan mengumpulkan sampah anorganik untuk pengepul rongsok">Saya akan mengumpulkan sampah anorganik untuk pengepul rongsok</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success w-100 fw-bold">Kirim Komitmen ✍️</button>
                </form>
            </div>
        </div>

        <div class="text-center mt-5">
            <h4 class="text-muted">Terima kasih telah membaca E-Book ini!</h4>
            <p>Mari jadikan Desa Panambangan bebas sampah dan berdaya guna.</p>
            <a href="../index.php" class="btn btn-primary mt-3">🏠 Kembali ke Halaman Utama</a>
        </div>
    </div>
</div>

<?php include '../config/includes/footer.php'; ?>
