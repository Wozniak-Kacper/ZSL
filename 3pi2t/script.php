<?php
session_start();

require_once 'connect.php';


 if (!empty($_POST['name']) && !empty($_POST['password'])) 
 {
    

    if ($_POST['name'] == USERNAME)
    {
        if ($_POST['password'] == PASSWORD) 
        {
          $_SESSION['user'] = htmlspecialchars($_POST['name']);
        }
    }

}

header('location:index.php');
?>