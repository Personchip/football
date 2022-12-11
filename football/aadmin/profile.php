<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">

    </script>
    <title>Thinkball</title>
</head>

<body>
    <div class="mmnu">
        <?php
        include "leftmenu.php";
        ?>
    </div><br><br>
    <div class="container">

        <h1>
            Прогресс футболиста <button type="button" class="btn btn-danger"><a href="profile/index.php">Перейти в
                    профиль</a>

            </button>
        </h1><br>
        <h3>
            Кардио тренировки
        </h3>
        <div class="progress">

            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                aria-valuemax="100"></div>
        </div><br>

        <h3>
            ОФП
        </h3>
        <div class="progress">

            <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0"
                aria-valuemax="100"></div>
        </div><br>

        <h3>
            Тактика ведения
        </h3>
        <div class="progress">

            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0"
                aria-valuemax="100"></div>
        </div><br>


        <h3>
            Дриблинг
        </h3>
        <div class="progress">

            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0"
                aria-valuemax="100"></div>
        </div><br>
        <h3>
            Контроль мяча
        </h3>
        <div class="progress">

            <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0"
                aria-valuemax="100"></div>
        </div><br>

        <h3>
            Работа в защите
        </h3>
        <div class="progress">

            <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0"
                aria-valuemax="100"></div>
        </div><br>
    </div>


</body>

</html>