<?php
   require_once 'print_pl.php';
   require_once 'table.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/web/main.css">
    <link media="print" rel="stylesheet" href="/web/print.css">
    <title>Печать</title>
</head>
<body>
    <div class = "tabl">
        <table>
            <tr>
                <td>ID</td>
                <td>Товар</td>
                <td>Потребитель</td>
                <td>Изготовитель</td>
                <td>Дата</td>
            </tr>
            <?php  while($row = mysqli_fetch_array($sql)){
                    $a = $row['ID потребителя'];
                    $b = $row['ID изготовителя'];
                    $sql_1 = mysqli_query($conect,"SELECT * FROM `potreb` WHERE `ID потребителя` = '$a'");
                    $sql_2 = mysqli_query($conect,"SELECT * FROM `postav` WHERE `ID изготовителя` = '$b'");              
                ?>
            <tr>
                <td><?= $row['ID операции'] ?></td>
                <td><?= $row['Товар']?></td>
                <td><?php while($row_2 = mysqli_fetch_array($sql_1)){                            
                            echo  $row_2['Название потребителя'];}?></td>
                <td><?php while($row_3 = mysqli_fetch_array($sql_2)){                            
                            echo $row_3['Название изготовителя'];}?></td>
                <td><?= $row['Дата']?></td>
                
            </tr>
            <?php }?>
            
        </table>
        <div class = "tabl_1">
            <a onclick="print()">Печать</a>
            <a href="<?=$url?>">Назад</a>
        </div>
    </div>
    
</body>
</html>