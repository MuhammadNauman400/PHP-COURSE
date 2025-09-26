<?php

// Class allows us to bundle poperties with their methods and functions. 

class BankAccount
{
    public string $nr;
    public string $holder;
    public float $balance;
}

$account1 = new BankAccount();
$account1->nr = '23232323232';
$account1->holder = 'ABC';
$account1->balance = 23.55;

function print_balance(BankAccount $account){
    echo "The balance of account #{$account->nr} is {$account->balance}.\n";
}


var_dump($account1);
print_balance($account1);
