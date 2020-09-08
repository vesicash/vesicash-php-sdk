<?php
namespace Vesicash\Vesicash\Services;
use Exception;
use Vesicash\Request;

class Notifications extends Request
{
    /**
     * Send Custom Notification
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function sendCustomNotification($data) {
        $this->required(['transaction_id', 'notification_type'], $data);

        try {
            return $this->request('/notifications/email/send/custom', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}