<?php
   require_once './server/print_pl.php';
   require_once './server/table.php';
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