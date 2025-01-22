<?php
    //Добавление  записей в бд
    require_once 'table.php';
    $a = $_POST['a']; $b = $_POST['b']; $c = $_POST['c']; $d = $_POST['d']; $e = $_POST['e']; $c_1 = $_POST['country_1']; $d_1 = $_POST['country_2'];
    if($_GET['tabl'] == 1){
        $row_dop_a_1 = mysqli_fetch_array(mysqli_query($conect,"SELECT * FROM `sertif` WHERE `Название` = '$c'"));
        $c = $row_dop_a_1['IDсертификата'];
        mysqli_query($conect,"INSERT INTO `postav` (`IDизготовителя`, `Названиеизготовителя`, `IDсертификата`, `Расчётныйсчёт`, `Товар`) VALUES (NULL, '$b', '$c', '$d', '$e')");
        header('Location: ../tabl_1.php');
    }else if($_GET['tabl'] == 2){
        mysqli_query($conect,"INSERT INTO `potreb` (`IDпотребителя`, `Названиепотребителя`, `Адреспотребителя`, `Расчётныйсчёт`, `Статус`) VALUES (NULL, '$b', '$c', '$d', '$e')");
        header('Location: ../tabl_2.php');
    }else if($_GET['tabl'] == 3){
        $row_dop_a_1 = mysqli_fetch_array(mysqli_query($conect,"SELECT * FROM `potreb` WHERE `Названиепотребителя` = '$c_1'"));
        $row_dop_b_1 = mysqli_fetch_array(mysqli_query($conect,"SELECT * FROM `postav` WHERE `Названиеизготовителя` = '$d_1'"));
        $c = $row_dop_a_1['IDпотребителя'];
        $d = $row_dop_b_1['IDизготовителя'];
                
        mysqli_query($conect,"INSERT INTO `torgovly` (`IDоперации`,`Товар`, `IDпотребителя`, `IDизготовителя`, `Дата`) VALUES (NULL, '$b', '$c', '$d', '$e')");
        header('Location: ../tabl_3.php');
    }else if($_GET['tabl'] == 4){
        $row_dop_a_1 = mysqli_fetch_array(mysqli_query($conect,"SELECT * FROM `potreb` WHERE `Названиепотребителя` = '$c_1'"));
        $row_dop_b_1 = mysqli_fetch_array(mysqli_query($conect,"SELECT * FROM `postav` WHERE `Названиеизготовителя` = '$d_1'"));
        $c = $row_dop_a_1['IDпотребителя'];
        $d = $row_dop_b_1['IDизготовителя'];
        
        mysqli_query($conect,"INSERT INTO `otkaz` (`IDоперации`,`Товар`, `IDпотребителя`,  `IDизготовителя`, `Дата`) VALUES (NULL, '$b', '$c', '$d', '$e')");
        header('Location: ../tabl_4.php');
    }else if($_GET['tabl'] == 5){
        mysqli_query($conect,"INSERT INTO `sertif` (`IDсертификата`, `Название`, 
        `Разрешениенаторговлю`, `Разрешениенапоставки`, `Разрешениеналогистику`) 
        VALUES (NULL, '$b', '$c', '$d', '$e')");
        header('Location: ../tabl_5.php');
    }
?>