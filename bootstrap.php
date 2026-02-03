<?php
/**
 * Bootstrap mínimo: solo lo necesario para mostrar la vista.
 */

declare(strict_types=1);

if (!defined('ZENTRIX_ROOT')) {
    define('ZENTRIX_ROOT', rtrim(str_replace('\\', '/', __DIR__), '/'));
}

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once __DIR__ . '/vendor/autoload.php';

\App\Core\Security::setSecurityHeaders();
\App\Core\View::setBasePath(__DIR__ . '/app/Views');
