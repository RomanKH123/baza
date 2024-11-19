<?php
    require_once 'rename_pl.php';
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
    <form action="plus_1.php?tabl=<?=$tabl?>&id=<?=$id?> " method="post" class = "<?= $class?>">
        <input name="a" type = "hidden" value="<?=$row_a?> ">
        <input name="b" type = "text" value="<?=$row_b?>" placeholder="<?=$p_b?>">
        <input name="c" type = "<?=$b?>" value="<?=$row_c?>" placeholder="<?=$p_c?>">
        <select class="select_1" name = "country_1" type = "<?=$bp?>">
                <option value="<?=$row_c?>"><?php echo $row_c?></option>
                <?php while($row_bp = mysqli_fetch_array($potreb)){?>
                <option value="<?=$row_bp['Названиепотребителя']?>"><?=$row_bp['Названиепотребителя']?></option>
                <?php }?>
            </select>
        <input name="d" type = "<?=$b?>" value="<?=$row_d?>" placeholder="<?=$p_d?>">
        <select class="select_1" name = "country_2" type = "<?=$bp?>">
                <option value="<?=$row_d?>"><?php echo $row_d?></option>
                <?php while($row_bp = mysqli_fetch_array($postav)){?>
                <option value="<?=$row_bp['Названиеизготовителя']?>"><?=$row_bp['Названиеизготовителя']?></option>
                <?php }?>
            </select>
        <input name="e" type = "<?=$type_e?>" value="<?=$row_e?>" placeholder="<?=$p_e?>">
        <button type="submit">Готово</button>
    </form>
    <a class ="logo" href = "javascript:history.back()">Назад</a>
</body>
</html>
