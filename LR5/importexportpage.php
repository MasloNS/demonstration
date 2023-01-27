<?php
require "logic.php";
include "export.php";
include "import.php";
//session_start();
//if (!$_SESSION['user']){

//}
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
<body class = "d-flex flex-column min-vh-100">

<!-- Подключаем хедер -->
<?php
require_once "header.php";
?>

<div class="container-fluid text-center">
<form action="" method="post">
    <button class="btn btn-primary mb-1" name="export">
        <i class="fa fa-file-csv"></i>
        Экспортировать БД в CSV-файл</button>
</form>
</div>

<div class="container-fluid text-center">
    <form action="" method="post" enctype="multipart/form-data">
        <button class="btn btn-primary mb-1" name="import">
            <i class="fa fa-file-csv"></i>
            Импортировать в БД из CSV-файла</button>
    </form>
</div>
<?php
require_once "footer.php";
?>
<script src="bootstrap.bundle.min.js"></script>
</body>
</html>