<?
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Blog</title>
    <link rel="stylesheet" href="style/style.css">

</head>

<body>
<header>
    <h1>The Blog</h1>
    <nav>
        <ul>
            <li><a href="">Home Pagezzz</a></li>
            <li><a href="blog">My Blog</a></li>
            <li><a href="about">About Me</a></li>
            <li><a href="contactus">Contact Me</a></li>
            <?
            if (isset($_SESSION['username'])) {
                echo "<li><a href='createarticle'>Create Article</a></li>";
                echo "<li><a href='logout'>Logout</a></li>";
            } else {
                echo "<li><a href='login'>Login</a></li>";
            }
            ?>

        </ul>
    </nav>
</header>