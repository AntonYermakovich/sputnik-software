<?php $url = $_SERVER['REQUEST_URI']; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finibus</title>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>

    <div class="lines">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
    </div>

    <header class="header">
        <div class="header__icon">
            <svg>
                <use href="assets/img/sprites.svg#logo" />
            </svg>
        </div>

        <ul class="menu">
            <li class="menu__item"><a href="index.php"
                    class="menu__link <?= $url == '/fin/index.php' ? 'menu__link_active' : '' ?>">Главная</a></li>
            <li class="menu__item"><a href="sales.php"
                    class="menu__link <?= $url == '/fin/sales.php' ? 'menu__link_active' : '' ?>">Продажи</a></li>
            <li class="menu__item"><a href="content-marketing.php"
                    class="menu__link <?= $url == '/fin/content-marketing.php' ? 'menu__link_active' : '' ?>">Контент-маркетинг</a>
            </li>
            <li class=" menu__item"><a href="hr.php"
                    class="menu__link <?= $url == '/fin/hr.php' ? 'menu__link_active' : '' ?>">HR</a></li>
            <li class="menu__item"><a href="analytics.php"
                    class="menu__link <?= $url == '/fin/analytics.php' ? 'menu__link_active' : '' ?>">Аналитика</a></li>
            <li class="menu__item"><a href="tenders.php"
                    class="menu__link <?= $url == '/fin/tenders.php' ? 'menu__link_active' : '' ?>">Тендеры</a></li>
            <li class="menu__item"><a href="personal-assistant.php"
                    class="menu__link <?= $url == '/fin/personal-assistant.php' ? 'menu__link_active' : '' ?>">Личный
                    ассистент</a></li>
        </ul>
    </header>