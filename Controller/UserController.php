<?php

class UserController
{
    public function __construct(
        private NotificationService $notificationService
    ) {
    }

    /**
     * Изменяет настройки
     *
     * @param $userId
     * @param $settingValue
     *
     * @return void
     */
    public function changeSetting($userId, $settingValue)
    {
        // Проверка и изменение настроек пользователя

        // Получение метода уведомления пользователя
        $notificationMethod = $this->getUserNotificationMethod($userId);

        // Создание кода подтверждения
        $confirmationCode = $this->generateConfirmationCode();

        // Отправка уведомления
        $this->notificationService->notify($notificationMethod, $confirmationCode);

        // Сохранение кода для последующей проверки
        $this->storeConfirmationCode($userId, $confirmationCode);
    }

    //..........
}
