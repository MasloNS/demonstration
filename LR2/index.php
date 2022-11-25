<?php
header('Location: bicycles.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>


<div class="container-fluid text-left">
    <div class="row">
        <header>
        <div class="row justify-content-between">
            <div class="col-1">
                <a href="#" class="link-primary">Распродажа</a>
            </div>
            <div class="col-1">
                <a href="#" class="link-warning">Акции</a>
            </div>
            <div class="col-1">
                <a href="#" class="link-secondary">Контакты</a>
            </div>
            <div class="col-1">
                <a href="#" class="link-secondary">Покупателям</a>
                </div>
            <div class="col-1">
                <a href="#" class="link-secondary">Доставка и оплата</a>
            </div>
            <div class="col-1">
                <a href="#" class="link-secondary">YouTube</a>
            </div>


            <div class="col-1">

            </div>


            <div class="col-4">
                <h4>8 (800) 100-22-33</h4>
            </div>
        </div>
    </header>
    </div>
</div>



<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="images/1.png" alt="Велострана" width="200px" ></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Я ищу..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">
                    <img src="images/search.svg">
                </button>
            </form>
        </div>
        </div>

        </div>
        <div class="col">
            <div>
                <a  href="#" class="link-primary"><h6>Волгоград</h6></a>
                <a  href="#" class="link-primary"><h6>Пункт самовывоза: г. Волгоград, ул. Моторная,11Б</h6></a>
            </div>
        </div>
</nav>
    </div>

    <nav class="navbar sticky-top navbar-light bg-light">
    <div class="row justify-content-between">
        <div class="col-5">
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Велосипеды
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Горные велоипеды</a></li>
                        <li><a class="dropdown-item" href="#">Женские велосипеды</a></li>
                        <li><a class="dropdown-item" href="#">Двухподвесы</a></li>
                        <li><a class="dropdown-item" href="#">Экстремальные велосипеды</a></li>
                        <li><a class="dropdown-item" href="#">Комфортные велосипеды</a></li>
                        <li><a class="dropdown-item" href="#">Складные велосипеды</a></li>
                        <li><a class="dropdown-item" href="#">Детские велосипеды</a></li>
                        <li><a class="dropdown-item" href="#">Подростковые велосипеды</a></li>
                        <li><a class="dropdown-item" href="#">Щоссейные велосипеды</a></li>
                        <li><a class="dropdown-item" href="#">Городские велосипеды</a></li>
                        <li><a class="dropdown-item" href="#">Электровелосипеды</a></li>
                        <li><a class="dropdown-item" href="#">VIP велосипеды</a></li>
                        <li><a class="dropdown-item" href="#">Бренды</a></li>
                        <li><a class="dropdown-item" href="#">Распродажа</a></li>
                    </ul>
                </div>

                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Аксессуары
                    </button>
                    <ul class="dropdown-menu">
                        <div class="row">
                            <div class="col">
                        <li><a class="dropdown-item" href="#">Велосипедные сумки</a></li>
                        <li><a class="dropdown-item" href="#">Фонари</a></li>
                        <li><a class="dropdown-item" href="#">Насосы</a></li>
                        <li><a class="dropdown-item" href="#">Велокомпьютеры</a></li>
                        <li><a class="dropdown-item" href="#">Флягодержатели</a></li>
                        <li><a class="dropdown-item" href="#">Детские кресла</a></li>
                        <li><a class="dropdown-item" href="#">Велокорзины</a></li>
                        <li><a class="dropdown-item" href="#">Велочехлы</a></li>
                        <li><a class="dropdown-item" href="#">Велоприцепы</a></li>
                        <li><a class="dropdown-item" href="#">Велостанки для тренировок</a></li>
                        <li><a class="dropdown-item" href="#">Сувениры</a></li>
                        <li><a class="dropdown-item" href="#">Ремкоплекты</a></li>
                        <li><a class="dropdown-item" href="#">Велобагажники для автомобиля</a></li>
                        <li><a class="dropdown-item" href="#">Доролнительные колеса для детских велосипедов</a></li>
                        <li><a class="dropdown-item" href="#">Системы хранения велосипедов</a></li>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col">
                        <li><a class="dropdown-item" href="#">Крылья для велосипеда</a></li>
                        <li><a class="dropdown-item" href="#">Велозамки</a></li>
                        <li><a class="dropdown-item" href="#">Фляги</a></li>
                        <li><a class="dropdown-item" href="#">Подарочные карты</a></li>
                        <li><a class="dropdown-item" href="#">Багажники</a></li>
                        <li><a class="dropdown-item" href="#">Зеркала</a></li>
                        <li><a class="dropdown-item" href="#">Звонки</a></li>
                        <li><a class="dropdown-item" href="#">Защита пера велорамы</a></li>
                        <li><a class="dropdown-item" href="#">Пульсометры</a></li>
                        <li><a class="dropdown-item" href="#">Видеокамеры</a></li>
                        <li><a class="dropdown-item" href="#">Подножки</a></li>
                        <li><a class="dropdown-item" href="#">Наклейки</a></li>
                        <li><a class="dropdown-item" href="#">Держатели для телефона</a></li>
                        </div>
                        </div>
                    </ul>
                </div>

                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Запчасти
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Привод</a></li>
                        <li><a class="dropdown-item" href="#">Узлы и детали трансмиссии</a></li>
                        <li><a class="dropdown-item" href="#">Тормоза</a></li>
                        <li><a class="dropdown-item" href="#">Колёса</a></li>
                        <li><a class="dropdown-item" href="#">Вилки</a></li>
                        <li><a class="dropdown-item" href="#">Амортизаторы</a></li>
                        <li><a class="dropdown-item" href="#">Комплекты электрификации</a></li>
                        <li><a class="dropdown-item" href="#">Велозапчасти для рулевого управления</a></li>
                        <li><a class="dropdown-item" href="#">Сёдла, подседельные штыри, аксессуары</a></li>
                        <li><a class="dropdown-item" href="#">Рамы</a></li>
                        <li><a class="dropdown-item" href="#">Тросы/Оболочки/Наконечники</a></li>
                    </ul>
                </div>

                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Экипировка
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Велорюкзаки</a></li>
                        <li><a class="dropdown-item" href="#">Защита</a></li>
                        <li><a class="dropdown-item" href="#">Велоочки/Веломаски</a></li>
                        <li><a class="dropdown-item" href="#">Одежда</a></li>
                        <li><a class="dropdown-item" href="#">Обувь</a></li>
                    </ul>
                </div>

                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Инструменты
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Многофункциональные инструменты для ремонта велосипеда</a></li>
                        <li><a class="dropdown-item" href="#">Товары для узода за велосипедом</a></li>
                        <li><a class="dropdown-item" href="#">Смазки для велосипедов</a></li>
                        <li><a class="dropdown-item" href="#">Наборы инструментов для ремонта велосипедов</a></li>
                        <li><a class="dropdown-item" href="#">Профессиональные велоиструменты</a></li>
                        <li><a class="dropdown-item" href="#">Наборы для прокачки тормозов</a></li>
                        <li><a class="dropdown-item" href="#">Стойки дл ремонта велосипедов</a></li>
                        <li><a class="dropdown-item" href="#">Монтажные лопатки для колесного ремонта</a></li>
                    </ul>
                </div>

                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Самокаты
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Электросамокаты</a></li>
                        <li><a class="dropdown-item" href="#">Взрослые городские самокаты</a></li>
                        <li><a class="dropdown-item" href="#">Взросыле складные самокаты</a></li>
                        <li><a class="dropdown-item" href="#">Детские трехколесные самокаты</a></li>
                        <li><a class="dropdown-item" href="#">Детские двухколесные самокаты</a></li>
                        <li><a class="dropdown-item" href="#">Самокаты с большими колесами</a></li>
                        <li><a class="dropdown-item" href="#">Трюковые самокаты</a></li>
                    </ul>
                </div>

                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Веломастерская
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Адреса мастерских</a></li>
                        <li><a class="dropdown-item" href="#">Цены</a></li>
                        <li><a class="dropdown-item" href="#">Сезонное хранение</a></li>
                    </ul>
                </div>

            </div>
       </div>
        <div class="col-2">
            <button type="button" class="btn btn-outline-primary">
                <img src="images/bar-chart.svg">
            </button>
            <button type="button" class="btn btn-outline-primary">
                <img src="images/heart.svg">
            </button>
            <button type="button" class="btn btn-outline-primary">
                <img src="images/cart.svg">
            </button>
        </div>

    </div>
    </nav>
    <div>






<div class="container-fluid text-center">
    <footer>
        © 2006-2022, <a href="#" class="link-primary">Интернет-магазин ВелоСтрана.ру</a> в Волгограде – 16 лет нам доверяют покупатели!
    </footer>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>