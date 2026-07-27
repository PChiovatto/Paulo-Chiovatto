<footer class="site-footer">
  <div class="container">
    <div class="footer-inner">
      <div class="footer-brand">
        <a class="logo" href="#topo">
          <span class="logo-mark" aria-hidden="true"></span>
          <?= e(COURSE_NAME) ?>
        </a>
        <p>
          <?= e(COURSE_SUBTITLE) ?> — formação completa em Connected TV para quem
          planeja, compra e prova mídia no Brasil.
        </p>
      </div>

      <div class="footer-links">
        <div class="footer-col">
          <h4>Curso</h4>
          <a href="#metodo">O método</a>
          <a href="#conteudo-curso">Conteúdo</a>
          <a href="#preco">Investimento</a>
          <a href="#faq">Dúvidas</a>
        </div>
        <div class="footer-col">
          <h4>Ferramentas</h4>
          <a href="#simulador">Simulador de campanha</a>
          <a href="#diagnostico">Diagnóstico de nível</a>
        </div>
        <div class="footer-col">
          <h4>Contato</h4>
          <a href="mailto:<?= e(CONTACT_EMAIL) ?>"><?= e(CONTACT_EMAIL) ?></a>
          <?php if (CONTACT_WHATSAPP !== ''): ?>
            <a href="https://wa.me/<?= e(CONTACT_WHATSAPP) ?>" target="_blank" rel="noopener">WhatsApp</a>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <span>&copy; <?= date('Y') ?> <?= e(COURSE_NAME) ?> — <?= e(COURSE_SUBTITLE) ?>. Todos os direitos reservados.</span>
      <span>Garantia de 7 dias · Pagamento seguro</span>
    </div>
  </div>
</footer>

<!-- Barra fixa de compra no celular -->
<div class="mobile-bar">
  <div class="mobile-bar-price">
    <strong id="mobile-price"><?= e(PRICE_INSTALLMENTS) ?>x R$ <?= e(brl(PRICE_INSTALLMENT)) ?></strong>
    <span>Garantia de 7 dias</span>
  </div>
  <a href="#preco" class="btn btn--primary">Inscrever-me</a>
</div>

<button type="button" class="to-top" aria-label="Voltar ao topo">↑</button>
<div class="toast" id="toast" role="status" aria-live="polite"></div>
