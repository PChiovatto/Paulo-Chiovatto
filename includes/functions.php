<?php
/**
 * Helpers de apresentação.
 */

/** Escapa saída para HTML. Use SEMPRE ao imprimir texto vindo dos arrays. */
function e(?string $s): string
{
    return htmlspecialchars((string) $s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** 2599.99 -> "2.599,99" */
function brl(float $v): string
{
    return number_format($v, 2, ',', '.');
}

/** 2599.99 -> ['2.599', '99'] — para exibir os centavos menores. */
function brl_parts(float $v): array
{
    return explode(',', brl($v));
}

/**
 * Destino dos botões de compra. Sem CHECKOUT_URL configurada o botão vira um
 * gatilho de aviso em vez de um link quebrado.
 */
function checkout_href(): string
{
    return CHECKOUT_URL !== '' ? CHECKOUT_URL : '#';
}

/** Atributos extras do botão de compra (abre em nova aba quando há URL real). */
function checkout_attrs(): string
{
    return CHECKOUT_URL !== ''
        ? ' target="_blank" rel="noopener"'
        : ' data-checkout-missing="true"';
}

/** Inscrições ainda abertas? */
function enrollment_open(): bool
{
    return time() < strtotime(ENROLLMENT_DEADLINE);
}
