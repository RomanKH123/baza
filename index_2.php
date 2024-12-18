<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>База данных</title>
    <link rel="stylesheet" href="/web/main.css">
   <link rel = "stylesheet" href = "/web/react.css"> 
</head>
<body>
    <div id = "index">
        <div>
            <form method = "POST" class="logo_3" action="/server/db.php">
                <select class="select_1" name = "country">
                    <option value="">Выберите базу</option>
                    <option value="klient">Потребители</option>
                    <option value="postav">Поставщики</option>
                    <option value="torgovly">Торговля</option>
                    <option value="otkaz">Возвраты</option>
                    <option value="sertif">Сертификаты</option>
                    <option value="history">История</option>
                </select>        
                <button type = "submit" >Принять</button>
                <button href="/index.php">Выйти</button>
            </form> 
            
        </div>
    </div>
    
    <script src="/web/main.js"></script>
</body>
</html>