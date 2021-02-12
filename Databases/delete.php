<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php
    if(isset($_POST['submit'])) {
        deleteRows();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class = "container">
    <div class = "col-md-6">
            <!-- always make sure the right file is in the action attribute -->
        <form action="delete.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name = "password" class="form-control">
            </div>

            <div class="form-group">
            <!-- make sure to set the name attribute because it targets what field to look for in SQL -->
                <select name="id" id="">
                    <?php
                        showAllData();
                    ?>
                </select>
            </div>

            <input type="submit" name = "submit" value="Delete" class="btn btn-primary my-2">
        </form>
    </div> 
</body>
</html>