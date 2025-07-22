<?php

class BankAccount
{
    public string $nr;
    public string $holder;
    public float $balance;

}

$account1 = new BankAccount();
$account1->nr = '123456';
$account1->holder = 'Olivia Mason';
$account1->balance = 1000;

function print_balance(BankAccount $account): void
{
    echo "The Balance: ".$account->balance."\n";
}

print_balance($account1);
