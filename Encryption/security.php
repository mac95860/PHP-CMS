<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $password="mysecretpassword";
        $hash_Format="$2a$10$";
        $salt= "iusesomecrazystrings22";
        $new_salt= $hash_Format . $salt;
        $password_encrypted = crypt( $password, $new_salt );
        echo $password_encrypted;
        ?>
</body>
</html>