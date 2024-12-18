<?php
    require_once './server/table.php';
    //Сеотификаты
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/web/main.css">
    <title>Сертификаты</title>
</head>
<body>
    <div class = "tabl">
        <table>
            <tr class = "fixed">
                <td>ID записи</td>
                <td>Таблица</td>
                <td>Дата</td>
                <td></td>
            </tr>
           
            <?php  while($row = mysqli_fetch_array($history)){?>
            <tr>
                <td><?= $row['IDзапис']?></td>
                <td><?= $row['Таблица']?></td>
                <td><?= $row['Время']?></td>
                <td><a href = "/server/delate.php?id=<?=$row['IDсертификата']?>&tabl=5">Удалить</a></td>
                
            </tr>
            <?php }?>
            
        </table>
        <div class = "tabl_1">
            
            <a href="/index_2.php">Назад</a>
        </div>
    </div>
    
</body>
</html>