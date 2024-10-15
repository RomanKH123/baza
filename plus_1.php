<?php
    require_once 'table.php';
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $e = $_POST['e'];
    //Редактируем таблицы и  тепаемся обратно
    if($_GET['tabl'] == 1){
        
        $row_a = mysqli_query($conect,"SELECT * FROM `sertif` WHERE `Название` = '$c'");
        $row_dop_a_1 = mysqli_fetch_array($row_a);
        $c = $row_dop_a_1['ID сертификата'];
                
        mysqli_query($conect,"UPDATE `postav` SET `Название изготовителя` = '$b',`ID сертификата` = '$c', `Расчётный счёт` = '$d', `Товар` = '$e' WHERE `postav`.`ID изготовителя` = '$a'");
        header('Location: tabl_1.php');
    }
    if($_GET['tabl'] == 2){
        mysqli_query($conect,"UPDATE `potreb` SET `Название потребителя` = '$b',`Адрес потребителя` = '$c', `Расчётный счёт` = '$d', `Статус` = '$e' WHERE `potreb`.`ID потребителя` = '$a'");
        header('Location: tabl_2.php');
    }
    if($_GET['tabl'] == 3){
        $c = $_POST['country_1'];
        $d = $_POST['country_2'];
        $row_a = mysqli_query($conect,"SELECT * FROM `potreb` WHERE `Название потребителя` = '$c'");
        $row_b = mysqli_query($conect,"SELECT * FROM `postav` WHERE `Название изготовителя` = '$d'");
        $row_dop_a_1 = mysqli_fetch_array($row_a);
        $row_dop_b_1 = mysqli_fetch_array($row_b);
        $c = $row_dop_a_1['ID потребителя'];
        $d = $row_dop_b_1['ID изготовителя'];
        
        mysqli_query($conect,"UPDATE `torgovly` SET `Товар` = '$b',`ID потребителя` = '$c', `ID изготовителя` = '$d', `Дата` = '$e' WHERE `torgovly`.`ID операции` = '$a'");
        header('Location: tabl_3.php');
    }
    if($_GET['tabl'] == 4){
        $row_a = mysqli_query($conect,"SELECT * FROM `potreb` WHERE `Название потребителя` = '$c'");
        $row_b = mysqli_query($conect,"SELECT * FROM `postav` WHERE `Название изготовителя` = '$d'");
        $row_dop_a_1 = mysqli_fetch_array($row_a);
        $row_dop_b_1 = mysqli_fetch_array($row_b);
        $c = $row_dop_a_1['ID потребителя'];
        $d = $row_dop_b_1['ID изготовителя'];
        
        mysqli_query($conect,"UPDATE `otkaz` SET `Товар` = '$b',`ID потребителя` = '$c', `ID изготовителя` = '$d', `Дата` = '$e' WHERE `otkaz`.`ID операции` = '$a'");
        header('Location: tabl_4.php');
    }
    if($_GET['tabl'] == 5){
        mysqli_query($conect,"UPDATE `sertif` SET `Название` = '$b',`Разрешение на торговлю` = '$c', `Разрешение на поставки` = '$d', `Разрешение на логистику` = '$e' WHERE `sertif`.`ID сертификата` = '$a'");
        header('Location: tabl_5.php');
    }
?>