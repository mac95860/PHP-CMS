<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $list = [1,2,3,4, 2.5,5];

        echo max($list);
        echo '<br>';
        echo min($list);
        echo '<br>';
        echo print_r($list);
        echo '<br>';
        sort($list);
        echo print_r($list);
    ?>
</body>
</html>