<?php


namespace BuyEvent\event_dispatcher;


class EventDispatcher implements IEventDispatcher
{
    private array $listeners = [];

    public function addEventListener(string $name, callable $listener): void
    {
        $this->listeners[$name][] = $listener;
    }

    public function dispatch(object $event): void
    {
        $name = get_class($event);
        if (array_key_exists($name, $this->listeners)) {
            foreach ($this->listeners[$name] as $listener) {
                $listener($event);
            }
        }
    }
}