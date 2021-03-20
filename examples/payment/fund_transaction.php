<?php

include '../../vendor/autoload.php';

// Set Access Key
$privateKey = "v_sandbox_xxxxxxx"; // set env

// Initialize Service Loader
$vesicash = new VesicashServices($privateKey, 'sandbox');

// Call service of choice
try {
    // Pay for transaction
    $pay = $vesicash->service('payment')->pay([
        'transaction_id' => 'wnhIlowZIkIqSpUqxNaz'
    ]);

} catch (Exception $e) {
    // Catch any error
    throw new Exception($e->getMessage());
}

if($pay->code == 200) {
    $paymentPage = $pay->message->link;
    // redirect to payment page
}