<?php

interface NotificationInterface
{
    public function send(string $notificationMethod, string $message): bool;
}
