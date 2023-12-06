<head>
<body>
<?php echo "Welcome to php World </br>";
define("UCSC", "University of Colombo, School of computing");
echo("defined?" .defined("UCSC"));
 $cars = array ("Saab", "Volvo", "BMW", "Toyota", 50);
echo($cars[0]. "</br>");

$subjects = array ("IT001" => "Computer Systems",
"IT002" => "Information Systems",
"IT003" => "Programming");
var_dump ($subjects);
echo ("</br>");
echo ($subjects["IT002"] . "</br>");
$bit = array ("A", "B", "C");

function asset ($x, $y){
    $temp = $x + $y;
    echo $temp . "</br>";

} 
asset(1,2);
function sub ($x, $y){
    $temp = $x - $y;
    return $temp;
}
$y = sub(2,3);
echo $y . "</br>";
?>
    
</body></head>