<?php 
require_once "Account.php";
class SuperSavingsAccount extends Account {
    function __construct(){
        echo "SuperSavingsAccount constructor";
    }
    function __destruct(){
        echo "SuperSavingsAccount destructor";
    }

    function addInterest (){
        $this->balance += $this ->balance * self::$interestRate;

    }
// in php the sub class constructor and destructor is called, 
//not the super class des/cons;
//in java super/sub classes cons are called;
//have to call the parent class constructor in php seperately
// subclass features: inherit, override, add newfeatures
}



?>