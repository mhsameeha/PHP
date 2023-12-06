<?php
$a = new NumberFormatter('en_US', NumberFormatter::SPELLOUT);
$a->setTextAttribute(
    NumberFormatter::DEFAULT_RULESET,
    "%spellout-ordinal"
);
$b = new cookieDemo;
$x = $b::$visit;
if (isset($_COOKIE["visited"])) {
    $x = $_COOKIE["visited"];
    $ordinal = $a->format($x);
    echo "Welcome Back. Your " . $ordinal . " visit</br>";
    $x++;

} else {
    echo "Welcome </br>";
}
setcookie("visited", $x, time() + 60 * 60 * 24);

?>

<?php
class cookieDemo
{
    static $visit = 1;
}


?>