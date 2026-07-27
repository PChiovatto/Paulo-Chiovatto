<section id="conteudo-curso">
  <div class="container">
    <div class="section-head" data-reveal>
      <span class="tag">O que você vai aprender</span>
      <h2>Do zero ao avançado em CTV Ads</h2>
      <p class="lead">
        Um método completo com estratégia, dado e execução — do planejamento ao
        resultado do cliente. Clique em qualquer módulo para ver as aulas.
      </p>
    </div>

    <div class="curriculum-bar" data-reveal>
      <span><strong style="color:var(--ink)"><?= count($MODULES) ?></strong> módulos</span>
      <span>·</span>
      <span><strong style="color:var(--ink)"><?= e(TOTAL_LESSONS) ?></strong> aulas</span>
      <span>·</span>
      <span><strong style="color:var(--ink)"><?= e(TOTAL_HOURS) ?></strong> de conteúdo</span>
      <span class="spacer"></span>
      <button type="button" class="link-btn" id="expand-all" data-state="closed">Expandir todos</button>
    </div>

    <div class="modules">
      <?php foreach ($MODULES as $i => $m): $n = $i + 1; ?>
        <article class="module" data-reveal data-reveal-delay="<?= min($i * 50, 250) ?>">
          <button type="button" class="module-head"
                  aria-expanded="false" aria-controls="modulo-<?= $n ?>">
            <span class="module-num" aria-hidden="true"><?= $n ?></span>
            <span class="module-text">
              <span class="module-title"><?= e($m['title']) ?></span>
              <span class="module-summary"><?= e($m['summary']) ?></span>
            </span>
            <span class="module-meta">
              <span class="duration"><?= e($m['duration']) ?></span>
              <span class="chevron" aria-hidden="true">▼</span>
            </span>
          </button>

          <div class="module-body" id="modulo-<?= $n ?>">
            <div>
              <ul class="lessons">
                <?php foreach ($m['lessons'] as $lesson): ?>
                  <li><?= e($lesson) ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section--alt section--tight">
  <div class="container">
    <div class="section-head section-head--center" data-reveal>
      <span class="tag">Glossário interativo</span>
      <h2>Pare de travar nas siglas</h2>
      <p class="lead">
        Clique em qualquer card para ver o significado. No fim do curso, isso aqui
        é vocabulário de reunião — não conteúdo de estudo.
      </p>
    </div>

    <div class="glossary">
      <?php foreach ($GLOSSARY as $i => $g): ?>
        <button type="button" class="gloss" aria-pressed="false"
                data-reveal data-reveal-delay="<?= min($i * 40, 240) ?>">
          <span class="gloss-inner">
            <span class="gloss-face gloss-front">
              <span class="gloss-term"><?= e($g['term']) ?></span>
              <span class="gloss-full"><?= e($g['full']) ?></span>
              <span class="gloss-hint">clique para ver</span>
            </span>
            <span class="gloss-face gloss-back"><?= e($g['def']) ?></span>
          </span>
        </button>
      <?php endforeach; ?>
    </div>
  </div>
</section>
