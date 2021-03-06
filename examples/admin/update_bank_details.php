<?php
include '../../vendor/autoload.php';

// Set Access Key
$privateKey = "v_sandbox_xxxxxxx"; // set env

// Initialize Service Loader
$vesicash = new VesicashServices($privateKey, 'sandbox');

// Call service of choice
try {
    $request = $vesicash->service('admin')->updateUserBankAccountDetails([
        'account_id' => 9256738111, // or $_SESSION['VESICASH_ACCOUNT_ID'];
        'updates'    => [
            'bank_id'                   => 23,
            'account_name'              => 'John Doe',
            'account_no'                => '3012364609',
            'mobile_money_operator'     => 'Tigo', // Only required for MOMO
        ]
    ]);
} catch (Exception $e) {
    // Catch any error
    throw new Exception($e->getMessage());
}
?>