<?php
    require_once 'dop_pl.php';
    require_once 'table.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактировать</title>
    <link rel="stylesheet" href="/web/main.css">
</head>
<body>
    <form action="plus_2.php?tabl=<?=$tabl?>&id=<?=$id?> " method="post" class = "<?= $class?>">
        <input name="b" type = "text" placeholder="<?=$p_b?>">
        <input name="c" type = "<?=$b?>" placeholder="<?=$p_c?>">
        <select class="select_1" name = "country_1" type = "<?=$bp?>">
                <option value="">Выберите потребителя</option>
                <?php while($row_bp = mysqli_fetch_array($potreb)){?>
                <option value="<?=$row_bp['Название потребителя']?>"><?=$row_bp['Название потребителя']?></option>
                <?php }?>
            </select>
        <input name="d" type = "<?=$b?>" placeholder="<?=$p_d?>">
        <select class="select_1" name = "country_2" type = "<?=$bp?>">
                <option value="">Выберите поставщика</option>
                <?php while($row_bp = mysqli_fetch_array($postav)){?>
                <option value="<?=$row_bp['Название изготовителя']?>"><?=$row_bp['Название изготовителя']?></option>
                <?php }?>
            </select>
        <input name="e" type = "<?=$type_e?>" placeholder="<?=$p_e?>">
        <button type="submit">Готово</button>
        <a href = "javascript:history.back()">Назад</a>
    </form>
</body>
</html>