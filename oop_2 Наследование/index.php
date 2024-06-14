<?php

require_once 'classes/Product.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';

$book = new BookProduct('Три мушкетёра', 200, 523);
$nootebook = new NotebookProduct('Dell', 1000, 'Intel');

echo $book->getProduct();
echo $nootebook->getProduct();
