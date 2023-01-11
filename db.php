<?php
    require_once __DIR__ . '/classes/Product.php';
    require_once __DIR__ . '/classes/Category.php';
    require_once __DIR__ . '/classes/AnimalsBed.php';
    require_once __DIR__ . '/classes/Food.php';
    require_once __DIR__ . '/classes/Game.php';

    $dog = new Category('dog');
    $cat = new Category('cat');

    $products = [
        new Product('balsamo', 18.21, [$dog, $cat]), 
        new Product('oggetto-qualsiasi', 50.81, [$dog]), 
        new Food('oggetto-qualsiasi', 50.81, [$dog]), 
        new Game('oggetto-qualsiasi', 10.00, [$cat]), 
        new AnimalsBed('oggetto-qualsiasi', 10.00, [$cat]), 
    ];

    foreach ($products as $product) {
        $product->setImage('https://www.rainews.it/dl/img/2022/05/29/1653823359813_Immagine__.png');
    }

?>