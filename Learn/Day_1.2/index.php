<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // Object
        class Phone{
            var $model;
            function phoneModel($number){
                global $model;
                $model = $number;
                echo "This is $model <br>";
            }
        }
        
        $apple = new Phone;
        $apple-> phoneModel('iPhpne 15 Pro Max');

        $sumsung = new Phone;
        $sumsung-> phoneModel('s24 Ultra');

    ?>
</body>
</html>