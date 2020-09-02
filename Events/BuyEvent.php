<?php


namespace BuyEvent\Events;


use BuyEvent\Orders\Order;
use BuyEvent\Clients\Client;

class BuyEvent
{
    public string $notificationType;
    public Order $order;

    /**
     * BuyEvent constructor.
     * @param string $notificationType
     * @param Order $order
     */
    public function __construct(string $notificationType, Order $order)
    {
        $this->notificationType = $notificationType;
        $this->order = $order;
    }

    /**
     * @return string
     */
    public function getNotificationType(): string
    {
        return $this->notificationType;
    }

    /**
     * @return Order
     */
    public function getOrder(): Order
    {
        return $this->order;
    }

}