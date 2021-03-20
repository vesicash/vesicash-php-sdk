<?php

include '../../vendor/autoload.php';

// Set Access Key
$privateKey = "v_sandbox_xxxxxxx"; // set env

// Initialize Service Loader
$vesicash = new VesicashServices($privateKey, 'sandbox');

// Call service of choice
try {
    // Add Parties To Transaction
    $addParties = $vesicash->service('transactions')->rejectTransaction([
        'transaction_id' => 'wnhIlowZIkIqSpUqxNaz'
    ]);

} catch (Exception $e) {
    // Catch any error
    throw new Exception($e->getMessage());
}