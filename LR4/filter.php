<?php
require "logic.php";
session_start();
if (!$_SESSION['user']){
    header("Location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/unnamed.ico" type="image/x-icon">
    <link href="bootstrap.min.css" rel="stylesheet">
    
    <title>Велики</title>
</head>



<!-- Тело сайта -->
<body class = "position-relative">

<!-- Подключаем хедер -->
<?php
require_once "header.php";
?>
<div class="h2 text-center">
                Фильтрация
            </div>
<div class="container  ">
    <div class="catalog">
        <form action="bicycles.php" method="get">
            <label for="exampleFormControlTextarea1">Фильтрация по стоимости:</label>
            <div class="form-group">
                <input name="cost" type="" class="form-control" id="exampleFormControlInput1"   value="<?=$cost;?>"placeholder="">
                <p class="text-danger"> <?=$str;?></p>
            </div>
            <label for="pet-select">Фильтрация по типу велосипеда:</label>
            <select name="typename" class="form-select mb-4" aria-label="Default select example">



                <?php if(isset($_GET['searchInfo'])): ?>
                    <option selected><?=$_GET['typename']; ?></option>
                <?php else: ?>
                    <option selected><?=$typeStr; ?></option>
                <?php endif; ?>


                <?php foreach($typenames as $key => $typename):?>
                    <?php if($_GET['typename']!==$typename['typename']):?>
                        <option value="<?=$typename['name'];?>"><?=$typename['name'];?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Фильтрация по описанию:</label>
                <textarea value="" name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"><?=$description; ?></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Фильтрация по наименованию:</label>
                <input name="name" value="<?=$name; ?>"type="" class="form-control" id="exampleFormControlInput1" placeholder="Наименование">
            </div>
            <div class="row ">
                <div class="col-2">
                    <button name="searchInfo" class="btn btn-primary" type="submit">Применить фильтр</button>
                </div>
                <div class="col-2">
                    <button name="Clear"  class="btn btn-primary" type="submit">Сбросить фильтр</button>
                </div>
            </div>
        </form>

        <div class="row border-top">
            <div class="col-4" ><b>Изображение</b></div>
            <div class="col-1"><b>Название</b></div>
            <div class="col-2"><b>Тип</b></div>
            <div class="col-3"><b>Описание</b></div>
            <div class="col-2"><b>Стоимость</b></div>
        </div>

        <?php foreach($bicycles as $key => $bike): ?>
            <div class="row ">
                <div class="col-4"><img src="images\<?=$bike['img_path']; ?>" alt="something" height="150"></div>
                <div class="col-1"><?=$bike['name']; ?></div>
                <div class="col-2"><?=$bike['typename']; ?></div>
                <div class="col-3"><?=$bike['description']; ?></div>
                <div class="col-2"><?=$bike['cost']; ?></div>
            </div>
        <?php endforeach; ?>

    </div>
    <script src="bootstrap.bundle.min.js"></script>
</div>
</body>