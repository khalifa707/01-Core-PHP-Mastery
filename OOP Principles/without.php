<?php

header('content-Type: text/plain');

$account1=[
    'nr' => '123456',
    'balance' => 1000,
    'name' => 'Olivia Mason'
];

$account2=[
    'nr' => '1234567',
    'balance' => 10000,
    'name' => 'John Doe'
];
function print_balance($account)
{
    echo "The Balance: ".$account['balance']."\n";
}

function transfer(array &$from, array &$to, int $amount)
{
    if($from['balance'] >= $amount)
    {
        $from['balance'] = $from['balance'] - $amount;
        $to['balance'] = $to['balance'] + $amount;

    }else{
        echo "Not enough money\n";
        return;
    }
    $from['balance'] = $from['balance'] - $amount;
    $to['balance'] = $to['balance'] + $amount;
}

print_balance($account1);
print_balance($account2);

transfer($account2,$account1,300);

print_balance($account1);
print_balance($account2);