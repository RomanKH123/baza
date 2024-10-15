<?php
//Заполнение страницы редактирования
    require_once 'table.php';   
    $id = $_GET['id'];
    $tabl = $_GET['tabl'];
    if($tabl == 1){
        $class = "logo_2"; 
        $p_b = "Название";
        $p_c = "Сертификат";
        $p_d = "Расчётный счёт";
        $p_e = "Товар";
        $b = "text";
        $bp = "hidden"; 
        $sql = mysqli_query($conect,"SELECT * FROM `postav` WHERE `ID изготовителя` = '$id'");    
        $row = mysqli_fetch_array($sql);        
        $type_e = 'text';
        $row_a = $row['ID изготовителя'];
        $row_b = $row['Название изготовителя'];
        $a = $row['ID сертификата'];
        $sql_1 = mysqli_query($conect,"SELECT * FROM `sertif` WHERE `ID сертификата` = '$a'");
        $row_2 = mysqli_fetch_array($sql_1);
        $row_c = $row_2['Название'];
        $row_d = $row['Расчётный счёт'];
        $row_e = $row['Товар'];
    } else if($tabl == 2){
        $class = "logo_2"; 
        $p_b = "Имя";
        $p_c = "Адрес";
        $p_d = "Расчётный счёт";
        $p_e = "Статус";
        $b = "text";
        $bp = "hidden";    
        $sql = mysqli_query($conect,"SELECT * FROM `potreb` WHERE `ID потребителя` = '$id'");    
        $row = mysqli_fetch_array($sql);       
        $type_e = 'text';  
        $row_a = $row['ID потребителя'];
        $row_b = $row['Название потребителя'];
        $row_c = $row['Адрес потребителя'];
        $row_d = $row['Расчётный счёт'];
        $row_e = $row['Статус'];              
    } else if($tabl == 3){
        $p_b = "Товар";
        $p_c = "Потребитель";
        $p_d = "Изготовитель";
        $p_e = "Дата";
        $b = "hidden";
        $bp = "text";
        $class = "logo"; 
        $sql = mysqli_query($conect,"SELECT * FROM `torgovly` WHERE `ID операции` = '$id'");    
        $row = mysqli_fetch_array($sql);        
        $type_e = 'date';
        $row_a = $row['ID операции'];
        $row_b = $row['Товар'];
        $row_1 = $row['ID потребителя'];
        $sql_1 = mysqli_query($conect,"SELECT * FROM `potreb` WHERE `ID потребителя` = '$row_1'");
        $row_f = mysqli_fetch_array($sql_1);
        $row_c = $row_f['Название потребителя'];        
        $row_2 = $row['ID изготовителя'];
        $sql_2 = mysqli_query($conect,"SELECT * FROM `postav` WHERE `ID изготовителя` = '$row_2'");
        $row_g = mysqli_fetch_array($sql_2);
        $row_d = $row_g['Название изготовителя'];
        $row_e = $row['Дата'];    
    } else if($tabl == 4){
        $class = "logo"; 
        $p_b = "Товар";
        $p_c = "Потребитель";
        $p_d = "Изготовитель";
        $p_e = "Дата";
        $b = "hidden";
        $bp = "text";  
        $sql = mysqli_query($conect,"SELECT * FROM `otkaz` WHERE `ID операции` = '$id'");    
        $row = mysqli_fetch_array($sql);
        $type_e = 'date';
        $row_a = $row['ID операции'];
        $row_b = $row['Товар'];
        $row_c = $row['Название потребителя'];
        $row_d = $row['Название изготовителя'];
        $row_e = $row['Дата'];  
    }else if($tabl == 5){
        $class = "logo_2"; 
        $p_b = "Название";
        $p_c = "Продажи";
        $p_d = "Поставки";
        $p_e = "Логистика";
        $b = "text";
        $bp = "hidden";    
        $sql = mysqli_query($conect,"SELECT * FROM `sertif` WHERE `ID сертификата` = '$id'");    
        $row = mysqli_fetch_array($sql);       
        $type_e = 'text';  
        $row_a = $row['ID сертификата'];
        $row_b = $row['Название'];
        $row_c = $row['Разрешение на торговлю'];
        $row_d = $row['Разрешение на поставки'];
        $row_e = $row['Разрешение на логистику'];              
    }
?>