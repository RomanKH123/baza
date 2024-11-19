<?php
    //Наполнение таблицы добавления
    require_once 'table.php';
    $tabl = $_GET['table'];
    if($tabl == 1){ 
        $class = "logo_2"; $p_b = "Название"; $p_c = "Сертификат"; $p_d = "Расчётный счёт"; $p_e = "Товар"; $type_e = 'text';
    } else if($tabl == 2){
        $class = "logo_2"; $p_b = "Имя"; $p_c = "Адрес"; $p_d = "Расчётный счёт"; $p_e = "Статус"; $type_e = 'text';                
    } else if($tabl == 3){
        $class = "logo"; $b = "hidden"; $p_b = "Товар"; $p_c = "Потребитель"; $p_d = "Изготовитель"; $p_e = "Дата"; $type_e = 'date';   
    } else if($tabl == 4){
        $class = "logo"; $b = "hidden"; $p_b = "Товар"; $p_c = "Потребитель"; $p_d = "Изготовитель"; $p_e = "Дата"; $type_e = 'date';
    }else if($tabl == 5){
        $class = "logo_2"; $p_b = "Сертификат"; $p_c = "Торговля"; $p_d = "Поставка"; $p_e = "Логистика"; $type_e = 'text';
    }    
?>