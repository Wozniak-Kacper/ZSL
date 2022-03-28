<?php
session_start();

foreach($_POST as $key => $value){
    if (empty($value)) {
        $_SESSION['error'] = "Wypełnij wszystkie pola np. $key";
        echo "<script>history.back();</script>";
        exit();
    }
}

$error =0;
if ($_POST['pass1']!=$_POST['pass2']) {
    $_SESSION['error']="Hasła są różne";
    $error=1;
}

if ($_POST['email1']!=$_POST['email2']) {
    $_SESSION['error']="Email się różni";
    $error=1;
}

if ($error != 0) {
    echo "<script>history.back();</script>";
    exit();
}

require_once 'connect.php';
$pass = password_hash($_POST['pass2'],PASSWORD_DEFAULT);
$sql = "INSERT INTO `adminlte` (`id`, `name`, `surname`, `email`, `password`, `birthday`, `city`, `gender`, `create_date`)
VALUES (NULL, '$_POST[name]', '$_POST[surname]', '$_POST[email2]', '$pass', '$_POST[Birthday]', '$_POST[city]', '$_POST[m]', current_timestamp());";
$result = $connect->query($sql);
header("location:./index.php");
?>