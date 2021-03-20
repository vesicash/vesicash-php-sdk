<?php

include '../../vendor/autoload.php';

// Set Access Key
$privateKey = "v_sandbox_xxxxxxx"; // set env

// Initialize Service Loader
$vesicash = new VesicashServices($privateKey, 'sandbox');

// Call service of choice
try {
    $signup = $vesicash->service('auth')->signup([
        'email_address' => 'john@vesicash.com',
        'password'      => 'test', // we will handle hashing
        'country'       => 'NG' // Nigeria or NG works.
    ]);
} catch (Exception $e) {
    // Catch any error
    throw new Exception($e->getMessage());
}