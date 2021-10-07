<!DOCTYPE html>
<html lang="en">
<?php
$v = time();
$v = '1.0.3';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="theme-color" content="#4285f4">
    <meta name="msapplication-navbutton-color" content="#4285f4">
    <meta name="apple-mobile-web-app-status-bar-style" content="#4285f4">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=<?= $v ?>">
    <script src="js/scripts.js?v=<?= $v ?>"></script>
</head>

<body>
    <?php require_once('svg.svg'); ?>
    <header>
        <nav class="navbar">
            <div class="container-lg">
                <div class="navbar__wrapper">
                    <a class="navbar__toggler" data-bs-toggle="collapse" href="#nav" role="button">
                        <svg aria-hidden="true" class="navbar__toggler-icon-open">
                            <use xlink:href="#icon-bars" />
                        </svg>
                        <svg aria-hidden="true" class="navbar__toggler-icon-close">
                            <use xlink:href="#icon-close" />
                        </svg>
                    </a>

                    <div class="navbar__logo">
                        <a class="navbar__logo-link" href="#"><img src="uploads/logo.svg" alt="Logo"></a>
                    </div>
                    <div class="navbar__nav">
                        <ul class="nav">
                            <li class="nav__item"><a class="nav__link active" href="#">Главная</a></li>
                            <li class="nav__item">
                                <a class="nav__link" href="#">
                                    Жалобы
                                    <i class="nav__dropdown" data-menu-dropdown="">
                                        <svg aria-hidden="true" class="nav__dropdown-icon">
                                            <use xlink:href="#icon-arrow-down"></use>
                                        </svg>
                                    </i>
                                </a>
                                <div class="nav__sub">
                                    <div class="container-md">
                                        <div class="nav__sub-wrapper">
                                            <div class="nav__sub-item">
                                                <div class="nav__sub-head">
                                                    <div class="nav__sub-icon">
                                                        <?php echo file_get_contents('uploads/sub-icon.svg'); ?>
                                                    </div>
                                                    <div class="nav__sub-title">Общественный транспорт Общественный транспорт</div>
                                                </div>
                                                <ul class="nav__sub-list">
                                                    <li class="nav__sub-list-item"><a href="#" class="nav__sub-list-link">Жалоба на врача</a></li>
                                                    <li class="nav__sub-list-item"><a href="#" class="nav__sub-list-link">Жалобу на поликлинику</a></li>
                                                    <li class="nav__sub-list-item"><a href="#" class="nav__sub-list-link">Жалоба на медсестру</a></li>
                                                </ul>
                                            </div>
                                            <div class="nav__sub-item">
                                                <div class="nav__sub-head">
                                                    <div class="nav__sub-icon">
                                                        <?php echo file_get_contents('uploads/sub-icon.svg'); ?>
                                                    </div>
                                                    <div class="nav__sub-title">Общественный транспорт</div>
                                                </div>
                                                <ul class="nav__sub-list">
                                                    <li class="nav__sub-list-item"><a href="#" class="nav__sub-list-link">Жалоба на врача</a></li>
                                                    <li class="nav__sub-list-item"><a href="#" class="nav__sub-list-link">Жалобу на поликлинику</a></li>
                                                    <li class="nav__sub-list-item"><a href="#" class="nav__sub-list-link">Жалоба на детскую поликлинику Жалоба на детскую поликлинику</a></li>
                                                </ul>
                                                <a class="nav__sub-link" href="#">Посмотреть еще 20 видов жалоб</a>
                                            </div>
                                            <?php for ($i = 0; $i <= 8; $i++) : ?>
                                                <div class="nav__sub-item">
                                                    <div class="nav__sub-head">
                                                        <div class="nav__sub-icon">
                                                            <?php echo file_get_contents('uploads/sub-icon.svg'); ?>
                                                        </div>
                                                        <div class="nav__sub-title">Поликлиники, больницы</div>
                                                    </div>
                                                    <ul class="nav__sub-list">
                                                        <li class="nav__sub-list-item"><a href="#" class="nav__sub-list-link">Жалоба на врача</a></li>
                                                        <li class="nav__sub-list-item"><a href="#" class="nav__sub-list-link">Жалобу на поликлинику</a></li>
                                                        <li class="nav__sub-list-item"><a href="#" class="nav__sub-list-link">Жалоба на медсестру</a></li>
                                                        <li class="nav__sub-list-item"><a href="#" class="nav__sub-list-link">Жалоба на детскую поликлинику</a></li>
                                                    </ul>
                                                    <a class="nav__sub-link" href="#">Посмотреть еще 20 видов жалоб</a>
                                                </div>
                                            <?php endfor; ?>



                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav__item"><a class="nav__link" href="#">Проблемы</a></li>
                            <li class="nav__item"><a class="nav__link" href="#">О сервисе</a></li>
                            <li class="nav__item"><a class="nav__link" href="#">Кто мы?</a></li>
                        </ul>

                        <ul class="social-mobile">
                            <li class="social-mobile__item">
                                <a class="social-mobile__link" href="#">
                                    <svg aria-hidden="true" class="social-mobile__icon">
                                        <use xlink:href="#icon-fb" />
                                    </svg>
                                </a>
                            </li>
                            <li class="social-mobile__item">
                                <a class="social-mobile__link" href="#">
                                    <svg aria-hidden="true" class="social-mobile__icon">
                                        <use xlink:href="#icon-instagram" />
                                    </svg>
                                </a>
                            </li>
                            <li class="social-mobile__item">
                                <a class="social-mobile__link" href="#">
                                    <svg aria-hidden="true" class="social-mobile__icon">
                                        <use xlink:href="#icon-vk" />
                                    </svg>
                                </a>
                            </li>
                            <li class="social-mobile__item">
                                <a class="social-mobile__link" href="#">
                                    <svg aria-hidden="true" class="social-mobile__icon">
                                        <use xlink:href="#icon-ok" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar__search">
                        <a class="navbar__search-button collapsed" data-bs-toggle="collapse" href="#headSearch" role="button">
                            <svg aria-hidden="true" class="navbar__search-icon open">
                                <use xlink:href="#icon-search" />
                            </svg>
                            <svg aria-hidden="true" class="navbar__search-icon close">
                                <use xlink:href="#icon-close" />
                            </svg>
                        </a>
                    </div>
                    <div class="navbar__social">
                        <ul class="social">
                            <li class="social__item">
                                <a class="social__link" href="#">
                                    <svg aria-hidden="true" class="social__icon">
                                        <use xlink:href="#icon-fb" />
                                    </svg>
                                </a>
                            </li>
                            <li class="social__item">
                                <a class="social__link" href="#">
                                    <svg aria-hidden="true" class="social__icon">
                                        <use xlink:href="#icon-instagram" />
                                    </svg>
                                </a>
                            </li>
                            <li class="social__item">
                                <a class="social__link" href="#">
                                    <svg aria-hidden="true" class="social__icon">
                                        <use xlink:href="#icon-vk" />
                                    </svg>
                                </a>
                            </li>
                            <li class="social__item">
                                <a class="social__link" href="#">
                                    <svg aria-hidden="true" class="social__icon">
                                        <use xlink:href="#icon-ok" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="header-search" tabindex="-1" id="headSearch">

            <form class="header-search__form">
                <div class="header-search__group">
                    <input class="header-search__input form-control" type="text" placeholder="Как жаловаться">
                    <button class="header-search__btn btn btn-primary" type="button">
                        <svg aria-hidden="true" class="header-search__icon">
                            <use xlink:href="#icon-search" />
                        </svg>
                    </button>
                </div>
            </form>

        </div>
    </header>