<?php
/**
 * Home ZENTRIX — Hero + Precios + CTA (diseño futurista)
 */
$title = 'Inicio';
$pageId = 'home';
?>
<section class="hero" id="hero">
  <div class="hero-bg"></div>
  <div class="container hero-grid">
    <div class="hero-content">
      <p class="hero-label">.01</p>
      <h1 class="hero-headline">Creación y soporte web por suscripción.</h1>
      <p class="hero-subheadline">Dominio + servidor incluidos · Seguridad · Automatización · Soporte dedicado</p>
      <div class="hero-ctas">
        <a href="#precios" class="btn btn-primary btn-lg">Ver planes</a>
        <a href="#cta" class="btn btn-glass btn-lg">Cotizar</a>
      </div>
    </div>
    <aside class="hero-card glass-card">
      <ul class="hero-bullets">
        <li><span class="hero-bullet-icon" aria-hidden="true">✓</span> Dominio + servidor incluidos</li>
        <li><span class="hero-bullet-icon" aria-hidden="true">✓</span> Creación de página web</li>
        <li><span class="hero-bullet-icon" aria-hidden="true">✓</span> Soporte técnico</li>
        <li><span class="hero-bullet-icon" aria-hidden="true">✓</span> Precio fijo mensual</li>
      </ul>
    </aside>
  </div>
</section>

<section class="section section-pricing" id="precios">
  <div class="container">
    <p class="section-label">.02</p>
    <h2 class="section-title">Precios</h2>
    <p class="section-lead">Elige tu plan. Facturación mensual o anual.</p>
    <div class="pricing-grid">
      <article class="pricing-card glass-card">
        <h3 class="pricing-name">Starter</h3>
        <p class="pricing-price">$49<span class="pricing-period">/mes</span></p>
        <ul class="pricing-features">
          <li>Dominio + hosting incluido</li>
          <li>Landing o página sencilla</li>
          <li>Soporte por email</li>
          <li>1 sitio web</li>
        </ul>
        <a href="#cta" class="btn btn-glass btn-block">Comenzar</a>
      </article>
      <article class="pricing-card glass-card pricing-card-featured">
        <span class="pricing-badge">Recomendado</span>
        <h3 class="pricing-name">Pro</h3>
        <p class="pricing-price">$99<span class="pricing-period">/mes</span></p>
        <ul class="pricing-features">
          <li>Todo en Starter</li>
          <li>Web multipágina</li>
          <li>Soporte prioritario</li>
          <li>Hasta 3 sitios</li>
          <li>SSL y seguridad</li>
        </ul>
        <a href="#cta" class="btn btn-primary btn-block">Comenzar</a>
      </article>
      <article class="pricing-card glass-card">
        <h3 class="pricing-name">Business</h3>
        <p class="pricing-price">$199<span class="pricing-period">/mes</span></p>
        <ul class="pricing-features">
          <li>Todo en Pro</li>
          <li>Web a medida</li>
          <li>Soporte 24/7</li>
          <li>Sitios ilimitados</li>
          <li>Automatizaciones n8n</li>
        </ul>
        <a href="#cta" class="btn btn-glass btn-block">Comenzar</a>
      </article>
    </div>
  </div>
</section>

<section class="section section-value" id="propuesta">
  <div class="container">
    <p class="section-label">.03</p>
    <h2 class="section-title">¿Qué incluye el plan?</h2>
    <p class="section-lead">Cada suscripción incluye <strong>dominio + servidor</strong>.</p>
    <ul class="value-list">
      <li><strong>Dominio:</strong> nombre de tu sitio incluido (ej. tunegocio.com).</li>
      <li><strong>Servidor:</strong> hosting estable y seguro.</li>
      <li><strong>Página web:</strong> desde landing hasta web a medida.</li>
      <li><strong>Soporte:</strong> atención técnica por ticket o canal acordado.</li>
    </ul>
    <p class="section-cta"><a href="#precios" class="btn btn-primary">Ver planes</a></p>
  </div>
</section>

<section class="section section-cta-block" id="cta">
  <div class="container">
    <h2 class="section-title">¿Listo para empezar?</h2>
    <p class="section-lead">Suscríbete y tendrás dominio, servidor y soporte desde el primer día.</p>
    <div class="hero-ctas">
      <a href="#precios" class="btn btn-primary btn-lg">Ver planes</a>
      <a href="#" class="btn btn-glass btn-lg">Hablar con un especialista</a>
    </div>
  </div>
</section>
