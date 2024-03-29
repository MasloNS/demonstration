<?php
if (isset($_POST["id"]) && !empty($_POST["id"])) {
    require_once "config.php";
    $id = $_POST["id"];

    $query = "DELETE FROM bicycles WHERE id = '$id'";

    if (mysqli_query($conn, $query)) {
        header("location: index.php");
    } else {
        echo "Something went wrong. Please try again later.";
    }

    mysqli_close($conn);
} else {
    if (empty(trim($_GET["id"]))) {
        echo "Something went wrong. Please try again later.";
        header("location: index.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link href="bootstrap.css" rel="stylesheet">

    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>Удаление записи</h1>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="alert alert-danger fade in">
                        <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                        <p>Вы уверены, что хотите удалить данную запись?</p><br>
                        <p>
                            <input type="submit" value="Удалить" class="btn btn-danger">
                            <a href="index.php" class="btn btn-default">Отмена</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>