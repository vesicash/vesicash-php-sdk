<?php

include '../../vendor/autoload.php';

// Set Access Key
$privateKey = "v_sandbox_xxxxxxx"; // set env

// Initialize Service Loader
$vesicash = new VesicashServices($privateKey, 'sandbox');

// Call service of choice
try {
    // Pay for transaction
    $pay = $vesicash->service('payment')->initManualDisbursement([
        'recipient_id'      => 4865544336,
        'amount'            => 1000,
        'currency'          => 'NGN',
        'debit_currency'    => 'NGN'
    ]);

} catch (Exception $e) {
    // Catch any error
    throw new Exception($e->getMessage());
}