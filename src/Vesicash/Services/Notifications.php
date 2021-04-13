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
            return $this->request('notifications/email/send/custom', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Send Headless Notification
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function sendHeadlessNotification($data) {
        $this->required(['transaction_id', 'subject', 'content'], $data);

        try {
            return $this->request('notifications/email/send/custom', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Send Email for New Transaction
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function emailNewTransaction($data) {
        $this->required(['transaction_id'], $data);

        try {
            return $this->request('notifications/email/send/new_transaction', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Send Email for Transaction Accepted
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function emailTransactionAccepted($data) {
        $this->required(['account_id', 'transaction_id'], $data);

        try {
            return $this->request('notifications/email/send/transaction_accepted', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Send Email for Transaction Rejected
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function emailTransactionRejected($data) {
        $this->required(['transaction_id'], $data);

        try {
            return $this->request('notifications/email/send/transaction_rejected', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Send Email for Transaction Paid
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function emailTransactionPaid($data) {
        $this->required(['transaction_id'], $data);

        try {
            return $this->request('notifications/email/send/transaction_paid', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Send Email for Transaction Delivered
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function emailTransactionDelivered($data) {
        $this->required(['transaction_id', 'account_id'], $data);

        try {
            return $this->request('notifications/email/send/transaction_delivered', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Send Email for Transaction Delivery Accepted
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function emailTransactionDeliveryAccepted($data) {
        $this->required(['transaction_id', 'account_id'], $data);

        try {
            return $this->request('notifications/email/send/transaction_delivered_accepted', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Send Email for Transaction Delivery Rejected
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function emailTransactionDeliveryRejected($data) {
        $this->required(['transaction_id', 'account_id'], $data);

        try {
            return $this->request('notifications/email/send/transaction_delivered_rejected', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}