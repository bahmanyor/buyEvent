<?php


namespace BuyEvent\Notifications;


use Exception;

class NotificationFactory {

    /**
     * @param $type
     * @return EmailNotification|SMSNotification
     * @throws Exception
     */
    public function createNotification($type){
        switch ($type){
            case NotificationType::SMS:
                return new SMSNotification();
            case NotificationType::EMAIL:
                return new EmailNotification();
            default: throw new Exception("Not found notification type {$type}");
        }
    }
}