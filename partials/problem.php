<section class="pain">
  <div class="container">
    <div class="section-head" data-reveal>
      <span class="tag">O problema</span>
      <h2>Você ainda está de fora do canal com mais atenção do Brasil?</h2>
      <p class="lead">
        CTV não é mais tendência — é o presente. E quem não souber operar esse
        canal em <?= e(COURSE_YEAR) ?> vai perder espaço para quem souber.
      </p>
    </div>

    <div class="pain-grid">
      <?php foreach ($PAINS as $i => $pain): ?>
        <div class="pain-item" data-reveal data-reveal-delay="<?= $i * 60 ?>">
          <span class="x" aria-hidden="true">✗</span>
          <span><?= e($pain) ?></span>
        </div>
      <?php endforeach; ?>
    </div>

    <p class="pain-turn" data-reveal>
      Nenhum desses problemas é de talento. São de <strong>método</strong> —
      e método se aprende em algumas semanas.
    </p>
  </div>
</section>

<section class="section--alt" id="metodo">
  <div class="container">
    <div class="section-head section-head--center" data-reveal>
      <span class="tag">O método</span>
      <h2>Três camadas, uma competência</h2>
      <p class="lead">
        A maioria dos cursos ensina a apertar botão. Aqui você aprende a decidir,
        executar e provar — que é o que faz o cliente renovar o contrato.
      </p>
    </div>

    <div class="pillars">
      <?php foreach ($PILLARS as $i => $p): ?>
        <div class="pillar" data-reveal data-reveal-delay="<?= $i * 100 ?>">
          <span class="pillar-num" aria-hidden="true"><?= e($p['num']) ?></span>
          <div class="pillar-icon" aria-hidden="true"><?= $p['icon'] ?></div>
          <h3><?= e($p['title']) ?></h3>
          <p><?= e($p['text']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
