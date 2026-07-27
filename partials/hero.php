<section class="hero" id="topo">
  <div class="hero-aurora" aria-hidden="true"></div>
  <div class="hero-grid" aria-hidden="true"></div>

  <div class="container hero-inner">
    <div data-reveal>
      <span class="badge">
        <span class="badge-dot" aria-hidden="true"></span>
        Turma <?= e(COURSE_START_LABEL) ?>
      </span>

      <h1>TV que <em>Vende</em></h1>
      <p class="hero-method"><?= e(COURSE_SUBTITLE) ?></p>
      <p class="hero-sub"><?= e(COURSE_TAGLINE) ?></p>

      <p class="hero-promise">
        64% da população digital brasileira já assiste CTV. Quatro horas por dia,
        com duas pessoas na sala. A maioria das marcas ainda não chegou lá —
        mas você vai chegar antes delas.
      </p>

      <div class="hero-actions">
        <a href="#preco" class="btn btn--primary btn--lg">Quero me inscrever agora</a>
        <a href="#diagnostico" class="btn btn--ghost">Descobrir meu nível</a>
      </div>

      <div class="hero-trust">
        <span><?= e(TOTAL_LESSONS) ?> aulas · <?= e(TOTAL_HOURS) ?></span>
        <span>Encontros ao vivo</span>
        <span>Garantia de 7 dias</span>
        <span>Certificado incluso</span>
      </div>
    </div>

    <div data-reveal data-reveal-delay="140">
      <div class="tv">
        <div class="tv-body">
          <div class="tv-screen">
            <div class="tv-shine" aria-hidden="true"></div>
            <div class="tv-ui">
              <span class="tv-chip">Anúncio</span>
              <div class="tv-copy">
                <strong>A sua marca, na sala dela.</strong>
                <span>Tela grande · som alto · sem pular</span>
                <div class="tv-bar" aria-hidden="true"><i></i></div>
              </div>
            </div>
          </div>
        </div>
        <div class="tv-stand" aria-hidden="true"></div>
        <p class="tv-caption">É esse o lugar que você vai aprender a comprar.</p>
      </div>
    </div>
  </div>
</section>

<div class="stats" id="conteudo">
  <div class="container">
    <div class="stats-grid">
      <?php foreach ($STATS as $i => $s): ?>
        <div class="stat" data-reveal data-reveal-delay="<?= $i * 80 ?>">
          <div class="stat-value"
               data-count="<?= e((string) $s['value']) ?>"
               data-decimals="<?= e((string) $s['decimals']) ?>"
               data-prefix="<?= e($s['prefix']) ?>"
               data-suffix="<?= e($s['suffix']) ?>">
            <?= e($s['prefix'] . number_format($s['value'], $s['decimals'], ',', '.') . $s['suffix']) ?>
          </div>
          <p class="stat-label"><?= e($s['label']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
    <p class="stats-note">Dados de mercado de consumo de CTV no Brasil.</p>
  </div>
</div>
