<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // Loops
   

    // While loop
     $x = 3;
    while($x <= 10){
        echo "The number is: $x <br>";
        $x++;
    }

    // Do while loop
    $x = 4;
    do{
        echo "The number is: $x <br>";
        $x++;
    }while($x <= 10);

    // For loops
    for($x = 0; $x <= 15; $x+=5 ){
        echo "The number is: $x <br>";
    }
    
    ?>
</body>
</html>