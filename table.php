<?php
    //Подключение к базеданных
    $conect = mysqli_connect('localhost','root','','baza');
    $postav = mysqli_query($conect,'SELECT * FROM `postav`');    
    $potreb = mysqli_query($conect,'SELECT * FROM `potreb`'); 
    $potreb_1 = mysqli_query($conect,'SELECT * FROM `potreb`');   
    $otkaz = mysqli_query($conect,'SELECT * FROM `otkaz`');
    $torgovly = mysqli_query($conect,'SELECT * FROM `torgovly`');
    $sertif = mysqli_query($conect,'SELECT * FROM `sertif`');
?>