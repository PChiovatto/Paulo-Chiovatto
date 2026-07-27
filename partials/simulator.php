<section id="simulador">
  <div class="container">
    <div class="section-head section-head--center" data-reveal>
      <span class="tag">Ferramenta gratuita</span>
      <h2>Quanto a sua verba compra em CTV?</h2>
      <p class="lead">
        Mexa nos controles e veja o que muda. É o mesmo raciocínio que você vai
        aplicar no Módulo 4 — só que aqui, com a sua verba real.
      </p>
    </div>

    <div class="sim" data-reveal>
      <div class="sim-controls">
        <div class="field">
          <label for="sim-budget">
            Verba da campanha
            <span class="field-value" id="out-budget">R$ 50.000</span>
          </label>
          <input type="range" id="sim-budget" min="5000" max="500000" step="5000" value="50000">
          <p class="field-hint">O quanto você tem para investir no período.</p>
        </div>

        <div class="field">
          <label for="sim-cpm">
            CPM negociado
            <span class="field-value" id="out-cpm">R$ 60</span>
          </label>
          <input type="range" id="sim-cpm" min="30" max="120" step="5" value="60">
          <p class="field-hint">Custo por mil impressões. Varia com publisher, formato e tipo de deal.</p>
        </div>

        <div class="field">
          <label for="sim-cap">
            Frequency cap
            <span class="field-value" id="out-cap">3 vezes</span>
          </label>
          <input type="range" id="sim-cap" min="1" max="10" step="1" value="3">
          <p class="field-hint">Quantas vezes o mesmo domicílio pode ver o seu anúncio.</p>
        </div>
      </div>

      <div class="sim-results">
        <div class="sim-tiles">
          <div class="tile">
            <p class="tile-label">Impressões</p>
            <p class="tile-value" id="res-impressions">—</p>
          </div>
          <div class="tile">
            <p class="tile-label">Domicílios únicos</p>
            <p class="tile-value" id="res-households">—</p>
          </div>
          <div class="tile">
            <p class="tile-label">Pessoas alcançadas</p>
            <p class="tile-value"><span id="res-people">—</span><span class="tile-unit">com co-viewing</span></p>
          </div>
          <div class="tile">
            <p class="tile-label">Custo por domicílio</p>
            <p class="tile-value" id="res-cost">—</p>
          </div>
        </div>

        <div class="meters">
          <p class="meters-title">Mesma verba, dois cenários — domicílios únicos alcançados</p>

          <div class="meter">
            <div class="meter-top">
              <span class="meter-name">
                <span class="meter-icon" aria-hidden="true">✓</span>
                Com frequency cap
              </span>
              <span class="meter-num" id="meter-capped-num">—</span>
            </div>
            <div class="meter-track">
              <div class="meter-fill meter-fill--good" id="meter-capped" style="width:0"></div>
            </div>
          </div>

          <div class="meter">
            <div class="meter-top">
              <span class="meter-name">
                <span class="meter-icon" aria-hidden="true">✗</span>
                Sem controle de frequência
              </span>
              <span class="meter-num" id="meter-uncapped-num">—</span>
            </div>
            <div class="meter-track">
              <div class="meter-fill meter-fill--bad" id="meter-uncapped" style="width:0"></div>
            </div>
          </div>

          <p class="sim-note" id="sim-gain" style="margin-top:16px"></p>
        </div>

        <p class="sim-note">
          Estimativa didática. Considera 1,8 pessoa por domicílio alcançado
          (efeito de co-viewing) e frequência média de 7 quando não há controle
          consolidado. Números reais dependem de publisher, deal e período.
        </p>
      </div>
    </div>
  </div>
</section>
