<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container">
    <a class="navbar-brand text-truncate" href="<?php echo $base_url; ?>/index.php" style="max-width: 70%;">🌱 E-Book Panambangan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>/index.php">Beranda</a></li>
        
        <!-- Menu Tanya Asisten -->
        <li class="nav-item">
            <a class="nav-link text-success fw-bold" href="<?php echo $base_url; ?>/pages/asisten.php">🤖 Tanya Asisten</a>
        </li>

        <!-- Menu Baru: Showcase Kebun Mini -->
        <li class="nav-item">
            <a class="nav-link text-primary fw-bold" href="<?php echo $base_url; ?>/pages/kebun_mini.php">📍 Kebun Mini</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
            Daftar Bab
          </a>
          <ul class="dropdown-menu border-0 shadow-sm">
            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/pages/bab1.php">Bab 1: Kenalan dengan Sampah</a></li>
            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/pages/bab2.php">Bab 2: Jurus Sakti 3R</a></li>
            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/pages/bab3.php">Bab 3: Panduan Memilah</a></li>
            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/pages/bab4.php">Bab 4: Sampah Organik</a></li>
            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/pages/bab5.php">Bab 5: Sampah Anorganik</a></li>
            <li><a class="dropdown-item" href="<?php echo $base_url; ?>/pages/bab6.php">Bab 6: Aksi Nyata</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-success fw-bold" href="<?php echo $base_url; ?>/pages/data_komitmen.php">📋 Lihat Data Komitmen</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>