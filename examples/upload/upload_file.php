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
    $file = $_FILES['file'];

    $pay = $vesicash->service('upload')->upload([
        'files[0]' => $file // Pass blob here
    ]);

} catch (Exception $e) {
    // Catch any error
    throw new Exception($e->getMessage());
}

if($pay->code == 200) {
    $paymentPage = $pay->message->link;
    // redirect to payment page
}