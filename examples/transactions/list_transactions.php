<?php

include '../../vendor/autoload.php';

// Set Access Key
$privateKey = getenv('VESICASH_PRIVATE_KEY');

// Initialize Service Loader
$vesicash = new VesicashServices();
$vesicash->setKey($privateKey)
    ->setMode('sandbox');

// Call service of choice
try {
    // List By Business
    $listByBusiness = $vesicash->service('transactions')->listBusinessTransactions([
        'business_id' => 9752720388
    ]);

    // List By User
    $listByUser = $vesicash->service('transactions')->listUserTransactions([
        'account_id' => 4666124899
    ]);

} catch (Exception $e) {
    // Catch any error
    throw new Exception($e->getMessage());
}