<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Book Panduan Sampah - Desa Panambangan</title>
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <?php 
        // Deteksi lingkungan untuk URL
        $host = $_SERVER['HTTP_HOST'];
        if (strpos($host, 'localhost') !== false) {
            $base_url = "http://localhost/ebook_sampah";
        } else {
            $base_url = "https://" . $host;
        }
    ?>
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/style.css">
</head>
<body>