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
    $login = $vesicash->service('auth')->loginViaUsername([
        'username' => 'john@vesicash.com',
        'password' => 'test'
    ]);
} catch (Exception $e) {
    // Catch any error
    throw new Exception($e->getMessage());
}

// Decode Response
$loginResponse = json_decode($login);

// Check if response is 200 or not
if ($loginResponse->code == 200) {
    // logged in
    // let user in
} else {
    die("Login failed, possible reason: " . $loginResponse->message);
}