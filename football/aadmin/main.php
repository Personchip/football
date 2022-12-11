<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php
    include "leftmenu.php";
    ?><br><br><br><br>

    <div class="container">
        <h1>Привет Тренер! Загрузи тренировки</h1>
        <br>
        <div class="form-group col-md-12">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Загрузите медиа тренировки</label><br>
            <label for="inputCity">Заголовок Тернировки</label>
            <input type="text" class="form-control" id="inputCity"><br>
            <label for="inputCity">Описание Тренировки</label>
            <input type="text" class="form-control" id="inputCity"><br>
            <button type="button" class="btn btn-success">Загрузить тренировку</button>
        </div>

    </div>



</body>

</html>