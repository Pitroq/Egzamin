<?php
    $connect = mysqli_connect('localhost', 'root', '', 'forum');
    $query = mysqli_query($connect, "SELECT tresc FROM pytania;");
    
    while($result = mysqli_fetch_assoc($query)){
        echo $result['tresc']."<br>";
    }
    mysqli_close($connect);
?>