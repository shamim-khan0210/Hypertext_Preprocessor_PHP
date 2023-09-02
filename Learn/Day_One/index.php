<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Document</title>
</head>
<body>
    <?php
        echo 'Shamim Khan';
        echo'<br>';
        echo 'Hasibul hasan '.'<br>'; //.'<br>' is for line brake

        //Variable
        $food = "Pizza";
        echo 'i love '. $food .'<br>';

        $firstAge = 10;
        $secondAge = 15;
        $totalAge = $firstAge + $secondAge;

        echo $totalAge .'<br>';
        echo $firstAge - $secondAge;

        /* 

        We can use 'print' for show output, 
        but print is little bit slower than 'echo'
        and print always add 1 with output and show after
        1st output

        */ 

        $flower  = 'Rose';

        print $secondAge / $firstAge .'<br>';
        print $secondAge / $firstAge;

        print 'I love ' .$flower .'<br>';
        print $flower;
        $flower = print('Beautiful');
        print '<br>';

        echo "Finish this code !";
     ?>
</body>
</html>