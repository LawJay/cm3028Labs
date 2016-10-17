<?php
/**
 * Created by PhpStorm.
 * User: 1608354
 * Date: 17/10/2016
 * Time: 14:18
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$forename = $_POST["forename"];
$surname = $_POST["surname"];
echo $forename . $surname;