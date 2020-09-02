<?php


namespace BuyEvent\EventDispatcher;


interface IEventDispatcher
{
    public function addEventListener(string $name, $listener);
    public function dispatch(object $event);
}