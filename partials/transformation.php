<section>
  <div class="container">
    <div class="section-head section-head--center" data-reveal>
      <span class="tag">A transformação</span>
      <h2>Onde você está hoje, onde você sai</h2>
      <p class="lead">
        Não é sobre saber mais teoria. É sobre o que você consegue fazer sozinho
        na segunda-feira depois da última aula.
      </p>
    </div>

    <div class="transform" data-reveal>
      <div class="transform-head transform-head--before">
        <span class="transform-dot transform-dot--before" aria-hidden="true"></span>
        Hoje
      </div>
      <div class="transform-head transform-head--after">
        <span class="transform-dot transform-dot--after" aria-hidden="true"></span>
        Depois do curso
      </div>

      <?php foreach ($TRANSFORMATION as $t): ?>
        <div class="transform-cell transform-cell--before">
          <span class="transform-mark" aria-hidden="true">✗</span>
          <?= e($t['before']) ?>
        </div>
        <div class="transform-cell transform-cell--after">
          <span class="transform-mark" aria-hidden="true">✓</span>
          <?= e($t['after']) ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
