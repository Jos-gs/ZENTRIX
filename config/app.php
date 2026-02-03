<?php
/**
 * Configuración general de la aplicación ZENTRIX
 */

return [
    'name'       => 'ZENTRIX',
    'env'        => getenv('ZENTRIX_ENV') ?: 'production',
    'debug'      => (bool) (getenv('ZENTRIX_DEBUG') ?: false),
    'url'        => getenv('ZENTRIX_URL') ?: 'http://localhost:8000',
    'timezone'   => 'America/Mexico_City',

    // Admin: email que tiene acceso al panel /admin
    'admin_emails' => [
        'admin@zentrix.com',
    ],

    // WhatsApp (placeholder para CTA)
    'whatsapp' => '+521234567890',

    // Sesión
    'session_name' => 'ZENTRIX_SESSION',
    'session_lifetime' => 7200, // 2 horas
];
