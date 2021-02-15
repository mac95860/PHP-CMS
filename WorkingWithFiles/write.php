<?php
    $file = 'example.txt';

    if($handle = fopen($file, 'w')){
        fwrite($handle, 'I love php and this is good stuff');

        fclose($handle);
    } else {
        echo "File cannot be written";
    }
?>