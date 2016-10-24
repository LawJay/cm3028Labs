<?php
/**
 * Created by PhpStorm.
 * User: 1608354
 * Date: 24/10/2016
 * Time: 13:59
 */

session_start();
$accesslevel = $_COOKIE['access_level_cookie'];

displayaccesslevelinformation($accesslevel);
function displayaccesslevelinformation($accesslevel);
{
    if ($accesslevel == 'standarduser') {
        echo "<p style = \"bacxkground-color: lightgreen\"> You are currently logged in as a standard user>/p>";

        }
    elseif ($accesslevel == "root") {
        echo "<p style = \"background-color: red\">You are currently logged in as a root user</p>";
        echo "<p style = \"background-color: red\">You now have access to additional administrative features</p>";
        }


}
?>