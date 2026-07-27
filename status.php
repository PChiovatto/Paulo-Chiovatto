<?php
/**
 * Health check simples — útil para o Coolify e para conferir se o PHP está
 * executando de verdade (e não sendo servido como texto).
 */
require_once __DIR__ . '/includes/config.php';

date_default_timezone_set(SITE_TIMEZONE);

header('Content-Type: application/json; charset=utf-8');

echo json_encode([
    'status'     => 'ok',
    'site'       => COURSE_NAME,
    'php'        => PHP_VERSION,
    'time'       => date('c'),
    'enrollment' => time() < strtotime(ENROLLMENT_DEADLINE) ? 'open' : 'closed',
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
