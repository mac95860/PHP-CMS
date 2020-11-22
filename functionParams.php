<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $greet = "well hello!";
        $different_greeting = "Hello, to you sir!";

        function greeting($value) {
            echo $value;
        }
    ?>
    <h1>Greeting: <?php greeting($greet); ?> </h1> 
    <h1>Greeting: <?php greeting($different_greeting); ?> </h1> 
</body>
</html>