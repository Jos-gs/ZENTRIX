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

<section class="section section-alt" id="equipo">
  <div class="container">
    <p class="section-label">.04</p>
    <h2 class="section-title">Nuestro Equipo</h2>
    <p class="section-lead">Conoce a los profesionales detrás de ZENTRIX.</p>
    <div class="team-grid">
      <article class="team-card glass-card">
        <div class="team-avatar">
          <img src="/assets/jose.jpeg" alt="Jose Gonzales Siancas">
        </div>
        <div class="team-info">
          <h3 class="team-name">Jose Gonzales Siancas</h3>
          <p class="team-role">Fundador & Desarrollador</p>
        </div>
        <div class="team-contact">
          <a href="mailto:gonsianjoss@gmail.com" class="team-email">gonsianjoss@gmail.com</a>
        </div>
        <div class="team-social">
          <a href="https://github.com/Jos-gs" target="_blank" rel="noopener noreferrer" class="social-link"
            aria-label="GitHub de Jose">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
            </svg>
          </a>
        </div>
      </article>
      <article class="team-card glass-card">
        <div class="team-avatar">
          <img src="/assets/carlos.jpeg" alt="Carlos Moran Mauricio">
        </div>
        <div class="team-info">
          <h3 class="team-name">Carlos Moran Mauricio</h3>
          <p class="team-role">Co-Fundador & Desarrollador</p>
        </div>
        <div class="team-contact">
          <a href="mailto:carlosj.moranm2004@gmail.com" class="team-email">carlosj.moranm2004@gmail.com</a>
        </div>
        <div class="team-social">
          <a href="https://github.com/letalandroid" target="_blank" rel="noopener noreferrer" class="social-link"
            aria-label="GitHub de Carlos">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
            </svg>
          </a>
          <a href="https://www.linkedin.com/in/carlosjmoranmauricio/" target="_blank" rel="noopener noreferrer"
            class="social-link" aria-label="LinkedIn de Carlos">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
            </svg>
          </a>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="section section-contact" id="contacto">
  <div class="container">
    <p class="section-label">.05</p>
    <h2 class="section-title">Contacto</h2>
    <p class="section-lead">¿Tienes un proyecto en mente? Contáctanos y empecemos a trabajar juntos.</p>
    <div class="contact-info">
      <div class="contact-item glass-card">
        <p class="contact-label">Teléfono</p>
        <p class="contact-value">
          <a href="tel:+51918698741" class="contact-phone">+51 918 698 741</a>
        </p>
      </div>
    </div>
  </div>
</section>

<section class="section section-cta-block" id="cta">
  <div class="container">
    <p class="section-label">.06</p>
    <h2 class="section-title">¿Listo para empezar?</h2>
    <p class="section-lead">Suscríbete y tendrás dominio, servidor y soporte desde el primer día.</p>
    <div class="hero-ctas">
      <a href="#precios" class="btn btn-primary btn-lg">Ver planes</a>
      <a href="#" class="btn btn-glass btn-lg">Hablar con un especialista</a>
    </div>
  </div>
</section>