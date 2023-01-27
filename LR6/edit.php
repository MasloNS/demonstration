<?php
require_once "config.php";

$img_path = $name = $type = $description = $cost = "";
$img_path_error = $name_error = $type_error = $description_error = $cost_error = "";

if (isset($_POST["id"]) && !empty($_POST["id"])) {

    $id = $_POST["id"];

    $img_path = trim($_POST["img_path"]);
    if (empty($img_path)) {
        $img_path_error = "Требуется картинка";
    } elseif (!filter_var($img_path, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/[^@]/")))) {
        $img_path_error = "Некорректная картинка";
    } else {
        $img_path = $img_path;
    }

    $name = trim($_POST["name"]);
    if (empty($name)) {
        $name_error = "Требуется ввести название";
    } elseif (!filter_var($name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/[^@]/")))) {
        $name_error = "Некорректное название";
    } else {
        $name = $name;
    }

    $type = trim($_POST["type"]);
        if (empty($type)) {
            $type_error = "Требуется ввести тип";
        } elseif (!filter_var($type, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/[А-я\s]/")))) {
            $type_error = "Некорректный тип";
        } else {
            $type = $type;
        }

        
    $description = trim($_POST["description"]);
    if (empty($description)) {
        $description_error = "Требуется описание";
    } else {
        $description = $description;
    }
    
    $cost = trim($_POST["cost"]);
    if (empty($cost)){
        $cost_error = "Требуется ввести стоимость";
    } else {
        $cost = $cost;
    }

    if (empty($img_path_error) && empty($name_error) &&
        empty($type_error) && empty($description_error) && empty($cost_error) ) {

        $sql = "UPDATE `bicycles` SET `img_path`= '$img_path', `name`= '$name', `type`= '$type', `description`= '$description', `cost`= '$cost' WHERE id='$id'";

        if (mysqli_query($conn, $sql)) {
            header("location: index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }

    }

    mysqli_close($conn);
} else {
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        $id = trim($_GET["id"]);
        $query = mysqli_query($conn, "SELECT * FROM bicycles WHERE id = '$id'");

        if ($user = mysqli_fetch_assoc($query)) {
            $img_path   = $user["img_path"];
            $name = $user["name"];
            $type = $user["type"];
            $description = $user["description"];
            $cost   = $user["cost"];
        } else {
            echo "Something went wrong. Please try again later.";
            header("location: edit.php");
            exit();
        }
        mysqli_close($conn);
    }  else {
        echo "Something went wrong. Please try again later.";
        header("location: edit.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link href="bootstrap.css" rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .wrapper {
            width: 1200px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <?php
    require_once "header.php";
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2> Редактирование записи</h2>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <!--<div class="form-group <?php echo (!empty($img_path_error)) ? 'has-error' : ''; ?>">
                        <label>Картинка</label>
                        <input type="text" name="img_path" class="form-control" value="<?php echo $img_path; ?>">
                        <span class="help-block"><?php echo $img_path_error;?></span>
                    </div>-->

                    <div>
                    <label class="control-label">Картинка</label>
                    <input class="input-group" type="file" name="img_path" accept="images/*" />
                    </div>
                    
                    <div class="form-group <?php echo (!empty($name_error)) ? 'has-error' : ''; ?>">
                        <label>Название</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                        <span class="help-block"><?php echo $name_error;?></span>
                    </div>

                    <div class="form-group <?php echo (!empty($type_error)) ? 'has-error' : ''; ?>">
                        <label>Тип</label>
                        <input type="text" name="type" class="form-control" value="<?php echo $type; ?>">
                        <span class="help-block"><?php echo $type_error;?></span>
                    </div>

                    <div class="form-group <?php echo (!empty($description_error)) ? 'has-error' : ''; ?>">
                        <label>Описание</label>
                        <input type="text" name="description" class="form-control" value="<?php echo $description; ?>">
                        <span class="help-block"><?php echo $description_error;?></span>
                    </div>

                    <div class="form-group <?php echo (!empty($cost_error)) ? 'has-error' : ''; ?>">
                        <label>Стоимость</label>
                        <input type="number" name="cost" class="form-control" value="<?php echo $cost; ?>">
                        <span class="help-block"><?php echo $cost_error;?></span>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Сохранить">
                    <a href="index.php" class="btn btn-default">Отмена</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require_once "footer.php";
?>
</body>
</html>