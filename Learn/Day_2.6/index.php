<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Function
    function text_Name($name, $age = 3){
        echo "This is function $name and age is $age <br>";
    }
    text_Name('Shamim', 23);
    text_Name('Hasibul', 24);
    text_Name('Khan');


    // Time & Date

    echo "Today is : ".date("d.m.Y") ."<br>";
    echo "Today is : ".date("Y") ."<br>";
    echo "Today is : ".date("h.i.sa") ."<br>";
    date_default_timezone_set("Asia/Dhaka");
    echo "Today is : ".date("h.i.sa") ."<br>";

     ?>
</body>
</html>