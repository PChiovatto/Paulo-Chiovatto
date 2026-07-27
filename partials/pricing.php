<?php
$pixParts  = brl_parts(PRICE_PIX);
$instParts = brl_parts(PRICE_INSTALLMENT);
$savings   = PRICE_FULL - PRICE_PIX;
?>
<section class="pricing" id="preco">
  <div class="container">
    <div class="section-head section-head--center" data-reveal>
      <span class="tag">Investimento</span>
      <h2>Garanta sua vaga</h2>
      <?php if (enrollment_open()): ?>
        <p class="lead">
          As inscrições da turma de <?= e(COURSE_START_LABEL) ?> encerram em:
        </p>
      <?php endif; ?>
    </div>

    <?php if (enrollment_open()): ?>
      <div class="countdown" id="countdown"
           data-deadline="<?= e(date('Y-m-d H:i:s', strtotime(ENROLLMENT_DEADLINE))) ?>"
           data-reveal>
        <noscript><p class="countdown-msg">Inscrições até <?= e(date('d/m/Y', strtotime(ENROLLMENT_DEADLINE))) ?>.</p></noscript>
      </div>
    <?php else: ?>
      <p class="countdown-msg">
        As inscrições desta turma foram encerradas.
        Fale com a gente para saber da próxima.
      </p>
    <?php endif; ?>

    <div style="text-align:center" data-reveal>
      <div class="price-toggle"
           role="group"
           aria-label="Forma de pagamento"
           data-full="<?= e(brl(PRICE_FULL)) ?>"
           data-pix="<?= e(brl(PRICE_PIX)) ?>"
           data-pix-int="<?= e($pixParts[0]) ?>"
           data-pix-cents="<?= e($pixParts[1]) ?>"
           data-installment="<?= e(brl(PRICE_INSTALLMENT)) ?>"
           data-inst-int="<?= e($instParts[0]) ?>"
           data-inst-cents="<?= e($instParts[1]) ?>"
           data-installments="<?= e((string) PRICE_INSTALLMENTS) ?>"
           data-savings="<?= e(brl($savings)) ?>">
        <button type="button" data-mode="installments" class="is-active" aria-pressed="true">
          Parcelado
        </button>
        <button type="button" data-mode="pix" aria-pressed="false">
          PIX · <?= (int) (PIX_DISCOUNT * 100) ?>% OFF
        </button>
      </div>
    </div>

    <div class="price-card" data-reveal>
      <span class="price-ribbon">Acesso vitalício + atualizações</span>

      <p class="price-kicker" id="price-kicker">Parcelado no cartão</p>
      <p class="price-strike" id="price-strike"></p>

      <p class="price-main" id="price-main">
        <span class="price-cur"><?= (int) PRICE_INSTALLMENTS ?>x R$</span><?= e($instParts[0]) ?><span class="price-cents">,<?= e($instParts[1]) ?></span>
      </p>

      <p class="price-sub" id="price-sub">
        ou <strong>R$ <?= e(brl(PRICE_PIX)) ?></strong> à vista no PIX
      </p>

      <ul class="price-features">
        <?php foreach ($PRICE_FEATURES as $f): ?>
          <li><?= e($f) ?></li>
        <?php endforeach; ?>
      </ul>

      <a href="<?= e(checkout_href()) ?>" class="btn btn--primary btn--block btn--lg"<?= checkout_attrs() ?>>
        Quero me inscrever agora
      </a>

      <div class="guarantee">
        <span class="guarantee-seal" aria-hidden="true">🛡️</span>
        <div>
          <strong>Garantia incondicional de 7 dias</strong>
          <p>
            Entre, assista, teste. Se não for para você, devolvemos 100% do valor
            sem perguntas e sem burocracia. O risco é nosso.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
