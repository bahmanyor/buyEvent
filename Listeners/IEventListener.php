<?php


namespace BuyEvent\Listeners;


interface IEventListener
{
    public function handle($event);
}