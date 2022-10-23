<?php
    $connect = mysqli_connect("localhost", "root", "", "wedkarstwo");

    mysqli_query($connect, "INSERT INTO zawody_wedkarskie VALUES(NULL, 0, {$_POST['lowisko']}, '{$_POST['data']}', '{$_POST['sedzia']}');");
    
    mysqli_close($connect);
?>