<?php


namespace BuyEvent\Listeners;


use BuyEvent\Events\BuyEvent;
use BuyEvent\Notifications\NotificationFactory;

class BuyEventListener implements IEventListener
{
    public function handle($event)
    {
        $product = $event->getOrder()->getProduct();
        $notificationFactory = new NotificationFactory();
        $notification = $notificationFactory->createNotification($event->getNotificationType());
        $text = "you buy {$product->getName()} with price {$product->getPrice()} {$product->getCurrency()}";
        $notification->send($event->getOrder()->getClient(), $text);
    }
}