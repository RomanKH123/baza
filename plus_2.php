<?php
    //Добавление  записей в бд
    require_once 'table.php';
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $e = $_POST['e'];
    if($_GET['tabl'] == 1){
        $row_a = mysqli_query($conect,"SELECT * FROM `sertif` WHERE `Название` = '$c'");
        $row_dop_a_1 = mysqli_fetch_array($row_a);
        $c = $row_dop_a_1['ID сертификата'];
        mysqli_query($conect,"INSERT INTO `postav` (`ID изготовителя`, `Название изготовителя`, `ID сертификата`, `Расчётный счёт`, `Товар`) VALUES (NULL, '$b', '$c', '$d', '$e')");
        header('Location: tabl_1.php');
    }
    if($_GET['tabl'] == 2){
        mysqli_query($conect,"INSERT INTO `potreb` (`ID потребителя`, `Название потребителя`, `Адрес потребителя`, `Расчётный счёт`, `Статус`) VALUES (NULL, '$b', '$c', '$d', '$e')");
        header('Location: tabl_2.php');
    }
    if($_GET['tabl'] == 3){
        $row_a = mysqli_query($conect,"SELECT * FROM `potreb` WHERE `Название потребителя` = '$c'");
        $row_b = mysqli_query($conect,"SELECT * FROM `postav` WHERE `Название изготовителя` = '$d'");
        $row_dop_a_1 = mysqli_fetch_array($row_a);
        $row_dop_b_1 = mysqli_fetch_array($row_b);
        $c = $row_dop_a_1['ID потребителя'];
        $d = $row_dop_b_1['ID изготовителя'];
        
        mysqli_query($conect,"INSERT INTO `torgovly` (`ID операции`, `ID потребителя`, `Товар`, `ID изготовителя`, `Дата`) VALUES (NULL, '$b', '$c', '$d', '$e')");
        header('Location: tabl_3.php');
    }
    if($_GET['tabl'] == 4){
        $row_a = mysqli_query($conect,"SELECT * FROM `potreb` WHERE `Название потребителя` = '$c'");
        $row_b = mysqli_query($conect,"SELECT * FROM `postav` WHERE `Название изготовителя` = '$d'");
        $row_dop_a_1 = mysqli_fetch_array($row_a);
        $row_dop_b_1 = mysqli_fetch_array($row_b);
        $c = $row_dop_a_1['ID потребителя'];
        $d = $row_dop_b_1['ID изготовителя'];
        
        mysqli_query($conect,"INSERT INTO `otkaz` (`ID операции`, `ID потребителя`, `Товар`, `ID изготовителя`, `Дата`) VALUES (NULL, '$b', '$c', '$d', '$e')");
        header('Location: tabl_4.php');
    }
    if($_GET['tabl'] == 5){
        mysqli_query($conect,"INSERT INTO `sertif` (`ID сертификата`, `Название`, `Разрешение на торговлю`, `Разрешение на поставки`, `Разрешение на логистику`) VALUES (NULL, '$b', '$c', '$d', '$e')");
        header('Location: tabl_5.php');
    }
?>