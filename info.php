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
    <title>Данные о проекте</title>
</head>

<body>
    <div class="container-fluid bg-secondary h-2 header__top">
        <div class="container">
            <div class="d-flex time-wrap">
                <span class="col-3 time-block"></span>
                <span class="col-4 date-block"></span>
            </div>
        </div>
    </div>
    <div class="container p-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">О проекте</li>
            </ol>
        </nav>
    </div>
    <header class="container-fluid mx-auto col-6">
        <div class="container pt-3">
            <h1>Лист задач</h1>
        </div>
    </header>
    <main class="main container-fluid mx-auto col-6">
        <div class="container">
            <h3>В проекте использовано:</h3>
            <ul class="list-group col-6">
                <li class="list-group-item">HTML</li>
                <li class="list-group-item">CSS (BOOTSTRAP)</li>
                <li class="list-group-item">PHP</li>
                <li class="list-group-item">SQL</li>
                <li class="list-group-item">jQuery - обновление задач без перезагрузки</li>
                <li class="list-group-item">setInterval - обновление времени</li>
            </ul>
        </div>
    </main>

    <script src="js/ajax.js"></script>
</body>

</html>
