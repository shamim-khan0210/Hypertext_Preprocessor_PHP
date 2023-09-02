<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //String
        echo 'String length count: ';
        echo strlen("I love bangladesh"); //17
        echo '<br>';

        echo 'String word count: ';
        echo str_word_count("I am a student of North South University"); // 8
        echo '<br>';

        echo 'For reverse <br>';
        echo strrev('I live in bangladesh');
        echo '<br>';

        // For position count
        echo 'Position Count <br>';
        $test = strpos('I love to eat pizza', 'to');
        var_dump($test);
        echo '<br>';

        // For replace word
        echo str_replace('Pizza', 'Fish', 'I love to eat Pizza');


     ?>
</body>
</html>