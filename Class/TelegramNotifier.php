<?php

class TelegramNotifier implements NotificationInterface
{
    /**
     * Отправка в Telegram
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