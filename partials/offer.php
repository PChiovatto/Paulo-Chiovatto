<section>
  <div class="container">
    <div class="section-head section-head--center" data-reveal>
      <span class="tag">Formato</span>
      <h2>Híbrido — no seu ritmo e ao vivo</h2>
    </div>

    <div class="format">
      <?php foreach ($FORMAT as $i => $f): ?>
        <div class="fmt-card" data-reveal data-reveal-delay="<?= $i * 80 ?>">
          <div class="fmt-icon" aria-hidden="true"><?= $f['icon'] ?></div>
          <h3><?= e($f['title']) ?></h3>
          <p><?= e($f['text']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section--alt section--tight">
  <div class="container">
    <div class="section-head section-head--center" data-reveal>
      <span class="tag">Vai junto</span>
      <h2>O que você leva além das aulas</h2>
      <p class="lead">
        Material que você usa na segunda-feira, não depois de terminar o curso.
      </p>
    </div>

    <div class="bonuses">
      <?php foreach ($BONUSES as $i => $b): ?>
        <div class="bonus" data-reveal data-reveal-delay="<?= min($i * 60, 300) ?>">
          <span class="bonus-check" aria-hidden="true">✓</span>
          <div>
            <h3><?= e($b['title']) ?></h3>
            <p><?= e($b['text']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
