<?php


namespace BuyEvent\Orders;


interface IOrderRepository
{
    public function create(Order $order);
}