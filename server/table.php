<?php
    //Подключение к базеданных
    $conect = mysqli_connect('localhost','root','','baza');

    $postav = mysqli_query($conect,'SELECT * FROM `postav`');    
    $potreb = mysqli_query($conect,'SELECT * FROM `potreb`');
    $potreb_1 = mysqli_query($conect,'SELECT * FROM `potreb`');
    
    $otkaz = mysqli_query($conect,'SELECT * FROM otkaz 
                        LEFT JOIN potreb 
                            ON otkaz.IDпотребителя = potreb.IDпотребителя 
                        LEFT JOIN postav 
                            ON otkaz.IDизготовителя = postav.IDизготовителя 
                        ORDER BY `IDоперации` DESC');    
    $torgovly = mysqli_query($conect,'SELECT * FROM torgovly 
                            LEFT JOIN potreb 
                                ON torgovly.IDпотребителя = potreb.IDпотребителя 
                            LEFT JOIN postav 
                                ON torgovly.IDизготовителя = postav.IDизготовителя 
                            ORDER BY `IDоперации` DESC');
    
    $sertif = mysqli_query($conect,'SELECT * FROM `sertif`');
    $history = mysqli_query($conect, 'SELECT * FROM `history`  ORDER BY `ID` DESC');
?>