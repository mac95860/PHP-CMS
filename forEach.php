<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $numbers = array(345, 398, 28390, 382, 4028, 111);
        // forEach is for working with arrays
        // "as" assigns each value to a new variable
        foreach($numbers as $number) {
            echo $number . "<br>";
        }
    ?>
</body>
</html>