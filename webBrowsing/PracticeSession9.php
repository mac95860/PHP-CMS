<?php
    session_start();

    $_SESSION['message'] = "New Session started";

    if(isset($_GET['source'])) {
        echo $_GET['source'] . "<br>";
    }

    $name = 'TheName';
    $value = 'This is the Value';
    $expiration = time() + (60*60*24*7);
    setcookie($name, $value, $expiration);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="PracticeSession9.php?source=30134">CLICK HERE</a>
    <?php 
        if(isset($_COOKIE['TheName'])) {
            echo $_COOKIE['TheName'] . "<br>";
        }

        if($_SESSION['message']) {
            echo $_SESSION['message'];
        }
    ?>
</body>
</html>