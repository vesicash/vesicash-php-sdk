<?php
namespace Vesicash\Vesicash;
use Exception;
use Vesicash\Request;

class Admin extends Request {
    /**
     * Update User's Account Information
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function updateUserAccount(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['account_id', 'updates'], $data);
            return $this->request('/admin/user/update/account', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Update User's Account Meta Information
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function updateUserAccountMeta(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['meta'], $data);
            return $this->request('/admin/user/update/account/meta', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Update User's Business Account Information
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function updateUserBusinessAccount(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['business_id', 'updates'], $data);
            return $this->request('/admin/business/profile/update', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Update User's Profile Information
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function updateUserProfile(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['account_id', 'updates'], $data);
            return $this->request('/admin/user/update/profile', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Update User's Bank Account Information
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function updateUserBankAccount(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['account_id', 'updates'], $data);
            return $this->request('/admin/user/update/bank', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * List User/Business Transactions
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function listBusinessTransactions(array $data) {
        try {
            return $this->request('/admin/business/transactions', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * List User/Business Customers
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function listBusinessCustomers(array $data) {
        try {
            $this->required(['business_id']);
            return $this->request('/admin/business/customers', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * List User/Business Customers Transactions
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function listBusinessCustomersTransactions(array $data) {
        try {
            $this->required(['business_id', 'account_id']);
            return $this->request('/admin/business/customers/transactions', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Fetch User/Business Wallet(s)
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function fetchWallets(array $data) {
        try {
            $this->required(['account_id']);
            return $this->request('/admin/account/wallet', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * List User/Business Disbursements
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function listBusinessDisbursements(array $data) {
        try {
            return $this->request('/admin/disbursements', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Update Business Profile Information
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function updateBusinessProfile(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['account_id', 'updates'], $data);
            return $this->request('/admin/business/profile/update', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * List Disputes By Customer/User
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function listUserTransactionDisputes(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['business_id'], $data);
            return $this->request('/admin/business/customers/disputes', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Add/Update Customer Bank Account Details
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function updateUserBankAccountDetails(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['account_id', 'updates'], $data);
            return $this->request('/admin/user/update/bank', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Fetch Bank
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function fetchBank(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['bank_id'], $data);
            return $this->request('/admin/banks/'.$data['bank_id'], []);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Check Wallet Balance
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function checkWalletBalance(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['account_id'], $data);
            return $this->request('/admin/account/wallet', []);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}