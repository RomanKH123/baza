<?php
    require_once './server/table.php';
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
    
        <table>
            <tr class = "fixed">
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
                <td><?=$row['IDпотребителя'] ?></td>
                <td><?=$row['Названиепотребителя']?></td>
                <td><?=$row['Адреспотребителя'] ?></td>
                <td><?=$row['Расчётныйсчёт']?></td>
                <td><?=$row['Статус']?></td>
                <td><a href = "/rename.php?id=<?=$row['IDпотребителя']?>&tabl=2">Редактировать</a></td>
                <td><a href = "/server/delate.php?id=<?=$row['IDпотребителя']?>&tabl=2">Удалить</a></td>                
            </tr>
            <?php }?>
            
        </table>
        <div class = "tabl_1">
            <a href="/dop.php?table=2">Добавить</a>
            <form method="post" action="/print_2.php">
                <select class="select_1" name = "country">
                    <option value="">Выберите потребителя</option>
                    <?php while($row_s = mysqli_fetch_array($potreb_1)){?>
                    <option value="<?=$row_s['Названиепотребителя']?>"><?=$row_s['Названиепотребителя']?></option>
                    <?php }?>
                </select>
                <input name="table" type="hidden" value="2">
                <button type = "submit" >Открыть</button>
            </form>
            <a href="/server/exp/main.php?table=2">Экспорт</a>
            <a onclick="print()">Печать</a>
            <a href="/index_2.php">Назад</a>
        </div>

    
</body>
</html>