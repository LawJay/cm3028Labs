<?
define('INCLUDE_DIR', dirname(__FILE__) . '/inc/');
$rules = array(
    //
    //main pages
    //
    'Clubs' => "/GraniteCityGeeks.github.io/ClubsWebsite/inc/Clubs.php",
    //
    //Admin Pages
    //
    'Login' => "/GraniteCityGeeks.github.io/ClubsWebsite/inc/Login.php",
    //
    // Home Page
    //
    'home' => "/"
);
$uri = rtrim(dirname($_SERVER["SCRIPT_NAME"]), '/');
$uri = '/' . trim(str_replace($uri,
        ''
        , $_SERVER['REQUEST_URI']), '/');
$uri = urldecode($uri);
foreach ($rules as $action => $rule) {
    if (preg_match('~^' . $rule . '$~i', $uri, $params)) {
        include(INCLUDE_DIR . $action . '.php');
        exit();
    }
}
?>