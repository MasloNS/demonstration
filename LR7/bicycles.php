<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/unnamed.ico" type="image/x-icon">
    <link href="bootstrap.min.css" rel="stylesheet">
    <title>Третья</title>
</head>



<!-- Тело сайта -->
<body class = "position-relative">

<!-- Подключаем хедер -->
<?php
require_once "header.php";
require_once "session.php";
?>



<div>
    <div class="row justify-content-between">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Главная</a></li>
                    <li class="breadcrumb-item"><a href="#">Cube</a></li>
                    <li class="breadcrumb-item"><a href="#">2022</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Горный велосипед Cube Aim Pro 29 (2022)</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<div class="row justify-content-between">
    <div class="col-8" >
        <h3><strong>Горный велосипед Cube Aim Pro 29 (2022)</strong></h3>
        <h6>Нет в наличии</h6>

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images\2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <img src="images\4.png" width="40px">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images\3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <img src="images\5.png" width="40px">
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
    <div class="col-3">
        <img src="images/cube.jpg">
        <p><h1>88 000 Р</h1></p>
        <p><h6>Нет в наличии</h6></p>
        <p> <button type="button" class="btn btn-outline-primary"><h6>Уведомить о поступлении</h6></button></p>

        <p><h5>Похожие товары в наличии</h5></p>


        <div id="carousel2ExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouse2ExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouse2ExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouse2ExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/bike1.jpg" class="d-block w-100" alt="...">
                    <div>
                        <h6>Горный велосипед 29"</h6>
                        <h5>Format 1313 (2021)</h5>
                        <h3><p>73 360 P</p></h3>
                        <h6>В наличии</h6>
                        <button class="btn btn-outline-success" type="submit">
                            <img src="images/basket.svg">
                        </button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/bike2.jpg" class="d-block w-100" alt="...">
                    <div>
                        <h6>Горный велосипед 29"</h6>
                        <h5>Bergamont Revox 4 29 (2021)</h5>
                        <h3><p>76 490 P</p></h3>
                        <h6>В наличии</h6>
                        <button class="btn btn-outline-success" type="submit">
                            <img src="images/basket.svg">
                        </button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/bike3.jpg" class="d-block w-100" alt="...">
                    <div>
                        <h6>Горный велосипед 29"</h6>
                        <h5>Bergamont Revox 2 29 (2022)</h5>
                        <h3><p>71 240 P</p></h3>
                        <h6>В наличии</h6>
                        <button class="btn btn-outline-success" type="submit">
                            <img src="images/basket.svg">
                        </button>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel2ExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel2ExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
</div>


<div class="row">
    <div class="col-12">
        <p><h6>Велосипед Cube Aim Pro 29 (2022) скоро будет в наличии с доставкой по Волгограду. В наличии есть похожая модель 2022 года по цене 84 499 руб. Гарантия: 12 месяцев</h6></p>
        <p><h6>Велосипед любительского уровня  Модель оснащена алюминиевой рамой  Дисковые гидравлические тормоза  16 скоростей  Задний переключатель Shimano Acera</h6></p>
    </div>
    <div class="col-2">
    </div>
</div>

<div class="row justify-content-between">
    <div class="col-7">

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#description">>Характеристики</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#characteristics">Отзывы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#opinion">Вопросы и ответы</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="description">

                <div class="row">

                    <div class="card card-body">
                        <p><strong>Описание</strong></p>
                        <p>Горный велосипед Cube Aim Pro 29 (2022) ориентирован на активных людей. Покрышки CUBE IMPAC Smartpac, 2.25 позволяют быстро набрать скорость независимо от типа и влажности покрытия. Мощные шатуны интенсивно передают усилия мышц на вал каретки. Классическая спортивная рама выполнена из алюминиевого сплава. Узкое спортивное седло Natural Fit Venec Lite с противоскользящей поверхностью. На велосипеде стоит стандартное оборудование. Предусмотрен задний переключатель Shimano RD-M360, 8-Speed. Для данного велосипеда были выбраны дисковые гидравлические тормоза Tektro HD-M275.</p>
                        <div class="container text-left">
                            <div class="row">
                                <div class="col">
                                    <p><strong>Технические характеристики</strong></p>
                                    <p><strong>Рама и амортизаторы</strong></p>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        Рама
                                    </div>
                                    <div class="col-8">
                                        Aluminium Lite, AMF, Double Butted, Internal Cable Routing, Tapered Head Tube, Flat Mount Brake, SIC Mount, FM Kickstand Mount
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        Вилка
                                    </div>
                                    <div class="col-8">
                                        SR Suntour XCT, 100mm
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        Вес всего велосипеда
                                    </div>
                                    <div class="col-8">
                                        14.60 кг
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <p></p>
                                        <p><strong>Цепная передача</strong></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        Манетки
                                    </div>
                                    <div class="col-8">
                                        Shimano SL-M315, Rapidfire-Plus
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        Передний переключатель
                                    </div>
                                    <div class="col-8">
                                        Shimano FD-M315, Top Swing, 31.8mm Clamp
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        Задний переключатель
                                    </div>
                                    <div class="col-8">
                                        Shimano RD-M360, 8-Speed
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        Шатуны
                                    </div>
                                    <div class="col-8">
                                        Shimano FC-M315, 36x22T
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        Кассета
                                    </div>
                                    <div class="col-8">
                                        Shimano CS-HG31, 11-34T
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        Количество скоростей
                                    </div>
                                    <div class="col-8">
                                        16
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        Цепь
                                    </div>
                                    <div class="col-8">
                                        KMC Z8.3
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        Педали
                                    </div>
                                    <div class="col-8">
                                        CUBE PP MTB
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <p></p>
                                        <p><strong>Колеса</strong></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        Диаметр колеса
                                    </div>
                                    <div class="col-8">
                                        29.0
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        Обода
                                    </div>
                                    <div class="col-8">
                                        CUBE ZX20, 32H, Disc
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        Втулка
                                    </div>
                                    <div class="col-8">
                                        CUBE Alloy Light, QR, 6-Bolt
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        Покрышки
                                    </div>
                                    <div class="col-8">
                                        CUBE IMPAC Smartpac, 2.25
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <p></p>
                                        <p><strong>Компоненты</strong></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        Передний тормоз
                                    </div>
                                    <div class="col-8">
                                        Tektro HD-M275 / TKD-150, Hydr. Disc Brake (160/160)
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-4">
                                        Задний тормоз
                                    </div>
                                    <div class="col-8">
                                        Tektro HD-M275 / TKD-150, Hydr. Disc Brake (160/160)
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-4">
                                        Грипсы
                                    </div>
                                    <div class="col-8">
                                        ACID React
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-4">
                                        Руль
                                    </div>
                                    <div class="col-8">
                                        CUBE Rise Trail Bar, 680mm
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-4">
                                        Вынос
                                    </div>
                                    <div class="col-8">
                                        CUBE Performance Stem Pro, 31.8mm
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-4">
                                        Рулевая колонка
                                    </div>
                                    <div class="col-8">
                                        CUBE FPH868, Top 1 1/8", Bottom 1 1/2", Semi-Integrated
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-4">
                                        Седло
                                    </div>
                                    <div class="col-8">
                                        Natural Fit Venec Lite
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-4">
                                        Подседельный штырь
                                    </div>
                                    <div class="col-8">
                                        CUBE Performance Post, 27.2mm
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-4">
                                        Разработка
                                    </div>
                                    <div class="col-8">
                                        Германия
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-4">
                                        Производство
                                    </div>
                                    <div class="col-8">
                                        Германия
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="characteristics">
                <p></p>
                <button type="button" class="btn btn-outline-primary">Добавить отзыв</button>
            </div>
            <div class="tab-pane fade" id="opinion">
                <p></p>
                <button type="button" class="btn btn-outline-primary">Добавить вопрос</button>
            </div>
        </div>
    </div>

    <div class="col-3">
        <div class="row">
            <a  href="#" class="link-primary"><h6>
                    <img src="images/6.jpg">
                    Гарантия возврата</h6></a>
        </div>
        <div class="row">
            <a  href="#" class="link-primary"><h6>
                    <img src="images/7.jpg">
                    Как выбрать размер</h6></a>
        </div>
        <div class="row">
            <a  href="#" class="link-primary"><h6>
                    <img src="images/8.jpg">
                    Где купить</h6></a>
        </div>
        <div class="row">
            <a  href="#" class="link-primary"><h6>
                    <img src="images/9.jpg">
                    Купить дешевле</h6></a>
        </div>
        <div class="row">
            <a  href="#" class="link-primary"><h6>
                    <img src="images/10.jpg">
                    Купить в кредит</h6></a>
        </div>
        <div class="row">
            <a  href="#" class="link-primary"><h6>
                    <img src="images/11.jpg">
                    Сообщить о снижении цены</h6></a>
        </div>

        <div class="row">
            <p></p>
            <p></p>
            <p></p>
            <img src="images/yandex-market.svg" height="40px">
            <p></p>
            <div> Наш рейтинг - <img src="images/stars.jpg" height="20px"> </div>
            <p></p>
            <p><button type="button" class="btn btn-outline-primary"><h6>Посмтотреть отзывы</h6></button></p>
        </div>
    </div>
</div>



<?php
    if(isset($_SESSION['user'])){
        echo "<a href='filter.php'>Секретная страница</a>";
    }
?>


<script src="bootstrap.bundle.min.js"></script>
</body>


</html>