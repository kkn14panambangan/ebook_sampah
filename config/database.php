<?php
// Konfigurasi Database Supabase (PostgreSQL)
// Ganti nilai di bawah ini sesuai dengan Project Settings > Database di Supabase Anda

$db_host = 'aws-0-ap-south-1.pooler.supabase.com'; // Region Mumbai (dari screenshot)
$db_port = '6543'; 
$db_name = 'postgres';
$db_user = 'postgres.dkkujbxddsyroqqkcthv'; // Project Ref Anda
$db_pass = 'ebook-sampah'; // Ganti dengan password yang Anda buat tadi

try {
    $dsn = "pgsql:host=$db_host;port=$db_port;dbname=$db_name;user=$db_user;password=$db_pass";
    $conn = new PDO($dsn);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $conn = null;
}
?>