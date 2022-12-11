<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <?php
    include 'leftmenu.php';
    ?>
    <div class="container">
        <div class="container"><br><br><br><br>
            <h1>Введите свои данные</h1>
            <div class="form-row"><br>
                <div class="col-md-5 mb-3">
                    <label for="validationCustom01">Имя</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Введите имя" value=""
                        required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Фамилия</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Введите фамилию"
                        value="" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-5 mb-3">
                    <label for="validationCustom01">Возраст</label>
                    <form>
                        <input type="number" min="20" max="50" class="form-control" id="validationCustom01"="2"
                            placeholder="Введите возраст" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </form>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Ваш номер телефона (Формат +7(777)-777-7777)</label>
                    <input class="form-control" type="tel" name="tel" pattern="+7[0-9]{3}-[0-9]{3}-[0-9]{4}"
                        placeholder="Введите свой номер телефона">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-9 mb-3">
                    <h1>Чтобы стать тренером вам необходимо предоставить сертификат о прохождении квалификации на
                        тренера
                    </h1>
                    <br>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">
                            <p>Загрузите сертификат</p>
                        </label>
                    </div>
                </div>

            </div><br>
            <button type="button" class="btn btn-success">Отправить заявку</button>
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