<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>МЛДМлаб2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <link rel="stylesheet" href="styles/myworkstyle.css">
    <script type="text/javascript" src="/scripts/scriptmldm2.js"></script>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="nav">
            </a>
            <ul class="menu">
                <li>
                    <a href="index.php">Главная</a>
                </li>
                <li>
                    <a href="myworks.php" style="border-bottom: 2px solid DodgerBlue;">Мои работы</a>
                </li>
                <li>
                    <a href="gallery.php">Какой я? (Галерея)</a>
                </li>
                <li>
                    <a href="about.php">Кто я?</a>
                </li>
                <li>
                    <a href="contacts.php">Где я?</a>
                </li>
            </ul>
        </div>
    <div class="content">
        <form method="" action="" class="form" onsubmit="return false;">
            <textarea class="enter" id="enter"  form="form" name="enter"></textarea>
            <input type="button" value="Рассчитать" onclick="GetData();">
        </form>
    </div>
    </din>
        <h4 class="by">Результаты:</h4>
        <div class="results">
            <span id="refl"></span> <br>
            <span id="Sym"></span> <br>
            <span id="tranz"></span> <br>
            <span id="antSym"></span>
        </div>

</body>

</html>