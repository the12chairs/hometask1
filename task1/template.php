<?php

    require_once("data.php"); # require unclosed file!
    # Just simple
    $n = 1;
    foreach($users as $u){
        echo "$n. $u\n";
        $n++;
    }
?>
