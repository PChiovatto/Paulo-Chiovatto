/* =========================================================================
   TV que Vende — interações
   Tudo é progressivo: sem JS a página continua legível e comprável.
   ========================================================================= */
(function () {
  'use strict';

  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  var nfInt = new Intl.NumberFormat('pt-BR', { maximumFractionDigits: 0 });
  var nfMoney = new Intl.NumberFormat('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 });

  function $(sel, ctx) { return (ctx || document).querySelector(sel); }
  function $$(sel, ctx) { return Array.prototype.slice.call((ctx || document).querySelectorAll(sel)); }

  /* ---------------------------------------------------------------- toast */

  var toastEl = $('#toast');
  var toastTimer;

  function toast(msg) {
    if (!toastEl) return;
    toastEl.textContent = msg;
    toastEl.classList.add('is-visible');
    clearTimeout(toastTimer);
    toastTimer = setTimeout(function () {
      toastEl.classList.remove('is-visible');
    }, 4200);
  }

  // Botões de compra sem checkout configurado avisam em vez de levar a lugar nenhum.
  $$('[data-checkout-missing]').forEach(function (el) {
    el.addEventListener('click', function (ev) {
      ev.preventDefault();
      toast('Checkout ainda não configurado — defina CHECKOUT_URL em includes/config.php.');
    });
  });

  /* --------------------------------------------------- header + progresso */

  var header = $('.site-header');
  var progress = $('.progress');
  var mobileBar = $('.mobile-bar');
  var toTop = $('.to-top');
  var hero = $('.hero');

  function onScroll() {
    var y = window.pageYOffset;
    var docH = document.documentElement.scrollHeight - window.innerHeight;

    if (header) header.classList.toggle('is-stuck', y > 12);
    if (progress) progress.style.width = (docH > 0 ? (y / docH) * 100 : 0) + '%';

    var passedHero = hero ? y > hero.offsetHeight * 0.7 : y > 600;
    if (mobileBar) mobileBar.classList.toggle('is-visible', passedHero);
    if (toTop) toTop.classList.toggle('is-visible', y > 900);
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  if (toTop) {
    toTop.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: reduceMotion ? 'auto' : 'smooth' });
    });
  }

  /* ------------------------------------------------------ revelar ao rolar */

  var revealables = $$('[data-reveal]');

  if (reduceMotion || !('IntersectionObserver' in window)) {
    revealables.forEach(function (el) { el.classList.add('is-in'); });
  } else {
    var revealObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        var delay = parseInt(entry.target.getAttribute('data-reveal-delay') || '0', 10);
        setTimeout(function () { entry.target.classList.add('is-in'); }, delay);
        revealObserver.unobserve(entry.target);
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });

    revealables.forEach(function (el) { revealObserver.observe(el); });
  }

  /* -------------------------------------------------- contadores animados */

  function countUp(el) {
    var target = parseFloat(el.getAttribute('data-count'));
    var decimals = parseInt(el.getAttribute('data-decimals') || '0', 10);
    var prefix = el.getAttribute('data-prefix') || '';
    var suffix = el.getAttribute('data-suffix') || '';

    function render(v) {
      el.textContent = prefix + v.toLocaleString('pt-BR', {
        minimumFractionDigits: decimals,
        maximumFractionDigits: decimals
      }) + suffix;
    }

    if (reduceMotion) { render(target); return; }

    var duration = 1400;
    var start = null;

    function step(ts) {
      if (start === null) start = ts;
      var p = Math.min((ts - start) / duration, 1);
      var eased = 1 - Math.pow(1 - p, 3);
      render(target * eased);
      if (p < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }

  var counters = $$('[data-count]');
  if ('IntersectionObserver' in window) {
    var countObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        countUp(entry.target);
        countObserver.unobserve(entry.target);
      });
    }, { threshold: 0.5 });
    counters.forEach(function (el) { countObserver.observe(el); });
  } else {
    counters.forEach(countUp);
  }

  /* ------------------------------------------------------------ simulador */

  var sim = $('#simulador');

  if (sim) {
    var inBudget = $('#sim-budget', sim);
    var inCpm = $('#sim-cpm', sim);
    var inCap = $('#sim-cap', sim);

    // Frequência média observada quando não há controle consolidado.
    var UNCAPPED_FREQ = 7;
    // Pessoas por domicílio alcançado (efeito de co-viewing).
    var VIEWERS_PER_HOUSEHOLD = 1.8;

    function updateSim() {
      var budget = +inBudget.value;
      var cpm = +inCpm.value;
      var cap = +inCap.value;

      var impressions = (budget / cpm) * 1000;
      var households = impressions / cap;
      var people = households * VIEWERS_PER_HOUSEHOLD;
      var costPerHousehold = budget / households;

      $('#out-budget', sim).textContent = 'R$ ' + nfInt.format(budget);
      $('#out-cpm', sim).textContent = 'R$ ' + nfInt.format(cpm);
      $('#out-cap', sim).textContent = cap + (cap === 1 ? ' vez' : ' vezes');

      $('#res-impressions', sim).textContent = nfInt.format(impressions);
      $('#res-households', sim).textContent = nfInt.format(households);
      $('#res-people', sim).textContent = nfInt.format(people);
      $('#res-cost', sim).textContent = 'R$ ' + nfMoney.format(costPerHousehold);

      // Comparação: mesma verba, com e sem controle de frequência.
      var uncapped = impressions / UNCAPPED_FREQ;
      var best = Math.max(households, uncapped);

      $('#meter-capped', sim).style.width = (households / best) * 100 + '%';
      $('#meter-uncapped', sim).style.width = (uncapped / best) * 100 + '%';
      $('#meter-capped-num', sim).textContent = nfInt.format(households);
      $('#meter-uncapped-num', sim).textContent = nfInt.format(uncapped);

      var gain = households > 0 && uncapped > 0
        ? Math.round(((households - uncapped) / uncapped) * 100)
        : 0;

      var gainEl = $('#sim-gain', sim);
      if (gain > 0) {
        gainEl.textContent = 'Com o mesmo dinheiro, o controle de frequência entrega ' +
          nfInt.format(gain) + '% mais domicílios únicos.';
      } else if (gain < 0) {
        gainEl.textContent = 'Nesse cenário o teto está mais alto que a média sem controle — ' +
          'reduza o fcap para ampliar alcance.';
      } else {
        gainEl.textContent = 'Nesse cenário os dois cenários empatam.';
      }
    }

    [inBudget, inCpm, inCap].forEach(function (input) {
      input.addEventListener('input', updateSim);
    });
    updateSim();
  }

  /* ------------------------------------------------------------ currículo */

  var modules = $$('.module');

  modules.forEach(function (mod) {
    var head = $('.module-head', mod);
    head.addEventListener('click', function () {
      var open = mod.classList.toggle('is-open');
      head.setAttribute('aria-expanded', open ? 'true' : 'false');
      syncExpandAll();
    });
  });

  var expandAllBtn = $('#expand-all');

  function syncExpandAll() {
    if (!expandAllBtn) return;
    var allOpen = modules.length > 0 && modules.every(function (m) {
      return m.classList.contains('is-open');
    });
    expandAllBtn.textContent = allOpen ? 'Recolher todos' : 'Expandir todos';
    expandAllBtn.setAttribute('data-state', allOpen ? 'open' : 'closed');
  }

  if (expandAllBtn) {
    expandAllBtn.addEventListener('click', function () {
      var shouldOpen = expandAllBtn.getAttribute('data-state') !== 'open';
      modules.forEach(function (mod) {
        mod.classList.toggle('is-open', shouldOpen);
        $('.module-head', mod).setAttribute('aria-expanded', shouldOpen ? 'true' : 'false');
      });
      syncExpandAll();
    });
    syncExpandAll();
  }

  /* ------------------------------------------------------------- glossário */

  $$('.gloss').forEach(function (card) {
    card.addEventListener('click', function () {
      var flipped = card.classList.toggle('is-flipped');
      card.setAttribute('aria-pressed', flipped ? 'true' : 'false');
    });
  });

  /* ------------------------------------------------------------------ quiz */

  var quizEl = $('#quiz');
  var quizDataEl = $('#quiz-data');

  if (quizEl && quizDataEl) {
    var quizData = JSON.parse(quizDataEl.textContent);
    var questions = quizData.questions;
    var results = quizData.results;

    var step = 0;
    var score = 0;

    var stageEl = $('#quiz-stage', quizEl);
    var fillEl = $('#quiz-fill', quizEl);
    var stepLabel = $('#quiz-step', quizEl);

    function renderQuestion() {
      var q = questions[step];
      var keys = ['A', 'B', 'C', 'D'];

      stepLabel.textContent = 'Pergunta ' + (step + 1) + ' de ' + questions.length;
      fillEl.style.width = (step / questions.length) * 100 + '%';

      var html = '<p class="quiz-question">' + q.q + '</p><div class="quiz-options">';
      q.a.forEach(function (opt, i) {
        html += '<button type="button" class="quiz-opt" data-points="' + opt.p + '">' +
                '<span class="quiz-key" aria-hidden="true">' + keys[i] + '</span>' +
                '<span>' + opt.t + '</span></button>';
      });
      html += '</div>';
      stageEl.innerHTML = html;

      $$('.quiz-opt', stageEl).forEach(function (btn) {
        btn.addEventListener('click', function () {
          score += parseInt(btn.getAttribute('data-points'), 10);
          step++;
          if (step < questions.length) renderQuestion();
          else renderResult();
        });
      });

      var first = $('.quiz-opt', stageEl);
      if (first && step > 0) first.focus();
    }

    function renderResult() {
      fillEl.style.width = '100%';
      stepLabel.textContent = 'Resultado';

      var res = results.find(function (r) { return score <= r.max; }) || results[results.length - 1];

      stageEl.innerHTML =
        '<div class="quiz-result">' +
          '<div class="quiz-result-icon" aria-hidden="true">' + res.icon + '</div>' +
          '<p class="quiz-level">Seu nível em CTV</p>' +
          '<h3>' + res.level + '</h3>' +
          '<p>' + res.text + '</p>' +
          '<p class="quiz-focus">' + res.focus + '</p>' +
          '<div class="quiz-actions">' +
            '<a href="#preco" class="btn btn--primary">Ver o curso completo</a>' +
            '<button type="button" class="btn btn--ghost" id="quiz-restart">Refazer o diagnóstico</button>' +
          '</div>' +
        '</div>';

      var restart = $('#quiz-restart', stageEl);
      restart.addEventListener('click', function () {
        step = 0;
        score = 0;
        renderQuestion();
      });
    }

    renderQuestion();
  }

  /* ---------------------------------------------------- alternador de preço */

  var toggle = $('.price-toggle');

  if (toggle) {
    var priceMain = $('#price-main');
    var priceSub = $('#price-sub');
    var priceStrike = $('#price-strike');
    var priceKicker = $('#price-kicker');
    var mobilePrice = $('#mobile-price');

    function renderPrice(mode) {
      var d = toggle.dataset;

      if (mode === 'pix') {
        priceKicker.textContent = 'À vista no PIX';
        priceStrike.textContent = 'R$ ' + d.full;
        priceMain.innerHTML = '<span class="price-cur">R$</span>' + d.pixInt +
                              '<span class="price-cents">,' + d.pixCents + '</span>';
        priceSub.innerHTML = 'Economia de <strong>R$ ' + d.savings + '</strong> pagando à vista';
        if (mobilePrice) mobilePrice.textContent = 'R$ ' + d.pix;
      } else {
        priceKicker.textContent = 'Parcelado no cartão';
        priceStrike.textContent = '';
        priceMain.innerHTML = '<span class="price-cur">' + d.installments + 'x R$</span>' + d.instInt +
                              '<span class="price-cents">,' + d.instCents + '</span>';
        priceSub.innerHTML = 'ou <strong>R$ ' + d.pix + '</strong> à vista no PIX';
        if (mobilePrice) mobilePrice.textContent = d.installments + 'x R$ ' + d.installment;
      }
    }

    $$('button', toggle).forEach(function (btn) {
      btn.addEventListener('click', function () {
        $$('button', toggle).forEach(function (b) {
          b.classList.remove('is-active');
          b.setAttribute('aria-pressed', 'false');
        });
        btn.classList.add('is-active');
        btn.setAttribute('aria-pressed', 'true');
        renderPrice(btn.getAttribute('data-mode'));
      });
    });

    renderPrice('installments');
  }

  /* ------------------------------------------------------------- contagem */

  var countdown = $('#countdown');

  if (countdown) {
    var deadline = new Date(countdown.getAttribute('data-deadline').replace(' ', 'T')).getTime();

    function tick() {
      var diff = deadline - Date.now();

      if (diff <= 0) {
        countdown.innerHTML = '<p class="countdown-msg">As inscrições desta turma foram encerradas. ' +
                              'Entre em contato para saber da próxima.</p>';
        return;
      }

      var days = Math.floor(diff / 86400000);
      var hours = Math.floor((diff % 86400000) / 3600000);
      var mins = Math.floor((diff % 3600000) / 60000);
      var secs = Math.floor((diff % 60000) / 1000);

      var pairs = [[days, 'dias'], [hours, 'horas'], [mins, 'min'], [secs, 'seg']];
      countdown.innerHTML = pairs.map(function (p) {
        return '<div class="cd-unit"><div class="cd-num">' + String(p[0]).padStart(2, '0') +
               '</div><div class="cd-lbl">' + p[1] + '</div></div>';
      }).join('');

      setTimeout(tick, 1000);
    }
    tick();
  }

  /* --------------------------------------------------------------------- FAQ */

  $$('.faq-item').forEach(function (item) {
    var btn = $('.faq-q', item);
    btn.addEventListener('click', function () {
      var open = item.classList.toggle('is-open');
      btn.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  });

  /* ------------------------------------------------ âncoras com header fixo */

  $$('a[href^="#"]').forEach(function (link) {
    link.addEventListener('click', function (ev) {
      var id = link.getAttribute('href');
      if (id === '#' || id.length < 2) return;

      var target = document.getElementById(id.slice(1));
      if (!target) return;

      ev.preventDefault();
      var top = target.getBoundingClientRect().top + window.pageYOffset - 84;
      window.scrollTo({ top: top, behavior: reduceMotion ? 'auto' : 'smooth' });
    });
  });
})();
