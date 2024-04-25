<?php
$url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
$routes = [
    '/tunisietelecom/' => 'app/controllers/HomeController.php',
    '/tunisietelecom/user/login' => 'app/views/user/login.php',
    '/tunisietelecom/profile' => 'app/views/user/profile.php',
    '/tunisietelecom/logout' => 'app/views/user/logout.php',
    '/tunisietelecom/user/register' => 'app/views/user/register.php',
    '/tunisietelecom/admin/login' => 'app/views/admin/login.php',
    '/tunisietelecom/admin/logout' => 'app/views/admin/logout.php',
    '/tunisietelecom/admin/dashboard' => 'app/views/admin/dashboard.php',
    '/tunisietelecom/admin/backup' => 'app/controllers/BackupController.php',
    '/tunisietelecom/search' => 'search.php',
    '/tunisietelecom/fatoura' => 'fatoura.php',
];

if (strpos($url, '/tunisietelecom/admin/backup') !== false && isset($_GET['arepo'])) {
    require_once 'app/controllers/BackupController.php';
}

if (strpos($url, '/tunisietelecom/fatoura') !== false && isset($_GET['file'])) {
    require_once 'fatoura.php';
}
if (strpos($url, '/app') !== false) {
    // Handle 404 Not Found
    http_response_code(404);
    require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/views/errors/404.php";
    die();
} elseif (array_key_exists($url, $routes)) {
    require_once $routes[$url];

}else {
    http_response_code(404);
    require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/views/errors/404.php";
}

?>