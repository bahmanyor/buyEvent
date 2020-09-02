<?php


namespace BuyEvent\Orders;


interface IOrderFormalizeService
{
    /**
     * @param Order $order
     * @return mixed
     */
    public function formalize(Order $order);
}