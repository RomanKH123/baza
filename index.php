<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>База данных</title>
    <link rel="stylesheet" href="/web/main.css">
    <script src="https://unpkg.com/react@16/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
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
            </select>        
            <button type = "submit" >Принять</button>
        </form> 
        
    </div>
    </div>
    <div id = "root"></div>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="/web/react.js" type = "text/babel"></script>
    <script src="/web/main.js"></script>
</body>
</html>