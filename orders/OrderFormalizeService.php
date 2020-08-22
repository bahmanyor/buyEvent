<?php


namespace BuyEvent\orders;


use BuyEvent\event_dispatcher\EventDispatcher;
use BuyEvent\event_dispatcher\IEventDispatcher;
use BuyEvent\events\BuyEvent;

class OrderFormalizeService
{
    /**
     * @var Order
     */
    private Order $order;
    /**
     * @var IOrderRepository
     */
    private IOrderRepository $orderRepository;

    /**
     * @var IEventDispatcher
     */
    private IEventDispatcher $dispatcher;

    private string $notificationType = 'sms';

    /**
     * OrederFormalizeService constructor.
     * @param Order $order
     * @param IEventDispatcher $dispatcher
     */
    public function __construct(Order $order, IEventDispatcher $dispatcher)
    {
        $this->order = $order;
        $this->orderRepository = new OrderRepository();
        $this->dispatcher = $dispatcher;
    }

    public function formalize() : void {
        $this->order->pay();
        $this->orderRepository->create($this->order);
        $this->dispatcher->dispatch(new BuyEvent($this->getNotificationType(), $this->order));
    }

    /**
     * @param $notificationType
     */
    public function setNotificationType($notificationType){
        $this->notificationType = $notificationType;
    }

    /**
     * @return string
     */
    public function getNotificationType(): string
    {
        return $this->notificationType;
    }
}