<?php

include '../../vendor/autoload.php';

// Set Access Key
$privateKey = "v_sandbox_xxxxxxx"; // set env

// Initialize Service Loader
$vesicash = new VesicashServices($privateKey, 'sandbox');

// Call service of choice
try {
    // Product Transaction
    $createProductTransaction = $vesicash->service('transactions')->create([
        'title'         => 'Purchase of Iphone\'s',
        'type'          => 'product',
        'products'      => [
                [
                    'title'     => 'iphone xr',
                    'quantity'  => 1,
                    'amount'    => 30000
                ],
                [
                    'title'     => 'iphone se',
                    'quantity'  => 1,
                    'amount'    => 40000
                ]
        ],
        'description' => 'Description of the purchase of Iphone\'s',
        'parties'     => [
            'sender'            => 5841206525,
            'recipient'         => 9432695230,
            'buyer'             => 5841206525,
            'seller'            => 9432695230,
            'charge_bearer'     => 5841206525,
            'shipping_charge_bearer' => 4865544336,
            'shipping_charge_recipient' => 4865544336
        ],
        'inspection_period'     => 1,
        'due_date'              => '2/12/2020',
        'currency'              => 'NGN'
    ]);

    // One-Off Transaction
    $createOneOffTransaction = $vesicash->service('transactions')->create([
        'title'         => 'Design a house plan',
        'type'          => 'oneoff',
        'quantity'      => 1,
        'amount'        => 3000,
        'description' => 'Description of the purchase of Iphone\'s',
        'parties'     => [
            'sender'            => 5841206525,
            'recipient'         => 9432695230,
            'buyer'             => 5841206525,
            'seller'            => 9432695230,
            'charge_bearer'     => 5841206525,
            'shipping_charge_bearer' => 4865544336,
            'shipping_charge_recipient' => 4865544336
        ],
        'inspection_period'     => 1,
        'due_date'              => '2/12/2020',
        'currency'              => 'NGN'
    ]);

    // Milestone Transaction
    $createMileStoneTransaction = $vesicash->service('transactions')->create([
        'title'             => 'Build an e-commerce app',
        'type'              => 'milestone',
        'milestones'        => [
            [
                'title'         => 'Build contact form',
                'quantity'      => 1,
                'amount'        => 30000,
                'description'   => 'Desc',
                'inspection_period' => 1,
                'due_date'      => '12/12/2020'
            ],
            [
                'title'         => 'Build mobile app',
                'quantity'      => 1,
                'amount'        => 30000,
                'description'   => 'Desc',
                'inspection_period' => 1,
                'due_date'      => '12/24/2020'
            ]
        ],
        'description' => 'A new app',
        'parties'     => [
            'sender'            => 5841206525,
            'recipient'         => 9432695230,
            'buyer'             => 5841206525,
            'seller'            => 9432695230,
            'charge_bearer'     => 5841206525,
            'shipping_charge_bearer' => 4865544336,
            'shipping_charge_recipient' => 4865544336
        ],
        'inspection_period'     => 1,
        'due_date'              => '2/12/2020',
        'currency'              => 'NGN'
    ]);

} catch (Exception $e) {
    // Catch any error
    throw new Exception($e->getMessage());
}

// Decode Response
$response = json_decode($createProductTransaction);

// Check if response is 200 or not
if ($response->code == 200) {
    $transaction_id = $response->data->transaction_id;
} else {
    die("Failed to create transaction");
}