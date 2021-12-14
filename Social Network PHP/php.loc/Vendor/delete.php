<?php
require_once'../Config/connect.php';

$id = $_GET['id'];
mysqli_query($connect, "DELETE FROM `posts` WHERE `posts`.`id` = '$id'");
header('Location: /');
?>