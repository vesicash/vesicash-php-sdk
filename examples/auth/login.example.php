<?php

include '../../vendor/autoload.php';

// Set Access Key
$privateKey = "v_sandbox_rcFScqeBxChswiaiG3hfLwEFVq3j3jtzbLnbaQmTrRAwwSwyJE"; // set env

// Initialize Service Loader
$vesicash = new VesicashServices($privateKey, 'sandbox');

// Call service of choice
try {
    $login = $vesicash->service('auth')->loginViaUsername([
        'username' => 'precious@vesicash.com',
        'password' => 'Geek1337$'
    ]);
    var_dump($login);
} catch (Exception $e) {
    // Catch any error
    throw new Exception($e->getMessage());
}

// Decode Response
$loginResponse = json_decode($login);
