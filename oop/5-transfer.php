<?php

class BankAccount
{
    

    function __construct(
        public string $nr,
        public string $holder,
        public float $balance
    ) {
    
    }

    function printBalance()
    {
        echo "The balance of account #{$this->nr} is {$this->balance}.\n";
    }

    function transfer(BankAccount $to, $amount = 0){

        if ($this->balance >= $amount) {
            // $this->balance = $this->balance - $amount;
            // $to->balance = $to->balance + $amount;
            $this->balance -= $amount;
            $to->balance += $amount;
            return true;
        } else {
            return false;
        }
    }
}


$account1 = new BankAccount('122112', 'Nauman', 2999.8);
$account1->printBalance();

$account2 = new BankAccount('43434434', 'Ali', 250.98);
$account2->printBalance();
$account2->transfer($account1, 200);

$account1->printBalance();
$account2->printBalance();

