<?php


namespace BuyEvent\Notifications;


use BuyEvent\Clients\Client;
use BuyEvent\Clients\IClient;
use BuyEvent\Logger\LOG;

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