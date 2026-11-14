<?php
/**
 * Detect the current host and set $url accordingly.
 * - localhost / 127.0.0.1 / *.local / *.test  →  http://localhost/diccai_static/
 * - anything else (production)                →  https://www.diccai.com/
 */

$host = $_SERVER['HTTP_HOST'] ?? '';

// Strip port for comparison (e.g. localhost:8080 → localhost)
$hostname = strtolower(preg_replace('/:\d+$/', '', $host));

// Treat these as "local"
$isLocal =
    $hostname === 'localhost' ||
    $hostname === '127.0.0.1' ||
    $hostname === '::1' ||
    preg_match('/\.(local|test)$/', $hostname);

if ($isLocal) {
    $url = 'http://localhost/diccai_static/';
} else {
    $url = 'https://www.diccai.com/';
}
?>