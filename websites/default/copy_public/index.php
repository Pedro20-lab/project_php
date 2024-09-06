<?php
$title = 'Hotel San José Real';

ob_start();

include __DIR__ . '/../templates/home.html.php';

$output = ob_get_clean();

include __DIR__ . '/../templates/layout.html.php';