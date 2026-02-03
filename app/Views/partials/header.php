<?php
/**
 * Barra de navegación lateral izquierda — ZENTRIX
 */
$config = $config ?? [];
?>
<aside class="sidebar" id="sidebar" role="navigation" aria-label="Navegación principal">
  <div class="sidebar-inner">
    <a href="/" class="sidebar-logo" aria-label="ZENTRIX inicio">
      <span class="logo-mark">Z</span>
      <span class="logo-text">ZENTRIX</span>
    </a>
    <nav class="sidebar-nav">
      <a href="/" class="nav-item<?= ($pageId ?? '') === 'home' ? ' active' : '' ?>">
        <span class="nav-icon" aria-hidden="true">⌂</span>
        <span class="nav-label">Inicio</span>
      </a>
      <a href="#precios" class="nav-item">
        <span class="nav-icon" aria-hidden="true">◇</span>
        <span class="nav-label">Precios</span>
      </a>
      <a href="#propuesta" class="nav-item">
        <span class="nav-icon" aria-hidden="true">◆</span>
        <span class="nav-label">Qué incluye</span>
      </a>
      <a href="#cta" class="nav-item">
        <span class="nav-icon" aria-hidden="true">▸</span>
        <span class="nav-label">Contacto</span>
      </a>
    </nav>
    <div class="sidebar-cta">
      <a href="#precios" class="btn btn-primary btn-block">Suscribirme</a>
    </div>
    <div class="sidebar-scroll-hint" aria-hidden="true">
      <span>SCROLL</span>
      <span class="scroll-line"></span>
    </div>
  </div>
  <button type="button" class="sidebar-toggle" id="sidebar-toggle" aria-label="Abrir o cerrar menú" aria-expanded="false">
    <span></span><span></span><span></span>
  </button>
</aside>
<div class="sidebar-overlay" id="sidebar-overlay" aria-hidden="true"></div>
