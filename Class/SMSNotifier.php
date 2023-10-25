<?php

class SMSNotifier implements NotificationInterface
{
    /**
     * Отправка в sms
     *
     * @param string $notificationMethod
     * @param string $message
     *
     * @return bool
     */
    public function send(string $notificationMethod, string $message): bool
    {
        // логика
        return true;
    }
}
