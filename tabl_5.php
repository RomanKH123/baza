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
                <td><?= $row['IDсертификатa']?></td>
                <td><?= $row['Название']?></td>
                <td><?= $row['Разрешениенаторговлю']?></td>
                <td><?= $row['Разрешениенапоставки']?></td>
                <td><?= $row['Разрешениеналогистику']?></td>
                <td><a href = "/rename.php?id=<?=$row['IDсертификата']?>&tabl=5">Редактировать</a></td>
                <td><a href = "/server/delate.php?id=<?=$row['IDсертификата']?>&tabl=5">Удалить</a></td>
                
            </tr>
            <?php }?>
            
        </table>
        <div class = "tabl_1">
            <a href="/dop.php?table=5">Добавить</a>
            
            <a href="javascript:history.back()">Назад</a>
        </div>
    </div>
    
</body>
</html>