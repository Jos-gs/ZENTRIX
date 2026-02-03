<?php
/**
 * Redirección desde raíz: delega al front controller en public/
 * Así funciona tanto "php -S localhost:3000" (desde raíz) como "php -S localhost:3000 -t public"
 */
require __DIR__ . '/public/index.php';
