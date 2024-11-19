<?php
    require_once 'table.php';
    $a = $_POST['a'];$b = $_POST['b'];$c = $_POST['c'];$d = $_POST['d'];$e = $_POST['e'];
    
    //Редактируем таблицы и  тепаемся обратно
    if($_GET['tabl'] == 1){  
        //Вытягиваем ID      
        $row_dop_a_1 = mysqli_fetch_array( mysqli_query($conect,"SELECT * FROM `sertif` WHERE `Название` = '$c'"));
        $c = $row_dop_a_1['IDсертификата'];
        //Отправляем запрос
        mysqli_query($conect,"UPDATE `postav` SET `Названиеизготовителя` = '$b',`IDсертификата` = '$c', `Расчётныйсчёт` = '$d', `Товар` = '$e' WHERE `postav`.`IDизготовителя` = '$a'");
        
        header('Location: tabl_1.php');
    }else if($_GET['tabl'] == 2){
        //Отправляем запрос
        mysqli_query($conect,"UPDATE `potreb` SET `Названиепотребителя` = '$b',`Адреспотребителя` = '$c', `Расчётныйсчёт` = '$d', `Статус` = '$e' WHERE `potreb`.`IDпотребителя` = '$a'");
        
        header('Location: tabl_2.php');
    }else if($_GET['tabl'] == 3){
        $c = $_POST['country_1'];$d = $_POST['country_2'];
        //Вытягиваем ID
        $row_dop_a_1 = mysqli_fetch_array(mysqli_query($conect,"SELECT * FROM `potreb` WHERE `Названиепотребителя` = '$c'"));
        $row_dop_b_1 = mysqli_fetch_array(mysqli_query($conect,"SELECT * FROM `postav` WHERE `Названиеизготовителя` = '$d'"));
        $c = $row_dop_a_1['IDпотребителя']; 
        $d = $row_dop_b_1['IDизготовителя'];
        //Отправляем запрос
        mysqli_query($conect,"UPDATE `torgovly` SET `Товар` = '$b',`IDпотребителя` = '$c', `IDизготовителя` = '$d', `Дата` = '$e' WHERE `torgovly`.`IDоперации` = '$a'");
        header('Location: tabl_3.php');
    }else if($_GET['tabl'] == 4){
        //Вытягиваем ID
        $row_dop_a_1 = mysqli_fetch_array(mysqli_query($conect,"SELECT * FROM `potreb` WHERE `Названиепотребителя` = '$c'"));
        $row_dop_b_1 = mysqli_fetch_array(mysqli_query($conect,"SELECT * FROM `postav` WHERE `Названиеизготовителя` = '$d'"));
        $c = $row_dop_a_1['ID потребителя']; 
        $d = $row_dop_b_1['ID изготовителя'];
        //Отправляем запрос
        mysqli_query($conect,"UPDATE `otkaz` SET `Товар` = '$b',`IDпотребителя` = '$c', `IDизготовителя` = '$d', `Дата` = '$e' WHERE `otkaz`.`IDоперации` = '$a'");
        header('Location: tabl_4.php');
    }else if($_GET['tabl'] == 5){
        //Отправляем запрос
        mysqli_query($conect,"UPDATE `sertif` SET `Название` = '$b',`Разрешениенаторговлю` = '$c', `Разрешениенапоставки` = '$d', `Разрешениеналогистику` = '$e' WHERE `sertif`.`IDсертификата` = '$a'");
        header('Location: tabl_5.php');
    }
?>