<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="/web/main.css">
    <script src="https://unpkg.com/react@16/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <link rel = "stylesheet" href = "/web/react.css"> 
</head>
<body>
            <div class="React_Log" Id = "ewe">
                <div id = "tap" class="Tap">
                    <input Placeholder="Логин" Type = "text" Id="React_a" class="React_Input_a"></input>
                    <input Placeholder="Пароль" Type = "password" Id="React_b" class="React_Input_a"></input>
                    <button onClick = "connekt()" class="React_Input_a">Войти</button>
                    <div Id = "errorb" class="React_error">Неправильный Логин или Пароль</div>
                </div>
            </div>
    <script src = "/web/main.js"></script>
</body>
</html>