<?php
/**
 * Created by PhpStorm.
 * User: 1608354
 * Date: 17/10/2016
 * Time: 16:37
 */

include(DBconnect.php);

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$superpower = $_POST["power"];

$sql = "INSERT INTO superheroes (firstname,lastname,power) VALUES ('$firstname','$lastname','$superpower')";

if (mysqli_query($db, $sql)) {
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

header("location:index.html");

?>