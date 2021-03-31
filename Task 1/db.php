<?php
    require_once 'connection.php';

    $link = mysqli_connect($host,$user,$paswword,$base) 
        or die("Ошибка" . mysqli_error($link));
        
            $query = 'SHOW TABLES';
            $result = mysqli_query($link,$query) 
                or die ("Ошибка запроса" .mysqli_error($link));

    mysqli_close($link);
?>