<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $x = "outside";
        function convert() {

            // looks for $x outside of the scope of the function and allows it to be changed
            global $x;
            $x = "inside";
        }

        echo $x . "<br>";
        convert();
        echo $x;
    ?>
</body>
</html>