<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link href="bootstrap.css" rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .wrapper{
            width: 1200px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<?php
if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    require_once "config.php";

    $id = trim($_GET["id"]);
    $query = mysqli_query($conn, "SELECT * FROM bicycles WHERE id = '$id'");

    if ($user = mysqli_fetch_assoc($query)) {
        $img_path   = $user["img_path"];
        $name = $user["name"];
        $type = $user["type"];
        $description = $user["description"];
        $cost   = $user["cost"];
    } else {
        header("location: read.php");
        exit();
    }

    mysqli_close($conn);
} else {
    header("location: read.php");
    exit();
}
?>
<div class="wrapper">
    <?php
    require_once "header.php";
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1> Просмотр записи</h1>
                </div>
                <div class="form-group">
                    <label>Картинка</label>
                    <p class="form-control-static"><img src="images/<?php echo $img_path;?>" height="80"></p>
                </div>
                <div class="form-group">
                    <label>Название</label>
                    <p class="form-control-static"><?php echo $name ?></p>
                </div>
                <div class="form-group">
                    <label>Тип</label>
                    <p class="form-control-static"><?php echo $type ?></p>
                </div>
                <div class="form-group">
                    <label>Описание</label>
                    <p class="form-control-static"><?php echo $description ?></p>
                </div>
                <div class="form-group">
                    <label>Стоимость</label>
                    <p class="form-control-static"><?php echo $cost ?></p>
                </div>
                <p><a href="index.php" class="btn btn-primary">Назад</a></p>
            </div>
        </div>
    </div>
</div>
<?php
require_once "footer.php";
?>
</body>
</html>