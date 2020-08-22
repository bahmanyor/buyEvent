<?php


namespace BuyEvent\notifications;


use BuyEvent\clients\Client;

interface Notification {
   public function send(Client $client, $massage);
}