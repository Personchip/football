<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>ThinkBall</title>
    <link href="assets/css/calendar.css" rel="stylesheet">
    <script async src="assets/js/calendar.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="mmnu">
        <?php
        include "leftmenu.php";
        ?></div><br><br><br><br>

    <div class="container">

        <div class="form-group col-md-6">
            <div id="cal-wrap">
                <!-- ВЫБОР ПЕРИОДА -->
                <div id="cal-date">
                    <select id="cal-mth"></select>
                    <select id="cal-yr"></select>
                </div>
                <!-- КАЛЕНДАРЬ -->
                <div id="cal-container"></div>
                <!-- ФОРМА СОБЫТИЯ -->
                <form id="cal-event">
                    <h1 id="evt-head"></h1>
                    <div id="evt-date"></div>
                    <textarea id="evt-details" required></textarea>
                    <input id="evt-close" type="button" value="Закрыть" />
                    <input id="evt-del" type="button" value="Удалить" />
                    <input id="evt-save" type="submit" value="Сохранить" />
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>