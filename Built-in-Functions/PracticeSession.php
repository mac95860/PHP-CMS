<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo rand(1, 1000) . "<br>";

        $string = "Hello World";

        $valueLength = strlen($string);

        echo $valueLength . "<br>";

        $values = ['sdlfja', 23212, "sfaee", 23, 889, $string];

        $found = in_array($string, $values);

        if($found) {
            echo "found it";
        } else {
            echo "messed up";
        };
    ?>
</body>
</html>