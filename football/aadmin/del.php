<?php
require 'confdb.php';

$id = $_GET['id'];
$sql = 'DELETE FROM `mydata` WHERE `id` >= 1';
$query = $pdo->prepare($sql);
$query->execute([$id]);

header('Location: /notes.php');