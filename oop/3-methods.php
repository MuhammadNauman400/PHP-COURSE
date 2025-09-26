<?php


class BankAccount
{
    public string $nr;
    public string $holder;
    public float $balance;

    function printBalance(){
        // this representing the current instance
    echo "The balance of account #{$this->nr} is {$this->balance}.\n";
}

}


$account1 = new BankAccount();
$account1->nr = '23232323232';
$account1->holder = 'ABC';
$account1->balance = 23.55;
$account1->printBalance();


$account2 = new BankAccount();
$account2->nr = '1212121212';
$account2->holder = 'DEF';
$account2->balance = 77.99;
$account2->printBalance();