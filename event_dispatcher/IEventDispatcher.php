<?php


namespace BuyEvent\event_dispatcher;


interface IEventDispatcher
{
    public function addEventListener(string $name, callable $listener);
    public function dispatch(object $event);
}