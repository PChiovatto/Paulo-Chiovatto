<section class="section--alt" id="faq">
  <div class="container container--narrow">
    <div class="section-head section-head--center" data-reveal>
      <span class="tag">Dúvidas frequentes</span>
      <h2>Perguntas frequentes</h2>
    </div>

    <div class="faq-list" data-reveal>
      <?php foreach ($FAQ as $i => $item): ?>
        <div class="faq-item">
          <button type="button" class="faq-q" aria-expanded="false" aria-controls="faq-<?= $i ?>">
            <span><?= e($item['q']) ?></span>
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-a" id="faq-<?= $i ?>">
            <div><p><?= e($item['a']) ?></p></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <p class="lead" style="text-align:center;margin-top:32px;font-size:15px">
      Ficou outra dúvida? Escreva para
      <a href="mailto:<?= e(CONTACT_EMAIL) ?>"><?= e(CONTACT_EMAIL) ?></a>.
    </p>
  </div>
</section>

<section class="final-cta">
  <div class="container">
    <div data-reveal>
      <h2>CTV no Brasil está no começo.</h2>
      <p>Quem aprender agora vai cobrar o dobro em dois anos.</p>
      <a href="#preco" class="btn btn--light btn--lg">Garantir minha vaga</a>
      <p class="btn-note">
        <?= e(TOTAL_LESSONS) ?> aulas · <?= e(TOTAL_HOURS) ?> ·
        garantia de 7 dias · certificado incluso
      </p>
    </div>
  </div>
</section>
