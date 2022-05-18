<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>МЛДМлаб1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <link rel="stylesheet" href="styles/myworkstyle.css">
    <script type="text/javascript" src="/scripts/scriptmldm1.js"></script>
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
    <form>
        <table>
            <tr>
                <td>Первый массив</td>
                <td><input type = "text" id = "mass1"/></td> 
            </tr>
            <tr>
                <td>Второй массив</td> 
                <td><input type = "text" id = "mass2"/></td>
            </tr>
            <tr colspan ="2"><td><input type="button" value = "Объединить" onclick="unity();"/></td></tr>
            <tr colspan ="2"><td><input type="button" value = "Пересечь" onclick="denity();"/></td></tr>
            <tr colspan ="2"><td><input type="button" value = "Дополнить A\B" onclick="plusityAB();"/></td></tr>
            <tr colspan ="2"><td><input type="button" value = "Дополнить B\A" onclick="plusityBA();"/></td></tr>
            <tr colspan ="2"><td><input type="button" value = "Симметр. разность" onclick="symMinus();"/></td></tr>
            <tr colspan ="2"><td><output id = "Out"></output></td></tr>
        </table>
    </form>

</body>
</html>    