-- ============================================
-- Database: E-Book Pengelolaan Sampah
-- Desa Panambangan, Cirebon
-- KKM UMC 2026 - Fauzan Rizky Alifian
-- ============================================

-- Hapus database jika sudah ada
DROP DATABASE IF EXISTS ebook_sampah;

-- Buat database baru (Nama disesuaikan dengan koneksi PHP)
CREATE DATABASE ebook_sampah;
USE ebook_sampah;

-- ============================================
-- TABEL USERS (Pengguna)
-- ============================================
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    nama_lengkap VARCHAR(100),
    role ENUM('admin', 'warga') DEFAULT 'warga',
    rt_rw VARCHAR(10),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- ============================================
-- TABEL PROFIL DESA
-- ============================================
CREATE TABLE profil_desa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_desa VARCHAR(100),
    kecamatan VARCHAR(50),
    kabupaten VARCHAR(50),
    provinsi VARCHAR(50),
    jumlah_penduduk INT,
    jumlah_kk INT,
    jumlah_rw INT,
    jumlah_rt INT,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- ============================================
-- TABEL KONTEN E-BOOK (Bab & Sub Bab)
-- ============================================
CREATE TABLE konten_ebook (
    id INT AUTO_INCREMENT PRIMARY KEY,
    bab_number INT NOT NULL,
    judul_bab VARCHAR(255) NOT NULL,
    sub_judul VARCHAR(255),
    konten TEXT,
    urutan_sub INT DEFAULT 0,
    gambar VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- ============================================
-- TABEL JENIS SAMPAH
-- ============================================
CREATE TABLE jenis_sampah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_jenis VARCHAR(100) NOT NULL,
    kategori ENUM('organik', 'anorganik', 'residu', 'b3') NOT NULL,
    deskripsi TEXT,
    contoh VARCHAR(255),
    cara_pengolahan TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ============================================
-- TABEL TIPS 3R (Reduce, Reuse, Recycle)
-- ============================================
CREATE TABLE tips_3r (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kategori ENUM('reduce', 'reuse', 'recycle') NOT NULL,
    judul VARCHAR(255) NOT NULL,
    deskripsi TEXT,
    contoh_praktik VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ============================================
-- TABEL JADWAL PENGANGKUTAN SAMPAH
-- ============================================
CREATE TABLE jadwal_pengangkutan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    hari VARCHAR(20) NOT NULL,
    wilayah VARCHAR(100) NOT NULL,
    rt_rw VARCHAR(20),
    jam TIME,
    jenis_sampah VARCHAR(50),
    keterangan TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ============================================
-- TABEL BANK SAMPAH
-- ============================================
CREATE TABLE bank_sampah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    alamat TEXT,
    rt_rw VARCHAR(20),
    telepon VARCHAR(15),
    jam_operasi VARCHAR(100),
    jenis_sampah_diterima VARCHAR(255),
    harga_per_kg TEXT,
    status ENUM('aktif', 'nonaktif') DEFAULT 'aktif',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ============================================
-- TABEL PENGOLAHAN SAMPAH ORGANIK
-- ============================================
CREATE TABLE pengolahan_organik (
    id INT AUTO_INCREMENT PRIMARY KEY,
    metode ENUM('kompos', 'pupuk_cair', 'maggot_bsff') NOT NULL,
    judul VARCHAR(255) NOT NULL,
    bahan_dibutuhkan TEXT,
    langkah_kerja TEXT,
    manfaat TEXT,
    estimasi_waktu VARCHAR(50),
    gambar VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ============================================
-- TABEL KOMITMEN KELUARGA (Telah disesuaikan dengan Form Bab 6)
-- ============================================
CREATE TABLE komitmen_keluarga (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_keluarga VARCHAR(100) NOT NULL,
    rt_rw VARCHAR(50) NOT NULL,
    komitmen TEXT NOT NULL,
    nama_kk VARCHAR(100) NULL,
    alamat TEXT NULL,
    tanggal_daftar DATE NULL,
    tanggal_mulai DATE NULL,
    tanggal_selesai DATE NULL,
    durasi_hari INT DEFAULT 30,
    status ENUM('aktif', 'selesai', 'batal') DEFAULT 'aktif',
    catatan TEXT NULL,
    tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ============================================
-- TABEL PROGRAM KAMPUNG BERSIH
-- ============================================
CREATE TABLE program_kampung_bersih (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_program VARCHAR(255) NOT NULL,
    deskripsi TEXT,
    jadwal_rutin VARCHAR(100),
    lokasi VARCHAR(255),
    penanggung_jawab VARCHAR(100),
    status ENUM('aktif', 'nonaktif') DEFAULT 'aktif',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ============================================
-- TABEL PERATURAN DESA (PERDES) SAMPAH
-- ============================================
CREATE TABLE perdes_sampah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    nomor_peraturan VARCHAR(50),
    tahun INT,
    isi_peraturan TEXT,
    larangan TEXT,
    sanksi TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ============================================
-- TABEL ARTIKEL/JURNAL
-- ============================================
CREATE TABLE artikel (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    penulis VARCHAR(100),
    kategori VARCHAR(50),
    konten TEXT,
    tanggal_publikasi DATE,
    status ENUM('draft', 'published') DEFAULT 'draft',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ============================================
-- INSERT DATA DEFAULT
-- ============================================

-- 1. User Admin
INSERT INTO users (username, password, nama_lengkap, role) VALUES
('admin', MD5('admin123'), 'Administrator Desa', 'admin'),
('fauzan', MD5('fauzan2026'), 'Fauzan Rizky Alifian', 'admin');

-- 2. Profil Desa Panambangan
INSERT INTO profil_desa (
    nama_desa, kecamatan, kabupaten, provinsi,
    jumlah_penduduk, jumlah_kk, jumlah_rw, jumlah_rt
) VALUES (
    'Panambangan', 'Sedong', 'Cirebon', 'Jawa Barat',
    4171, 1358, 6, 19
);

-- (Sisa Insert Data Konten, Jenis Sampah, dll tetap sama dan aman dieksekusi)

-- 9. Jenis Sampah
INSERT INTO jenis_sampah (nama_jenis, kategori, deskripsi, contoh, cara_pengolahan) VALUES
('Sisa Makanan', 'organik', 'Sisa-sisa makanan dari dapur', 'Nasi, sayur, buah, tulang', 'Kompos atau maggot BSF'),
('Daun dan Ranting', 'organik', 'Sisa tanaman dari kebun', 'Daun kering, ranting kecil', 'Kompos atau pembakaran terkontrol'),
('Plastik', 'anorganik', 'Kemasan plastik berbagai jenis', 'Botol, kantong, wadah', 'Cuci, keringkan, setor bank sampah'),
('Kertas dan Kardus', 'anorganik', 'Kertas bekas pakai', 'Koran, kardus, buku', 'Kumpulkan, ikat, setor bank sampah'),
('Kaleng dan Logam', 'anorganik', 'Kemasan logam', 'Kaleng minuman, besi bekas', 'Kumpulkan dan setor bank sampah'),
('Pampers/Popok', 'residu', 'Popok sekali pakai', 'Popok bayi, popok dewasa', 'Bungkus rapat, buang ke TPS'),
('Pembalut', 'residu', 'Pembalut wanita bekas', 'Pembalut berbagai merk', 'Bungkus rapat, buang ke TPS'),
('Baterai Bekas', 'b3', 'Baterai rumah tangga', 'Baterai AA, AAA, baterai jam', 'Kumpulkan, setor ke titik pengumpulan B3'),
('Obat Kadaluarsa', 'b3', 'Obat-obatan yang sudah tidak digunakan', 'Tablet, sirup, salep', 'Kembalikan ke puskesmas/apotek');

-- 10. Tips 3R
INSERT INTO tips_3r (kategori, judul, deskripsi, contoh_praktik) VALUES
('reduce', 'Bawa Tas Belanja Sendiri', 'Kurangi penggunaan kantong plastik dengan membawa tas kain atau tas yang bisa dipakai berulang kali', 'Tas kain, tas jaring, keranjang belanja'),
('reduce', 'Gunakan Botol Minum Isi Ulang', 'Hindari membeli air kemasan berulang kali dengan membawa tumblr', 'Tumbler, botol minum pribadi'),
('reduce', 'Beli Produk Curah', 'Beli kebutuhan dalam jumlah besar untuk mengurangi kemasan', 'Beras, gula, minyak dalam kemasan besar'),
('reuse', 'Botol Plastik Jadi Pot', 'Gunakan botol plastik bekas sebagai pot tanaman', 'Pot gantung, vertikultur'),
('reuse', 'Kardus Jadi Organizer', 'Ubah kardus bekas menjadi tempat penyimpanan', 'Organizer lemari, kotak mainan'),
('recycle', 'Kompos dari Sampah Dapur', 'Olah sisa makanan menjadi pupuk kompos', 'Kompos sederhana, takakura'),
('recycle', 'Kerajinan dari Sampah', 'Buat kerajinan bernilai jual dari sampah', 'Tas dari kemasan, hiasan dari plastik');

-- ============================================
-- VIEW UNTUK STATISTIK
-- ============================================

-- View Statistik Desa
CREATE VIEW v_statistik_desa AS
SELECT 
    pd.nama_desa,
    pd.kecamatan,
    pd.jumlah_penduduk,
    pd.jumlah_kk,
    COUNT(DISTINCT kk.id) as jumlah_komitmen_aktif,
    COUNT(DISTINCT bs.id) as jumlah_bank_sampah
FROM profil_desa pd
LEFT JOIN komitmen_keluarga kk ON kk.status = 'aktif'
LEFT JOIN bank_sampah bs ON bs.status = 'aktif'
GROUP BY pd.id;

-- View Konten per Bab
CREATE VIEW v_konten_per_bab AS
SELECT 
    bab_number,
    judul_bab,
    COUNT(*) as jumlah_sub_bab
FROM konten_ebook
GROUP BY bab_number, judul_bab
ORDER BY bab_number;

-- ============================================
-- INDEX UNTUK OPTIMASI
-- ============================================
CREATE INDEX idx_username ON users(username);
CREATE INDEX idx_kategori_sampah ON jenis_sampah(kategori);
CREATE INDEX idx_konten_bab ON konten_ebook(bab_number);
CREATE INDEX idx_tips_kategori ON tips_3r(kategori);
CREATE INDEX idx_komitmen_status ON komitmen_keluarga(status);