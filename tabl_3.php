<?php
    require_once 'table.php';
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
                    $a = $row['ID потребителя'];
                    $b = $row['ID изготовителя'];
                    $sql_1 = mysqli_query($conect,"SELECT * FROM `potreb` WHERE `ID потребителя` = '$a'");
                    $sql_2 = mysqli_query($conect,"SELECT * FROM `postav` WHERE `ID изготовителя` = '$b'");              
                ?>
            <tr>
                <td><?php echo $row['ID операции'] ?></td>
                <td><?php echo $row['Товар']?></td>
                <td><?php while($row_2 = mysqli_fetch_array($sql_1)){                            
                            echo  $row_2['Название потребителя'];}?></td>
                <td><?php while($row_3 = mysqli_fetch_array($sql_2)){                            
                            echo $row_3['Название изготовителя'];}?></td>
                <td><?php echo $row['Дата']?></td>
                <td><a href = "/rename.php?id=<?=$row['ID операции']?>&tabl=3">Редактировать</a></td>
                <td><a href = "/delate.php?id=<?=$row['ID операции']?>&tabl=3">Удалить</a></td>
                
                
            </tr>
            <?php }?>
            
        </table>
        <div class = "tabl_1">
            <a href="dop.php?table=3">Добавить</a>
            <form method="post" action="print.php">
            <input name = "data" type="date">
            <input name = "table" type = "hidden" value="3">
            <button type = "submit" >Открыть</button>
            </form>
            
            <a href="javascript:history.back()">Назад</a>
        </div>
    </div>
    
</body>
</html>