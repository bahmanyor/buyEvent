<?php


namespace BuyEvent\orders;


interface IOrderRepository
{
    public function create(Order $order);
}