<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Галактический вестник</title>
    <link rel="stylesheet" href="/public/style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <a href="/news" class="header__link">
                <img src="/public/images/logo.svg" class="header__logo" alt="">
                <p class="header__title">Галактический<br>вестник</p>
            </a>
        </div>
    </header>

    <?php include 'views/' . $page ?>

    <footer class="footer container">
        <p class="footer__copyright">&copy; 2023 &mdash; 2412 &laquo;Галактический вестник&raquo;</p>
    </footer>
</body>
</html>