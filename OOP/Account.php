<?php
class Account
{
    public static $interestRate = 0.1; //non-static will waste memory (why static?)
    public $accNum;
    public $balance;
    public function Deposit($amount)
    {
        $this->balance += $amount; //have to use $this to refer to an instance variable in java
    }
    public function Withdraw($amount)
    {
        $this->balance -= $amount;

    }
    public function addInterest()
    {
        $this->balance += $this ->balance * self::$interestRate;

    }
   public static function setInterestRate($rate){
        self::$interestRate = $rate;

    }

  function  __construct(){
    //constructor
    echo "Hello World" . "</br>";

    //constructor uses : establishing connection with the database
    //initialization (variables,network, open a file)
    //destructor: when the object is garbage collected
  }
  function __destruct(){
    //destructor: database connection can be removed
    // resource cleaning;
    //when the code is going out of the scope, the function is called;


    // why do we have destructor in php and not in java?

//   In PHP, you have destructors in the context of object-oriented programming, which allow you to define a special method called __destruct
//  in a class. This method is automatically called when an object is no longer referenced or goes out of scope. The __destruct method is used for 
//  performing cleanup tasks, such as closing open files or releasing resources, before an object is destroyed.
// In Java, you don't have the concept of destructors in the same way as PHP. Instead, Java relies on automatic garbage collection to manage 
// memory and clean up objects that are no longer referenced. When an object in Java is no longer reachable and there are no more references to
//  it, the Java Virtual Machine (JVM) automatically reclaims the memory occupied by that object.
//  The absence of destructors in Java can be seen as a design choice to simplify memory management and reduce the risk of resource leaks
//  and memory errors. Java's garbage collector handles memory management efficiently without requiring explicit destructor methods. Java provides 
//  a mechanism called finalize(), but it's discouraged to use it for resource cleanup, and it's not equivalent to PHP's __destruct.
// In summary, while PHP provides destructors in the form of the __destruct method for custom resource cleanup, Java relies on automatic 
// garbage collection to manage memory and does not have explicit destructors like PHP. Each language has its own approach to memory management 
// and resource cleanup.
  }
}
?>