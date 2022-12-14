<?php require_once '../engine/config.php'; require_once '../engine/functions.php'; if ($user) { header('Location: ' . URL . '/profile'); exit; } ?>

<!doctype html>
<html lang="ru">
<head>
    <?php require_once '../engine/head.php'; ?>
    <title><?php echo $lang_reg['Title']; ?></title>
</head>
<body>
<div class="page-container">
    <?php
    include_once '../engine/navbar.php';
    require_once 'content.php';
    include_once '../engine/footer.php';
    include_once '../engine/scripts.php';
    ?>
</div>
</body>
</html>