<?php
require_once __DIR__ . "/mvc/controllers/controller.php";
if (isset($_REQUEST['controller'])) {
    $controller = $_REQUEST['controller'];
} else {
    $controller = "home";
}
if (isset($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
} else {
    $action = "homee";
}
require_once __DIR__ . "/mvc/controllers/$controller.php";
$controller = new $controller();
$controller->$action();
echo 1;
?>

<!-- <img src="./public/img/home/tphcm.jpg" alt=""> -->
<!-- <img src="./public/img/home/Thiết kế không tên.png" class="img-fluid" alt="..." style="height: 488px;"> -->