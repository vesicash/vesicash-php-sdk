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
            return $this->request('admin/user/update/account', $data);
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
            return $this->request('admin/user/update/account/meta', $data);
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
            return $this->request('admin/business/profile/update', $data);
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
            return $this->request('admin/user/update/profile', $data);
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
            return $this->request('admin/user/update/bank', $data);
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
            return $this->request('admin/business/transactions', $data);
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
            $this->required(['business_id'], $data);
            return $this->request('admin/business/customers', $data);
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
            $this->required(['business_id', 'account_id'], $data);
            return $this->request('admin/business/customers/transactions', $data);
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
            $this->required(['account_id'], $data);
            return $this->request('admin/account/wallet', $data);
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
            return $this->request('admin/disbursements', $data);
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
            return $this->request('admin/business/profile/update', $data);
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
            return $this->request('admin/business/customers/disputes', $data);
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
            return $this->request('admin/user/update/bank', $data);
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
            return $this->request('admin/banks/'.$data['bank_id'], []);
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
            return $this->request('admin/account/wallet', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Update Crypto Wallet
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function updateCryptoWallet(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['account_id', 'password', 'updates'], $data);
            return $this->request('admin/user/update/cryptowallet', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Update transaction status
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function updateTransactionStatus(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['business_id', 'transaction_id', 'action'], $data);
            return $this->request('admin/business/transactions/actions/update', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Set Default Payment Gateway
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function setDefaultPaymentGateway(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['business_id', 'gateway', 'country'], $data);
            return $this->request('admin/business/payment_gateway/update', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Set Default Disbursement Gateway
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function setDisbursementPaymentGateway(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['business_id', 'gateway', 'country'], $data);
            return $this->request('admin/business/disbursement_gateway/update', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Set Default Disbursement Type
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function setDisbursementPaymentType(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['business_id', 'gateway', 'country'], $data);
            return $this->request('admin/business/disbursement_type/update', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Update Disbursement Status
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function updateDisbursementStatus(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['disbursement_id', 'status', 'reason'], $data);
            return $this->request('admin/disbursements/update', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Set Escrow Charge for Business
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function setBusinessEscrowCharge(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['business_id', 'business_charge', 'vesicash_charge', 'processing_fee', 'disbursement_charge', 'cancellation_fee', 'payment_gateway', 'country', 'charge_min', 'charge_mid', 'charge_max'], $data);
            return $this->request('admin/business/escrow_charge/update', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    
    
    /**
     * Fetch Business Transactions Chart
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function fetchtBusinessTransactionsChart(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['business_id', 'filter'], $data);
            return $this->request('admin/business/transactions/chart', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Fetch Business Transactions Earned Sum
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function fetchtBusinessTransactionsEarnedSum(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['business_id'], $data);
            return $this->request('admin/business/transactions/earned_sum', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Fetch Business Transactions Total Sales
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function fetchtBusinessTransactionsTotalSales(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['business_id'], $data);
            return $this->request('admin/business/transactions/total_sales', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Fetch Business Disbursement
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function fetchtBusinessDisbursement(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['business_id'], $data);
            return $this->request('admin/business/disbursements', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Assign Role
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function assignRole(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['role_id', 'business_id'], $data);
            return $this->request('admin/roles/list', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Unpaid Transactions
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function unpaidTransactions(array $data) {
        try {
            return $this->request('admin/transactions/unpaid', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Paid Transactions
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function paidTransactions(array $data) {
        try {
            return $this->request('admin/transactions/paid', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Completed Transactions
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function completedTransactions(array $data) {
        try {
            return $this->request('admin/transactions/completed', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Total Transactions
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function totalTransactions(array $data) {
        try {
            return $this->request('admin/transactions/total', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Verifications markes as verified
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function verificationMarkedVerified(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['businesss_id', 'verificatison_type'], $data);
            return $this->request('admin/verification/mark/verified', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    
    /**
     * Fetch All Transactions
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function allTransactions(array $data) {
        try {
            return $this->request('admin/transactions/all', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Fetch All Users
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function allUsers(array $data) {
        try {
            return $this->request('admin/users', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * All Active Transaction
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function allActiveTransactions(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['business_id'], $data);
            return $this->request('admin/transactions/active', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    
    
    
    
    /**
     * Fecth User By Username
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function fetchUserByUsername(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['business_id', 'username'], $data);
            return $this->request('admin/user/fetchByUsername', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Fecth User By Phone Number
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function fetchUserByPhone(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['phone_number'], $data);
            return $this->request('admin/user/fetchByPhone', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
     /**
     * Fetch All Bank
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function getBanks(array $data) {
        try {
            return $this->request('admin/banks?country=NG', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
     /**
     * Fetch All Countries
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function getCountries(array $data) {
        try {
            return $this->request('admin/countries', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Fecth Business Active Transactions
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function fetchBusinessActiveTransactions(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['business_id', 'account_id'], $data);
            return $this->request('admin/business/transactions/completed', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
     /**
     * Fetch Business Recent Transactions
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function fetchBusinessRecentTransactions(array $data) {
        try {
            return $this->request('admin/business/transactions/recent', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Get Business Chart
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function getBusinessChart(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['filter'], $data);
            return $this->request('admin/transactions/chart', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Business Fetch Token 
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function fetchBusinessToken(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['account_id'], $data);
            return $this->request('admin/business/tokens/fetch', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Business Dispute
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function businessDispute(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['business_id'], $data);
            return $this->request('admin/business/disputes', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * User Disputed Transactions
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function userDisputedTransactions(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['account_id'], $data);
            return $this->request('admin/business/customers/transactions/disputes', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Ignore Business Notifications
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function ignoreBusinessNotifications(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['business_id', 'notifications'], $data);
            return $this->request('admin/business/notifications/ignore', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Business Given Notifications
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function businessGivenNotifications(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['business_id', 'notifications'], $data);
            return $this->request('admin/business/notifications/given', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Allow Business Notifications
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function allowBusinessNotifications(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['business_id', 'notifications'], $data);
            return $this->request('admin/business/notifications/allow', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Get Business Notifications List
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function getBusinessNotificationsL(array $data) {
        try {
            return $this->request('admin/business/notifications/list', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Agree To API Terms
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function agreeApiTerms(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['business_id'], $data);
            return $this->request('admin/business/tokens/agreement/update', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Fetch Admin Setting
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function fetchAdminSetting(array $data) {
        try {
            return $this->request('admin/settings/fetch', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Update Admin Setting
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function updateAdminSetting(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['bank_transfer_switch'], $data);
            return $this->request('admin/settings/update', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * list Fee Coupon
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function listFeeCoupon(array $data) {
        try {
            return $this->request('admin/feecoupon/list/all', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * list All Payment
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function listAllPayment(array $data) {
        try {
            return $this->request('admin/payments/all', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Assign Fee Coupon
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function assignFeeCoupon(array $data) {
        try {
            return $this->request('admin/feecoupon/assign', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Admin Geo Locate
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    
    public function adminGeoLocate(array $data) {
        try {
            return $this->request('admin/geolocate', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
