<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php
    createUser();
    
    $read = "SELECT * FROM users";
    $new_result = mysqli_query($connection, $read);

    if(!$new_result) {
        die("Error: " . mysqli_connect_error());
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class = "container">
    <div class = "col-md-6">
            <!-- always make sure the right file is in the action attribute -->
            <h1 class = "text-center">Create</h1>
        <form action="loginSQL.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <input type="submit" name = "submit" value="Submit" class="btn btn-primary my-2">

            <?php 
                while($row = mysqli_fetch_assoc($new_result)) {
            ?>
                    <pre>
                        <?php
                            print_r($row);
                        ?>
                    </pre>
            <!-- All code must be in php tags. Brackets do not need to be in the same php tags to close -->
            <?php
                }
            ?>
        </form>
    </div>
</div>
</body>
</html>