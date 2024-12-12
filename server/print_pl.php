<?php
    $data = $_POST['data']; $name = $_POST['country'];

    require_once 'table.php';
    if ($_POST['table'] == 2){
        $sql = mysqli_query($conect,"SELECT * FROM `potreb` WHERE `Названиепотребителя` = '$name'");
        $url = "tabl_2.php";
    }else if ($_POST['table'] == 3){
        $sql = mysqli_query($conect,"SELECT * FROM `torgovly` WHERE `Дата` <= '$data'");
        $url = "tabl_3.php";
    }else if ($_GET['table'] == 4){
        $sql = mysqli_query($conect,"SELECT * FROM `otkaz` WHERE `Дата` <= '$data'");
        $url = "tabl_4.php";
    }
?>