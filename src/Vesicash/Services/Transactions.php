<?php
namespace Vesicash\Vesicash\Services;
use Exception;
use Vesicash\Request;

class Transactions extends Request
{
    /**
     * Create an escrow transaction
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function create($data) {
        $this->required(['title', 'type', 'parties', 'currency'], $data);

        if ($data['type'] == 'product') {
            $this->required(['products'], $data);
        } elseif ($data['type'] == 'milestone') {
            $this->required(['milestones'], $data);
        }

        try {
            return $this->request('transactions/create', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Add parties to a transaction
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function addTransactionParties($data) {
        $this->required(['transaction_id', 'parties'], $data);

        try {
            return $this->request('transactions/parties/update', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Send Transaction To Recipient
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function sendTransaction($data) {
        $this->required(['transaction_id'], $data);

        try {
            return $this->request('transactions/send', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Accept Transaction (also Agree Transaction)
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function acceptTransaction($data) {
        $this->required(['transaction_id'], $data);

        try {
            return $this->request('transactions/accept', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Reject Transaction
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function rejectTransaction($data) {
        $this->required(['transaction_id'], $data);

        try {
            return $this->request('transactions/reject', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Fetch Transaction
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function fetchTransaction($data) {
        $this->required(['transaction_id'], $data);

        try {
            $transaction_id = $data['transaction_id'];
            return $this->request('transactions/listById/'.$transaction_id, []);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Request Transaction Due Date Extension
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function requestTransactionDueDateExtension($data) {
        $this->required(['transaction_id', 'note'], $data);

        try {
            return $this->request('transactions/request/due_date_extension', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Request Transaction Due Date Extension
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function approveTransactionDueDateExtension($data) {
        $this->required(['transaction_id', 'due_date'], $data);

        try {
            return $this->request('transactions/approve/due_date_extension', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Mark Transaction as Delivered
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function markTransactionAsDelivered($data) {
        $this->required(['transaction_id'], $data);

        try {
            return $this->request('transactions/delivered', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Accept Delivered Transaction
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function acceptDeliveredTransaction($data) {
        $this->required(['transaction_id'], $data);

        try {
            return $this->request('transactions/satisfied', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Reject Delivered Transaction
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function rejectDeliveredTransaction($data) {
        $this->required(['transaction_id'], $data);

        try {
            return $this->request('transactions/reject_delivery', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * List Business Transactions
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function listBusinessTransactions($data) {
        $this->required(['business_id'], $data);

        try {
            return $this->request('transactions/listByBusiness', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * List User Transactions
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function listUserTransactions($data) {
        $this->required(['account_id'], $data);

        try {
            return $this->request('transactions/listByUser', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Create a Transaction Dispute
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function disputeTransaction($data) {
        $this->required(['transaction_id', 'dispute_status', 'reason'], $data);

        try {
            return $this->request('transactions/dispute', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Update a Transaction Dispute
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function updateTransactionDispute($data) {
        $this->required(['transaction_id', 'dispute_status', 'decision'], $data);

        try {
            return $this->request('transactions/dispute/update', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}