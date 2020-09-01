<?php
include 'vendor/autoload.php';
include 'src/Vesicash.php';

$privateKey = getenv('VESICASH_SECRET_KEY');

$vesicash = new Vesicash($privateKey);

try {
    $login = $vesicash->auth->loginViaUsername([
        'username' => 'precious@vesicash.com',
        'password' => 'test'
    ]);

    var_dump($login);
} catch (Exception $e) {
    var_dump($e->getMessage());
}