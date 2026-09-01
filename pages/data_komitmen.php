<?php 
include '../config/includes/header.php'; 
include '../config/database.php';
?>
<?php include '../config/includes/navbar.php'; ?>

<div class="container" style="margin-top: 100px; min-height: 60vh;">
    <div class="content-wrapper">
        <h1 class="page-title text-center">📋 Data Komitmen Warga</h1>
        <p class="text-center text-muted mb-4">Daftar warga pahlawan lingkungan Desa Panambangan yang telah berkomitmen.</p>
        
        <div class="table-responsive shadow-sm rounded">
            <table class="table table-hover table-bordered align-middle mb-0">
                <thead class="table-success text-center">
                    <tr>
                        <th width="5%">No</th>
                        <th width="25%">Nama Keluarga / Perwakilan</th>
                        <th width="15%">RT / RW</th>
                        <th width="35%">Komitmen</th>
                        <th width="20%">Waktu Pengisian</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($conn) && $conn != null) {
                        try {
                            $stmt = $conn->query("SELECT nama_keluarga, rt_rw, komitmen, tanggal FROM komitmen_keluarga ORDER BY tanggal DESC");
                            if ($stmt->rowCount() > 0) {
                                $no = 1;
                                while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    $tanggal = date('d M Y, H:i', strtotime($row['tanggal']));
                                    echo "<tr>";
                                    echo "<td class='text-center fw-bold'>".$no++."</td>";
                                    echo "<td>".htmlspecialchars($row['nama_keluarga'])."</td>";
                                    echo "<td class='text-center'>".htmlspecialchars($row['rt_rw'])."</td>";
                                    echo "<td>".htmlspecialchars($row['komitmen'])."</td>";
                                    echo "<td class='text-center text-muted'><small>".$tanggal." WIB</small></td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='5' class='text-center text-muted py-4'>Belum ada data komitmen warga saat ini. Jadilah yang pertama!</td></tr>";
                            }
                        } catch (PDOException $e) {
                            echo "<tr><td colspan='5' class='text-center text-danger py-4'>Gagal memuat data dari database. Pastikan tabel di Supabase sudah dibuat.</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5' class='text-center text-danger py-4'>Koneksi Supabase belum dikonfigurasi dengan benar di config/database.php.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="text-center mt-5">
            <a href="../index.php" class="btn btn-outline-secondary me-2">⬅️ Kembali ke Beranda</a>
            <a href="bab6.php" class="btn btn-success">Ke Halaman Form ✍️</a>
        </div>
    </div>
</div>

<?php include '../config/includes/footer.php'; ?>