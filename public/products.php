<?php

require_once __DIR__ . '/../config/twig.php';

$products = ['du rhum','des femmes','de la bière','nom de dieu','un accordéon'];

echo $twig->render('products.html.twig', ['products' => $products]);