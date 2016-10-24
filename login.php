<?php
/**
* Created by PhpStorm.
* User: hype_
* Date: 24/10/2016
* Time: 14:04
*/

$username = $_POST["name"];
$password = $_POST["password"];

if($username=="username" && $password=="password"){
    $_SESSION['accessLevel'] = "standarduser";
}

header('Location: loggedIn.php');
?>
