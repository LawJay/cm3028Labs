<?
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Blog of Charles Babbage</title>
    <link rel="stylesheet" href="/GraniteCityGeeks.github.io/ClubsWebsite/CoreCSS/style.css">
    <link rel="stylesheet" href="/GraniteCityGeeks.github.io/ClubsWebsite/CoreCSS/unsemantic-grid-responsive-tablet.css">
</head>
<body>
<header class="grid-100 grid-parent">
    <h1>The Blog of Charles Babbage</h1>
    <nav class="grid-100 grid-parent">
        <ul>
            <li class="mobile-grid-100 grid-15 tablet-grid-20"><a href="../">Home Page</a></li>
            <li class="mobile-grid-100 grid-15 tablet-grid-20"><a href="blog">My Blog</a></li>
            <li class="mobile-grid-100 grid-15 tablet-grid-20"><a href="about">About Me</a></li>
            <li class="mobile-grid-100 grid-15 tablet-grid-20"><a href="contactus">Contact Me</a></li>
            <?
            if (isset($_SESSION['username'])) {
                echo "<li><a href='createarticle'>Create Article</a></li>";
                echo "<li><a href='logout'>Logout</a></li>";
            } else {
                echo "<li><a href='Login'>Login</a></li>";
            }
            ?>
        </ul>
    </nav>
</header>