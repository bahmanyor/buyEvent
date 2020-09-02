<?php


namespace BuyEvent\Notifications;


use BuyEvent\Clients\Client;

interface Notification {
   public function send(Client $client, $massage);
}