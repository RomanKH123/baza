<?php
    require_once 'print_pl.php';
    //Печать
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/web/main.css">
    <link media="print" rel="stylesheet" href="/web/print.css">
    <title>Данные потребителей</title>
</head>
<body>
    <div class = "tabl">
        <table>
            <tr>
                <td>ID</td>
                <td>Имя</td>
                <td>Адрес</td>
                <td>Расчётный счёт</td>
                <td>Статус</td>
                <td></td>
                <td></td>
            </tr>
            <?php  while($row = mysqli_fetch_array($sql)){?>
            <tr>
                <td><?= $row['IDпотребителя'] ?></td>
                <td><?= $row['Названиепотребителя'];?></td>
                <td><?= $row['Адреспотребителя'] ?></td>
                <td><?= $row['Расчётныйсчёт']?></td>
                <td><?= $row['Статус']?></td>
                <td><a href = "/rename.php?id=<?=$row['IDпотребителя']?>&tabl=2">Редактировать</a></td>
                <td><a href = "/delate.php?id=<?=$row['IDпотребителя']?>&tabl=2">Удалить</a></td>                
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