<?php

class NotificationService
{
    public function __construct(
        private NotificationInterface $notifier
    ) {
    }

    /**
     * Отправляет уведомление выбранным методом
     *
     * @param string $notificationMethod
     * @param string $message
     *
     * @return bool
     */
    public function notify(string $notificationMethod, string $message): bool
    {
        return $this->notifier->send($notificationMethod, $message);
    }
}