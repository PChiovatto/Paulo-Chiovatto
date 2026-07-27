<section id="diagnostico">
  <div class="container container--narrow">
    <div class="section-head section-head--center" data-reveal>
      <span class="tag">Diagnóstico gratuito</span>
      <h2>Qual é o seu nível em CTV hoje?</h2>
      <p class="lead">
        Quatro perguntas, trinta segundos. No fim você recebe por onde começar
        e onde está o seu maior ganho.
      </p>
    </div>

    <div class="quiz" id="quiz" data-reveal>
      <div class="quiz-progress">
        <span id="quiz-step">Pergunta 1 de <?= count($QUIZ) ?></span>
        <span class="quiz-track"><span class="quiz-fill" id="quiz-fill"></span></span>
      </div>

      <div id="quiz-stage">
        <noscript>
          <p class="lead">O diagnóstico interativo precisa de JavaScript. Sem ele, siga direto
          para o <a href="#conteudo-curso">conteúdo do curso</a>.</p>
        </noscript>
      </div>
    </div>

    <script type="application/json" id="quiz-data"><?= json_encode(
        ['questions' => $QUIZ, 'results' => $QUIZ_RESULTS],
        JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP
    ) ?></script>
  </div>
</section>

<section class="section--alt">
  <div class="container">
    <div class="section-head section-head--center" data-reveal>
      <span class="tag">Comparativo</span>
      <h2>Por que CTV, e não só o que você já faz</h2>
      <p class="lead">
        CTV junta a força da televisão com o controle do digital. É por isso que
        ela não substitui o seu plano — ela o completa.
      </p>
    </div>

    <div class="table-wrap" data-reveal>
      <table>
        <caption class="sr-only">Comparativo entre CTV Ads, TV Linear e Display/OLV</caption>
        <thead>
          <tr>
            <th scope="col">Critério</th>
            <?php foreach ($COMPARISON['columns'] as $i => $col): ?>
              <th scope="col" class="<?= $i === 0 ? 'is-hero' : '' ?>"><?= e($col) ?></th>
            <?php endforeach; ?>
          </tr>
        </thead>
        <tbody>
          <?php
          $marks = [
              'full'    => ['✓', 'Sim',      'full'],
              'partial' => ['~', 'Parcial',  'partial'],
              'none'    => ['—', 'Não',      'none'],
          ];
          foreach ($COMPARISON['rows'] as $row): ?>
            <tr>
              <th scope="row" style="text-align:left;font-weight:500"><?= e($row['label']) ?></th>
              <?php foreach ($row['v'] as $i => $state):
                  [$symbol, $label, $mod] = $marks[$state]; ?>
                <td class="<?= $i === 0 ? 'is-hero' : '' ?>">
                  <span class="mark mark--<?= e($mod) ?>">
                    <span aria-hidden="true"><?= e($symbol) ?></span>
                    <span><?= e($label) ?></span>
                  </span>
                </td>
              <?php endforeach; ?>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="table-legend" data-reveal>
      <span><span class="mark mark--full" aria-hidden="true">✓</span> Atende bem</span>
      <span><span class="mark mark--partial" aria-hidden="true">~</span> Atende com limitação</span>
      <span><span class="mark mark--none" aria-hidden="true">—</span> Não atende</span>
    </div>
  </div>
</section>
