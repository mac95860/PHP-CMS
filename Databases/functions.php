<?php

    function createUser() {
        if(isset($_POST['submit'])) {
            global $connection;
            $username = $_POST['username'];
            $password = $_POST['password'];
    
            $username = mysqli_real_escape_string($connection, $username);
            $password = mysqli_real_escape_string($connection, $password);
    
            $hashFormat = "$2y$10$";
            $salt = "iusesomecrazystrings22";
            $hashF_and_salt = $hashFormat . $salt;
            $new_password = crypt($password, $hashF_and_salt);
    
            $query = "INSERT INTO users(username, password) ";
            $query .= "VALUES ('$username', '$new_password')";
            $result = mysqli_query($connection, $query);

            if(!$result) {
                die("Error " . mysqli_error());
            }
        }
    }

    function showAllData(){
        global $connection;
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);
    
        if(!$result) {
            die("Error: " . mysqli_connect_error());
        }
        
        while($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            echo "<option value='$id'>$id</option>";
        }
    }

    function updateUser() {
        
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
            //pay attention to spaces and commas when concatinating queries
        $query = "UPDATE users SET ";  // --> You need a whitespace after SET
        $query .= "username = '$username', ";
        $query .= "password = '$password' "; 
        $query .= "WHERE id = $id";
    
        $result = mysqli_query($connection, $query);
    
        if(!$result) {
            die('Query FAILED' . mysqli_error($connection));
        } else {
            echo "user updated";
        }
    }

    function deleteRows() {
        global $connection;
        $id = $_POST['id'];
        $query = "DELETE FROM users WHERE id = $id";  
       
        $result = mysqli_query($connection, $query);
    
        if(!$result) {
            die('Query FAILED' . mysqli_error($connection));
        } else {
            echo "user " . $username . " is deleted";
        }
    }
    
?>