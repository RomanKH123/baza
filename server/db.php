<?php
//Перенапровление на нужную таблицу
if($_POST['country'] == "postav"){    
    header('Location: /tabl_1.php');
} else if($_POST['country'] == "klient"){    
    header('Location: /tabl_2.php');                 
} else if($_POST['country'] == "torgovly"){
    header('Location: /tabl_3.php');
} else if($_POST['country'] == "otkaz"){
    header('Location: /tabl_4.php');
}  else if($_POST['country'] == "sertif"){
    header('Location: /tabl_5.php');
}  else if($_POST['country'] == "history"){
    header('Location: /tabl_6.php');
} else{
    header('Location: /index.php');    
}
?>