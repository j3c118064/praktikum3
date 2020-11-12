<?php
    $host   = "ftpupload.net";
    $user   = "epiz_26783283";
    $psw    = "j3c118064";
    $db_name= "dbmhs";
    $kon = mysqli_connect($host,$user,$psw,$db_name);

    if (!$kon){
        die ('gagal terhubung dengan database:'.mysqli_connect_error());
    }

?>