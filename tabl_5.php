<?php
    require_once 'table.php';
    //Сеотификаты ради галочки
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
            <tr>
                <td>ID</td>
                <td>Название</td>
                <td>Торговля</td>
                <td>Поставки</td>
                <td>Логистика</td>
                <td></td>
                <td></td>
            </tr>
            <?php  while($row = mysqli_fetch_array($sertif)){
                                
                ?>
            <tr>
                <td><?php echo $row['ID сертификатa']?></td>
                <td><?php echo $row['Название']?></td>
                <td><?php echo $row['Разрешение на торговлю']?></td>
                <td><?php echo $row['Разрешение на поставки']?></td>
                <td><?php echo $row['Разрешение на логистику']?></td>
                <td><a href = "/rename.php?id=<?=$row['ID сертификатa']?>&tabl=5">Редактировать</a></td>
                <td><a href = "/delate.php?id=<?=$row['ID сертификатa']?>&tabl=5">Удалить</a></td>
                
            </tr>
            <?php }?>
            
        </table>
        <div class = "tabl_1">
            <a href="dop.php?table=5">Добавить</a>
            
            <a href="javascript:history.back()">Назад</a>
        </div>
    </div>
    
</body>
</html>