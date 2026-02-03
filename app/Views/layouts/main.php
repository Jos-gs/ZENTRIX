<?php
/**
 * Layout principal ZENTRIX — Futurista, tema oscuro, nav izquierda
 */
$title = $title ?? ($config['name'] ?? 'ZENTRIX');
$pageId = $pageId ?? '';
$assetsDir = (defined('ZENTRIX_ROOT') ? ZENTRIX_ROOT : dirname(__DIR__, 3)) . '/public/assets';
$cssFile = $assetsDir . '/styles.css';
$jsFile  = $assetsDir . '/app.js';
$cssInline = is_file($cssFile) ? str_replace('</style>', '<\/style>', file_get_contents($cssFile)) : '';
$jsInline  = is_file($jsFile)  ? file_get_contents($jsFile) : '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= \App\Core\Security::e($title) ?> — <?= \App\Core\Security::e($config['name'] ?? 'ZENTRIX') ?></title>
  <meta name="description" content="ZENTRIX: Creación de páginas, soporte, servidor y dominio incluidos.">
  <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ctext y='.9em' font-size='90' font-weight='bold' fill='%23fff'%3EZ%3C/text%3E%3C/svg%3E" type="image/svg+xml">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700&family=Exo+2:wght@300;400;500;600&display=swap" rel="stylesheet">
  <?php if ($cssInline !== ''): ?><style><?= $cssInline ?></style><?php endif; ?>
</head>
<body class="page-<?= \App\Core\Security::e($pageId) ?>">
  <div class="app-wrap">
    <?php \App\Core\View::partial('header', get_defined_vars()); ?>
    <main class="main-content">
      <?php if (isset($content)) { echo $content; } ?>
    </main>
  </div>
  <?php \App\Core\View::partial('footer', get_defined_vars()); ?>
  <?php if ($jsInline !== ''): ?><script><?= $jsInline ?></script><?php endif; ?>
</body>
</html>
