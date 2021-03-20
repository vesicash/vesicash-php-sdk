<?php

include '../../vendor/autoload.php';

// Set Access Key
$privateKey = "v_sandbox_xxxxxxx"; // set env

// Initialize Service Loader
$vesicash = new VesicashServices($privateKey, 'sandbox');

// Call service of choice
try {
    // Add Parties To Transaction
    $addParties = $vesicash->service('transactions')->addTransactionParties([
        'transaction_id'         => 'wnhIlowZIkIqSpUqxNaz',
        'parties'                => [
            'sender'                    => 5841206525,
            'recipient'                 => 9432695230,
            'buyer'                     => 5841206525,
            'seller'                    => 9432695230,
            'charge_bearer'             => 5841206525,
            'shipping_charge_bearer'    => 4865544336,
            'shipping_charge_recipient' => 4865544336
        ]
    ]);

} catch (Exception $e) {
    // Catch any error
    throw new Exception($e->getMessage());
}