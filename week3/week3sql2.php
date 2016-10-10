<?php
/**
 * Created by PhpStorm.
 * User: 1608354
 * Date: 10/10/2016
 * Time: 14:07
 */

//connect to server and select database

$db = new mysqli(
    'eu-cdbr-azure-west-a.cloudapp.net',
    'b169b5e27239e9',
    'a6f9898c',
    'dbjamielaw');

//test connection

if ($db->connect_errno){
    die('Connectfailed['.$db->connect_error.']');

}

Echo "--------Marvel Movies--------";
//create a sql query from string
$sql_query = "SELECT * FROM marvelmovies WHERE productionstudio LIKE 'Marvel Studios'";
//execute the query
$result = $db->query($sql_query);
//process
while ($row = $result->fetch_array()){
    echo "<p>".$row['title']."</p>";

}

$result->close();