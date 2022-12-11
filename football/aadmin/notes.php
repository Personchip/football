<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/#.css">
</head>

<body>
    <div class="mmnu"> <?php
                        include 'leftmenu.php';
                        ?>
    </div>

    <div class="container">
        <h1> Заметки </h1><br>
        <form action="/add.php" method="post">
            <input class="form-control" type="text" name="list" id="list" placeholder="Введите текст заметки..."><br>
            <button class="btn btn-danger" type="submit" name="send"> Добавить </button>
        </form>
        <?php
        require 'confdb.php';
        echo '<ul>';
        # Получаем данные из таблицы
        $query = $pdo->query('SELECT * FROM `mydata`');
        # В цикле выводим только поле data в список.
        while ($tmp = $query->fetch(PDO::FETCH_OBJ)) {
            echo '<li><b>' . $tmp->data . '</b></li>';
        }
        echo '</ul>';
        echo '<li><b>' . $tmp->data . '</b><a href="del.php' . $tmp->id . '"><button class="btn btn-danger"> Удалить</button></a></li>';
        ?>
    </div>
</body>

</html>