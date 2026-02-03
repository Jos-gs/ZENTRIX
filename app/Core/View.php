<?php
declare(strict_types=1);

namespace App\Core;

/**
 * Motor de vistas: incluye archivos PHP con datos en scope
 */
class View
{
    private static string $basePath = '';

    public static function setBasePath(string $path): void
    {
        self::$basePath = rtrim($path, DIRECTORY_SEPARATOR);
    }

    public static function render(string $template, array $data = [], ?string $layout = 'layouts.main'): void
    {
        extract($data, EXTR_SKIP);
        $file = self::$basePath . DIRECTORY_SEPARATOR . str_replace('.', DIRECTORY_SEPARATOR, $template) . '.php';
        if (!is_file($file)) {
            throw new \RuntimeException("Vista no encontrada: {$template}");
        }
        ob_start();
        require $file;
        $content = ob_get_clean();
        if ($layout !== null) {
            $layoutFile = self::$basePath . DIRECTORY_SEPARATOR . str_replace('.', DIRECTORY_SEPARATOR, $layout) . '.php';
            if (is_file($layoutFile)) {
                extract($data, EXTR_SKIP);
                require $layoutFile;
                return;
            }
        }
        echo $content;
    }

    public static function partial(string $name, array $data = []): void
    {
        self::render('partials.' . $name, $data, null);
    }
}
