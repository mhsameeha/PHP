<?php
require_once "Account.php";
require_once "SuperSavingsAccount.php";
$acc1 = new Account;
$acc1->accNum = "001";
var_dump($acc1);
echo "</br>";
echo $acc1->accNum . "-----" . $acc1->balance . "</br>";
//call interestRate function;
$acc1->Deposit(10000);
echo $acc1->accNum . "-----" . $acc1->balance . "</br>";
Account::setInterestRate(0.2);
$acc2 = new SuperSavingsAccount;
// $acc1 -> setInterestRate(0.9); 
var_dump ($acc2);
echo "</br>";

//self:: to refer to static variables
//(cname::method() to refer to static functions)


?>