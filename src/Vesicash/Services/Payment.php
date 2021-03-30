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
        $this->required(['transaction_id'], $data);

        try {
            return $this->request('payment/pay', $data);
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
        $this->required(['account_id', 'currency', 'country', 'amount'], $data);

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
            // TODO
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
}
