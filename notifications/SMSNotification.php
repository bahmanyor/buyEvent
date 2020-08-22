<?php


namespace BuyEvent\notifications;


use BuyEvent\clients\Client;
use BuyEvent\clients\IClient;
use BuyEvent\logger\LOG;

class SMSNotification implements Notification {

    public function send(IClient $client, $massage) {
        try {
            echo "SMS: " . $client->getName()  ." " . $massage;
        }
        catch (\Exception $exception){
            LOG::error($exception->getMessage());
            echo "ошибка : " . $exception->getMessage();
        }
    }
}