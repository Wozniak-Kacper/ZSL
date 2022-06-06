<?php
$connect = new mysqli("localhost","root","","postman");
$sql = "SELECT * FROM `logowane`";
$result = $connect->query($sql);
define("USERNAME" , '$result["login"]');
define("PASSWORD", '$result["password"]');
?>