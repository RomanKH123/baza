<?php
    $data = $_POST['data'];
    $name = $_POST['country'];
    require_once 'table.php';
    if ($_POST['table'] == 2){
        $sql = mysqli_query($conect,"SELECT * FROM `potreb` WHERE `Название потребителя` >= '$name'");
        $url = "tabl_2.php";
    }
    if ($_POST['table'] == 3){
        $sql = mysqli_query($conect,"SELECT * FROM `torgovly` WHERE `Дата` >= '$data'");
        $url = "tabl_3.php";
    }

    if ($_GET['table'] == 4){
        $sql = mysqli_query($conect,"SELECT * FROM `otkaz` WHERE `Дата` >= '$data'");
        $url = "tabl_4.php";
    }
?>