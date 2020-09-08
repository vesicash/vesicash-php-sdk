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
    $updateUserAccount = $vesicash->service('admin')->updateUserProfile([
        'account_id' => 9256738111, // or $_SESSION['VESICASH_ACCOUNT_ID'];
        'updates'    => [
            'address'  => '12 Falomo Drive, Ikoyi.',
            'city'     => 'Lagos',
            'state'    => 'Lagos',
            'country'  => 'Nigeria',
            'dob'      => '1992/05/29' // YYY-MM-DD
        ]
    ]);
} catch (Exception $e) {
    // Catch any error
    throw new Exception($e->getMessage());
}
?>