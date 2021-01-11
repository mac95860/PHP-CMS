<?php
    if(isset($_POST['submit'])) {
        $favorite = $_POST['favorite'];
        echo 'Favorite movie is ' . $favorite;
    }
?>