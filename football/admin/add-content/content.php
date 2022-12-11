<!-- admin-cards -->
<div class="bloc bloc-fill-screen l-bloc" id="admin-cards">
    <form method="POST">
        <div class="container">
            <div class="row">
                <?php
                $query = mysqli_query($db, "SELECT * FROM `content`");
                $content_name = $_POST['content_theme'];
                $content_full_text = $_POST['content_full_text'];
                if (isset($_POST['submit'])) {
                    mysqli_query($db, "INSERT INTO `content`(`content_theme`, `content_full_text`) VALUES (,' $content_name ',' $content_full_text')");
                }
                ?>
                <style>
                .text {
                    width: 600px;
                    height: 300px;
                }
                </style>
                <h1>Добавить контент</h1><br>
                <input type="text" name="content_theme" class="form-control"
                    placeholder="Напишите тему контента"><br><br>
                <input type="text" name="content_full_text" class="form-control text"
                    placeholder="Напишите описание контента"><br><br>

            </div>
            <br>
            <button type="submit">Добавить</button>
        </div>
    </form>
</div>
< <!-- admin-cards END -->