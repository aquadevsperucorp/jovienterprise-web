<?php
function loadEnv(string $path): array {
    if (!file_exists($path)) return [];

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $env = [];

    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '' || strpos($line, '#') === 0) continue;

        $parts = explode('=', $line, 2);
        $key = trim($parts[0]);
        $val = isset($parts[1]) ? trim($parts[1]) : '';
        $val = trim($val, "\"'"); // quita comillas

        $env[$key] = $val;
    }

    return $env;
}