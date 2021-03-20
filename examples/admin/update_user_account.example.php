<?php
include '../../vendor/autoload.php';

// Set Access Key
$privateKey = "v_sandbox_xxxxxxx"; // set env

// Initialize Service Loader
$vesicash = new VesicashServices($privateKey, 'sandbox');

// Call service of choice
try {
    $updateUserAccount = $vesicash->service('admin')->updateUserAccount([
        'account_id' => 9256738111, // or $_SESSION['VESICASH_ACCOUNT_ID'];
        'updates'    => [
            'firstname'     => 'John',
            'lastname'      => 'Doe',
            'username'      => 'johndoey',
            'phone_number'  => '051444222'
        ]
    ]);
} catch (Exception $e) {
    // Catch any error
    throw new Exception($e->getMessage());
}
?>