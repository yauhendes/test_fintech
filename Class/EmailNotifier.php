<?php

class EmailNotifier implements NotificationInterface
{
    /**
     * Отправка на Email
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
