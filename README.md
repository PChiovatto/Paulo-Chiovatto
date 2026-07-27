# TV que Vende — O Método CTV Ads

Site de vendas do curso, em PHP puro (sem framework, sem dependência externa).

## Estrutura

```
index.php                 monta a página a partir dos partials
status.php                health check em JSON (útil para o Coolify)

includes/config.php       ← PREÇO, CHECKOUT, PRAZO, CONTATO (edite aqui)
includes/data.php         ← TEXTOS: módulos, FAQ, glossário, quiz (edite aqui)
includes/functions.php    helpers de formatação e escape

partials/                 seções da página
  header.php              cabeçalho fixo + barra de progresso
  hero.php                hero + barra de números
  problem.php             dores + os 3 pilares do método
  simulator.php           simulador de campanha
  audience.php            para quem é
  curriculum.php          currículo (acordeão) + glossário
  quiz.php                diagnóstico + comparativo de canais
  offer.php               formato + bônus
  pricing.php             contagem regressiva + caixa de preço
  faq.php                 FAQ + CTA final
  footer.php              rodapé + barra fixa mobile + topo

assets/css/style.css      design system completo
assets/js/app.js          todas as interações
```

## O que editar

| Quero mudar | Arquivo |
|---|---|
| Preço, parcelas, desconto do PIX | `includes/config.php` |
| **Link do checkout** | `includes/config.php` → `CHECKOUT_URL` |
| Prazo das inscrições (contador) | `includes/config.php` → `ENROLLMENT_DEADLINE` |
| Módulos, aulas, FAQ, glossário, quiz | `includes/data.php` |
| Cores, espaçamentos, tipografia | `assets/css/style.css` (bloco `:root`) |

**Antes de publicar:** defina `CHECKOUT_URL`. Enquanto estiver vazio, os botões
de compra avisam que o checkout não foi configurado em vez de levar o visitante
para uma página em branco.

## Interações

Simulador de campanha (verba → impressões, domicílios, alcance e desperdício por
frequência), diagnóstico de nível em 4 perguntas, currículo em acordeão,
glossário em cards que viram, alternador PIX/parcelado, contagem regressiva,
FAQ, barra de progresso de leitura, barra fixa de compra no mobile e animações
de entrada.

Tudo degrada bem: sem JavaScript a página continua legível, com preço visível e
botão de compra funcionando. `prefers-reduced-motion` desliga as animações.

## Rodar localmente

```bash
php -S localhost:8000
```

## Deploy (Coolify)

- **Source:** `https://github.com/PChiovatto/Paulo-Chiovatto.git` (HTTPS)
- **Branch:** `main`
- **Build Pack:** `Dockerfile` — o site executa PHP, então o build pack `Static`
  **não** serve; ele entregaria o `.php` como texto.
- **Porta:** `80`
- **Health check:** `/status.php`
