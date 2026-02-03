<?php
declare(strict_types=1);

namespace App\Core;

/**
 * Helpers de seguridad: CSRF, escape, headers
 */
class Security
{
    private const CSRF_KEY = 'csrf_token';

    public static function setSecurityHeaders(): void
    {
        header('X-Frame-Options: SAMEORIGIN');
        header('X-Content-Type-Options: nosniff');
        header('X-XSS-Protection: 1; mode=block');
        header('Referrer-Policy: strict-origin-when-cross-origin');
    }

    public static function startSession(array $config): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_name($config['session_name'] ?? 'ZENTRIX_SESSION');
            session_set_cookie_params([
                'lifetime' => $config['session_lifetime'] ?? 7200,
                'path'     => '/',
                'secure'   => isset($_SERVER['HTTPS']),
                'httponly' => true,
                'samesite' => 'Lax',
            ]);
            session_start();
        }
    }

    public static function csrfToken(): string
    {
        if (empty($_SESSION[self::CSRF_KEY])) {
            $_SESSION[self::CSRF_KEY] = bin2hex(random_bytes(32));
        }
        return $_SESSION[self::CSRF_KEY];
    }

    public static function csrfField(): string
    {
        $token = self::csrfToken();
        return '<input type="hidden" name="csrf_token" value="' . self::e($token) . '">';
    }

    public static function validateCsrf(): bool
    {
        $token = $_POST['csrf_token'] ?? '';
        return $token !== '' && hash_equals($_SESSION[self::CSRF_KEY] ?? '', $token);
    }

    /** Escape para HTML (evitar XSS) */
    public static function e(?string $value): string
    {
        return $value === null ? '' : htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}
