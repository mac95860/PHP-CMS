<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function calculation() {
            $number1 = 20;
            $number2 = 30;

            $sum = $number1 + $number2;
            return $sum;
        }

       $theSum = calculation();
       echo $theSum . "<br>";

       function sayHola ($hello) {
            echo $hello;
       }

       sayHola("is that spanish?");

    ?>
</body>
</html>