<?php


namespace BuyEvent;



use BuyEvent\event_dispatcher\EventDispatcher;
use BuyEvent\orders\Order;
use BuyEvent\orders\OrderFormalizeService;
use BuyEvent\clients\Client;
use BuyEvent\clients\IClientRepository;
use BuyEvent\common\Currency;
use BuyEvent\events\BuyEvent;
use BuyEvent\notifications\NotificationFactory;
use BuyEvent\products\IProductRepository;
use BuyEvent\products\Product;

class Main {
     private  IClientRepository $clientRepository;
     private IProductRepository $productRepository;
     public function __construct(IClientRepository $clientRepository, IProductRepository $productRepository) {
         $this->clientRepository = $clientRepository;
         $this->productRepository = $productRepository;
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
         $dispatcher = new EventDispatcher();
         $dispatcher->addEventListener(BuyEvent::class, function (BuyEvent $event){
             $product = $event->getOrder()->getProduct();
             $notificationFactory = new NotificationFactory();
             $notification = $notificationFactory->createNotification($event->getNotificationType());
             $text = "you buy {$product->getName()} with price {$product->getPrice()} {$product->getCurrency()}";
             $notification->send($event->getOrder()->getClient(), $text);
         });

         $orderFormalize = new OrderFormalizeService($order, $dispatcher);
         $orderFormalize->setNotificationType($line);
         $orderFormalize->formalize();
     }
}