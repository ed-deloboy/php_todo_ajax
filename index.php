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
    <div class="container-fluid bg-secondary h-2 header__top">
        <div class="container">
            <div class="d-flex time-wrap">
                <span class="col-3 time-block"></span>
                <span class="col-4 date-block"></span>
                <a href="info.html" class="col-3 link text-light">О проекте</a>
            </div>
        </div>
    </div>
    <div class="container p-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Главная</li>
            </ol>
        </nav>
    </div>
    <header class="mb-1 header col-12 sticky-top p-2 bg-white">
        <div class="container">
            <h1 class="mb-4 mx-auto col-6">Мой задачник</h1>
            <form action="config/insert_task.php" class="bg-light form mx-auto col-6" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="taskTitleName" placeholder="Нужно сделать..."
                        name="title_task">
                    <label for="floatingInput">Нужно сделать ...</label>
                </div>
                <div class="form-floating">
                    <textarea type="text" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                        style="height: 100px" name="desc_task"></textarea>
                    <label for="floatingTextarea2">Описание</label>
                </div>
                <button type="submit" class="new-task mt-3 btn btn-primary d-block w-100">Создать</button>
            </form>
            <div class="pt-4 pb-1 bg-white">
                <p class="h2 mb-4 mx-auto col-6">Задачи</p>
            </div>
        </div>
    </header>
    <main class="main container-fluid bg-light p-2">
        <div class="container">
            <ul class="col-md-6 mx-auto todo__list">

            </ul>
        </div>
    </main>


    <script src="js/ajax.js"></script>
</body>

</html>
