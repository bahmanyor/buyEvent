<?php


namespace BuyEvent\Orders;


use BuyEvent\EventDispatcher\EventDispatcher;
use BuyEvent\EventDispatcher\IEventDispatcher;
use BuyEvent\Events\BuyEvent;

class OrderFormalizeService implements IOrderFormalizeService
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
     * @param IEventDispatcher $dispatcher
     * @param IOrderRepository $orderRepositorye
     */
    public function __construct(IEventDispatcher $dispatcher, IOrderRepository $orderRepositorye)
    {
        $this->orderRepository = new $orderRepositorye;
        $this->dispatcher = $dispatcher;
    }

    public function formalize(Order $order) : void {
        $order->pay();
        $this->orderRepository->create($order);
        $this->dispatcher->dispatch(new BuyEvent($this->getNotificationType(), $order));
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