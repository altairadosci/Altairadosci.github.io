<?php
require_once'../Config/connect.php';
$new_pst = $_POST['new_pst'];
mysqli_query($connect, "INSERT INTO `posts` (`id`, `text`) VALUES (NULL, '$new_pst');");


header('Location: /');
?>