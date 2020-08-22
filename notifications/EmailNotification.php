<?php


namespace BuyEvent\notifications;


use BuyEvent\clients\Client;
use BuyEvent\clients\IClient;
use BuyEvent\logger\LOG;

class EmailNotification implements Notification {

    /**
     * @param IClient $client
     * @param $massage
     */
    public function send(IClient $client, $massage) :void {
        try {
            echo "EMAIL: " . $client->getName() . " " . $massage;
        }
        catch (\Exception $exp){
            LOG::error($exp->getMessage());
            echo "ошибка : " . $exp->getMessage();
        }
    }
}