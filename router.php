<?php
/**
 * Router para servidor PHP integrado ejecutado desde la raíz del repo.
 *
 * Permite:
 * - `php -S localhost:3000 router.php` (docroot = raíz)
 * - Servir estáticos desde `public/` (por ejemplo `/assets/*`)
 * - Enrutar el resto a `public/index.php`
 */

declare(strict_types=1);

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/');
$uri = $uri === '' ? '/' : $uri;

// Servir archivos estáticos ubicados dentro de public/
if ($uri !== '/') {
    $publicFile = __DIR__ . '/public' . $uri;
    if (is_file($publicFile)) {
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mime = $finfo->file($publicFile) ?: 'application/octet-stream';
        header('Content-Type: ' . $mime);
        header('Content-Length: ' . (string) filesize($publicFile));
        readfile($publicFile);
        return;
    }
}

$_GET['url'] = trim($uri, '/') ?: '';
require __DIR__ . '/public/index.php';

