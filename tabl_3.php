<?php
    require_once './server/table.php';
    // Вся торговля
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/web/main.css">
    <title>Данные торговли</title>
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
                <td></td>
                <td></td>
            </tr>
            <?php  while($row = mysqli_fetch_array($torgovly)){
                    $a = $row['IDпотребителя'];
                    $b = $row['IDизготовителя'];
                    $row_2 = mysqli_fetch_array(mysqli_query($conect,"SELECT * FROM `potreb` WHERE `IDпотребителя` = '$a'"));
                    $row_3 = mysqli_fetch_array(mysqli_query($conect,"SELECT * FROM `postav` WHERE `IDизготовителя` = '$b'"));             
                ?>
            <tr>
                <td><?= $row['IDоперации'] ?></td>
                <td><?= $row['Товар']?></td>
                <td><?= $row_2['Названиепотребителя']?></td>
                <td><?= $row_3['Названиеизготовителя']?></td>
                <td><?= $row['Дата']?></td>
                <td><a href = "/rename.php?id=<?=$row['IDоперации']?>&tabl=3">Редактировать</a></td>
                <td><a href = "/server/delate.php?id=<?=$row['IDоперации']?>&tabl=3">Удалить</a></td>
                
                
            </tr>
            <?php }?>
            
        </table>
        <div class = "tabl_1">
            <a href="/dop.php?table=3">Добавить</a>
            <form method="post" action="/print.php">
            <input name = "data" type="date">
            <input name = "table" type = "hidden" value="3">
            <button type = "submit" >Открыть</button>
            </form>
            
            <a href="javascript:history.back()">Назад</a>
        </div>
    </div>
    
</body>
</html>