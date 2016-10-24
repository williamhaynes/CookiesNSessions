<?php
/**
* Created by PhpStorm.
* User: hype_
* Date: 24/10/2016
* Time: 14:04
*/

session_start();
$username = $_POST["name"];
$password = $_POST["password"];

if($username=="username" && $password=="password"){
    $_SESSION['accesslevel'] = "standarduser";
}

header('Location: loggedIn.php');
?>
