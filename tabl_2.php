<?php
    require_once 'table.php';
    //Таблица потребителей
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
            <?php  while($row = mysqli_fetch_array($potreb)){?>
            <tr>
                <td><?php echo $row['ID потребителя'] ?></td>
                <td><?php echo $row['Название потребителя'];?></td>
                <td><?php echo $row['Адрес потребителя'] ?></td>
                <td><?php echo $row['Расчётный счёт']?></td>
                <td><?php echo $row['Статус']?></td>
                <td><a href = "/rename.php?id=<?=$row['ID потребителя']?>&tabl=2">Редактировать</a></td>
                <td><a href = "/delate.php?id=<?=$row['ID потребителя']?>&tabl=2">Удалить</a></td>                
            </tr>
            <?php }?>
            
        </table>
        <div class = "tabl_1">
            <a href="dop.php?table=2">Добавить</a>
            <form method="post" action="print_2.php">
            <select class="select_1" name = "country">
                <option value="">Выберите потребителя</option>
                <?php while($row_s = mysqli_fetch_array($potreb_1)){?>
                <option value="<?=$row_s['Название потребителя']?>"><?=$row_s['Название потребителя']?></option>
                <?php }?>
            </select>
            <input name = "table" type = "hidden" value="2">
            <button type = "submit" >Открыть</button>
            </form>
            <a href="javascript:history.back()">Назад</a>
        </div>
    </div>
    
</body>
</html>