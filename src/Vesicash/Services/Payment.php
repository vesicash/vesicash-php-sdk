<?php
namespace Vesicash\Vesicash\Services;
use Exception;
use Vesicash\Request;

class Payment extends Request
{
    /**
     * Pay For Transaction
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function pay($data) {
        $this->required(['transaction_id', 'payment_gateway', 'success_page'], $data);

        try {
            return $this->request('payment/pay', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Pay For Transaction Pool
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function payPool($data) {
        $this->required(['transaction_id', 'account_id', 'success_page'], $data);

        try {
            return $this->request('payment/pay/pool', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Pay Headless (Pay without a transaction)
     
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function payHeadless($data) {
        $this->required(['account_id', 'currency', 'country', 'amount', 'fund_wallet'], $data);

        try {
            return $this->request('payment/pay/headless', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Fund Wallet
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function fundWallet(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['account_id', 'amount', 'currency'], $data);

            return $this->request('payment/pay/fund/wallet', ['account_id' => $data['account_id'], 'currency' => $data['currency'], 'amount' => $data['amount']]);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Verify Wallet Funding
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function verifyWalletFunding(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['reference', 'amount', 'currency'], $data);

            return $this->request('payment/pay/fund/wallet/verify', ['reference' => $data['reference'], 'currency' => $data['currency'], 'amount' => $data['amount']]);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Wallet Disbursement
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function walletWithdrawal(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['account_id', 'amount', 'currency', 'debit_currency'], $data);

            return $this->request('payment/disbursement/wallet/withdraw', $data);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Funds Disbursement To Bank Account
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function walletWithdrawalToBankAccount(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['account_id', 'amount', 'currency', 'debit_currency', 'firstname', 'lastname', 'bank_account_number', 'bank_code'], $data);

            return $this->request('payment/disbursement/wallet/withdraw', $data);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Verify Disbursement Status
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function verifyWalletWithdrawal(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['disbursement_id'], $data);

            return $this->request('payment/disbursement/verify', $data) ?? NULL;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * List Disbursement
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function listDisbursements(array $data) {
        try {

            // Make sure the required data is being passed.
            $this->required(['account_id'], $data);

            return $this->request('payment/disbursement/wallet/withdraw/'.$data['account_id'], $data);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Manual Disbursement
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function manualDisbursements(array $data) {
        try {

            // Make sure the required data is being passed.
            $this->required(['transaction_id'], $data);

            return $this->request('payment/disbursement/process/manual', $data);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Reinitialize Disbursement
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function reinitializeDisbursements(array $data) {
        try {

            // Make sure the required data is being passed.
            $this->required(['transaction_id', 'disbursement_id'], $data);

            return $this->request('payment/disbursement/reinitialize', $data);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Refund Disbursement
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function refundDisbursements(array $data) {
        try {

            // Make sure the required data is being passed.
            $this->required(['transaction_id'], $data);

            return $this->request('payment/disbursement/process/refund', $data);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Deposits Funds
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function depositFunds(array $data) {
        try {
            return $this->request('payment/disbursement/wallet/deposit', $data);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Headless Disbursement
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function headlessDisbursements(array $data) {
        try {

            // Make sure the required data is being passed.
            $this->required(['recipient_id', 'payment_id', 'amount', 'currency', 'type'], $data);

            return $this->request('payment/disbursement/process/headless', $data);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Create Payment
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function createPayment(array $data) {
        try {

            // Make sure the required data is being passed.
            $this->required(['transaction_id', 'total_amount', 'currency'], $data);

            return $this->request('payment/create', $data);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Create Payment Headless
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function createPaymentHeadless(array $data) {
        try {

            // Make sure the required data is being passed.
            $this->required(['account_id', 'total_amount'], $data);

            return $this->request('payment/create/headless', $data);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Create Payment Account
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function createPaymentAccount(array $data) {
        try {

            // Make sure the required data is being passed.
            $this->required(['transaction_id'], $data);

            return $this->request('payment/payment_account/generate', $data);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Verify Payment Account
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function verifyPaymentAccount(array $data) {
        try {

            // Make sure the required data is being passed.
            $this->required(['reference'], $data);

            return $this->request('payment/payment_account/verify', $data);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Verify Payment Account
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function redeemFeeCoupon(array $data) {
        try {

            // Make sure the required data is being passed.
            $this->required(['transaction_id', 'code'], $data);

            return $this->request('payment/feecoupon/redeem', $data);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    
}
