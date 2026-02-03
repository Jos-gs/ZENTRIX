<?php
/**
 * Router para servidor PHP integrado: redirige todas las peticiones a index.php
 * Uso: php -S localhost:8000 -t public public/router.php
 */

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
if ($uri !== '/' && file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
    return false; // servir archivo estático
}
$_GET['url'] = trim($uri, '/') ?: '';
require __DIR__ . '/index.php';
