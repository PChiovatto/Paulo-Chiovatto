<?php
/**
 * TV que Vende — configuração central.
 *
 * ESTE É O ARQUIVO QUE VOCÊ EDITA no dia a dia: preço, link de checkout,
 * prazo da turma e contato. O restante do site lê tudo daqui.
 */

// --- Identidade do curso ------------------------------------------------
define('COURSE_NAME',     'TV que Vende');
define('COURSE_SUBTITLE', 'O Método CTV Ads');
define('COURSE_TAGLINE',  'Aprenda a transformar a tela grande do brasileiro no canal de vendas mais poderoso de 2026.');
define('COURSE_YEAR',     2026);

// --- Preço --------------------------------------------------------------
define('PRICE_FULL',        2599.99);  // valor cheio / parcelado
define('PRICE_INSTALLMENTS', 12);
define('PRICE_INSTALLMENT',  216.67);  // valor de cada parcela
define('PIX_DISCOUNT',       0.10);    // 10% de desconto no PIX / à vista
define('PRICE_PIX', round(PRICE_FULL * (1 - PIX_DISCOUNT), 2));

// --- Checkout -----------------------------------------------------------
// TODO: cole aqui a URL do seu checkout (Hotmart, Kiwify, Eduzz, Stripe...).
// Enquanto estiver vazio, os botões avisam que o checkout não foi configurado
// em vez de levar o visitante para lugar nenhum.
define('CHECKOUT_URL', '');

// --- Prazos -------------------------------------------------------------
// Data limite das inscrições. O contador regressivo do site usa esta data.
// É um prazo REAL e fixo — quando passar, o site troca a contagem por um
// aviso de turma encerrada em vez de reiniciar o relógio.
define('ENROLLMENT_DEADLINE', '2026-08-31 23:59:59');
define('COURSE_START_LABEL',  'Setembro de 2026');
define('SITE_TIMEZONE',       'America/Sao_Paulo');

// --- Contato ------------------------------------------------------------
define('CONTACT_EMAIL',    'contato@tvquevende.com.br');
define('CONTACT_WHATSAPP', '');           // ex.: '5511999999999' (só números)
define('SITE_URL',         'https://tvquevende.com.br');

// --- Números do curso (usados em vários pontos da página) ---------------
define('TOTAL_LESSONS', 37);
define('TOTAL_HOURS',   '6h05');
