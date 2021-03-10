<?php


use BuyEvent\Clients\Client;
use BuyEvent\Clients\ClientRepository;
use BuyEvent\DI\DI;
use BuyEvent\EventDispatcher\EventDispatcher;
use BuyEvent\Events\BuyEvent;
use BuyEvent\Listeners\BuyEventListener;
use BuyEvent\Main;
use BuyEvent\Orders\OrderFormalizeService;
use BuyEvent\Orders\OrderRepository;
use BuyEvent\Products\ProductRepository;

require_once __DIR__ . '/vendor/autoload.php';
//$clientRepository = new ClientRepository();
//$productRepository = new ProductRepository();
//$eventDispatcher = new EventDispatcher();
//$orderRepository = new OrderRepository();
//
//$eventDispatcher->addEventListener(BuyEvent::class, new BuyEventListener());
//$orderFormalize = new OrderFormalizeService($eventDispatcher, $orderRepository);
//
//$di = new DI();
//$di->set(ClientRepository::class, $clientRepository);
//$di->set(ProductRepository::class, $productRepository);
//$di->set(OrderFormalizeService::class, $orderFormalize);
//
//(new Main($di))->main();

\BuyEvent\DI\Container::getInstance()->make();