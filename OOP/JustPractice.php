<?php
function writeMessage($x)
{
    echo "$x" . "\n";

}
writeMessage("Hello there");

$cars = array("Volvo", "BMW", "Toyota");
echo "I Like " . $cars[0] . "," . $cars[1] . "," . $cars[2] . ".";
echo "\n" . "the number of elements = " . count($cars);

$a = array(
    1 => "First Item",
    3 => "Second Item",
    "item 3" => "Third Item"
);

foreach ($a as $value) {
    echo "\n $value" . "\n";
}

array_push($a, "Kamal", "Waruna");
foreach ($a as $value) {
    echo "\n $value" . "\n";

}

$myArray = array(
    "firstRow" => array("One" => "Apples", "2" => "Orange", "3" => "Banana"),
    "secondRow" => array("1" => "Carrot", "2" => "Lettuce", "3" => "Cabbage"),
    "thirdRow" => array("1" => "House", "2" => "Keys", "3" => "Table")
);
foreach ($myArray as $v => $r) {
    echo "$v: ";
    foreach ($r as $elements => $value) {
        echo "$elements => $v, ";
    }
    echo "\n";
}

echo "this is vardump . \n";
var_dump($myArray); 

?>

<?php

function factorial($n)
{
    $f = 1;
    while ($n >= 1) {
        $f = $f * $n;
        $n--;

    }
    return $f;
}
echo factorial(6);
echo "factorial: ", 0, "=", factorial(0), "\n";
echo "factorial: ", 1, "=", factorial(1), "\n";
echo "factorial: ", 5, "=", factorial(5), "\n";





?>