<!DOCTYPE html>
<body>
    <?php 
    function myTest(){
        $x = 5;
        $y = 6;
        $x++;
        return $x;
    }
    $y = 5;
    function newFunction (){
        global $y;
        $y++;
        return $y;
    }
    $z = newFunction();
    echo $z;
    ?>
</body>
</html>