<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>ThinkBall</title>
    <link href="calendar.css" rel="stylesheet">
</head>

<body>
    <?php
    include 'leftmenu.php';
    ?>
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
    <script async src="calendar.js"></script>
</body>

</html>