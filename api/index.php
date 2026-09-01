<?php
$requestUri = $_SERVER['REQUEST_URI'];
$path = parse_url($requestUri, PHP_URL_PATH);

if ($path === '/' || $path === '/api/index.php' || $path === '') {
    $path = '/index.php';
}

$file = realpath(__DIR__ . '/..' . $path);
$rootDir = realpath(__DIR__ . '/..');

if ($file && strpos($file, $rootDir) === 0 && preg_match('/\.php$/', $file) && file_exists($file)) {
    // Pindah ke folder asli file agar include relatif (../) tetap berfungsi
    chdir(dirname($file));
    require $file;
} else {
    http_response_code(404);
    echo "404 Not Found: " . htmlspecialchars($path);
}
