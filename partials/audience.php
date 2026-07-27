<section class="section--alt">
  <div class="container">
    <div class="section-head section-head--center" data-reveal>
      <span class="tag">Para quem é</span>
      <h2>Esse curso foi feito para você</h2>
    </div>

    <div class="audience">
      <?php foreach ($AUDIENCE as $i => $a): ?>
        <div class="aud-card" data-reveal data-reveal-delay="<?= $i * 80 ?>">
          <div class="aud-icon" aria-hidden="true"><?= $a['icon'] ?></div>
          <h3><?= e($a['title']) ?></h3>
          <p><?= e($a['text']) ?></p>
          <span class="aud-win"><?= e($a['win']) ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
