<?php
require_once __DIR__ . '/functions.php';
$list = require_once __DIR__ . '/list_item.php';
$page_content = renderTemplate('/templates/index.php', ['list' => $list] );
$layout_content = renderTemplate('/templates/layout.php', ['title' => 'Главная старница', 'config' => __DIR__ . '/example_data.php', 'content' => $page_content]);
print ($layout_content);
