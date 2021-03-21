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
            return $this->request('/payment/pay', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Initial Manual Disbursement
     * @param array $data
     * @return mixed
     * @throws Exception
     */
    public function initManualDisbursement(array $data) {
        try {
            // Make sure the required data is being passed.
            $this->required(['recipient_id', 'amount', 'currency', 'debit_currency'], $data);
            return $this->request('/payment/disbursement/wallet/withdraw', []);
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

            return $this->request('/payment/pay/fund/wallet', ['account_id' => $data['account_id'], 'currency' => $data['currency'], 'amount' => $data['amount']]);

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
            $this->required(['account_id', 'amount', 'currency'], $data);

            return $this->request('/payment/pay/fund/wallet/verify', ['reference' => $data['reference'], 'currency' => $data['currency'], 'amount' => $data['amount']]);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}