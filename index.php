<?php
/**
 * TV que Vende — O Método CTV Ads
 * Página de vendas. O conteúdo vive em includes/data.php e includes/config.php.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/data.php';

date_default_timezone_set(SITE_TIMEZONE);

$pageTitle = COURSE_NAME . ' — ' . COURSE_SUBTITLE;
$pageDesc  = COURSE_TAGLINE . ' Curso completo de CTV Ads: planejamento, compra programática, '
           . 'frequency capping, criativo e mensuração.';
$assetsV   = '1.0.0'; // suba este número ao alterar CSS/JS para furar cache do navegador
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#07070e">

<title><?= e($pageTitle) ?></title>
<meta name="description" content="<?= e($pageDesc) ?>">
<link rel="canonical" href="<?= e(SITE_URL) ?>/">

<meta property="og:type" content="website">
<meta property="og:locale" content="pt_BR">
<meta property="og:title" content="<?= e($pageTitle) ?>">
<meta property="og:description" content="<?= e($pageDesc) ?>">
<meta property="og:url" content="<?= e(SITE_URL) ?>/">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= e($pageTitle) ?>">
<meta name="twitter:description" content="<?= e($pageDesc) ?>">

<link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><rect width='32' height='32' rx='7' fill='%238b5cf6'/><rect x='7' y='10' width='18' height='11' rx='2' fill='%23fff'/><rect x='13' y='23' width='6' height='2' rx='1' fill='%23fff'/></svg>">
<link rel="stylesheet" href="assets/css/style.css?v=<?= e($assetsV) ?>">

<script type="application/ld+json">
<?= json_encode([
    '@context'    => 'https://schema.org',
    '@type'       => 'Course',
    'name'        => $pageTitle,
    'description' => $pageDesc,
    'inLanguage'  => 'pt-BR',
    'url'         => SITE_URL . '/',
    'provider'    => ['@type' => 'Organization', 'name' => COURSE_NAME, 'url' => SITE_URL],
    'offers'      => [
        '@type'         => 'Offer',
        'price'         => number_format(PRICE_FULL, 2, '.', ''),
        'priceCurrency' => 'BRL',
        'availability'  => enrollment_open()
            ? 'https://schema.org/InStock'
            : 'https://schema.org/SoldOut',
        'url'           => CHECKOUT_URL !== '' ? CHECKOUT_URL : SITE_URL . '/#preco',
    ],
    'hasCourseInstance' => [
        '@type'            => 'CourseInstance',
        'courseMode'       => 'online',
        'courseWorkload'   => 'PT6H5M',
    ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<script type="application/ld+json">
<?= json_encode([
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => array_map(static fn (array $f): array => [
        '@type'          => 'Question',
        'name'           => $f['q'],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
    ], $FAQ),
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>
</head>
<body>

<?php include __DIR__ . '/partials/header.php'; ?>

<main>
  <?php
  include __DIR__ . '/partials/hero.php';
  include __DIR__ . '/partials/problem.php';
  include __DIR__ . '/partials/transformation.php';
  include __DIR__ . '/partials/simulator.php';
  include __DIR__ . '/partials/audience.php';
  include __DIR__ . '/partials/curriculum.php';
  include __DIR__ . '/partials/quiz.php';
  include __DIR__ . '/partials/offer.php';
  include __DIR__ . '/partials/pricing.php';
  include __DIR__ . '/partials/faq.php';
  ?>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>

<script src="assets/js/app.js?v=<?= e($assetsV) ?>" defer></script>
</body>
</html>
