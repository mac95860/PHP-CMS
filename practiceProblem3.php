<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         if(3 < 1) {
            echo "I love PHP" . "<br>";
        } else if(20 < 10) {
            echo "passport.js is for squares" . "<br>";
        } else {
            echo "as is Bulma framework" . "<br>";
        };

        for($i = 0; $i <= 10; $i++) {
            echo $i . "<br>";
        };

        $value = 10;
        switch($value) {
            case 20:
            echo "This is it man";
            break;
            case 21:
                echo "this is it man";
            break;
            case 10:
                echo "this is the one";
            break;
        }
    ?>
</body>
</html>