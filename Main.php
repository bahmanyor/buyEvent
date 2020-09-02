<?php


namespace BuyEvent;



use BuyEvent\Clients\ClientRepository;
use BuyEvent\DI\IDependencyInjection;
use BuyEvent\EventDispatcher\EventDispatcher;
use BuyEvent\Listeners\BuyEventListener;
use BuyEvent\Listeners\IEventListener;
use BuyEvent\Orders\IOrderFormalizeService;
use BuyEvent\Orders\IOrderRepository;
use BuyEvent\Orders\Order;
use BuyEvent\Orders\OrderFormalizeService;
use BuyEvent\Clients\Client;
use BuyEvent\Clients\IClientRepository;
use BuyEvent\Common\Currency;
use BuyEvent\Events\BuyEvent;
use BuyEvent\Notifications\NotificationFactory;
use BuyEvent\Orders\OrderRepository;
use BuyEvent\Products\IProductRepository;
use BuyEvent\Products\Product;
use BuyEvent\Products\ProductRepository;

class Main {
     private  IClientRepository $clientRepository;
     private IProductRepository $productRepository;
     private IOrderFormalizeService $orderFormalizeService;
     public function __construct(IDependencyInjection $di) {
         $this->clientRepository = $di->get(ClientRepository::class);
         $this->productRepository = $di->get(ProductRepository::class);
         $this->orderFormalizeService = $di->get(OrderFormalizeService::class);
     }

     public function main(){
         //clients
         $client = new Client("Иванов Иван","934234234","test@test.com");
         $this->clientRepository->save($client);

         //products
         $product = new Product("phone", 23, Currency::TJS);
         $this->productRepository->save($product);

         $line = readline('enter nnotification type please (sms, email):');
         $order = new Order($product, $client);

         $this->orderFormalizeService->setNotificationType($line);
         $this->orderFormalizeService->formalize($order);
     }
}