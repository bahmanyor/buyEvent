<?php


use BuyEvent\clients\Client;
use BuyEvent\clients\ClientRepository;
use BuyEvent\products\ProductRepository;

require_once __DIR__ . '/vendor/autoload.php';
$clientRepository = new ClientRepository();
$productRepository = new ProductRepository();
(new \BuyEvent\Main($clientRepository, $productRepository))->main();