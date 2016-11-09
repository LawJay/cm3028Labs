<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="CoreCSS/style.css">
    <link rel="stylesheet" href="CoreCSS/unsemantic-grid-responsive-tablet.css">
</head>
<body>
<header class="grid-80 prefix-10 suffix-10">
    <h1>The Blog of Charles Babbage</h1>
    <nav>
        <ul>
            <li><a href="../">Home Page</a></li>
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
<main class="grid-75 mobile-grid-100">
    <h2>Jordan & Joe</h2>

    <div id="section1" class="grid-33 tablet-grid-50 mobile-grid-100">
        <p>This is my first section</p>
    </div>

    <div id="section2" class="grid-33 tablet-grid-50 mobile-grid-100">
        <p>This is my second section</p>
    </div>

    <div id="section3" class="grid-33 tablet-grid-50 mobile-grid-100">
        <p>This is my third section</p>
    </div>
</main>

<aside class="grid-25 mobile-grid-100">
    <h2>This is my right sidebar</h2>
</aside>

<div id="bottom" class="grid-100">
    <h2>This is my bottom Content</h2>
</div>

<footer class="grid-100">
    <h2>This is my footer</h2>
</footer>

</body>
</html>