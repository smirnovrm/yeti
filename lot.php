<?php
date_default_timezone_set('Asia/Almaty');
require_once __DIR__ . '/functions.php';
$page_content = renderTemplate('/templates/lot.php', ['list' => require_once __DIR__ . '/list_item.php']);
$layout_content = renderTemplate('/templates/layout.php', ['title' => 'Yeti Cave', 'config' => require_once __DIR__ . '/example_data.php', 'content' => $page_content, 'username' => 'Константин']);
print ($layout_content);