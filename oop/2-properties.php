<?php

class BankAccount
{
    public string $nr;
    public string $holder;
    public float $balance = 0; 

    public $something;
}

$account = new BankAccount();
$account->something = [];
$account->nr = 1234;
var_dump($account);


$account->nr = '76767';
var_dump($account);

var_dump($account->nr);
