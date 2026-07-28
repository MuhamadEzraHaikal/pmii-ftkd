<?php

$env = [];
foreach (explode("\n", file_get_contents(__DIR__.'/.env')) as $line) {
    if (preg_match('/^([A-Z_]+)=(.*)$/', trim($line), $m)) {
        $env[$m[1]] = trim($m[2], '"');
    }
}
$dsn = sprintf('mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4', $env['DB_HOST'], $env['DB_PORT'], $env['DB_DATABASE']);
$pdo = new PDO($dsn, $env['DB_USERNAME'], $env['DB_PASSWORD'] ?? '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$stmt = $pdo->query('SELECT id, nama, nim, jurusan, status, created_at FROM anggotas ORDER BY created_at DESC LIMIT 50');
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (! $rows) {
    echo "No rows found in anggotas table.\n";
    exit(0);
}
foreach ($rows as $row) {
    echo implode(' | ', array_values($row))."\n";
}
