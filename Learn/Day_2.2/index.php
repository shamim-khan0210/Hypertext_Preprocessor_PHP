<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Constant

        define('a', 17); // Here 'a = variable', '17 = value of a'
        define('A', 19); 
        define('Cars', [
            'BMW',
            'AUDI',
            'TOYOTA'
        ]);

        echo(a);
        echo '<br>';
        var_dump(A);
        echo '<br>';

        echo(Cars[2]); 
        echo '<br>';

        var_dump(Cars);
        echo '<br>';

        function name(){
            $x = 10;
            echo($x);
            echo (' '.Cars[1]);
        }

        name();


     ?>
</body>
</html>