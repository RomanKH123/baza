<?php
    require_once './server/table.php';
    //тАБЛИЦА ИЗГОТОВИТЕЛЕЙ
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/web/main.css">
    <link media="print" rel="stylesheet" href="/web/print.css">
    <title>Данные поставщиков</title>
</head>
<body>
    <div class = "tabl">
        <table>
            <tr>
                <td>ID</td>
                <td>Название</td>
                <td>Сертификат</td>
                <td>Расчётный счёт</td>
                <td>Товар</td>
                <td></td>
                <td></td>
            </tr>
            <?php  while($row = mysqli_fetch_array($postav)){
                 $a = $row['IDсертификата'];
                 $row_2 = mysqli_fetch_array(mysqli_query($conect,"SELECT * FROM `sertif` WHERE `IDсертификата` = '$a'"))?>
            <tr>
                <td><?=$row['IDизготовителя'] ?></td>
                <td><?=$row['Названиеизготовителя'];?></td>
                <td><?= $row_2['Название']?></td>
                <td><?=$row['Расчётныйсчёт']?></td>
                <td><?=$row['Товар']?></td>
                <td><a href = "/rename.php?id=<?=$row['IDизготовителя']?>&tabl=1">Редактировать</a></td>
                <td><a href = "/server/delate.php?id=<?=$row['IDизготовителя']?>&tabl=1">Удалить</a></td>
            </tr>
            <?php }?>
            
        </table>
        <div class = "tabl_1">
            <a href="dop.php?table=1">Добавить</a>
            <a onclick="print()">Печать</a>
            <a href="javascript:history.back()">Назад</a>
        </div>
    </div>
    
</body>
</html>