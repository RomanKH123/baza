<?php
require_once 'table.php';
//Удаляем записи
$id = $_GET['id'];
if ($_GET['tabl']== 1){
    mysqli_query($conect,"DELETE FROM postav WHERE `postav`.`IDизготовителя` = '$id'");    
    header('Location: tabl_1.php');
    //SET FOREIGN_KEY_CHECKS=0; -- to disable them
    //SET FOREIGN_KEY_CHECKS=1; -- to re-enable them
}
if ($_GET['tabl']== 2){
    mysqli_query($conect,"DELETE FROM potreb WHERE `potreb`.`IDпотребителя` = '$id'");
    header('Location: tabl_2.php');
}
if ($_GET['tabl']== 3){
    mysqli_query($conect,"DELETE FROM torgovly WHERE `torgovly`.`IDоперации` = '$id'");
    header('Location: tabl_3.php');
}
if ($_GET['tabl']== 4){
    mysqli_query($conect,"DELETE FROM otkaz WHERE `otkaz`.`IDоперации` = '$id'");
    header('Location: tabl_4.php');
}
if ($_GET['tabl']== 5){
    mysqli_query($conect,"DELETE FROM sertif WHERE `sertif`.`IDсертификата` = '$id'");
    header('Location: tabl_5.php');
}
?>