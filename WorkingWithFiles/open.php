<?php
    $file = 'example.txt';

    $handle = fopen($file, 'w');
    fclose($handle);

    if($handle){
        echo "$file is created";
    }
?>