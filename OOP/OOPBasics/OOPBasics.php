<?php 
class Account{
public $accNum;
public $balance;
}
$acc1 = new Account;
$acc1 -> accNum = "001";
$acc1 -> balance= 0.01;

var_dump($acc1);
echo "</br>";
echo $acc1 -> accNum . "----" . $acc1 -> balance . "</br>";






?>