<?php
/**
 * Created by PhpStorm.
 * User: hype_
 * Date: 24/10/2016
 * Time: 14:11
 */

session_start();
displayAccessLevelInformation($_SESSION['accessLevel']);

function displayAccessLevelInformation($accessLevel){
    if($accessLevel=="standarduser"){
        echo "<p style = \"background-color: lightgreen\">You are currently logged in as a Standard User</p>";
    }
    elseif($accessLevel =="root"){
        echo "<p style = \"background-color: red\">You are currently logged in as a Root User</p>";
        echo "<p style = \"background-color: red\">You now have additional admin features</p>";
    }
    else{
        echo "<body style = \"background-color: red\"></body>";
    }
}


?>