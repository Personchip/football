<!-- reg-bloc -->
<div class="bloc bloc-fill-screen bg-forrest tc-black l-bloc" id="reg-bloc">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 bloc-margin-bottom bgc-white shadow-box">
                <form id="reg_form" method="POST">
                    <h4 class="mg-md tc-black h4-margin-bottom btn-resize-mode"><?php echo $lang_reg['Title']; ?></h4>
                    <?php
                    if (isset($_POST['reg'])) {
                        $Login = mysqli_real_escape_string($db, $_POST['Login']);
                        $Password = mysqli_real_escape_string($db, md5($_POST['Password']));
                        $access = mysqli_real_escape_string($db, $_POST['access']);

                        $regCheck = "SELECT Login FROM Accounts WHERE Login = '$Login'";
                        $getValue = mysqli_query($db, $regCheck);

                        if (mysqli_num_rows($getValue) > 0)
                            echo '<span style="color: #ff0000; ">Логин занят</span>';
                        else if (!mysqli_query($db, "INSERT INTO Accounts (Login,Password,access) VALUES ('$Login','$Password',0) ")) {
                            header('Refresh: 10');
                            echo 'Произошла какая-то ошибка. <s>Страница обновится через 10 секунд</s>';
                        } else {
                            if (isset($Login, $Password)) {
                                if ($result = !authentication($Login, $Password)) {
                                    echo '<span style="color: #ff0000; ">Произошла неизвестная ошибка</span>';
                                } else {
                                    $_SESSION = array(
                                        'Login' => $Login,
                                        'Password' => $Password
                                    );
                                    header('Location: ' . URL);
                                    exit;
                                }
                            }
                        }
                    }
                    ?> <br>
                    <div class="form-group container-div-margin-top">
                        <label for="login_input"><?php echo $lang_reg['Login']; ?></label>
                        <input name="Login" id="login_input" class="form-control"
                            placeholder="<?php echo $lang_reg['Enter new login']; ?>" maxlength="32" minlength="3"
                            required />
                    </div>
                    <div class="form-group">
                        <label for="password_input"><?php echo $lang_reg['Password']; ?></label>
                        <input name="Password" id="password_input" type="password" class="form-control"
                            placeholder="<?php echo $lang_reg['Enter the password']; ?>" maxlength="64" minlength="5"
                            required />
                    </div>
                    <input type="hidden" name="IP_reg" value="<?php echo $ip; ?>">
                    <input type="hidden" name="IP_last" value="<?php echo base64_encode($ip); ?>">
                    <button class="bloc-button btn  btn-margin-bottom btn-d"
                        type="reset"><?php echo $lang_reg['Reset']; ?></button>&nbsp;
                    <button name="reg" class="bloc-button btn  btn-margin-bottom btn-d" type="submit">
                        <?php echo $lang_reg['Continue']; ?></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- reg-bloc END -->