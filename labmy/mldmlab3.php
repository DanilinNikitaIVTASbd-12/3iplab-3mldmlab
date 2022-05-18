<?php session_start() ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>МЛДМлаб3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <link rel="stylesheet" href="styles/myworkstyle.css">
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
        <h7>
        <form method="post"  action="formldmlab3.php" enctype="multipart/form-data">
            <p>
            <label>Первый массив</label>
            <input type="text" name="mas1" placeholder="В виде 1, 2, 3">
            <p>
            <label>Второй массив</label>
            <input type="text" name="mas2" placeholder="В виде 4, 5, 6">
            <p>
            <label>Отношение</label>
            <input type="text" name="relationship" placeholder="В виде [1,4] [2,5] [3,6]">
            <p>
            <input type="submit" name="resh" value="Решение">
            </form>
            <?php echo $_SESSION['text']; 
            unset($_SESSION['text']);
            ?>
        </h7>
    </div>
</body>

</html>