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
        $type_e = 'text';
        $row = mysqli_fetch_array(mysqli_query($conect,"SELECT * FROM `postav` WHERE `IDизготовителя` = '$id'"));
        $row_2 = mysqli_fetch_array(mysqli_query($conect,"SELECT * FROM `sertif` WHERE `IDсертификата` = '$a'"));
        $row_a = $row['IDизготовителя'];
        $row_b = $row['Названиеизготовителя'];
        $a = $row['IDсертификата'];       
        $row_c = $row_2['Название'];
        $row_d = $row['Расчётныйсчёт'];
        $row_e = $row['Товар'];
    } else if($tabl == 2){
        $class = "logo_2"; 
        $p_b = "Имя";
        $p_c = "Адрес";
        $p_d = "Расчётныйсчёт";
        $p_e = "Статус";
        $b = "text";
        $bp = "hidden";        
        $row = mysqli_fetch_array(mysqli_query($conect,"SELECT * FROM `potreb` WHERE `IDпотребителя` = '$id'"));       
        $type_e = 'text';  
        $row_a = $row['IDпотребителя'];
        $row_b = $row['Названиепотребителя'];
        $row_c = $row['Адреспотребителя'];
        $row_d = $row['Расчётныйсчёт'];
        $row_e = $row['Статус'];              
    } else if($tabl == 3){
        $p_b = "Товар";
        $p_c = "Потребитель";
        $p_d = "Изготовитель";
        $p_e = "Дата";
        $b = "hidden";
        $bp = "text";
        $class = "logo";     
        $row = mysqli_fetch_array(mysqli_query($conect,"SELECT * FROM `torgovly` WHERE `IDоперации` = '$id'"));
        $row_f = mysqli_fetch_array(mysqli_query($conect,"SELECT * FROM `potreb` WHERE `IDпотребителя` = '$row_1'"));
        $row_g = mysqli_fetch_array(mysqli_query($conect,"SELECT * FROM `postav` WHERE `IDизготовителя` = '$row_2'"));        
        $type_e = 'date';
        $row_a = $row['IDоперации'];
        $row_b = $row['Товар'];
        $row_1 = $row['IDпотребителя'];        
        $row_c = $row_f['Названиепотребителя'];        
        $row_2 = $row['ID изготовителя'];
        $row_d = $row_g['Названиеизготовителя'];
        $row_e = $row['Дата'];    
    } else if($tabl == 4){
        $class = "logo"; 
        $p_b = "Товар";
        $p_c = "Потребитель";
        $p_d = "Изготовитель";
        $p_e = "Дата";
        $b = "hidden";
        $bp = "text";     
        $row = mysqli_fetch_array(mysqli_query($conect,"SELECT * FROM `otkaz` WHERE `IDоперации` = '$id'"));
        $type_e = 'date';
        $row_a = $row['IDоперации'];
        $row_b = $row['Товар'];
        $row_c = $row['Названиепотребителя'];
        $row_d = $row['Названиеизготовителя'];
        $row_e = $row['Дата'];  
    }else if($tabl == 5){
        $class = "logo_2"; 
        $p_b = "Название";
        $p_c = "Продажи";
        $p_d = "Поставки";
        $p_e = "Логистика";
        $b = "text";
        $bp = "hidden";        
        $row = mysqli_fetch_array(mysqli_query($conect,"SELECT * FROM `sertif` WHERE `IDсертификата` = '$id'"));       
        $type_e = 'text';  
        $row_a = $row['IDсертификата'];        
        $row_b = $row['Название'];
        $row_c = $row['Разрешениенаторговлю'];
        $row_d = $row['Разрешениенапоставки'];
        $row_e = $row['Разрешениеналогистику'];              
    }
?>