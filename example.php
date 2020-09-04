<?php
include 'vendor/autoload.php';

// Set Access Key
$privateKey = "v_sandbox_rcFScqeBxChswiaiG3hfLwEFVq3j3jtzbLnbaQmTrRAwwSwyJE";

// Initialize Service Loader
$vesicash = new VesicashServices($privateKey);

// Call service of choice
$login = $vesicash->service('auth')->loginViaUsername([
    'username' => 'precious@vesicash.com',
    'password' => 'test'
]);

// Decode Response
$loginResponse = json_decode($login);

// Check if response is 200 or not
if($loginResponse->code == 200) {
    // logged in
} else {
    die("Login failed, possible reason: " . $loginResponse->message);
}