<?php
require_once __DIR__ . '/../vendor/autoload.php';

echo $_ENV['hello'] ?? 'Olá Vercel';