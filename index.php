<?php
ob_start();
session_start();

$url = $_SERVER['REQUEST_URI'];

// Handle query parameters separately
$current_url = explode('?', $url);
$url = $current_url[0];

// Remove trailing slashes from the URL
$url = rtrim($url, '/');

if (strstr($url, addslashes('/package/'), false)) {
    require_once(__DIR__ . DIRECTORY_SEPARATOR . 'package' . DIRECTORY_SEPARATOR . 'index.php');
    exit();
}

$dir = __DIR__ . DIRECTORY_SEPARATOR . 'views';

$files = array_slice(scandir($dir), 2);

$fileWithOutExt = array();

foreach ($files as $file) {
    // Remove the file extension and store the path as '/filename/'
    $without_extension = '/' . pathinfo($file, PATHINFO_FILENAME) . '/';
    array_push($fileWithOutExt, rtrim($without_extension, '/')); // Remove trailing slash
}

// Home page handling
if ($url == "" || $url == "/") {
    require $dir . DIRECTORY_SEPARATOR . 'home.php';
    die();
}

// Check if the URL matches any of the files without extensions
if (in_array($url, $fileWithOutExt)) {
    $urlWithoutSlashes = str_replace('/', "", $url);
    require $dir . DIRECTORY_SEPARATOR . $urlWithoutSlashes . '.php';
} else {
    require $dir . DIRECTORY_SEPARATOR . '404.php';  // Correct file path for 404 page
}
?>
