<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // Operator

        $x = 2;
        $y = 3;

        echo $x ** $y; // Here 3 power of 2 = 2^3 = 8
        echo '<br>';

        // Assignment Operator
        $z = $x + $y; // '=' is assignment operator & $x+$y assign into $z

        $x += $y; //here $x = $x + $y


        // Comparison Operator
        $x = 50;
        $y = '50';

        var_dump($x == $y); // '==' just value same then return true

        var_dump($x === $y); // '===' means, two comparison operand must need to same datatype

        var_dump($x != $y); // Just Compare with value

        var_dump($x !== $y); // Compare with datatype

     ?>
</body>
</html>