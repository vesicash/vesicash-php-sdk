<?php

include '../../vendor/autoload.php';

// Set Access Key
$privateKey = "v_sandbox_xxxxxxx"; // set env

// Initialize Service Loader
$vesicash = new VesicashServices($privateKey, 'sandbox');

// Call service of choice
try {
    $request = $vesicash->service('transactions')->requestTransactionDueDateExtension([
        'transaction_id' => 'wnhIlowZIkIqSpUqxNaz',
        'note'           => 'note'
    ]);

} catch (Exception $e) {
    // Catch any error
    throw new Exception($e->getMessage());
}