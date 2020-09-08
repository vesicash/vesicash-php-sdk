<?php

include '../../vendor/autoload.php';

// Set Access Key
$privateKey = "v_sandbox_xxxxxxx"; // set env

// Initialize Service Loader
$vesicash = new VesicashServices($privateKey, 'sandbox');

// Call service of choice
try {
    $login = $vesicash->service('auth')->loginViaUsername([
        'username' => 'john@vesicash.com',
        'password' => 'test'
    ]);
    var_dump($login);
} catch (Exception $e) {
    // Catch any error
    throw new Exception($e->getMessage());
}

// Decode Response
$loginResponse = json_decode($login);
