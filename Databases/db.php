<?php 
$connection = mysqli_connect('localhost', 'root', 'this.password', 'loginapp');

        if(!$connection) {
            die("Error ". mysqli_connect_error());
        }

?>