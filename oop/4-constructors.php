<?php


// class BankAccount
// {
//     public string $nr;
//     public string $holder;
//     public float $balance;

//     function __construct(string $nr, string $holder, float $balance){
//         // this func will executed automatically when we create a new object or a bank account.
//         $this->nr = $nr;
//         $this->holder = $holder;
//         $this->balance = $balance;

//     }

//     function printBalance(){
//     echo "The balance of account #{$this->nr} is {$this->balance}.\n";
// }

// }


// $account1 = new BankAccount('122112', 'Nauman', 2999.8);
// $account1->printBalance();


// Another short and Efficient way is

class BankAccount
{
    public float $balance;

    function __construct(
        public string $nr,
        public string $holder,
        float $balance
    ) {
        // And we can access property like balance manually too or if we have to add
        // some business logic 
        $this->balance = max(0, $balance);
    }

    function printBalance()
    {
        echo "The balance of account #{$this->nr} is {$this->balance}.\n";
    }
}


$account1 = new BankAccount('122112', 'Nauman', 2999.8);
$account1->printBalance();
