<?php

class BankAccount
{


    public function __construct(
        
        private string $nr,
        private string $holder,
        private float $balance
    ) {

    }
    public function getBalance(): float {
        return $this->balance;
    }

    private function setBalance(float $balance){
        $this->balance = $balance;
    }



    public function printBalance()
    {
        echo "The balance of account #{$this->nr} is {$this->balance}.\n";
    }

    function transfer(BankAccount $to, $amount = 0)
    {

        if ($this->balance >= $amount) {
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

