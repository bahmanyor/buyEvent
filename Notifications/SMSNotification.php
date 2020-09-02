<?php


namespace BuyEvent\Notifications;


use BuyEvent\Clients\Client;
use BuyEvent\Clients\IClient;
use BuyEvent\Logger\LOG;

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