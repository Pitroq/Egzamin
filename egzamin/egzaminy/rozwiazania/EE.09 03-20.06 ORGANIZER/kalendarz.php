<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Mój kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <?php
        $connect = mysqli_connect('localhost', 'root', '', 'egz-egzamin05');  
    ?>
    <div class="banner1">
        <img src="logo1.png" alt="Mój kalendarz">
    </div>
    <div class="banner2">
        <h1>KALENDARZ</h1>
        <!-- skrypt1 -->
        <?php
            $query1 = mysqli_query($connect, "SELECT miesiac, rok FROM zadania WHERE dataZadania = '2020-07-01';");
            $result1 = mysqli_fetch_all($query1, MYSQLI_ASSOC);
            foreach($result1 as $r){
                echo "
                    <h3>miesiąc: {$r['miesiac']}, rok: {$r['rok']}</h3>
                ";
            }
        ?>
    </div>
    <article>
        <!-- skrypt2 -->
        <?php
            $query2 = mysqli_query($connect, "SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'lipiec';");
            $result2 = mysqli_fetch_all($query2, MYSQLI_ASSOC);
            foreach($result2 as $r){
                echo "
                    <div class='dzien'>
                        <h5>{$r['dataZadania']}</h5>
                        <p>{$r['wpis']}</p>
                    </div>
                ";
            }
        ?>
    </article>
    <footer>
        <form method="POST" action="">
            dodaj wpis <input type="text" name="text1"> <input type="submit" value="DODAJ">
            <p>Stronę wykonał: XXX</p>
        </form>
        <?php
        if(isset($_POST['text1'])) $query3 = mysqli_query($connect, "UPDATE zadania SET wpis = '{$_POST['text1']}' WHERE dataZadania = '2020-07-13';");
        ?>
    </footer>
    <?php
        mysqli_close($connect);
    ?>
</body>
</html>