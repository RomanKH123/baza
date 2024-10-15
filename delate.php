<?php
require_once 'table.php';
//Удаляем записи
$id = $_GET['id'];
if ($_GET['tabl']== 1){
    mysqli_query($conect,"DELETE FROM postav WHERE `postav`.`ID изготовителя` = '$id'");
    header('Location: tabl_1.php');
}
if ($_GET['tabl']== 2){
    mysqli_query($conect,"DELETE FROM potreb WHERE `potreb`.`ID потребителя` = '$id'");
    header('Location: tabl_2.php');
}
if ($_GET['tabl']== 3){
    mysqli_query($conect,"DELETE FROM torgovly WHERE `torgovly`.`ID операции` = '$id'");
    header('Location: tabl_3.php');
}
if ($_GET['tabl']== 4){
    mysqli_query($conect,"DELETE FROM otkaz WHERE `otkaz`.`ID операции` = '$id'");
    header('Location: tabl_4.php');
}
if ($_GET['tabl']== 5){
    mysqli_query($conect,"DELETE FROM sertif WHERE `sertif`.`ID сертификата` = '$id'");
    header('Location: tabl_5.php');
}
?>