<?php 
include_once 'class/SavingAccount.php';
include_once 'class/Customer.php';
$savingAccount = new SavingAccount(5, 1000);

$client = new Customer('Sellaouti', 'Aymen', new DateTime('1982-07-02'), $savingAccount);

$client->show();

$savingAccount->addInterestRate();

$client->show();

$savingAccount->addInterestRate();