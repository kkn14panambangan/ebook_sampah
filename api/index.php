<?php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($path === '/' || $path === '') {
    $path = '/index.php';
}

$file = realpath(__DIR__ . '/..' . $path);
$rootDir = realpath(__DIR__ . '/..');

if ($file && strpos($file, $rootDir) === 0 && preg_match('/\.php$/', $file) && file_exists($file)) {
    chdir(dirname($file));
    require $file;
} else {
    http_response_code(404);
    echo "404 Not Found";
}
