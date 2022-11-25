<?php
require_once "header.php";
require_once "textlogic.php";
?>

<head>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container text-center">
    <h2>
        Обработка текста
    </h2>
    <form action="text.php" method="post">
        <textarea name="text" id="" cols="30" rows="10"><?=$text?></textarea>
        <div>
            <form action="textlogic.php" method="POST">
                <input name="Action1" type="submit" value="Обработать" />
            </form>
        </div>
    </form>


    <div class="mt-3 text-start">

       
        
        <p>Задание 2</p>
        <div>
            <?=$analyze->Task2()?>
        </div>
        <p>Задание 6</p>
        <div>
            <?=$analyze->Task6()?>
        </div>
        <p>Задание 15</p>
        <div>
            <?=$analyze->Task15()?>
        </div>
        <p>Задание 19</p>
        <div>
            <?=$analyze->Task19()?>
        </div>

        
    </div>
</div>

<script src="bootstrap.bundle.min.js"></script>
</body>