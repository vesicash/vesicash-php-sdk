<?php
include '../../vendor/autoload.php';

// Set Access Key
$privateKey = "v_sandbox_xxxxxxx"; // set env

// Initialize Service Loader
$vesicash = new VesicashServices($privateKey, 'sandbox');

// Call service of choice
try {
    $updateUserAccount = $vesicash->service('admin')->updateBusinessProfile([
        'account_id' => 9256738111, // or $_SESSION['VESICASH_ACCOUNT_ID'];
        'updates'    => [
            'business_name'     => 'Vesicash.',
            'business_type'     => 'Fintech',
            'logo_uri'          => 'https://vesicash.com/logo.png',
            'website'           => 'https://vesicash.com',
            'business_address'  => '16 Alh. Mudashiru Eletu Way, Osapa-London Estate, Lekki, Lagos.', // YYY-MM-DD,
            'country'           => 'Nigeria'
        ]
    ]);
} catch (Exception $e) {
    // Catch any error
    throw new Exception($e->getMessage());
}
?><?php
