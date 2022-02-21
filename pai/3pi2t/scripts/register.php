<?php
require_once './connect.php';
$pass=password_hash($_POST['pass2'],PASSWORD_DEFAULT);
$sql="INSERT INTO `users` (`id`, `name`, `email`, `pass`, `create_user`) VALUES (NULL, '$_POST[name]', '$_POST[email1]', '$pass', current_timestamp());";
$result=$connect->query($sql);
header('location:../index.php');
 ?>
