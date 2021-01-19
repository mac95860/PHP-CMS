<?php 
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $connection = mysqli_connect('localhost', 'root', 'this.password', 'loginapp');

        if($connection) {
            echo "we are connected";
        } else {
            die("Error ". mysqli_connect_error());
        }

        mysqli_query($connection, $user_table);

        $query = "INSERT INTO users(username, password)";
        $query .= "VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $query);

        if(!$result) {
            die("Error " . mysqli_connect_error());
        } else {
            echo "table created with data";
        }
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
        <form action="loginSQL.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name = "password" class="form-control">
            </div>

            <input type="submit" name = "submit" value="Submit" class="btn btn-primary my-2">
        </form>
    </div>
</div>
</body>
</html>