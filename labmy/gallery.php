<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles/mainStyle.css">
    <link rel="stylesheet" href="styles/galleryStyle.css">
    <script src="scripts/jquery-3.6.0.min.js"></script>
    <script src="scripts/main.js"></script>
    <script src="scripts/galleryScript.js"></script>
    <title>Галерея</title>
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
                    <a href="myworks.php">Мои работы</a>
                </li>
                <li>
                    <a href="gallery.php" style="border-bottom: 2px solid DodgerBlue;">Какой я? (Галерея)</a>
                </li>
                <li>
                    <a href="about.php">Кто я?</a>
                </li>
                <li>
                    <a href="contacts.php">Где я?</a>
                </li>
            </ul>
        </div>
        <div class="header-content-gallery">
            <h1 class="text-title-gallery">Галерея</h1>
            <div class="gallery-box">
                <div class="btn-left" onclick="leftClickImage()">
                    <img src="images/gallery/arr-left.png" alt="">
                </div>
                <div id="mainImage"></div>
                <div class="btn-right" onclick="rightClickImage()">
                    <img src="images/gallery/arr-right.png" alt="">
                </div>
            </div>
        </div>
    </div>
</header>
</body>
</html>