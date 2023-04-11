<?php
require_once __DIR__ . '/../config/twig.php';

$content = 'details contains';

echo $twig->render('details.html.twig', ['content' => $content]);
