<?php
require "config/db_conn.php";


?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Задачник</title>
</head>

<body>
    <header class="mb-5 header col-12 sticky-top bg-light p-2">
        <div class="container">
            <h1 class="mb-4 mx-auto col-6">Мой задачник</h1>
            <div class="time-wrap mb-4 mx-auto col-6">
                <span class="time-block"></span> часов
            </div>

            <form action="config/insert_task.php" class="form mx-auto col-6" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Нужно сделать..."
                        name="title_task">
                    <label for="floatingInput">Нужно сделать ...</label>
                </div>
                <div class="form-floating">
                    <textarea type="text" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                        style="height: 100px" name="desc_task"></textarea>
                    <label for="floatingTextarea2">Описание</label>
                </div>
                <button class="new-task mt-3 btn btn-primary d-block w-100">Создать</button>
            </form>
        </div>

    </header>
    <main class="main container-fluid">
        <div class="container">
            <h1 class="mb-4 mx-auto col-6">Задачи</h1>
            <ul class="col-md-6 mx-auto todo__list">
                <?php

                    $tasks = mysqli_query($conn, "SELECT * FROM `tasks` ORDER BY id DESC");
                    $tasks = mysqli_fetch_all($tasks);

                    foreach($tasks as $task){
                        ?>
                <li class="mb-4 bg-light p-3 shadow d-flex justify-content-between">
                    <div class="col-8">
                        <p class="h3">
                            <?= $task[1]?>
                        </p>
                        <p>
                            <?= $task[2]?>
                        </p>
                    </div>
                    <form class="d-flex flex-column" action="" method="post">
                        <a href="config/delete_task.php?id=<?=$task[0]?>" class="btn link-danger">Удалить</a>
                        <button class="update btn btn-link">Изменить</button>
                    </form>
                </li>

                <?php
                    }
                ?>


            </ul>
        </div>
    </main>


    <script src="js/ajax.js"></script>
</body>

</html>