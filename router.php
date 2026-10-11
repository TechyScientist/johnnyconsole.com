<?php
// Get the requested URL path
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// If the file exists exactly as requested (like images or CSS), load it
if ($path !== '/' && file_exists(__DIR__ . $path)) {
    return false; // Tells the server to serve the file as-is
}

// Check if appending .php points to a real file (e.g., /education -> education.php)
$phpFile = __DIR__ . $path . '.php';
if (file_exists($phpFile)) {
    include $phpFile;
    exit;
}

// Fallback to index.php or your 404 page
if (file_exists(__DIR__ . '/index.php')) {
    include __DIR__ . '/index.php';
    exit;
}

return false;
