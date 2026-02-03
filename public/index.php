<?php
/**
 * ZENTRIX — Solo visual. Muestra la vista home.
 */

declare(strict_types=1);

// Chrome DevTools pide esto; responder vacío para no llenar el log de 404
$uri = $_SERVER['REQUEST_URI'] ?? '';
if (strpos($uri, '/.well-known/appspecific/') === 0) {
    http_response_code(204);
    return;
}

require dirname(__DIR__) . '/bootstrap.php';

$configApp = require dirname(__DIR__) . '/config/app.php';
\App\Core\View::render('home.index', ['config' => $configApp]);
