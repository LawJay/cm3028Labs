<?php
/**
 * Created by PhpStorm.
 * User: 1608354
 * Date: 24/10/2016
 * Time: 13:59
 */

$username = $_post["name"];
$password = $_post["password"];
if ($username == "username" && $password=="password")
{
    setcookie('access_level_cookie','standarduser');
}

header('Location: loggedin.php');
?>
