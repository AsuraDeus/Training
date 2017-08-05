<?php

// Запрет кеширования
header('Cache-Control: no-cache, max-age=0');

// Полный запрет кеширования
header('Cache-Control: no-store');

// Кеширование на один час от клиентского времени
header('Cache-Control: max-age=3600');

// Кеширование на один час от серверного времени
header('Expires: ' . date('r', time() + 3600));