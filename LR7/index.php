<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="icon" href="img/unnamed.ico" type="image/x-icon">
    <link href="bootstrap.css" rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .wrapper {
            width: 1200px;
            margin: 0 auto;
        }
    </style>
</head>





<body class = "d-flex flex-column min-vh-100">


<!-- Подключаем хедер<link href="bootstrap.min.css" rel="stylesheet"> -->
<?php
require_once "header.php";
?>

    <div class="wrapper">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="page-header clearfix">
                    <h2 class="pull-left">Таблица записей о велосипедах</h2>
                    <a href="create.php" class="btn btn-success pull-right">Добавить новую запись</a>
                </div>
                <?php
                // Include config file
                require_once "config.php";

                // select all users
                $data = "SELECT * FROM bicycles";
                if($users = mysqli_query($conn, $data)){
                    if(mysqli_num_rows($users) > 0){
                        echo "<table class='table table-bordered table-striped'>
                                    <thead>
                                      <tr>
                                        <th>ID</th>
                                        <th>Изображение</th>
                                        <th>Название</th>
                                        <th>Тип</th>
                                        <th>Описание</th>
                                        <th>Стоимость</th>
                                        <th>Действия</th>
                                      </tr>
                                    </thead>
                                    <tbody>";
                        while($user = mysqli_fetch_array($users)) {
                            echo "<tr>
                                            <td>" . $user['id'] . "</td>
                                           
                                            <td> <img src=\"images/" . $user['img_path'] . "\"  height=\"80\"> </td>
                                           
                                            <td>" . $user['name'] . "</td>
                                            <td>" . $user['type'] . "</td>
                                            <td>" . $user['description'] . "</td>
                                            <td>" . $user['cost'] . "</td>
                                            <td>
                                              <a href='read.php?id=". $user['id'] ."' title='Просмтор записи' data-toggle='tooltip'><img src=\"images/eye.svg\"></a>
                                              <a href='edit.php?id=". $user['id'] ."' title='Реадктирование записи' data-toggle='tooltip'><img src=\"images/pencil.svg\"></a>
                                              <a href='delete.php?id=". $user['id'] ."' title='Удаление записи' data-toggle='tooltip'><img src=\"images/trash3.svg\"></a>
                                            </td>
                                          </tr>";
                        }
                        echo "</tbody>
                                </table>";
                        mysqli_free_result($users);
                    } else{
                        echo "<p class='lead'><em>Записей не найдено</em></p>";
                    }
                } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }

                // Close connection
                mysqli_close($conn);
                ?>
            </div>
        </div>
    </div>
</div>

<?php
require_once "footer.php";
?>
<script src="bootstrap.bundle.min.js"></script>
</body>
</html>